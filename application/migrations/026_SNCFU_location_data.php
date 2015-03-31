<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.021390636, lo_geoloc_long =2.23074753167 WHERE lo_code='SNCF:87276626'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0576430501, lo_geoloc_long =2.19077460685 WHERE lo_code='SNCF:87276667'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8735337311, lo_geoloc_long =2.32824885164 WHERE lo_code='SNCF:87281899'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8298309183, lo_geoloc_long =2.37530322164 WHERE lo_code='SNCF:87328328'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3707826482, lo_geoloc_long =1.99753551336 WHERE lo_code='SNCF:87332965'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0141135729, lo_geoloc_long =2.07888615344 WHERE lo_code='SNCF:87334482'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8854627647, lo_geoloc_long =2.29821136122 WHERE lo_code='SNCF:87381012'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8776642848, lo_geoloc_long =2.28174383914 WHERE lo_code='SNCF:87381020'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8642235059, lo_geoloc_long =2.2723998395 WHERE lo_code='SNCF:87381046'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9135363059, lo_geoloc_long =2.27247445772 WHERE lo_code='SNCF:87381079'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8875699026, lo_geoloc_long =2.31401853193 WHERE lo_code='SNCF:87381111'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9057768994, lo_geoloc_long =2.28332241877 WHERE lo_code='SNCF:87381137'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0806565706, lo_geoloc_long =2.00322127137 WHERE lo_code='SNCF:87381160'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.2852574164, lo_geoloc_long =1.78504836506 WHERE lo_code='SNCF:87381244'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0400178346, lo_geoloc_long =2.1036606548 WHERE lo_code='SNCF:87381426'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9891848652, lo_geoloc_long =2.07455911528 WHERE lo_code='SNCF:87381459'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9708118583, lo_geoloc_long =2.02769552539 WHERE lo_code='SNCF:87381475'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0069879925, lo_geoloc_long =1.96359187721 WHERE lo_code='SNCF:87381814'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0365179881, lo_geoloc_long =2.07971720177 WHERE lo_code='SNCF:87381905'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8834917758, lo_geoloc_long =2.2335382863 WHERE lo_code='SNCF:87382382'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8096143342, lo_geoloc_long =2.1354511829 WHERE lo_code='SNCF:87382861'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9551807035, lo_geoloc_long =2.09202131475 WHERE lo_code='SNCF:87386052'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9377726159, lo_geoloc_long =2.15721464809 WHERE lo_code='SNCF:87386417'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9331553703, lo_geoloc_long =2.04113811959 WHERE lo_code='SNCF:87386573'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9633027296, lo_geoloc_long =1.80862937113 WHERE lo_code='SNCF:87386763'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0185587603, lo_geoloc_long =1.14988766626 WHERE lo_code='SNCF:87387001'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8185217339, lo_geoloc_long =2.29153832055 WHERE lo_code='SNCF:87391532'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8623692316, lo_geoloc_long =2.31259955332 WHERE lo_code='SNCF:87393033'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8620519436, lo_geoloc_long =2.30178420665 WHERE lo_code='SNCF:87393041'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8559093189, lo_geoloc_long =2.28968029764 WHERE lo_code='SNCF:87393058'");

		return $ret;
    }

    public function down(){

    }
}