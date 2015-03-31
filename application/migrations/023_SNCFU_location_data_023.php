<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data_023 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1387128399, lo_geoloc_long =2.48959350843 WHERE lo_code='SNCF:87276279'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9845840299, lo_geoloc_long =2.35353000434 WHERE lo_code='SNCF:87276360'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0227293054, lo_geoloc_long =2.3631340522 WHERE lo_code='SNCF:87276394'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.203234752, lo_geoloc_long =2.37636060597 WHERE lo_code='SNCF:87276410'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1481493422, lo_geoloc_long =2.27938439623 WHERE lo_code='SNCF:87276469'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.070607684, lo_geoloc_long =2.17529699034 WHERE lo_code='SNCF:87276543'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1163064814, lo_geoloc_long =2.36780775232 WHERE lo_code='SNCF:87276568'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.117045597, lo_geoloc_long =2.41993534167 WHERE lo_code='SNCF:87276576'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0778512192, lo_geoloc_long =2.20536692885 WHERE lo_code='SNCF:87276675'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8794550031, lo_geoloc_long =2.35732593188 WHERE lo_code='SNCF:87281873'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.370995806, lo_geoloc_long =2.08207328137 WHERE lo_code='SNCF:87332932'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8950238658, lo_geoloc_long =2.07194236158 WHERE lo_code='SNCF:87366922'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9237108213, lo_geoloc_long =2.25953314227 WHERE lo_code='SNCF:87381087'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9747479366, lo_geoloc_long =2.04921372466 WHERE lo_code='SNCF:87381491'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9896873515, lo_geoloc_long =1.7032941813 WHERE lo_code='SNCF:87381509'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9836142513, lo_geoloc_long =1.71562987614 WHERE lo_code='SNCF:87381590'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8930624961, lo_geoloc_long =1.87185282015 WHERE lo_code='SNCF:87381715'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.836784962, lo_geoloc_long =2.15255479028 WHERE lo_code='SNCF:87382267'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8443540357, lo_geoloc_long =2.21690859829 WHERE lo_code='SNCF:87382358'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9250899118, lo_geoloc_long =1.44377555077 WHERE lo_code='SNCF:87387092'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7955663445, lo_geoloc_long =2.13546496397 WHERE lo_code='SNCF:87393009'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8200598727, lo_geoloc_long =2.25932087481 WHERE lo_code='SNCF:87393074'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6925852309, lo_geoloc_long =1.85633484373 WHERE lo_code='SNCF:87393298'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8317373306, lo_geoloc_long =1.94319450577 WHERE lo_code='SNCF:87393421'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8295900385, lo_geoloc_long =1.66932426561 WHERE lo_code='SNCF:87393454'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6852431878, lo_geoloc_long =2.31766558108 WHERE lo_code='SNCF:87393645'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7879626643, lo_geoloc_long =2.04468643564 WHERE lo_code='SNCF:87393843'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5831533602, lo_geoloc_long =1.62768739729 WHERE lo_code='SNCF:87394114'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5853643047, lo_geoloc_long =1.59245485785 WHERE lo_code='SNCF:87394130'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5424409263, lo_geoloc_long =1.59010244864 WHERE lo_code='SNCF:87394148'");

		return $ret;
    }

    public function down(){

    }
}