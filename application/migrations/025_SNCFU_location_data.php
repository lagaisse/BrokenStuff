<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8575990354, lo_geoloc_long =2.34741546883 WHERE lo_code='SNCF:87758607'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.84701219, lo_geoloc_long =2.34056375045 WHERE lo_code='SNCF:87758615'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8199505249, lo_geoloc_long =2.34053480316 WHERE lo_code='SNCF:87758649'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7932107738, lo_geoloc_long =2.32101212686 WHERE lo_code='SNCF:87758680'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7875498744, lo_geoloc_long =2.29198724405 WHERE lo_code='SNCF:87758714'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6947648701, lo_geoloc_long =2.15318113824 WHERE lo_code='SNCF:87758862'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7009426381, lo_geoloc_long =2.09904538368 WHERE lo_code='SNCF:87758888'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8707365481, lo_geoloc_long =2.48559085409 WHERE lo_code='SNCF:87113704'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5614914155, lo_geoloc_long =3.01241107757 WHERE lo_code='SNCF:87116095'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7391987163, lo_geoloc_long =2.7593959944 WHERE lo_code='SNCF:87116210'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.17955597, lo_geoloc_long =3.12102785979 WHERE lo_code='SNCF:87116673'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8631530283, lo_geoloc_long =2.88296287419 WHERE lo_code='SNCF:87116749'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8595413958, lo_geoloc_long =2.9057267856 WHERE lo_code='SNCF:87116772'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9583799869, lo_geoloc_long =2.32884820025 WHERE lo_code='SNCF:87271122'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9663676293, lo_geoloc_long =2.31663105732 WHERE lo_code='SNCF:87271171'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9337077898, lo_geoloc_long =2.30709579749 WHERE lo_code='SNCF:87271205'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.905347806, lo_geoloc_long =2.3224084353 WHERE lo_code='SNCF:87271247'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9318826001, lo_geoloc_long =2.49441371193 WHERE lo_code='SNCF:87271411'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0097447522, lo_geoloc_long =2.56069879391 WHERE lo_code='SNCF:87271460'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0319624789, lo_geoloc_long =2.6987299167 WHERE lo_code='SNCF:87271536'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.2008926273, lo_geoloc_long =2.83811205149 WHERE lo_code='SNCF:87271585'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.231220388, lo_geoloc_long =2.88844224326 WHERE lo_code='SNCF:87271593'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0792979934, lo_geoloc_long =2.3505368339 WHERE lo_code='SNCF:87272021'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.2641015333, lo_geoloc_long =2.46907080816 WHERE lo_code='SNCF:87276006'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0597820664, lo_geoloc_long =2.1302213648 WHERE lo_code='SNCF:87276154'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9638146849, lo_geoloc_long =2.28483149536 WHERE lo_code='SNCF:87276170'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.970013299, lo_geoloc_long =2.26372238519 WHERE lo_code='SNCF:87276188'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1672989351, lo_geoloc_long =2.36252152612 WHERE lo_code='SNCF:87276444'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1140318769, lo_geoloc_long =2.20957249819 WHERE lo_code='SNCF:87276527'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0918296452, lo_geoloc_long =2.20237586217 WHERE lo_code='SNCF:87276535'");

		return $ret;
    }

    public function down(){

    }
}