<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Migrate v1
 *
 * This is the report api to declare a broken stuff
 *
 * @package     CodeIgniter
 * @subpackage  Migration
 * @category    Controller
 * @author      Kevin Lagaisse
 * @link        http://kevin.lagaisse.fr
*/

require APPPATH.'/libraries/REST_Controller.php';

class Migrate extends REST_Controller
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->database(); //because of REST_Controller
    }


    function index_get()
    {
         
        $this->load->library('migration');
        $this->response(array(  'targetversion'  => $this->migration->get_target_version(),
                                'currentversion' => $this->migration->get_version()         ,
                                'migrationlist'  => $this->migration->find_migrations()       )
                        , 200);
    }
    function next_get()
    {
        $this->load->library('migration');
        if ($this->migration->get_version()>=$this->migration->get_target_version()) {
            $this->response(array(  'targetversion'  => $this->migration->get_target_version(),
                                    'currentversion' => $this->migration->get_version()         ,
                                    'success'         => 'nothing to do'       )
                            , 200);
        }
        else
        {
            $previousversion=$this->migration->get_version();
            if ($this->migration->version($previousversion+1)) 
            {
                $this->response(array(  'previousversion' => $previousversion,
                                        'currentversion'  => $this->migration->get_version()         ,
                                        'targetversion'  => $this->migration->get_target_version(),
                                        'success'          => 'migration done'       )
                                , 200);
            }
            else 
            {
                $this->response(array(  'previousversion' => $previousversion,
                                        'currentversion'  => $this->migration->get_version()         ,
                                        'targetversion'   => $this->migration->get_target_version(),
                                        'error'           => $this->migration->error_string()       )
                                , 500);
            }
        }
    }


/****************************************************\
  OVERRIDE REST_Controller API_KEY management 
  system in order to add a per-IP limit on api calls
  _detect_api_key : if no API_KEY is detected, register 
                    the client IP address as 
                    an API_KEY
  _check_limit : change the time limit to be included
                  in the parameter 'time' in the 
                  $this->methods array (in seconds)
                 do not take into account output format 
                 for filtering

\*****************************************************/
  /**
   * Detect API Key
   *
   * See if the user has provided an API key
   *
   * @return boolean
   */
  protected function _detect_api_key()
  {
    log_message('debug','debug DETECTING API KEY');
    $ret=FALSE;
    $ret=parent::_detect_api_key();
    if ($ret===FALSE)
    {
      $this->rest->key = $this->input->ip_address();
    }
    return true;

  }


  /**
   * Limiting requests
   *
   * Check if the requests are coming in a tad too fast.
   *
   * @param  string  $controller_method The method being called.
   * @return boolean
   */
  protected function _check_limit($controller_method)
  {
      // They are special, or it might not even have a limit
      if ( ! empty($this->rest->ignore_limits) or !isset($this->methods[$controller_method]['limit'])) {
          // On your way sonny-jim.
          return true;
      }

      // How many times can you get to this method an hour?
      $limit = $this->methods[$controller_method]['limit'];

      $uri_noext=$this->uri->uri_string();
      if (strpos(strrev($this->uri->uri_string()), strrev($this->response->format))===0)
      { 
        $uri_noext=substr($this->uri->uri_string(),0, -strlen($this->response->format)-1);
      }

      // Get data on a keys usage
      $result = $this->rest->db
              ->where('uri', $uri_noext)
              ->where('api_key', $this->rest->key)
              ->get(config_item('rest_limits_table'))
              ->row();

      // No calls yet for this key
      if ( ! $result ) {
          // Right, set one up from scratch
          $this->rest->db->insert(config_item('rest_limits_table'), array(
              'uri' => $uri_noext,
              'api_key' => isset($this->rest->key) ? $this->rest->key : '',
              'count' => 1,
              'hour_started' => time()
          ));
      }

      // Been an hour since they called
      else if ($result->hour_started < time() - (isset($this->methods[$controller_method]['time'])? $this->methods[$controller_method]['time'] : 60 * 60  )) {
          // Reset the started period
          $this->rest->db
                  ->where('uri', $uri_noext)
                  ->where('api_key', isset($this->rest->key) ? $this->rest->key : '')
                  ->set('hour_started', time())
                  ->set('count', 1)
                  ->update(config_item('rest_limits_table'));
      }
      
      // They have called within the hour, so lets update
      else {
          // Your luck is out, you've called too many times!
          if ($result->count >= $limit) {
              return false;
          }

          $this->rest->db
                  ->where('uri', $uri_noext)
                  ->where('api_key', $this->rest->key)
                  ->set('count', 'count + 1', false)
                  ->update(config_item('rest_limits_table'));
      }

      return true;
  }

}