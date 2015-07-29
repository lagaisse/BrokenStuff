<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCF_Location_data_010 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116731','COUILLY SAINT-GERMAIN QUINCY','002006018')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382200','COURBEVOIE','002004013')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758888','COURCELLE SUR YVETTE','001002015')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758631','DENFERT ROCHEREAU','001002016')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87545228','EPINAY SUR ORGE','001003028')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87271122','EPINAY VILLETANEUSE','002001017')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116327','ESBLY','002006019')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758714','FONTENAY AUX ROSES','001002017')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276659','FREPILLON','002001018')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393439','GARANCIERES LA QUEUE','002005010')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758011','GARE DE LA DEFENSE RER A','001001018')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87271023','GARE DU NORD RER','001002018'),('SNCF:87271023','GARE DU NORD RER','001004016')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276246','GOUSSAINVILLE','001004017')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87681379','GRIGNY CENTRE','001004018')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116269','GUERARD LA CELLE SUR MORIN','00200601a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87281899','HAUSSMANN SAINT-LAZARE','001005009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87386409','HOUILLES CARRIERES SUR SEINE','001001019'),('SNCF:87386409','HOUILLES CARRIERES SUR SEINE','002002012'),('SNCF:87386409','HOUILLES CARRIERES SUR SEINE','002004014')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393306','ISSY VAL DE SEINE','001003029')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87545301','IVRY SUR SEINE','00100302a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393066','JAVEL','00100302b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276287','LA BORNE BLANCHE','001004019')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87430819','LA FERTE GAUCHER CENTRE','00200601b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87164798','LA PLAINE STADE DE FRANCE - Saint-Denis Aubervilliers','001002019')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393256','LA VERRIERE','002005011'),('SNCF:87393256','LA VERRIERE','002008003')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116319','LAGNY THORIGNY','00200601c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87271395','LE BOURGET','00100201a')");

		return $ret;
    }

    public function down(){

    }
}