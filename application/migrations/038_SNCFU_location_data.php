<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8367409178, lo_geoloc_long =2.70977301222 WHERE lo_code='SNCF:87754986'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.895632969, lo_geoloc_long =2.22314127514 WHERE lo_code='SNCF:87758029'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8954957488, lo_geoloc_long =2.19574459249 WHERE lo_code='SNCF:87758045'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8853948331, lo_geoloc_long =2.15638812921 WHERE lo_code='SNCF:87758060'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8482919987, lo_geoloc_long =2.39589344313 WHERE lo_code='SNCF:87758102'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8051451207, lo_geoloc_long =2.48562114946 WHERE lo_code='SNCF:87758169'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8069455873, lo_geoloc_long =2.51010547177 WHERE lo_code='SNCF:87758177'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8534873866, lo_geoloc_long =2.5136654026 WHERE lo_code='SNCF:87758318'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.807475534, lo_geoloc_long =2.33385287317 WHERE lo_code='SNCF:87758664'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7801229868, lo_geoloc_long =2.31306019095 WHERE lo_code='SNCF:87758698'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7178295117, lo_geoloc_long =2.24650156983 WHERE lo_code='SNCF:87758805'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7076740717, lo_geoloc_long =2.23720264144 WHERE lo_code='SNCF:87758813'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7049120727, lo_geoloc_long =2.19136051979 WHERE lo_code='SNCF:87758839'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6976916156, lo_geoloc_long =2.18217452645 WHERE lo_code='SNCF:87758847'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8705976925, lo_geoloc_long =2.78287721332 WHERE lo_code='SNCF:87754994'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9015475909, lo_geoloc_long =2.21516720292 WHERE lo_code='SNCF:87758037'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8473150518, lo_geoloc_long =2.43327284147 WHERE lo_code='SNCF:87758110'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8343444968, lo_geoloc_long =2.47194060412 WHERE lo_code='SNCF:87758136'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8063293818, lo_geoloc_long =2.4723169521 WHERE lo_code='SNCF:87758151'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7709967645, lo_geoloc_long =2.50806859096 WHERE lo_code='SNCF:87758193'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8409753849, lo_geoloc_long =2.54770380568 WHERE lo_code='SNCF:87758334'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.798280675, lo_geoloc_long =2.32790817631 WHERE lo_code='SNCF:87758672'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.781412968, lo_geoloc_long =2.29718793977 WHERE lo_code='SNCF:87758706'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7546567024, lo_geoloc_long =2.30097393388 WHERE lo_code='SNCF:87758755'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7431863371, lo_geoloc_long =2.29659224464 WHERE lo_code='SNCF:87758763'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6983695617, lo_geoloc_long =2.13669740173 WHERE lo_code='SNCF:87758870'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8534470903, lo_geoloc_long =2.34381916735 WHERE lo_code='SNCF:87785436'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9166477752, lo_geoloc_long =2.51499863734 WHERE lo_code='SNCF:87988717'");

		return $ret;
    }

    public function down(){

    }
}