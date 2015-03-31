<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCF_Location_data_015 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393322','PONT DU GARIGLIANO - Hôpital Européen Georges Pompidou','00100303e')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276139','PONTOISE','00100303f'),('SNCF:87276139','PONTOISE','002001024'),('SNCF:87276139','PONTOISE','002002023')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393165','PORCHEFONTAINE','001003040')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382382','PUTEAUX','002004019'),('SNCF:87382382','PUTEAUX','002008005')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87113696','ROSNY BOIS PERRIER','00100500f')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87415885','ROSNY SUR SEINE','002002024')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87545509','SAINT-CHERON','001003041')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393223','SAINT-CYR','001003042'),('SNCF:87393223','SAINT-CYR','002005018'),('SNCF:87393223','SAINT-CYR','002008006')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87682542','SAINT-FARGEAU','00100402a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87683227','SAINT-JULIEN DU SAULT','004001013')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276402','SAINT-LEU D ESSERENT','002001025')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276600','SAINT-LEU LA FORET','002001026')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87785436','SAINT-MICHEL NOTRE DAME RER B','001003043')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382481','SAINT-NOM LA BRETECHE FORET DE MARLY','00200401a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87381426','SAINT-OUEN L\'AUMONE QUARTIER DE L\'EGLISE','002002025')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393843','SAINT-QUENTIN EN YVELINES','001003044'),('SNCF:87393843','SAINT-QUENTIN EN YVELINES','002005019'),('SNCF:87393843','SAINT-QUENTIN EN YVELINES','002008007')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87382341','SEVRES VILLE D\'AVRAY','00200401b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87164780','STADE DE FRANCE SAINT-DENIS','00100402b')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276261','SURVILLIERS FOSSES','00100402c')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87393454','TACOIGNIERES RICHEBOURG','00200501a')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87276634','TAVERNY','002001027')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87272054','THIEUX NANTOUILLET','002003009')");
        $ret=$ret && $this->db->simple_query("insert into ".$this->db->dbprefix('location')." (lo_code,lo_name,lo_path) VALUES ('SNCF:87682252','THOMERY','002007014')");

		return $ret;
    }

    public function down(){

    }
}