<?php

class MY_Loader extends CI_Loader {


    /**
    * Extend the Database Forge Class
    *
    * @access   public
    * @author   (Original) EllisLabs / (Extension) J Elmore
    * @license  MIT
    * @version  1.0
    * @return   string
    */
    function dbforge()
    {
        if ( ! class_exists('CI_DB'))
        {
            $this->database();
        }
        $CI =& get_instance();
        $class = 'CI_DB_'.$CI->db->dbdriver.'_forge';

        require_once BASEPATH.'database/DB_forge'.EXT;
        require_once BASEPATH.'database/drivers/'.$CI->db->dbdriver.'/'.$CI->db->dbdriver.'_forge'.EXT;

        if( file_exists(APPPATH.'database/drivers/'.$CI->db->dbdriver.'/'.config_item('subclass_prefix').$CI->db->dbdriver.'_forge'.EXT) ) {
            require_once APPPATH.'database/drivers/'.$CI->db->dbdriver.'/'.config_item('subclass_prefix').$CI->db->dbdriver.'_forge'.EXT;
            $class = config_item('subclass_prefix').'DB_'.$CI->db->dbdriver.'_forge';
        }

 log_message('debug', 'DBFORGE : LOOKING FOR '.$class);

        $CI->dbforge = new $class();
    }
}