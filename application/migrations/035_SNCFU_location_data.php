<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3376736682, lo_geoloc_long =2.7385490063 WHERE lo_code='SNCF:87684100'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.342350244, lo_geoloc_long =2.3789411123 WHERE lo_code='SNCF:87684407'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8458651759, lo_geoloc_long =2.37392601967 WHERE lo_code='SNCF:87686030'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.856066847, lo_geoloc_long =2.77507058255 WHERE lo_code='SNCF:87730069'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.896702921, lo_geoloc_long =2.45993049229 WHERE lo_code='SNCF:87113217'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8832783553, lo_geoloc_long =2.52678071322 WHERE lo_code='SNCF:87113514'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8772579359, lo_geoloc_long =2.55260641607 WHERE lo_code='SNCF:87113522'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.922288819, lo_geoloc_long =2.51685904559 WHERE lo_code='SNCF:87113886'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5453574035, lo_geoloc_long =3.28705609292 WHERE lo_code='SNCF:87115873'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7954076773, lo_geoloc_long =2.64984936854 WHERE lo_code='SNCF:87116038'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9574880158, lo_geoloc_long =2.87398151191 WHERE lo_code='SNCF:87116103'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8743421869, lo_geoloc_long =2.58250078541 WHERE lo_code='SNCF:87116111'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.813550996, lo_geoloc_long =3.04331621776 WHERE lo_code='SNCF:87116285'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8752353152, lo_geoloc_long =2.63968946902 WHERE lo_code='SNCF:87116293'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8112873771, lo_geoloc_long =3.17476072409 WHERE lo_code='SNCF:87116350'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7996831102, lo_geoloc_long =3.20860208784 WHERE lo_code='SNCF:87116368'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0379095539, lo_geoloc_long =3.409410548 WHERE lo_code='SNCF:87116582'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9981165045, lo_geoloc_long =3.00749816426 WHERE lo_code='SNCF:87116616'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8826500019, lo_geoloc_long =2.85406030652 WHERE lo_code='SNCF:87116731'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9182603833, lo_geoloc_long =2.36264549454 WHERE lo_code='SNCF:87164798'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8794550008, lo_geoloc_long =2.35733955798 WHERE lo_code='SNCF:87271031'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9237716573, lo_geoloc_long =2.38465954977 WHERE lo_code='SNCF:87271304'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9328715049, lo_geoloc_long =2.45513299027 WHERE lo_code='SNCF:87271403'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.944589686, lo_geoloc_long =2.56672079041 WHERE lo_code='SNCF:87271437'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.953250388, lo_geoloc_long =2.60263346127 WHERE lo_code='SNCF:87271510'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9757656753, lo_geoloc_long =2.64247497956 WHERE lo_code='SNCF:87271528'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0961273605, lo_geoloc_long =2.7446768019 WHERE lo_code='SNCF:87271551'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1192234592, lo_geoloc_long =2.39948681935 WHERE lo_code='SNCF:87272039'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9915757372, lo_geoloc_long =2.66518220038 WHERE lo_code='SNCF:87272047'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.008705923, lo_geoloc_long =2.68045376536 WHERE lo_code='SNCF:87272054'");

		return $ret;
    }

    public function down(){

    }
}