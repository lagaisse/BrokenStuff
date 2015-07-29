<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Report model
 *
 * This is the report model to declare a broken stuff
 *
 * @package     CodeIgniter
 * @subpackage  Rest Server
 * @category    Controller
 * @author      Kevin Lagaisse
 * @link        http://kevin.lagaisse.fr
*/

class Report extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_reports($since_id, $reports_count)
    {
        $this->load->database();
        $this->load->model('Location');
        $reports=null;
        $param=array();

        $sql  = 'select * from '.$this->db->dbprefix("report").' where r_status="open"';
        if ($since_id) {$sql .= ' and r_id>=?'; $param[]=$since_id;}
        if ($reports_count) {$sql .= ' LIMIT ?'; $param[]=$reports_count;}

        $query = $this->db->query($sql, $param);
        $results = $query->result_array();
        foreach ($results as $row) {
            $reports[] = $this->report_format($row);
        }
        return $reports;
    }

    function new_report($name,$desc,$add_date,$geoloc_lat,$geoloc_long,$status,$place)
    {
        $this->load->database();
        $signature = sha1($name .':'. $desc .':'. $status .':'. $place);
        $data = array(
               'r_name'         => $name ,
               'r_desc'         => $desc,
               'r_add_date'     => $add_date->format('Y-m-d H:i:s'),
               'r_geoloc_lat'   => $geoloc_lat,
               'r_geoloc_long'  => $geoloc_long,
               'r_status'       => $status,
               'lo_path'        => $place,
               'r_nb_vote'      => 1,
               'r_signature'    => $signature
            );
          //check if the report does not already exist
        if (($the_id = $this->get_duplicate_id($signature)) !== FALSE)
        {
          return $the_id;
        }
        $sql = $this->db->insert_string('report', $data);
        $this->db->query($sql);
        return $this->db->insert_id();
    }
    function get_duplicate_id($signature)
    {
      $this->load->database();
      $report = null;

      $query = $this->db->query('select r_id from '.$this->db->dbprefix("report").' where r_signature=?', $signature);
      if($query->num_rows()>0)
      {
          $row = $query->first_row('array');
          return $row['r_id'];
      }
      return FALSE;
    }

    function get_report($id)
    {
        $this->load->database();
        $this->load->model('Location');

        $report = null;

        //get the report from the report table where id =$id
        $query = $this->db->query('select * from '.$this->db->dbprefix("report").' where r_id=?', $id);
        if($query->num_rows()>0)
        {
            $row = $query->first_row('array');

            //get the location of the report from the location table where path = report_path
            $report = $this->report_format($row);
        }
        return $report;
    }


    function get_reports_bygeo($latitude, $longitude, $distance, $start, $count, $style='list')
    {
        $this->load->database();
        $this->load->model('Location');
        $reports= null;

        $rayon_terre= 6371; //km
        //$lat_orig= deg2rad(49); //49 degré, Paris latitude
        $lat_deg_len= 2 * pi() * $rayon_terre / 360; //360 degré
        //$lon_deg_len= $lat_deg_len * cos($lat_orig);

        //fuzzy search zone using rectangle
        $lat_bound_l= $latitude - ($distance/$lat_deg_len);
        $lat_bound_r= $latitude + ($distance/$lat_deg_len);

        $lon_bound_l= $longitude-$distance/abs(cos(deg2rad($latitude))*$lat_deg_len);
        $lon_bound_r= $longitude+$distance/abs(cos(deg2rad($latitude))*$lat_deg_len);


        $sql_count="";
        if ($start!=null||$count!=null)
        {
            $sql_count ="limit ";
            $sql_count.=(($start!=null)?"".$start.",":"0,");
            $sql_count.=(($count!=null)?$count:"30");
        }

        $sql=<<<SQL
                SELECT rep.*,
                        {$rayon_terre} * 2 * ASIN(SQRT(
                                POWER(SIN(({$latitude} -abs(loc.lo_geoloc_lat)) * pi()/180 / 2), 2) +
                                COS({$latitude} * pi()/180) * COS(abs(loc.lo_geoloc_lat) * pi()/180) *
                                POWER(SIN(({$longitude} -loc.lo_geoloc_long) * pi()/180 / 2), 2)
                            )) as distance
                FROM {$this->db->dbprefix("location")} loc, {$this->db->dbprefix("report")} rep
                WHERE 1
                and rep.lo_path = loc.lo_path
                and loc.lo_geoloc_long between {$lon_bound_l} and {$lon_bound_r}
                and loc.lo_geoloc_lat between {$lat_bound_l} and {$lat_bound_r}
                having distance < {$distance} ORDER BY distance {$sql_count};
SQL;
//simplify the way to calculate the geo reports as it is located in a city and its suburbs only
// but less precise, more data is selected
// example : cergy prefecture => Louvres Rivoli
//           google maps measure : ~27,24km !!
//           XQL : ~19,6km       :(
//           SQL : ~27.329154km  !!
/*        $sql=<<<XQL
                SELECT report.*
                FROM location loc, report
                WHERE 1
                and report.lo_path = loc.lo_path
                and loc.lo_geoloc_long between {$lon_bound_l} and {$lon_bound_r}
                and loc.lo_geoloc_lat between {$lat_bound_l} and {$lat_bound_r};
XQL;*/

        $query = $this->db->query($sql);
        $results = $query->result_array();
        foreach ($results as $row) {
            $reports[] = $this->report_format($row,$style);
        }
        return $reports;
    }

    function vote_report($id)
    {
        $this->load->database();
        $this->db->query('update '.$this->db->dbprefix("report").' set r_nb_vote = ifnull(r_nb_vote,0) + 1 where r_id=?', $id);

        if ($this->db->affected_rows() > 0) //report exists
        {
            return $this->get_report($id);
        }
    }

    function report_format($row, $style='list')
    {
        if ($style=='geojson')
        {

            $location = $this->Location->get_locationsFromPath($row['lo_path']);

            return ['type'          =>  'Feature',
                    'geometry'      =>  ['type' => 'Point', 'coordinates' => [(float)$location[0]['geolocation']['longitude'], (float)$location[0]['geolocation']['latitude']]],
                    'properties'    =>  ['id'            =>  $row['r_id'],
                                         'name'          =>  $row['r_name'],
                                         'description'   =>  $row['r_desc'],
                                         'add_date'      =>  $row['r_add_date'],
                                         'end_date'      =>  $row['r_end_date'],
                                         'status'        =>  $row['r_status'],
                                         'nb_vote'       =>  $row['r_nb_vote'],
                                         'location'      =>  $this->Location->get_locationsFromPath($row['lo_path']),
                                         'picture'       =>  $this->picture_build_path($row['r_picture'])
                                        ]
                  ];
        }
        return ['id'            =>  $row['r_id'],
                'name'          =>  $row['r_name'],
                'description'   =>  $row['r_desc'],
                'add_date'      =>  $row['r_add_date'],
                'end_date'      =>  $row['r_end_date'],
                'geolocation'   =>  array('latitude' => $row['r_geoloc_lat'],'longitude'=>$row['r_geoloc_long']),
                'picture'       =>  $this->picture_build_path($row['r_picture']),
                'status'        =>  $row['r_status'],
                'nb_vote'       =>  $row['r_nb_vote'],
                'location'      =>  $this->Location->get_locationsFromPath($row['lo_path'])];
    }

    function reportmap_format($row)
    {

    }

    function update_report_picture($id, $picture, $top=0, $left=0, $width=0, $height=0, $orientation=1)
    {
        $image_name = uniqid() ;
        $path=$this->picture_build_path($image_name);
        $dir_orig = $path['original'];
        $dir_tbn  = $path['thumbnail'];
        $dir_res  = $path['proceeded'];
        $dst_res = $picture;
        $rets=0;
        $retd=0;
        $rets=1  * $rets + (int)@imagejpeg($picture, FCPATH . $dir_orig );

        //orientate picture from smartphone and other exif supported devices
        $picture = $this->picture_orientate($picture, $orientation);

        if($width!=0&&$height!=0)
        {
           $dst_res = $this->picture_crop($picture, $top, $left, $width, $height);
           if ($dst_res==false) {$dst_res=$picture;}
        }
        $dst_tbn = $this->picture_thumbnail($dst_res);
        if ($dst_tbn==false) {$dst_btn=$picture;}

        $rets=10 * $rets + (int)@imagejpeg($dst_res, FCPATH . $dir_res );
        $rets=10 * $rets + (int)@imagejpeg($dst_tbn, FCPATH . $dir_tbn );
        $retd=1  * $retd + (int)@imagedestroy($picture);
        $retd=10 * $retd + (int)@imagedestroy($dst_res); //fails if no crop
        $retd=10 * $retd + (int)@imagedestroy($dst_tbn);

        if (($rets+$retd)<222)
        {
            log_message('error', 'Picture : '.$image_name.'- Storage code : '.$rets.'- Destroy code : '.$retd.'');
        }
        if ($rets>1)
        {//we have at least one image stored
            $this->load->database();
            $this->db->query('update '.$this->db->dbprefix("report").' set r_picture=? where r_id=?', array($image_name,$id));
            return $dir_res;
        }

        return false;
    }


    function picture_build_path($image_name='')
    {
        if ($image_name=='')
        {
            return null;
        }
        $path = array(  'original' => 'uploads/'. $image_name .'_orig.jpeg',
                        'proceeded' => 'uploads/'. $image_name .'.jpeg',
                        'thumbnail' => 'uploads/'. $image_name .'_tn.jpeg');
        return $path;
    }

    function picture_orientate(&$picture, $orientation=1)
    {
        switch($orientation) {
            case 2:
                imageflip($picture, IMG_FLIP_HORIZONTAL);
                break;
            case 3:
                $picture = imagerotate($picture, 180, 0);
                break;
            case 4:
                imageflip($picture, IMG_FLIP_VERTICAL);
                break;
            case 5:
                $picture = imagerotate($picture, -90, 0);
                imageflip($picture, IMG_FLIP_HORIZONTAL);
                break;
            case 6:
                $picture = imagerotate($picture, -90, 0);
                break;
            case 7:
                $picture = imagerotate($picture, 90, 0);
                imageflip($picture, IMG_FLIP_HORIZONTAL);
                break;
            case 8:
                $picture = imagerotate($picture, 90, 0);
                break;
        }
        return $picture;
    }       

    function picture_crop($picture, $top=0, $left=0, $width=0, $height=0)
    {
        log_message('debug', 'Call picture_crop with crop : top : '. $top .' left : ' .$left. ' width : '. $width .' height : '. $height.'');
        if($width==0||$height==0)
        {
            return false;
        }
         //calculate thumb size
        $ow = imagesx($picture);
        $oh = imagesy($picture);

        log_message('debug', 'Call picture_crop : picture\'s dimensions : width : '. $ow .' height : ' .$oh.'');

        if($top+$height>$oh||$left+$width>$ow)
        {
            log_message('debug', 'Call picture_crop : returning no-crop for this picture');
            return false;
        }
        log_message('debug', 'Call picture_crop : cropping in progress');
        //resize and copy image
        return imagecrop($picture,
                        array('x'     => $left,
                              'y'     => $top,
                              'width' => $width,
                              'height'=> $height));
    }

    function picture_thumbnail($picture)
    {
         //calculate thumb size
        $ow = imagesx($picture);
        $oh = imagesy($picture);
        $maxh = 600;
        $maxw = 800;
        $new_h = $oh;
        $new_w = $ow;

        if($oh > $maxh || $ow > $maxw){
           $new_h = ($oh > $ow) ? $maxh : $oh*($maxw/$ow);
           $new_w = $new_h/$oh*$ow;
        }
        //create dst image
        $dst_img = ImageCreateTrueColor($new_w,$new_h);
        //resize and copy image
        $ret=imagecopyresampled( $dst_img  ,
                            $picture  ,
                            0         ,
                            0         ,
                            0         ,
                            0         ,
                            $new_w    ,
                            $new_h    ,
                            $ow       ,
                            $oh       );
        return ($ret?$dst_img:false);
    }

}
