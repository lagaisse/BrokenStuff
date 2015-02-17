<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Location model
 *
 * This is the location model to declare a broken stuff
 *
 * @package     CodeIgniter
 * @subpackage  Rest Server
 * @category    Controller
 * @author      Kevin Lagaisse
 * @link        http://kevin.lagaisse.fr
*/

class Location extends CI_Model {

    var $title    = '';
    var $content  = '';
    var $date     = '';
    var $grp_size = 3 ;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_locationsFromPath($path)
    {
        $this->load->database();
        $query_location = $this->db->query('SELECT * FROM location where lo_path=?',$path);

        $location=array(); 
        $sublocation=array();

        if($query_location->num_rows()>0)
        {  
            $row_location = $query_location->first_row('array');
            
            $query_parentlocation = $this->db->query('SELECT * FROM location where lo_path=? order by lo_name', $this->get_parent($row_location['lo_path']));
            if($query_parentlocation->num_rows()>0)
            {  
                $row_parentlocation = $query_parentlocation->first_row('array');
            }
            $sublocation = $this->get_sublocationsFromPath($row_location['lo_path']);
            $location = array(
                    'id'            =>  $row_location['lo_path'],
                    'name'          =>  $row_location['lo_name'],
                    'parent'        =>  $row_parentlocation['lo_name'],
                );
            if ($row_location['lo_geoloc_lat']!=null&&$row_location['lo_geoloc_long']!=null) 
            {
                $location['geolocation'] =  array('latitude' => $row_location['lo_geoloc_lat'],'longitude' => $row_location['lo_geoloc_long']);
            }
            if ($sublocation!=null)
            {
                $location['sublocation'] = $sublocation;
            }
        }
        return array($location);

    }

    function get_sublocationsFromPath($path)
    {
        //for each line get the stations wich are in the location table like xxxyyy% or > xxxyyy000 and < xxxyyy(+1)000
        // si 001000000 >> 001xxx000, 
        // si 001001000 >> 001001xxx
        // si 001001001 >> 001001001(xxx)
        $path_offset = "".str_pad("",(strlen($path)/$this->grp_size - $this->get_depth($path)-1) * ($this->grp_size),"0", STR_PAD_RIGHT);
        $query_sublocation = $this->db->query('SELECT * FROM location where lo_path like ? and lo_path>? order by lo_name', 
                                    array(rtrim($path,"0") . str_pad("",$this->grp_size,"_"). $path_offset , $path));
        log_message('debug', 'query sublocation : ' . $this->db->last_query());
        $results_sublocations = $query_sublocation->result_array();
        $sublocation=null;
        foreach ($results_sublocations as $row_sublocation) {
            $sublocation[] = array(
                        'id'            =>  $row_sublocation['lo_path'],
                        'name'          =>  $row_sublocation['lo_name'],
                        'geolocation'   => array('latitude' => $row_sublocation['lo_geoloc_lat'],'longitude' => $row_sublocation['lo_geoloc_long'])
                );
        }
        return $sublocation;
    }

    function get_locationsFromCode($code)
    {
        $this->load->database();
        $query_location = $this->db->query('SELECT * FROM location where lo_code=?',$code);

        $location=array(); 
        $sublocation=array();
        foreach ($query_location->result_array() as $row_location) {
            $query_parentlocation = $this->db->query('SELECT * FROM location where lo_path=? order by lo_name', $this->get_parent($row_location['lo_path']));
            foreach ($query_parentlocation->result_array() as $row) {
              $row_parentlocation[] = $row['lo_name'];
              $row_locationpath[] = $row_location['lo_path'];
            }            


            $sublocation = $this->get_sublocationsFromPath($row_location['lo_path']);
            $location = array(
                    'id'            =>  $row_locationpath,
                    'code'          =>  $row_location['lo_code'],
                    'name'          =>  $row_location['lo_name'],
                    'geolocation'   =>  array('latitude' => $row_location['lo_geoloc_lat'],'longitude' => $row_location['lo_geoloc_long']),
                    'parent'        =>  $row_parentlocation,
                    'sublocation'   =>  $sublocation
                );
        }
        return $location;
    }


