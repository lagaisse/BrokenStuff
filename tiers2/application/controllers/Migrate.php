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


}
