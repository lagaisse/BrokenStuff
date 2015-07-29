<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data_034 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8306864145, lo_geoloc_long =1.96004233912 WHERE lo_code='SNCF:87393629'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8415623011, lo_geoloc_long =2.06203082551 WHERE lo_code='SNCF:87393876'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8026374764, lo_geoloc_long =1.81546288723 WHERE lo_code='SNCF:87393892'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9971698871, lo_geoloc_long =1.63062589505 WHERE lo_code='SNCF:87415885'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7823112378, lo_geoloc_long =3.30694912567 WHERE lo_code='SNCF:87430819'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7982788645, lo_geoloc_long =3.26705580779 WHERE lo_code='SNCF:87430900'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3483286088, lo_geoloc_long =2.03223751007 WHERE lo_code='SNCF:87545111'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4367952365, lo_geoloc_long =2.15947993947 WHERE lo_code='SNCF:87545137'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5332110052, lo_geoloc_long =2.29027219707 WHERE lo_code='SNCF:87545178'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6353259804, lo_geoloc_long =2.30660399448 WHERE lo_code='SNCF:87545202'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6694066029, lo_geoloc_long =2.33192121737 WHERE lo_code='SNCF:87545228'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6760035539, lo_geoloc_long =2.35181832836 WHERE lo_code='SNCF:87545236'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7253771442, lo_geoloc_long =2.41924456072 WHERE lo_code='SNCF:87545269'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.800528137, lo_geoloc_long =2.40241090458 WHERE lo_code='SNCF:87545293'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5336120759, lo_geoloc_long =2.00970050084 WHERE lo_code='SNCF:87545525'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7480982614, lo_geoloc_long =2.31238192134 WHERE lo_code='SNCF:87546317'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8441510423, lo_geoloc_long =2.36470621178 WHERE lo_code='SNCF:87547026'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6362887654, lo_geoloc_long =2.40777964556 WHERE lo_code='SNCF:87681346'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6257123657, lo_geoloc_long =2.42872870052 WHERE lo_code='SNCF:87681387'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.4348816689, lo_geoloc_long =2.37658302485 WHERE lo_code='SNCF:87681478'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.745666991, lo_geoloc_long =2.43835838754 WHERE lo_code='SNCF:87681809'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7299751663, lo_geoloc_long =2.44656156169 WHERE lo_code='SNCF:87681825'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6809756297, lo_geoloc_long =2.53296680371 WHERE lo_code='SNCF:87682138'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.565664426, lo_geoloc_long =2.59376744623 WHERE lo_code='SNCF:87682161'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3784037648, lo_geoloc_long =2.79952521791 WHERE lo_code='SNCF:87682278'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3821776716, lo_geoloc_long =2.8158628021 WHERE lo_code='SNCF:87682294'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5296683347, lo_geoloc_long =2.57299051053 WHERE lo_code='SNCF:87682518'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.198038068, lo_geoloc_long =3.26732685561 WHERE lo_code='SNCF:87683003'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.0849399517, lo_geoloc_long =3.28625332401 WHERE lo_code='SNCF:87683219'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =47.9608533915, lo_geoloc_long =3.51294069569 WHERE lo_code='SNCF:87683268'");

		return $ret;
    }

    public function down(){

    }
}