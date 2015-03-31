<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.819155929, lo_geoloc_long =2.22962459235 WHERE lo_code='SNCF:87393116'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7968721628, lo_geoloc_long =2.15370348977 WHERE lo_code='SNCF:87393165'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7997821325, lo_geoloc_long =2.18396483387 WHERE lo_code='SNCF:87393173'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7989222361, lo_geoloc_long =2.07296401601 WHERE lo_code='SNCF:87393223'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6437876582, lo_geoloc_long =1.83120236411 WHERE lo_code='SNCF:87393314'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7649345138, lo_geoloc_long =2.16348314333 WHERE lo_code='SNCF:87393512'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7021715574, lo_geoloc_long =2.29438365384 WHERE lo_code='SNCF:87393611'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8154213377, lo_geoloc_long =1.87718983087 WHERE lo_code='SNCF:87393884'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4470815286, lo_geoloc_long =1.47904112441 WHERE lo_code='SNCF:87394007'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8571247692, lo_geoloc_long =2.27486035986 WHERE lo_code='SNCF:87543181'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5149456565, lo_geoloc_long =2.21658535038 WHERE lo_code='SNCF:87545152'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7398253728, lo_geoloc_long =2.42618441057 WHERE lo_code='SNCF:87545277'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7646791205, lo_geoloc_long =2.41097222313 WHERE lo_code='SNCF:87545285'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5824269228, lo_geoloc_long =2.22228216751 WHERE lo_code='SNCF:87545475'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.186287565, lo_geoloc_long =1.3861167316 WHERE lo_code='SNCF:87545731'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7417910405, lo_geoloc_long =2.40277215996 WHERE lo_code='SNCF:87546200'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7402800868, lo_geoloc_long =2.35276043346 WHERE lo_code='SNCF:87546291'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8592617784, lo_geoloc_long =2.327951672 WHERE lo_code='SNCF:87547307'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6479449073, lo_geoloc_long =2.43641871488 WHERE lo_code='SNCF:87681353'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5710632679, lo_geoloc_long =2.43325188735 WHERE lo_code='SNCF:87681411'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7080369018, lo_geoloc_long =2.46228325227 WHERE lo_code='SNCF:87682104'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7067634252, lo_geoloc_long =2.48337131052 WHERE lo_code='SNCF:87682112'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6671976463, lo_geoloc_long =2.54769338184 WHERE lo_code='SNCF:87682146'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5399387084, lo_geoloc_long =2.62404631973 WHERE lo_code='SNCF:87682179'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3798317075, lo_geoloc_long =2.94290979682 WHERE lo_code='SNCF:87682302'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4871097023, lo_geoloc_long =2.69505424001 WHERE lo_code='SNCF:87682419'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4305611079, lo_geoloc_long =2.75278446885 WHERE lo_code='SNCF:87682443'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3786447963, lo_geoloc_long =2.89744111747 WHERE lo_code='SNCF:87682476'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5645508759, lo_geoloc_long =2.54245766803 WHERE lo_code='SNCF:87682542'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.0071802686, lo_geoloc_long =2.74297582165 WHERE lo_code='SNCF:87684001'");

		return $ret;
    }

    public function down(){

    }
}