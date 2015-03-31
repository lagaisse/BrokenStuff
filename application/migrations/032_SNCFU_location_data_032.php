<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data_032 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8103668281, lo_geoloc_long =2.95485878112 WHERE lo_code='SNCF:87116269'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8077692012, lo_geoloc_long =3.08204722637 WHERE lo_code='SNCF:87116301'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8820106403, lo_geoloc_long =2.70410248006 WHERE lo_code='SNCF:87116319'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9739654548, lo_geoloc_long =3.21952329256 WHERE lo_code='SNCF:87116558'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0215418405, lo_geoloc_long =3.03159105379 WHERE lo_code='SNCF:87116632'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0915297302, lo_geoloc_long =3.06292161569 WHERE lo_code='SNCF:87116640'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9175433405, lo_geoloc_long =2.35095898431 WHERE lo_code='SNCF:87164780'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9347897043, lo_geoloc_long =2.34599834644 WHERE lo_code='SNCF:87271015'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9541604559, lo_geoloc_long =2.30247161058 WHERE lo_code='SNCF:87271148'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9641176453, lo_geoloc_long =2.37218092579 WHERE lo_code='SNCF:87271163'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9308838397, lo_geoloc_long =2.42577594169 WHERE lo_code='SNCF:87271395'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9630240237, lo_geoloc_long =2.51218261685 WHERE lo_code='SNCF:87271452'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0075447708, lo_geoloc_long =2.19773281432 WHERE lo_code='SNCF:87276089'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0454779554, lo_geoloc_long =2.10653399744 WHERE lo_code='SNCF:87276105'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1869791522, lo_geoloc_long =2.45956612376 WHERE lo_code='SNCF:87276113'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.069147417, lo_geoloc_long =2.1421368153 WHERE lo_code='SNCF:87276162'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.976925667, lo_geoloc_long =2.39068772914 WHERE lo_code='SNCF:87276196'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0995751583, lo_geoloc_long =2.52546755625 WHERE lo_code='SNCF:87276261'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9952928969, lo_geoloc_long =2.36844640671 WHERE lo_code='SNCF:87276386'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.2141661856, lo_geoloc_long =2.41815751212 WHERE lo_code='SNCF:87276402'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.1358514708, lo_geoloc_long =2.24182227993 WHERE lo_code='SNCF:87276519'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9898013025, lo_geoloc_long =2.26322997895 WHERE lo_code='SNCF:87276584'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9971223075, lo_geoloc_long =2.25865802489 WHERE lo_code='SNCF:87276592'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3465786191, lo_geoloc_long =2.04414375257 WHERE lo_code='SNCF:87332940'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0342846592, lo_geoloc_long =2.12789079156 WHERE lo_code='SNCF:87337980'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.2614118567, lo_geoloc_long =1.8717330089 WHERE lo_code='SNCF:87381228'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.2825388857, lo_geoloc_long =1.81811969251 WHERE lo_code='SNCF:87381236'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9431263219, lo_geoloc_long =1.54133018167 WHERE lo_code='SNCF:87381624'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9503798452, lo_geoloc_long =2.23111195402 WHERE lo_code='SNCF:87381798'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.006724462, lo_geoloc_long =1.91930866297 WHERE lo_code='SNCF:87381822'");

		return $ret;
    }

    public function down(){

    }
}