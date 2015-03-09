<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATP_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1988','NONAME','005002008')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1849','NONAME','005002009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1736','NONAME','00500200a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:55330','NONAME','00500200b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:2004','NONAME','00500200c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1864','NONAME','00500200d')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1781','NONAME','005003001')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1732','NONAME','005003002')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1661','NONAME','005003003')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1989','NONAME','005003004')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1918','NONAME','005003005')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1689','NONAME','005003006')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1828','NONAME','005003007')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1638','NONAME','005003008')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1632','NONAME','005003009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1814','NONAME','00500300a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1622','NONAME','00500300b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1734','NONAME','00500300c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1975','NONAME','00500300d')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1656','NONAME','00500300e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1767','NONAME','00500300f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1751','NONAME','005003010')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1865','NONAME','005003011')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1831','NONAME','005003012')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1787','NONAME','005003013')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1645','NONAME','005003014')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1674','NONAME','005003015')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1686','NONAME','005003016')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1813','NONAME','005003017')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1879','NONAME','005003018')");

		return $ret;
    }

    public function down(){

    }
}