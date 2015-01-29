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

        $sql  = 'select * from report';
        if ($since_id) {$sql .= ' where r_id>=?'; $param[]=$since_id;}
        if ($reports_count) {$sql .= ' LIMIT ?'; $param[]=$reports_count;}


        $query = $this->db->query($sql, $param);
        $results = $query->result_array();
        foreach ($results as $row) {

            $reports[] = array(
                'id'            =>  $row['r_id'],
                'name'          =>  $row['r_name'],
                'add_date'      =>  $row['r_add_date'],
                'end_date'      =>  $row['r_end_date'],
                'geolocation'   =>  array('latitude' => $row['r_geoloc_lat'],'longitude'=>$row['r_geoloc_long']),
                'picture'       =>  $row['r_picture'],
                'status'        =>  $row['r_status'],
                'nb_vote'       =>  $row['r_nb_vote'],
                'location'      =>  $this->Location->get_locationFromPath($row['lo_path'])
            );
        }        
        return $reports;
    }

    function new_report($name,$add_date,$geoloc_lat,$geoloc_long,$status,$place)
    {
        $this->load->database();
        $data = array(
               'r_name'         => $name ,
               'r_add_date'     => $add_date->format('Y-m-d H:i:s'),
               'r_geoloc_lat'   => $geoloc_lat,
               'r_geoloc_long'  => $geoloc_long,
               'r_status'       => $status,
               'lo_path'        => $place,
               'r_nb_vote'      => 1
            );
        $sql = $this->db->insert_string('report', $data);
        $this->db->query($sql);
        return $this->db->insert_id();
    }

    function get_report($id)
    {
        $this->load->database();
        $this->load->model('Location');

        $report = null;

        //get the report from the report table where id =$id
        $query = $this->db->query('select * from report where r_id=?', $id);
        if($query->num_rows()>0)
        {
            $row = $query->first_row('array');

            //get the location of the report from the location table where path = report_path
            

            $report = array(
                'id'            =>  $row['r_id'],
                'name'          =>  $row['r_name'],
                'add_date'      =>  $row['r_add_date'],
                'end_date'      =>  $row['r_end_date'],
                'geolocation'   =>  array('latitude' => $row['r_geoloc_lat'],'longitude'=>$row['r_geoloc_long']),
                'picture'       =>  $row['r_picture']?$this->config->base_url() . $row['r_picture'] : 'http://lorempicsum.com/futurama/350/200/1',
                'status'        =>  $row['r_status'],
               'nb_vote'        =>  $row['r_nb_vote'],
                'location'      =>  $this->Location->get_locationFromPath($row['lo_path'])
            );
        }
        return $report;
    }


    function get_report_bygeo($latitude, $longitude, $distance)
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

        $sql=<<<SQL
                SELECT report.*,
                        {$rayon_terre} * 2 * ASIN(SQRT( 
                                POWER(SIN(({$latitude} -abs(loc.lo_geoloc_lat)) * pi()/180 / 2), 2) +
                                COS({$latitude} * pi()/180) * COS(abs(loc.lo_geoloc_lat) * pi()/180) * 
                                POWER(SIN(({$longitude} -loc.lo_geoloc_long) * pi()/180 / 2), 2) 
                            )) as distance 
                FROM location loc, report
                WHERE 1
                and report.lo_path = loc.lo_path
                and loc.lo_geoloc_long between {$lon_bound_l} and {$lon_bound_r} 
                and loc.lo_geoloc_lat between {$lat_bound_l} and {$lat_bound_r}
                having distance < {$distance} ORDER BY distance limit 10;
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
            $reports[] = array(
                'id'            =>  $row['r_id'],
                'name'          =>  $row['r_name'],
                'add_date'      =>  $row['r_add_date'],
                'end_date'      =>  $row['r_end_date'],
                'geolocation'   =>  array('latitude' => $row['r_geoloc_lat'],'longitude'=>$row['r_geoloc_long']),
                'picture'       =>  $row['r_picture'],
                'status'        =>  $row['r_status'],
                'nb_vote'       =>  $row['r_nb_vote'],
                'location'      =>  $this->Location->get_locationFromPath($row['lo_path'])
            );
        }        
        return $reports;
    }

    function vote_report($id)
    {
        $this->load->database();
        $this->db->query('update report set r_nb_vote = ifnull(r_nb_vote,0) + 1 where r_id=?', $id);

        if ($this->db->affected_rows() > 0) //report exists
        {
            return $this->get_report($id);
        } 
    }

    function update_report_picture($id, $picture)
    {
        $dir = 'uploads/'. uniqid() .'.jpeg';
        imagejpeg($picture, FCPATH . $dir);
        $this->load->database();
        $this->db->query('update report set r_picture=? where r_id=?', array($dir,$id));
        return $dir;
    }



}


?>