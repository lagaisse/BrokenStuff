<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8610558392, lo_geoloc_long =2.12308717495 WHERE lo_code='SNCF:87382457'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8678965333, lo_geoloc_long =2.05095165696 WHERE lo_code='SNCF:87382481'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8814243962, lo_geoloc_long =2.07932950165 WHERE lo_code='SNCF:87382812'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8056300572, lo_geoloc_long =2.16835422409 WHERE lo_code='SNCF:87382887'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9208344027, lo_geoloc_long =2.18450665388 WHERE lo_code='SNCF:87386409'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9923583678, lo_geoloc_long =1.95517622117 WHERE lo_code='SNCF:87386664'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8138845157, lo_geoloc_long =2.27304791512 WHERE lo_code='SNCF:87391565'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8149324174, lo_geoloc_long =2.24095618611 WHERE lo_code='SNCF:87393108'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8000745093, lo_geoloc_long =2.12808696641 WHERE lo_code='SNCF:87393157'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8009065351, lo_geoloc_long =2.17125395986 WHERE lo_code='SNCF:87393215'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7555931459, lo_geoloc_long =1.943839859 WHERE lo_code='SNCF:87393256'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.721360918, lo_geoloc_long =1.88928386117 WHERE lo_code='SNCF:87393280'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.838743022, lo_geoloc_long =2.27059360886 WHERE lo_code='SNCF:87393322'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8272442915, lo_geoloc_long =1.70387667474 WHERE lo_code='SNCF:87393447'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7684451651, lo_geoloc_long =1.51341158058 WHERE lo_code='SNCF:87393470'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7312168411, lo_geoloc_long =1.37063305623 WHERE lo_code='SNCF:87393488'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7704181964, lo_geoloc_long =2.14650866618 WHERE lo_code='SNCF:87393504'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7512563717, lo_geoloc_long =2.21558821686 WHERE lo_code='SNCF:87393546'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7750462311, lo_geoloc_long =2.00670966763 WHERE lo_code='SNCF:87393835'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5111319853, lo_geoloc_long =1.55859105877 WHERE lo_code='SNCF:87394155'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0912857364, lo_geoloc_long =1.47836264478 WHERE lo_code='SNCF:87415604'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0386031492, lo_geoloc_long =1.58150822592 WHERE lo_code='SNCF:87415893'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7906825339, lo_geoloc_long =3.27406177755 WHERE lo_code='SNCF:87430884'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3113344052, lo_geoloc_long =2.00368952585 WHERE lo_code='SNCF:87543090'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8530831497, lo_geoloc_long =2.28031289395 WHERE lo_code='SNCF:87543207'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3743438864, lo_geoloc_long =2.05975019095 WHERE lo_code='SNCF:87545129'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5656724691, lo_geoloc_long =2.29085245139 WHERE lo_code='SNCF:87545186'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6066856038, lo_geoloc_long =2.3023104096 WHERE lo_code='SNCF:87545194'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5861831007, lo_geoloc_long =2.24091796258 WHERE lo_code='SNCF:87545467'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.577116663, lo_geoloc_long =2.19179929447 WHERE lo_code='SNCF:87545483'");

		return $ret;
    }

    public function down(){

    }
}