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
    
    function get_locationFromPath($path)
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
            //for each line get the stations wich are in the location table like xxxyyy% or > xxxyyy000 and < xxxyyy(+1)000
            // si 001000000 >> 001xxx000, 
            // si 001001000 >> 001001xxx
            // si 001001001 >> 001001001(xxx)
            $path_offset = "".str_pad("",(strlen($row_location['lo_path'])/$this->grp_size - $this->get_depth($row_location['lo_path'])-1) * ($this->grp_size),"0", STR_PAD_RIGHT);
            $query_sublocation = $this->db->query('SELECT * FROM location where lo_path like ? and lo_path>? ', 
                                        array(rtrim($row_location['lo_path'],"0") . str_pad("",$this->grp_size,"_"). $path_offset , $row_location['lo_path']));
            
            $results_sublocations = $query_sublocation->result_array();
            
            foreach ($results_sublocations as $row_sublocation) {
                $sublocation[] = array(
                            'id'            =>  $row_sublocation['lo_path'],
                            'name'          =>  $row_sublocation['lo_name'],
                            'geolocation'   =>  array('latitude' => $row_sublocation['lo_geoloc_lat'],'longitude' => $row_sublocation['lo_geoloc_long'])
                    );
            }
            $location = array(
                    'id'            =>  $row_location['lo_path'],
                    'name'          =>  $row_location['lo_name'],
                    'parent'        =>  $row_parentlocation['lo_name'],
                    'geolocation'   =>  array('latitude' => $row_location['lo_geoloc_lat'],'longitude' => $row_location['lo_geoloc_long']),
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


?>