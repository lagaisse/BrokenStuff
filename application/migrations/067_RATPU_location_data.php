<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8696716618644, lo_geoloc_long =2.28526726839526, lo_name ='Victor Hugo' WHERE lo_code='RATP:1648'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8041740664156, lo_geoloc_long =2.36394352657996, lo_name ='Villejuif-Léo Lagrange' WHERE lo_code='RATP:1650'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7870020157205, lo_geoloc_long =2.36697471484243, lo_name ='Villejuif-Louis Aragon' WHERE lo_code='RATP:1649'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7959447270881, lo_geoloc_long =2.3679661373898, lo_name ='Villejuif-Paul Vaillant Couturier (Hôpital Paul Brousse)' WHERE lo_code='RATP:1651'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8810543983372, lo_geoloc_long =2.31527055095629, lo_name ='Villiers' WHERE lo_code='RATP:1654'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8416970273909, lo_geoloc_long =2.30804114557479, lo_name ='Volontaires' WHERE lo_code='RATP:1656'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8578758428685, lo_geoloc_long =2.37988391957515, lo_name ='Voltaire (Léon Blum)' WHERE lo_code='RATP:1657'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8838739610152, lo_geoloc_long =2.30465144209881, lo_name ='Wagram' WHERE lo_code='RATP:1658'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =2428342.3333, lo_geoloc_long =611082.6667, lo_name ='Val de Fontenay' WHERE lo_code='RATP:1642'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8721691081024, lo_geoloc_long =2.40859776154048, lo_name ='ADRIENNE BOLLAND' WHERE lo_code='RATP:446307'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8435747376978, lo_geoloc_long =2.41003584738325, lo_name ='ALEXANDRA DAVID-NEEL' WHERE lo_code='RATP:446353'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.906697097401, lo_geoloc_long =2.45943609081747, lo_name ='AUGUSTE DELAUNE' WHERE lo_code='RATP:142785'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8254834414312, lo_geoloc_long =2.38098301732518, lo_name ='AVENUE DE FRANCE' WHERE lo_code='RATP:446348'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8361001462484, lo_geoloc_long =2.2780987169111, lo_name ='BALARD' WHERE lo_code='RATP:136234'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.830268818073, lo_geoloc_long =2.39303472504905, lo_name ='BARON LEROY' WHERE lo_code='RATP:446349'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9375958835908, lo_geoloc_long =2.36182285037693, lo_name ='BASILIQUE DE SAINT-DENIS' WHERE lo_code='RATP:433654'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8765333524342, lo_geoloc_long =2.22603101382263, lo_name ='BELVEDERE' WHERE lo_code='RATP:57295'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.906585259732, lo_geoloc_long =2.44979711546528, lo_name ='BOBIGNY - PABLO PICASSO' WHERE lo_code='RATP:433649'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8286765199254, lo_geoloc_long =2.30084051192976, lo_name ='BRANCION' WHERE lo_code='RATP:136238'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.821871966287, lo_geoloc_long =2.23157894388315, lo_name ='BRIMBORION' WHERE lo_code='RATP:23877'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8219619638074, lo_geoloc_long =2.23171487086591, lo_name ='BRIMBORION' WHERE lo_code='RATP:465173'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8850903758455, lo_geoloc_long =2.39665052083985, lo_name ='BUTTE DU CHAPEAU ROUGE' WHERE lo_code='RATP:446310'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.898870234798, lo_geoloc_long =2.38033612178792, lo_name ='CANAL SAINT DENIS' WHERE lo_code='RATP:446315'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9075815062497, lo_geoloc_long =2.23843221269761, lo_name ='CHARLEBOURG' WHERE lo_code='RATP:445424'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9346182522321, lo_geoloc_long =2.32163616924495, lo_name ='CHEMIN DES RENIERS' WHERE lo_code='RATP:444982'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9363012850823, lo_geoloc_long =2.36411393497228, lo_name ='CIMETIERE DE SAINT-DENIS' WHERE lo_code='RATP:142808'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8203370331967, lo_geoloc_long =2.33862254050977, lo_name ='CITE UNIVERSITAIRE' WHERE lo_code='RATP:136244'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8985472451883, lo_geoloc_long =2.36283348646326, lo_name ='COLETTE BESSON' WHERE lo_code='RATP:446318'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9320153071647, lo_geoloc_long =2.37742428959459, lo_name ='COSMONAUTES' WHERE lo_code='RATP:142806'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9316467716009, lo_geoloc_long =2.37764224115598, lo_name ='COSMONAUTES' WHERE lo_code='RATP:142805'");

		return $ret;
    }

    public function down(){

    }
}