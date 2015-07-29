<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCF_Location_data_021 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87386649','VILLENNES SUR SEINE','002002035')");

		return $ret;
    }

    public function down(){

    }
}