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
    
    function get_reports()
    {
        $this->load->database();
        $query = $this->db->get('Report', 10);
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
                'nb_vote_end'   =>  $row['r_nb_vote_end'],
                'location'      =>  array('RER A', 'La défense')
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