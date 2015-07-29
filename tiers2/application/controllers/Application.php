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

    function index($arg)
    {
        show_error("va voir ailleurs");
    }

    function report($id)
    {
        $this->_args['id'] = $id;
        $valide = $this->validate_data('apiv1/reports_get');
        if ($this->validate_data('apiv1/reports_get') === FALSE)
        {
            $id = 1; //cela évite les erreurs
        }

        $this->load->model('Report');
        $report = $this->Report->get_report($id);
        if($report)
        {
            $this->load->helper('url');
            //charger une vue avec les informations de report
            $report['article_url'] = $this->uri->uri_string();
            $report['site_url'] =  $this->uri_canonicalize(base_url() . '../' );    
            //echo '<pre>'; print_r($report); echo '</pre>'; die();
            $this->load->view('staticview', $report);
        }
        else
        {
          //charger une vue d'erreur et et dire que le rapport n'est pas trouvé
            show_error("le rapport n'existe pas");
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
