<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data_036 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0194997296, lo_geoloc_long =2.15359623504 WHERE lo_code='SNCF:87276097'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.024067636, lo_geoloc_long =2.4631569019 WHERE lo_code='SNCF:87276246'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.975805318, lo_geoloc_long =2.33774613332 WHERE lo_code='SNCF:87276345'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0451335667, lo_geoloc_long =2.3227920356 WHERE lo_code='SNCF:87276485'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0975553134, lo_geoloc_long =2.36066745509 WHERE lo_code='SNCF:87276550'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0253901291, lo_geoloc_long =2.22176165616 WHERE lo_code='SNCF:87276634'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0357302371, lo_geoloc_long =2.21002564995 WHERE lo_code='SNCF:87276642'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0462385732, lo_geoloc_long =2.19720455205 WHERE lo_code='SNCF:87276659'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.312467934, lo_geoloc_long =2.0007574059 WHERE lo_code='SNCF:87332973'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0757741194, lo_geoloc_long =2.02535654106 WHERE lo_code='SNCF:87381152'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.099673443, lo_geoloc_long =1.97050200454 WHERE lo_code='SNCF:87381178'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9871023339, lo_geoloc_long =2.05969989674 WHERE lo_code='SNCF:87381483'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9830117502, lo_geoloc_long =1.80886489228 WHERE lo_code='SNCF:87381566'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9792913425, lo_geoloc_long =1.7850515873 WHERE lo_code='SNCF:87381574'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.90907265, lo_geoloc_long =1.85695686135 WHERE lo_code='SNCF:87381723'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9386178404, lo_geoloc_long =1.84051710634 WHERE lo_code='SNCF:87381731'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9810063299, lo_geoloc_long =2.00562594712 WHERE lo_code='SNCF:87381806'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8569094152, lo_geoloc_long =2.21677050352 WHERE lo_code='SNCF:87382366'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8681535535, lo_geoloc_long =2.07679348122 WHERE lo_code='SNCF:87382473'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8067100466, lo_geoloc_long =2.15124665346 WHERE lo_code='SNCF:87382879'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9094340652, lo_geoloc_long =2.23992160213 WHERE lo_code='SNCF:87386003'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9134465868, lo_geoloc_long =2.25785779479 WHERE lo_code='SNCF:87386300'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9813992206, lo_geoloc_long =1.98285008374 WHERE lo_code='SNCF:87386656'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9926654868, lo_geoloc_long =1.9130448593 WHERE lo_code='SNCF:87386680'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8405039394, lo_geoloc_long =2.3194723448 WHERE lo_code='SNCF:87391003'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8213074115, lo_geoloc_long =2.21458013796 WHERE lo_code='SNCF:87393124'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8047850879, lo_geoloc_long =2.18846743145 WHERE lo_code='SNCF:87393207'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8073664634, lo_geoloc_long =2.04060376202 WHERE lo_code='SNCF:87393405'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8240093053, lo_geoloc_long =1.99292226774 WHERE lo_code='SNCF:87393413'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6761212575, lo_geoloc_long =2.33403789799 WHERE lo_code='SNCF:87393652'");

		return $ret;
    }

    public function down(){

    }
}