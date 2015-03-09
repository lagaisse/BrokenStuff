<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATP_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446311','NONAME','003005002')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446306','NONAME','003005003')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446303','NONAME','003005004')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446305','NONAME','003005005')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446323','NONAME','003005006')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446314','NONAME','003005007')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446309','NONAME','003005008')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446312','NONAME','003005009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446315','NONAME','00300500a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446304','NONAME','00300500b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446316','NONAME','00300500c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446302','NONAME','00300500d')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446310','NONAME','00300500e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446318','NONAME','00300500f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446317','NONAME','003005010')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:446319','NONAME','003005011')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:453852','NONAME','003005012')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('rer','RER','001000000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('a','RER A','001001000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('b','RER B','001002000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('c','RER C','001003000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('d','RER D','001004000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('e','RER E','001005000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('train','Transilien','002000000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('h','Ligne H','002001000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('j','Ligne J','002002000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('k','Ligne K','002003000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('l','Ligne L','002004000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('n','Ligne N','002005000')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('p','Ligne P','002006000')");

		return $ret;
    }

    public function down(){

    }
}