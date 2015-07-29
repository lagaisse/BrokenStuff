<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCF_Location_data_006 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276584','ERMONT HALTE','00200100a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87387001','EVREUX','004001009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87681361','EVRY - Val de Seine','00100400e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87681387','EVRY COURCOURONNES - Centre','00100400f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87684241','FERRIERES FONTENAY','002007006')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87113894','FREINVILLE SEVRAN (T4)','003001004')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87113514','GAGNY','001005006')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382259','GARCHES MARNES LA COQUETTE','002004008')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758029','GARE DE NANTERRE PREFECTURE','00100100b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758037','GARE DE NANTERRE UNIVERSITE RER A','00100100c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276196','GARGES SARCELLES','001004010')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758656','GENTILLY','001002008')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393645','GRAVIGNY BALIZY','001003013')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276592','GROS NOYER SAINT-PRIX','00200100b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87683243','JOIGNY','00400100a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87430884','JOUY SUR MORIN MONUMENT','00200600e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382432','LA CELLE SAINT-CLOUD','002004009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758748','LA CROIX DE BERNY','001002009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116673','LA FERTE MILON','00200600f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116517','LA FERTE SOUS JOUARRE','002006010')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758862','LA HACQUINIERE','00100200a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87545459','LA NORVILLE SAINT-GERMAIN LES ARPAJON','001003014')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87758664','LAPLACE','00100200b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87683268','LAROCHE MIGENNES','00400100b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87271478','LE BLANC MESNIL','00100200c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393280','LES ESSARTS LE ROI','002005007')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87546226','LES SAULES','001003015')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382473','L\'ETANG LA VILLE','00200400a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276527','L\'ISLE ADAM PARMAIN','00200100c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87116137','LONGUEVILLE','002006011')");

		return $ret;
    }

    public function down(){

    }
}