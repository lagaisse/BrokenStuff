<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data_065 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8669463020695, lo_geoloc_long =2.33366506577888, lo_name ='Pyramides' WHERE lo_code='RATP:1738'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8669463020695, lo_geoloc_long =2.33366506577888, lo_name ='Pyramides' WHERE lo_code='RATP:50047'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8738907818268, lo_geoloc_long =2.38488983901602, lo_name ='Pyrenees' WHERE lo_code='RATP:55330'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8373989542089, lo_geoloc_long =2.37378388489769, lo_name ='Quai de la Gare' WHERE lo_code='RATP:1742'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8457951983436, lo_geoloc_long =2.36703563413483, lo_name ='Quai de la Rapée' WHERE lo_code='RATP:1743'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8693729306069, lo_geoloc_long =2.33574247484458, lo_name ='Quatre Septembre' WHERE lo_code='RATP:1744'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8614000355035, lo_geoloc_long =2.35350496222254, lo_name ='Rambuteau' WHERE lo_code='RATP:1745'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8553920307943, lo_geoloc_long =2.26997975035107, lo_name ='Ranelagh' WHERE lo_code='RATP:1659'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8389637143162, lo_geoloc_long =2.33058309684112, lo_name ='Raspail' WHERE lo_code='RATP:1660'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8663118301881, lo_geoloc_long =2.35203525525425, lo_name ='Réaumur-Sébastopol' WHERE lo_code='RATP:1676'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8480544328681, lo_geoloc_long =2.32808305123987, lo_name ='Rennes' WHERE lo_code='RATP:1661'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8674860390566, lo_geoloc_long =2.36366959820676, lo_name ='République' WHERE lo_code='RATP:1679'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8472381327386, lo_geoloc_long =2.38611818658013, lo_name ='Reuilly-Diderot' WHERE lo_code='RATP:1662'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8608927535125, lo_geoloc_long =2.3720977804711, lo_name ='Richard-Lenoir' WHERE lo_code='RATP:1664'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8720139167525, lo_geoloc_long =2.33908809938486, lo_name ='Richelieu-Drouot' WHERE lo_code='RATP:1665'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8881235581407, lo_geoloc_long =2.37448742568144, lo_name ='Riquet' WHERE lo_code='RATP:1666'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.85556400483, lo_geoloc_long =2.42355673885079, lo_name ='Robespierre' WHERE lo_code='RATP:1667'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8825292240735, lo_geoloc_long =2.32098414419979, lo_name ='Rome' WHERE lo_code='RATP:1670'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8641004131629, lo_geoloc_long =2.27762632988678, lo_name ='Rue de la Pompe (Avenue Georges Mandel)' WHERE lo_code='RATP:1672'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8521417733756, lo_geoloc_long =2.38914280457034, lo_name ='Rue des Boulets' WHERE lo_code='RATP:1673'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8557564721823, lo_geoloc_long =2.32556882179391, lo_name ='Rue du Bac' WHERE lo_code='RATP:1674'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8639878082439, lo_geoloc_long =2.38007329534159, lo_name ='Rue Saint-Maur' WHERE lo_code='RATP:1693'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8612121032505, lo_geoloc_long =2.37409760383489, lo_name ='Saint-Ambroise' WHERE lo_code='RATP:1680'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8746742716311, lo_geoloc_long =2.32043139650991, lo_name ='Saint-Augustin' WHERE lo_code='RATP:1681'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9296276098426, lo_geoloc_long =2.35741016429387, lo_name ='Saint-Denis-Porte de Paris' WHERE lo_code='RATP:22439'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9456254805762, lo_geoloc_long =2.36235875823436, lo_name ='Saint-Denis-Universite' WHERE lo_code='RATP:50399'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.871951099492, lo_geoloc_long =2.40485763553065, lo_name ='Saint-Fargeau' WHERE lo_code='RATP:1684'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8518632147979, lo_geoloc_long =2.31403452688812, lo_name ='Saint-Francois-Xavier' WHERE lo_code='RATP:1685'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8785085363002, lo_geoloc_long =2.33758851215148, lo_name ='Saint-Georges' WHERE lo_code='RATP:1686'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8536134867907, lo_geoloc_long =2.33372046538119, lo_name ='Saint-Germain des Prés' WHERE lo_code='RATP:1687'");

		return $ret;
    }

    public function down(){

    }
}