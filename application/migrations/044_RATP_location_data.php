<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATP_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1648','NONAME','005007014')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1978','NONAME','005007015')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1868','NONAME','005007016')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1893','NONAME','005007017')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1995','NONAME','005007018')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1953','NONAME','005007019')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1684','NONAME','005008001')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1736','NONAME','005008002')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1929','NONAME','005008003')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1782','NONAME','005008004')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1852','NONAME','005009001')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1988','NONAME','005009002')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1708','NONAME','005009003')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1928','NONAME','005009004')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1779','NONAME','005009005')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1722','NONAME','005009006')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1740','NONAME','005009007')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1744','NONAME','005009008')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1693','NONAME','005009009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1658','NONAME','00500900a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1826','NONAME','00500900b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1915','NONAME','00500900c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1634','NONAME','00500900d')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1807','NONAME','00500900e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1676','NONAME','00500900f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1654','NONAME','005009010')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1689','NONAME','005009011')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1721','NONAME','005009012')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1929','NONAME','005009013')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES('RATP:1982','NONAME','005009014')");

		return $ret;
    }

    public function down(){

    }
}