    function get_locations()
    {
        $this->load->database();
        //get all lines of transportation, which are level 2 in the table location : xxxyyy000
        $req  = 'SELECT *, SUBSTRING(lo_path,1,3) as path1, SUBSTRING(lo_path,4,3) as path2, SUBSTRING(lo_path,7,3) as path3 ';
        $req .= ' FROM location where lo_path like "%000" and SUBSTRING(lo_path,4,3) > "000" order by lo_path';
        $query_location = $this->db->query($req);

        $locations=array();
        
        $results_location = $query_location->result_array();
        foreach ($results_location as $row_location) {
            //for each line get the netwok it belongs to, level 1 in the table location : xxx000000
            $query_parentlocation = $this->db->query('SELECT * FROM location where lo_path=? order by lo_name', substr($row_location['lo_path'],0,3)."000000");

            if($query_parentlocation->num_rows()>0)
            {
                $row_parentlocation = $query_parentlocation->first_row('array');
                $locations[] = array(
                    'id'            =>  $row_location['lo_path'],
                    'name'          =>  $row_location['lo_name'],
                    'parent'        =>  $row_parentlocation['lo_name']
                );
            }
           

        }        
        return $locations;
    }



    function get_locations_bygeo($latitude, $longitude, $distance, $start, $count)
    {
        $this->load->database();
        $locations= null;

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
                SELECT DISTINCT loc.lo_code, loc.lo_name, loc.lo_geoloc_lat, loc.lo_geoloc_long, 
                        {$rayon_terre} * 2 * ASIN(SQRT( 
                                POWER(SIN(({$latitude} -abs(loc.lo_geoloc_lat)) * pi()/180 / 2), 2) +
                                COS({$latitude} * pi()/180) * COS(abs(loc.lo_geoloc_lat) * pi()/180) * 
                                POWER(SIN(({$longitude} -loc.lo_geoloc_long) * pi()/180 / 2), 2) 
                            )) as distance 
                FROM location loc
                WHERE 1
                and loc.lo_geoloc_long between {$lon_bound_l} and {$lon_bound_r} 
                and loc.lo_geoloc_lat between {$lat_bound_l} and {$lat_bound_r}
                having distance < {$distance} ORDER BY distance {$sql_count};
SQL;
//simplify the way to calculate the geo locations as it is located in a city and its suburbs only
// but less precise, more data is selected
// example : cergy prefecture => Louvres Rivoli
//           google maps measure : ~27,24km !!
//           XQL : ~19,6km       :(
//           SQL : ~27.329154km  !!
/*        $sql=<<<XQL
                SELECT loc.*
                FROM location loc
                WHERE 1
                and loc.lo_geoloc_long between {$lon_bound_l} and {$lon_bound_r} 
                and loc.lo_geoloc_lat between {$lat_bound_l} and {$lat_bound_r};
XQL;*/

        $query = $this->db->query($sql);
        $results = $query->result_array();
        $locations = array();
        foreach ($results as $row_location) {
//            $locations[] = $this->get_locationsFromPath($row_location['lo_path']);
/*            $locations[] = array(
                        'id'            =>  $row_location['lo_code'],
                        'name'          =>  $row_location['lo_name'],
                        'geolocation'   =>  array('latitude' => $row_location['lo_geoloc_lat'],'longitude' => $row_location['lo_geoloc_long']),
                        'parent' 
                        );*/
            $locations[]=$this->get_locationsFromCode($row_location['lo_code']);
        }
        return $locations;
    }

    function get_depth($path)
    {
        $splited_path=str_split($path,$this->grp_size);
        $lvl=0;
        foreach ($splited_path as $cle => $valeur) {
            if ($valeur <> "000") $lvl++;
        }
        
        return $lvl;
    }


    function get_parent($path)
    {
        $lvl = $this->get_depth($path);
        if ($lvl<=1) {return $path;}

        $parent = substr($path,0,($lvl-1)*$this->grp_size);
        $parent  = str_pad($parent, strlen($path),"0");
        return $parent;
    }
}

