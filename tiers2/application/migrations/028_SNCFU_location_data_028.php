<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data_028 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3327513392, lo_geoloc_long =2.69223391218 WHERE lo_code='SNCF:87684118'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.2679088703, lo_geoloc_long =2.68565411114 WHERE lo_code='SNCF:87684126'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.230720823, lo_geoloc_long =2.70325251947 WHERE lo_code='SNCF:87684191'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.1819631741, lo_geoloc_long =2.7351551039 WHERE lo_code='SNCF:87684217'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.1476530629, lo_geoloc_long =2.76250789444 WHERE lo_code='SNCF:87684233'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8397147738, lo_geoloc_long =2.38244508142 WHERE lo_code='SNCF:87686667'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8756403455, lo_geoloc_long =2.30026252375 WHERE lo_code='SNCF:87758003'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8921319365, lo_geoloc_long =2.23758257184 WHERE lo_code='SNCF:87758011'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8389308762, lo_geoloc_long =2.6341133067 WHERE lo_code='SNCF:87758367'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8718083114, lo_geoloc_long =2.3304290066 WHERE lo_code='SNCF:87758599'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7800404985, lo_geoloc_long =2.2815489662 WHERE lo_code='SNCF:87758722'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7624325685, lo_geoloc_long =2.30488398555 WHERE lo_code='SNCF:87758748'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7061217032, lo_geoloc_long =2.2116059812 WHERE lo_code='SNCF:87758821'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6958044781, lo_geoloc_long =2.16306227518 WHERE lo_code='SNCF:87758854'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8940677111, lo_geoloc_long =2.31441088724 WHERE lo_code='SNCF:87111278'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8943813736, lo_geoloc_long =2.47873446467 WHERE lo_code='SNCF:87113407'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8827036731, lo_geoloc_long =2.48149612336 WHERE lo_code='SNCF:87113696'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8387213192, lo_geoloc_long =2.49407704122 WHERE lo_code='SNCF:87113746'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8231802547, lo_geoloc_long =2.54232320839 WHERE lo_code='SNCF:87113795'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9020940307, lo_geoloc_long =2.51140436982 WHERE lo_code='SNCF:87113852'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7454247254, lo_geoloc_long =2.72874414729 WHERE lo_code='SNCF:87116012'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.644845508, lo_geoloc_long =2.82466540585 WHERE lo_code='SNCF:87116079'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.555694263, lo_geoloc_long =3.30284528743 WHERE lo_code='SNCF:87116160'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5301748255, lo_geoloc_long =3.257217473 WHERE lo_code='SNCF:87116178'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9030870706, lo_geoloc_long =2.81083070974 WHERE lo_code='SNCF:87116327'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8143452308, lo_geoloc_long =3.15249004519 WHERE lo_code='SNCF:87116343'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8001565925, lo_geoloc_long =3.2462310892 WHERE lo_code='SNCF:87116376'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9918518743, lo_geoloc_long =3.36428923528 WHERE lo_code='SNCF:87116574'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8794550008, lo_geoloc_long =2.35733955798 WHERE lo_code='SNCF:87271023'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9360642047, lo_geoloc_long =2.53489935862 WHERE lo_code='SNCF:87271429'");

		return $ret;
    }

    public function down(){

    }
}