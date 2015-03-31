<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data_029 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9736522285, lo_geoloc_long =2.51419793524 WHERE lo_code='SNCF:87271486'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9806576563, lo_geoloc_long =2.27103879067 WHERE lo_code='SNCF:87276055'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9853847601, lo_geoloc_long =2.25675064268 WHERE lo_code='SNCF:87276063'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9932769106, lo_geoloc_long =2.23584452688 WHERE lo_code='SNCF:87276071'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0324547903, lo_geoloc_long =2.47658413334 WHERE lo_code='SNCF:87276238'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1257586117, lo_geoloc_long =2.5076550049 WHERE lo_code='SNCF:87276287'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0326887538, lo_geoloc_long =2.33747334398 WHERE lo_code='SNCF:87276436'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1551082977, lo_geoloc_long =2.32580235002 WHERE lo_code='SNCF:87276451'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0658729794, lo_geoloc_long =2.32195203517 WHERE lo_code='SNCF:87276493'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1134158059, lo_geoloc_long =2.2877319038 WHERE lo_code='SNCF:87276501'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0158381117, lo_geoloc_long =2.24256299137 WHERE lo_code='SNCF:87276600'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1336388945, lo_geoloc_long =2.28090693668 WHERE lo_code='SNCF:87276758'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3483125853, lo_geoloc_long =1.9968179759 WHERE lo_code='SNCF:87332957'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8718288723, lo_geoloc_long =2.27631406885 WHERE lo_code='SNCF:87381038'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9315212251, lo_geoloc_long =2.26073536363 WHERE lo_code='SNCF:87381095'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8969214742, lo_geoloc_long =2.29837992753 WHERE lo_code='SNCF:87381129'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0628244058, lo_geoloc_long =2.0576383659 WHERE lo_code='SNCF:87381145'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.123427593, lo_geoloc_long =1.94935897017 WHERE lo_code='SNCF:87381186'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1630112869, lo_geoloc_long =1.93670257742 WHERE lo_code='SNCF:87381194'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.2024720685, lo_geoloc_long =1.92046264154 WHERE lo_code='SNCF:87381202'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.2203975952, lo_geoloc_long =1.90546252518 WHERE lo_code='SNCF:87381210'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0181200699, lo_geoloc_long =2.0909986273 WHERE lo_code='SNCF:87381418'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9923354006, lo_geoloc_long =1.84569581402 WHERE lo_code='SNCF:87381558'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9841604689, lo_geoloc_long =1.74712329464 WHERE lo_code='SNCF:87381582'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.966463674, lo_geoloc_long =1.60119354803 WHERE lo_code='SNCF:87381616'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9700946335, lo_geoloc_long =2.07739969014 WHERE lo_code='SNCF:87381657'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9801682958, lo_geoloc_long =2.18016741599 WHERE lo_code='SNCF:87381871'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8934895769, lo_geoloc_long =2.23827508094 WHERE lo_code='SNCF:87382218'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8717069629, lo_geoloc_long =2.22110944905 WHERE lo_code='SNCF:87382374'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8425404524, lo_geoloc_long =2.1379646985 WHERE lo_code='SNCF:87382432'");

		return $ret;
    }

    public function down(){

    }
}