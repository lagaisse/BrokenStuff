<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATP_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('r','Ligne R','002007000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('u','Ligne U','002008000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('tram','Tram','003000000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('t4','T4','003001000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('resx ter','TER','004000000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('ter','trains TER','004001000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('metro','Metro','005000000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M10','Ligne 10','005001000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M11','Ligne 11','005002000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M12','Ligne 12','005003000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M13','Ligne 13','005004000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M14','Ligne 14','005005000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M1','Ligne 1','005006000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M2','Ligne 2','005007000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M3b','Ligne 3b','005008000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M3','Ligne 3','005009000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M4','Ligne 4','00500a000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M5','Ligne 5','00500b000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M6','Ligne 6','00500c000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M7b','Ligne 7b','00500d000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M7','Ligne 7','00500e000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M8','Ligne 8','00500f000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('M9','Ligne 9','005010000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('Mfun','Ligne Fun','005011000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('Morv','Ligne Orv','005012000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('t1','T1','003002000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('t2','T2','003003000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('t3a','T3a','003004000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('t3b','T3b','003005000')");

		return $ret;
    }

    public function down(){

    }
}