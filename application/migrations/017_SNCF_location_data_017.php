<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCF_Location_data_017 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87546200','ORLY VILLE','001003047')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87381145','OSNY','002002029')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116020','OZOIR LA FERRIERE','001005012')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87381012','PEREIRE LEVALLOIS','001003048')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87381111','PONT CARDINET','00200401e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87546192','PONT DE RUNGIS Aéroport d\'Orly','001003049')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87111278','PORTE DE CLICHY','00100304a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87681338','RIS ORANGIS','00100402f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758052','RUEIL MALMAISON','001001024')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382358','SAINT-CLOUD','00200401f'),('SNCF:87382358','SAINT-CLOUD','002008008')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87366922','SAINT-GERMAIN EN LAYE BEL AIR FOURQUEUX','002004020')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276170','SAINT-GRATIEN','00100304b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87337980','SAINT-OUEN L\'AUMONE LIESSE','00100304c'),('SNCF:87337980','SAINT-OUEN L\'AUMONE LIESSE','00200102d')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87682187','SAVIGNY LE TEMPLE NANDY','001004030')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87683003','SENS','004001015')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393124','SEVRES RIVE GAUCHE','00200501d')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87684217','SOUPPES CHÂTEAU LANDON','002007017')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758193','SUCY BONNEUIL','001001025')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382374','SURESNES MONT VALERIEN','002004021'),('SNCF:87382374','SURESNES MONT VALERIEN','002008009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87381236','TRIE CHATEAU','00200202a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116491','TRILPORT','002006027')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393538','VAUBOYEN','00100304d')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393157','VERSAILLES RIVE GAUCHE - CHÂTEAU DE VERSAILLES','00100304e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87683102','VILLENEUVE LA GUYARD','004001016')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87681825','VILLENEUVE SAINT-GEORGES','001004031')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87683219','VILLENEUVE SUR YONNE','004001017')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758110','VINCENNES','001001026')");

		return $ret;
    }

    public function down(){

    }
}