<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATP_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1628','NONAME','00501000f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1860','NONAME','005010010')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1657','NONAME','005010011')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1679','NONAME','005010012')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1672','NONAME','005010013')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1727','NONAME','005010014')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1924','NONAME','005010015')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1769','NONAME','005010016')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1858','NONAME','005010017')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1916','NONAME','005010018')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1639','NONAME','005010019')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1837','NONAME','00501001a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1747','NONAME','00501001b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1696','NONAME','00501001c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1659','NONAME','00501001d')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1671','NONAME','00501001e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1710','NONAME','00501001f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:55372','NONAME','005010020')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1673','NONAME','005010021')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1937','NONAME','005010022')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1980','NONAME','005010023')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1667','NONAME','005010024')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1758','NONAME','005010025')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:2022','NONAME','005011001')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:2021','NONAME','005011002')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:11039','NONAME','005012001')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:11038','NONAME','005012002')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:11037','NONAME','005012003')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:433655','NONAME','003002001')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:142794','NONAME','003002002')");

		return $ret;
    }

    public function down(){

    }
}