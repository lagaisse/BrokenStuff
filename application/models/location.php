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
        $query = $this->db->query('SELECT * FROM location where lo_path=?',$path);

        $location=array(); 

        if($query->num_rows()>0)
        {  
            $row = $query->first_row('array');
            
            $query2 = $this->db->query('SELECT * FROM location where lo_path=? order by lo_name', $this->get_parent($row['lo_path']));
            if($query2->num_rows()>0)
            {  
                $row2 = $query2->first_row('array');
                $location = array(
                        'id'            =>  $row['lo_path'],
                        'name'          =>  $row['lo_name'],
                        'parent'        =>  $row2['lo_name'],
                        'geolocation'   =>  array('latitude' => $row['lo_geoloc_lat'],'longitude' => $row['lo_geoloc_long'])
                    );
            }
        }
        return $location;

    }

    function get_locations()
    {
        $this->load->database();
        //get all lines of transportation, which are level 2 in the table location : xxxyyy000
        $req  = 'SELECT *, SUBSTRING(lo_path,1,3) as path1, SUBSTRING(lo_path,4,3) as path2, SUBSTRING(lo_path,7,3) as path3 ';
        $req .= ' FROM location where lo_path like "%000" and SUBSTRING(lo_path,4,3) > "000" order by lo_path';
        $query = $this->db->query($req);

        $locations=array();
        
        $results = $query->result_array();
        foreach ($results as $row) {
            //for each line get the netwok it belongs to, level 1 in the table location : xxx000000
            $query2 = $this->db->query('SELECT * FROM location where lo_path=? order by lo_name', substr($row['lo_path'],0,3)."000000");

            if($query2->num_rows()>0)
            {
                $row2 = $query2->first_row('array');
                //for each line get the stations wich are in the location table like xxxyyy% or > xxxyyy000 and < xxxyyy(+1)000
                $query3 = $this->db->query('SELECT * FROM location where lo_path>? and lo_path<?', 
                                            array($row['lo_path'],
                                                str_pad(dechex(hexdec("0x".$row['lo_path']) + 0x1000),9,"0",STR_PAD_LEFT)));

                $results3 = $query3->result_array();
                
                foreach ($results3 as $row3) {
                    $sublocation[] = array(
                                'id'            =>  $row3['lo_path'],
                                'name'          =>  $row3['lo_name'],
                                'geolocation'   =>  array('latitude' => $row3['lo_geoloc_lat'],'longitude' => $row3['lo_geoloc_long'])
                        );
                }

                $locations[] = array(
                    'id'            =>  $row['lo_path'],
                    'name'          =>  $row['lo_name'],
                    'parent'        =>  $row2['lo_name'],
                    'sublocation'   =>  $sublocation
                );
            }
           

        }        
        return $locations;
/*
         $locations = array(
                    array(
                      'id'           => 0x001, 
                      'name'         => 'Ligne 1',
                      'sublocation'  => array( 
                        array('id'    => '0x001001',
                              'name'  => 'La défense Grande arche'),
                        array('id'    => '0x001002',
                              'name'  => 'Esplanade de la Défense')
                    )),
                    array(
                      'id'           => 0x002, 
                      'name'         => 'Ligne 2',
                      'sublocation'  => array( 
                        array('id'    => '0x002001',
                              'name'  => 'Station L2/1'),
                        array('id'    => '0x002002',
                              'name'  => 'Station L2/2')
                    ))
    );*/

    }
    
    function get_parent($path)
    {
        $splited_path=str_split($path,$this->grp_size);
        $grp=count($splited_path);
        $lvl=0;
        foreach ($splited_path as $cle => $valeur) {
        if ($valeur <> "000") $lvl++;
        }
        
        if ($lvl<=1) {return $path;}

        $parent = substr($path,0,($lvl-1)*$this->grp_size);
        $parent  = str_pad($parent, $grp*$this->grp_size,"0");
        return $parent;
    }
}


?>