<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6894695504, lo_geoloc_long =2.38321063154 WHERE lo_code='SNCF:87545244'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.839831199, lo_geoloc_long =2.33666920248 WHERE lo_code='SNCF:87758623'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7706579571, lo_geoloc_long =2.31005953531 WHERE lo_code='SNCF:87758730'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7395785722, lo_geoloc_long =2.28746296112 WHERE lo_code='SNCF:87758771'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7028869861, lo_geoloc_long =2.07076307637 WHERE lo_code='SNCF:87758896'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8928864431, lo_geoloc_long =2.48854373913 WHERE lo_code='SNCF:87988709'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8103771718, lo_geoloc_long =1.7648574661 WHERE lo_code='SNCF:87393439'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7249016766, lo_geoloc_long =2.25659692368 WHERE lo_code='SNCF:87393579'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7007825444, lo_geoloc_long =2.30830358876 WHERE lo_code='SNCF:87393637'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7916835759, lo_geoloc_long =3.25635379317 WHERE lo_code='SNCF:87430918'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9306303553, lo_geoloc_long =2.51575588791 WHERE lo_code='SNCF:87431791'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5509652776, lo_geoloc_long =2.12555154219 WHERE lo_code='SNCF:87545509'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7478708023, lo_geoloc_long =2.37293264591 WHERE lo_code='SNCF:87546192'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8534830378, lo_geoloc_long =2.34386002975 WHERE lo_code='SNCF:87547315'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8020043888, lo_geoloc_long =2.42663105501 WHERE lo_code='SNCF:87681155'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5861529748, lo_geoloc_long =2.47344029503 WHERE lo_code='SNCF:87681403'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5324333359, lo_geoloc_long =2.37128293053 WHERE lo_code='SNCF:87681437'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4847554433, lo_geoloc_long =2.35172443157 WHERE lo_code='SNCF:87681452'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3710816036, lo_geoloc_long =2.38672292567 WHERE lo_code='SNCF:87681510'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6062628825, lo_geoloc_long =2.46449251607 WHERE lo_code='SNCF:87681601'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5663615548, lo_geoloc_long =2.4927434828 WHERE lo_code='SNCF:87681635'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5954687946, lo_geoloc_long =2.5831402916 WHERE lo_code='SNCF:87682187'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4755666724, lo_geoloc_long =2.69200060593 WHERE lo_code='SNCF:87682203'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3931099094, lo_geoloc_long =2.77909503945 WHERE lo_code='SNCF:87682252'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4875013233, lo_geoloc_long =2.75134395079 WHERE lo_code='SNCF:87682427'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.442859651, lo_geoloc_long =2.76046271779 WHERE lo_code='SNCF:87682435'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4065817182, lo_geoloc_long =2.79922050049 WHERE lo_code='SNCF:87682450'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5350074152, lo_geoloc_long =2.54460207204 WHERE lo_code='SNCF:87682526'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3241404978, lo_geoloc_long =3.13085609526 WHERE lo_code='SNCF:87683128'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.0966410527, lo_geoloc_long =2.77217703741 WHERE lo_code='SNCF:87684241'");

		return $ret;
    }

    public function down(){

    }
}