<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application extends CI_Controller {
   protected $_args= [];   

    protected function validate_data($group='')
    {
      $this->load->library('form_validation');
      $this->_args['form_validation_uniqid'] = uniqid();
      $this->form_validation->set_data($this->_args);
      if ($this->form_validation->run($group) == FALSE)
      {
        return FALSE;
      }
      return TRUE;
    }

    function index()
    {
        $this->load->helper('url');
        $data['site_url'] =  $this->uri_canonicalize(base_url() . '../' );   
        $data['name'] = "BrokenStuff - Signalez les incidents";
        $data['description'] = "BrokenStuff est un service qui permet d'enregistrer tous les problèmes de materiel de la RATP et de la SNCF"; 
        $data['picture']['proceeded'] = "uploads/55b64b5863256_tn.jpeg";
        //echo '<pre>'; print_r($data); echo '</pre>'; die();
        $this->load->view('index_staticview', $data);
    }

    function report($id)
    {
        $this->_args['id'] = $id;
        $valide = $this->validate_data('apiv1/reports_get');
        if ($this->validate_data('apiv1/reports_get') !== FALSE)
        {
            $this->load->model('Report');
            $report = $this->Report->get_report($id);
            if ($report)
            {
                $this->load->helper('url');
                //charger une vue avec les informations de report
                $report['article_url'] = $this->uri->uri_string();
                $report['site_url'] =  $this->uri_canonicalize(base_url() . '../' );    
                //echo '<pre>'; print_r($report); echo '</pre>'; die();
                $this->load->view('report_staticview', $report);
            }
            else
            {
                $this->index();
            }
        }
        else
        {
            $this->index();
        }
        
    }

    function uri_canonicalize($url)
    {
        $address = explode('/', $url);
        $keys = array_keys($address, '..');
        foreach($keys AS $keypos => $key)
        {
            array_splice($address, $key - ($keypos * 2 + 1), 2);
        }

        $url = implode('/', $address);
        $url = str_replace('./', '', $url);
        return $url;
    }

}
