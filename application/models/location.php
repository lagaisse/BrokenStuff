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

    var $title   = '';
    var $content = '';
    var $date    = '';
    protected $_grp_sze=3;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_locations()
    {
        $this->load->database();

        $req  = 'SELECT *, SUBSTRING(lo_path,1,3) as path1, SUBSTRING(lo_path,4,3) as path2, SUBSTRING(lo_path,7,3) as path3 ';
        $req .= ' FROM location where lo_path like "%000" and SUBSTRING(lo_path,4,3) > "000" order by path1';
        $query = $this->db->query($req);

        $locations=array();
        
        $results = $query->result_array();
        foreach ($results as $row) {
            $query2 = $this->db->query('SELECT * FROM location where lo_path=? order by lo_name', substr($row['lo_path'],0,3)."000000");

            if($query2->num_rows()>0)
            {
                $row2 = $query2->first_row('array');

                $query3 = $this->db->query('SELECT lo_path as id, lo_name as name FROM location where lo_path>? and lo_path<?', 
                                            array($row['lo_path'],
                                                str_pad(dechex(hexdec("0x".$row['lo_path']) + 0x1000),9,"0",STR_PAD_LEFT)));

                $locations[] = array(
                    'id'            =>  $row['lo_code'],
                    'name'          =>  $row['lo_name'],
                    'parent'        =>  $row2['lo_name'],
                    'sublocation'   =>  $query3->result_array()
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

    function new_report($name,$add_date,$geoloc_lat,$geoloc_long,$status,$place)
    {
        $this->load->database();
        $data = array(
               'r_name'         => $name ,
               'r_add_date'     => $add_date->format('Y-m-d H:i:s'),
               'r_geoloc_lat'   => $geoloc_lat,
               'r_geoloc_long'  => $geoloc_long,
               'r_status'       => $status,
               'lo_id'          => ''
            );   
        $this->db->insert('Report',$data);
        return $this->db->insert_id();
    }

    function get_report($id)
    {
        $this->load->database();
        $report = null;

        $query = $this->db->get_where('Report',array('r_id' => $id));
        if($query->num_rows()>0)
        {
            $row = $query->first_row('array');
            $report = array(
                'id'            =>  $row['r_id'],
                'name'          =>  $row['r_name'],
                'add_date'      =>  $row['r_add_date'],
                'end_date'      =>  $row['r_end_date'],
                'geolocation'   =>  array('latitude' => $row['r_geoloc_lat'],'longitude'=>$row['r_geoloc_long']),
                'picture'       =>  $row['r_picture']?$this->config->base_url() . $row['r_picture'] : 'http://lorempicsum.com/futurama/350/200/1',
                'status'        =>  $row['r_status'],
                'nb_vote_end'   =>  $row['r_nb_vote_end'],
                'location'      =>  array('RER A', 'La défense')
            );
        }
        return $report;
    }

    function update_report_picture($id, $picture)
    {
        $dir = 'uploads/'. uniqid() .'.jpeg';
        imagejpeg($picture, FCPATH . $dir);

        $this->load->database();
        $report = null;
        $data=array('r_picture'=> $dir);        
        $this->db->where('r_id',$id);
        $this->db->update('Report', $data); 

        return $dir;
    }

    function get_last_ten_entries()
    {
        $this->load->database();
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->load->database();
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->load->database();
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}


?>