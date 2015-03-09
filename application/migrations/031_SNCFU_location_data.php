<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5355139146, lo_geoloc_long =2.06881558987 WHERE lo_code='SNCF:87545517'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.0734020797, lo_geoloc_long =1.33842596776 WHERE lo_code='SNCF:87545756'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7453864158, lo_geoloc_long =2.41731902384 WHERE lo_code='SNCF:87546226'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7889407184, lo_geoloc_long =2.43215833774 WHERE lo_code='SNCF:87681247'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.708293361, lo_geoloc_long =2.41443702418 WHERE lo_code='SNCF:87681304'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6345552996, lo_geoloc_long =2.45200315248 WHERE lo_code='SNCF:87681361'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6535538719, lo_geoloc_long =2.39606757755 WHERE lo_code='SNCF:87681379'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3935999978, lo_geoloc_long =2.39342651735 WHERE lo_code='SNCF:87681486'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5928271304, lo_geoloc_long =2.46153266588 WHERE lo_code='SNCF:87681619'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5732459737, lo_geoloc_long =2.47962426418 WHERE lo_code='SNCF:87681627'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7652024341, lo_geoloc_long =2.433338632 WHERE lo_code='SNCF:87681858'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5101258788, lo_geoloc_long =2.67921963213 WHERE lo_code='SNCF:87682401'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5149781204, lo_geoloc_long =2.59909325048 WHERE lo_code='SNCF:87682500'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.3429016065, lo_geoloc_long =3.07178315297 WHERE lo_code='SNCF:87683102'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.1380851657, lo_geoloc_long =3.28981843096 WHERE lo_code='SNCF:87683201'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.0269531835, lo_geoloc_long =3.30273208645 WHERE lo_code='SNCF:87683227'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8873126905, lo_geoloc_long =2.17119529456 WHERE lo_code='SNCF:87758052'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.843430303, lo_geoloc_long =2.46433886226 WHERE lo_code='SNCF:87758128'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7949783026, lo_geoloc_long =2.51314013385 WHERE lo_code='SNCF:87758185'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7530423598, lo_geoloc_long =2.50534535329 WHERE lo_code='SNCF:87758201'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8425892215, lo_geoloc_long =2.57822488113 WHERE lo_code='SNCF:87758342'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8393450116, lo_geoloc_long =2.65474342419 WHERE lo_code='SNCF:87758375'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8342947596, lo_geoloc_long =2.33250330562 WHERE lo_code='SNCF:87758631'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8151690461, lo_geoloc_long =2.34101082385 WHERE lo_code='SNCF:87758656'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7280530531, lo_geoloc_long =2.36789206811 WHERE lo_code='SNCF:87070902'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8977738494, lo_geoloc_long =2.40040674765 WHERE lo_code='SNCF:87113209'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8574201112, lo_geoloc_long =2.49041522851 WHERE lo_code='SNCF:87113712'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.892289456, lo_geoloc_long =2.49832798223 WHERE lo_code='SNCF:87113845'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8968173808, lo_geoloc_long =2.50598887899 WHERE lo_code='SNCF:87113878'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.5135111491, lo_geoloc_long =3.24968452995 WHERE lo_code='SNCF:87116137'");

		return $ret;
    }

    public function down(){

    }
}