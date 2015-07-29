<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data_022 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0040985205, lo_geoloc_long =2.57154696503 WHERE lo_code='SNCF:87001479'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8767766066, lo_geoloc_long =2.358414927 WHERE lo_code='SNCF:87113001'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8892773749, lo_geoloc_long =2.51205637004 WHERE lo_code='SNCF:87113472'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8249271629, lo_geoloc_long =2.51209824083 WHERE lo_code='SNCF:87113779'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8231906883, lo_geoloc_long =2.57979540155 WHERE lo_code='SNCF:87113803'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9082235013, lo_geoloc_long =2.51727383269 WHERE lo_code='SNCF:87113860'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9270396905, lo_geoloc_long =2.5189895135 WHERE lo_code='SNCF:87113894'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.770713265, lo_geoloc_long =2.68993639666 WHERE lo_code='SNCF:87116020'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8060035996, lo_geoloc_long =2.61771918549 WHERE lo_code='SNCF:87116046'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.613224928, lo_geoloc_long =2.88948293637 WHERE lo_code='SNCF:87116087'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7354136323, lo_geoloc_long =2.86932424041 WHERE lo_code='SNCF:87116228'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7893454005, lo_geoloc_long =2.90770615404 WHERE lo_code='SNCF:87116244'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8085349039, lo_geoloc_long =2.99318415513 WHERE lo_code='SNCF:87116277'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7827110308, lo_geoloc_long =3.29755777978 WHERE lo_code='SNCF:87116392'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8908111565, lo_geoloc_long =2.8262287351 WHERE lo_code='SNCF:87116400'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9600729681, lo_geoloc_long =2.94935724218 WHERE lo_code='SNCF:87116491'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9593340234, lo_geoloc_long =3.0256113065 WHERE lo_code='SNCF:87116509'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9507720863, lo_geoloc_long =3.12540966146 WHERE lo_code='SNCF:87116517'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9687706778, lo_geoloc_long =3.32293348418 WHERE lo_code='SNCF:87116566'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1353860698, lo_geoloc_long =3.0752747316 WHERE lo_code='SNCF:87116665'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9476830486, lo_geoloc_long =2.524451401 WHERE lo_code='SNCF:87271445'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9324610128, lo_geoloc_long =2.47737901135 WHERE lo_code='SNCF:87271478'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1421716494, lo_geoloc_long =2.79385216117 WHERE lo_code='SNCF:87271577'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9201482202, lo_geoloc_long =2.31471303257 WHERE lo_code='SNCF:87272146'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9730065501, lo_geoloc_long =2.3065405136 WHERE lo_code='SNCF:87276022'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9798046558, lo_geoloc_long =2.29179173933 WHERE lo_code='SNCF:87276030'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.047019384, lo_geoloc_long =2.09533109205 WHERE lo_code='SNCF:87276139'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0545647101, lo_geoloc_long =2.12201152598 WHERE lo_code='SNCF:87276147'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9941925925, lo_geoloc_long =2.41607904161 WHERE lo_code='SNCF:87276220'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.049540601, lo_geoloc_long =2.50222230081 WHERE lo_code='SNCF:87276253'");

		return $ret;
    }

    public function down(){

    }
}