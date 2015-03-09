<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1858313836, lo_geoloc_long =1.83583096064 WHERE lo_code='SNCF:87419952'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7828360607, lo_geoloc_long =2.40914828931 WHERE lo_code='SNCF:87492108'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5356737195, lo_geoloc_long =1.99487866205 WHERE lo_code='SNCF:87540179'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4935610644, lo_geoloc_long =2.19438536557 WHERE lo_code='SNCF:87545145'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5208671409, lo_geoloc_long =2.25536941021 WHERE lo_code='SNCF:87545160'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6530895138, lo_geoloc_long =2.3127529 WHERE lo_code='SNCF:87545210'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7127944, lo_geoloc_long =2.40314310669 WHERE lo_code='SNCF:87545251'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8143839943, lo_geoloc_long =2.39106475934 WHERE lo_code='SNCF:87545301'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.427593794, lo_geoloc_long =2.14520579403 WHERE lo_code='SNCF:87545350'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5916132336, lo_geoloc_long =2.2674134527 WHERE lo_code='SNCF:87545459'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5649002906, lo_geoloc_long =2.17146323878 WHERE lo_code='SNCF:87545491'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.274974514, lo_geoloc_long =1.62217099624 WHERE lo_code='SNCF:87545707'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6141179308, lo_geoloc_long =2.47389296086 WHERE lo_code='SNCF:87681007'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6760751629, lo_geoloc_long =2.38641557346 WHERE lo_code='SNCF:87681312'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.659296221, lo_geoloc_long =2.41440509683 WHERE lo_code='SNCF:87681338'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6232392312, lo_geoloc_long =2.45083926614 WHERE lo_code='SNCF:87681395'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5275966344, lo_geoloc_long =2.65539176037 WHERE lo_code='SNCF:87682005'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6990474124, lo_geoloc_long =2.50656952687 WHERE lo_code='SNCF:87682120'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6284764876, lo_geoloc_long =2.57006099644 WHERE lo_code='SNCF:87682153'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.416373943, lo_geoloc_long =2.7264708082 WHERE lo_code='SNCF:87682211'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3871918594, lo_geoloc_long =2.84237865621 WHERE lo_code='SNCF:87682468'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.2866954166, lo_geoloc_long =3.20174953421 WHERE lo_code='SNCF:87683136'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =47.973553839, lo_geoloc_long =3.39399460049 WHERE lo_code='SNCF:87683243'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.2933666272, lo_geoloc_long =2.4010261721 WHERE lo_code='SNCF:87684415'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8903029033, lo_geoloc_long =2.13468726683 WHERE lo_code='SNCF:87758078'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8982617452, lo_geoloc_long =2.12225185668 WHERE lo_code='SNCF:87758086'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8984691709, lo_geoloc_long =2.09453884287 WHERE lo_code='SNCF:87758094'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8210157404, lo_geoloc_long =2.46380759996 WHERE lo_code='SNCF:87758144'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.844309728, lo_geoloc_long =2.5262979201 WHERE lo_code='SNCF:87758326'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8435754749, lo_geoloc_long =2.61635637918 WHERE lo_code='SNCF:87758359'");

		return $ret;
    }

    public function down(){

    }
}