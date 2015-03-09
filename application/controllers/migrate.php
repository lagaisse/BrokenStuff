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

}