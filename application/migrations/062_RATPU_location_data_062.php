<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data_062 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8605382946574, lo_geoloc_long =2.34100049025543, lo_name ='Louvre-Rivoli' WHERE lo_code='RATP:1809'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8528181349058, lo_geoloc_long =2.33540928887416, lo_name ='Mabillon' WHERE lo_code='RATP:1812'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8700643517776, lo_geoloc_long =2.32516370025939, lo_name ='Madeleine' WHERE lo_code='RATP:1813'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9036594416322, lo_geoloc_long =2.30556600125528, lo_name ='Mairie de Clichy' WHERE lo_code='RATP:1816'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8623601850863, lo_geoloc_long =2.44165620310216, lo_name ='Mairie de Montreuil' WHERE lo_code='RATP:1817'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8180648291392, lo_geoloc_long =2.31953674036336, lo_name ='Mairie de Montrouge' WHERE lo_code='RATP:466736'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9120620157054, lo_geoloc_long =2.334163015407, lo_name ='Mairie de Saint-Ouen' WHERE lo_code='RATP:1818'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8797989953663, lo_geoloc_long =2.41623893515656, lo_name ='Mairie des Lilas' WHERE lo_code='RATP:1819'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8248138108686, lo_geoloc_long =2.27350399984748, lo_name ='Mairie d\'Issy' WHERE lo_code='RATP:1814'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8111784269088, lo_geoloc_long =2.3838082733405, lo_name ='Mairie d\'Ivry' WHERE lo_code='RATP:1815'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8226203194274, lo_geoloc_long =2.35818867672494, lo_name ='Maison Blanche' WHERE lo_code='RATP:1820'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8031418697523, lo_geoloc_long =2.44499102669377, lo_name ='Maisons-Alfort-Les Juilliottes' WHERE lo_code='RATP:21583'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8084176209203, lo_geoloc_long =2.43558220356454, lo_name ='Maisons-Alfort-Stade' WHERE lo_code='RATP:21582'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8231314024501, lo_geoloc_long =2.29701508516275, lo_name ='Malakoff-Plateau de Vanves' WHERE lo_code='RATP:22442'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8146679725106, lo_geoloc_long =2.29699896350216, lo_name ='Malakoff-Rue Etienne Dolet' WHERE lo_code='RATP:22441'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8828147397743, lo_geoloc_long =2.30969409432085, lo_name ='Malesherbes' WHERE lo_code='RATP:1826'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8526633633247, lo_geoloc_long =2.40623072117296, lo_name ='Maraichers' WHERE lo_code='RATP:55372'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8908769929214, lo_geoloc_long =2.34983707163005, lo_name ='Marcadet-Poissonniers' WHERE lo_code='RATP:1828'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8339143013551, lo_geoloc_long =2.24408138825371, lo_name ='Marcel Sembat' WHERE lo_code='RATP:1829'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8903020649568, lo_geoloc_long =2.36020584275635, lo_name ='Marx-Dormoy' WHERE lo_code='RATP:1831'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8499086726722, lo_geoloc_long =2.34850342965795, lo_name ='Maubert-Mutualité' WHERE lo_code='RATP:1834'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8659488111593, lo_geoloc_long =2.38339427851543, lo_name ='Ménilmontant' WHERE lo_code='RATP:1754'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8477403459598, lo_geoloc_long =2.2642974417474, lo_name ='Michel-Ange-Auteuil' WHERE lo_code='RATP:1836'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.844867436543, lo_geoloc_long =2.26204786419272, lo_name ='Michel-Ange-Molitor' WHERE lo_code='RATP:1837'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8367033669766, lo_geoloc_long =2.40296916119538, lo_name ='Michel Bizot' WHERE lo_code='RATP:1835'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8473396417237, lo_geoloc_long =2.27340595925819, lo_name ='Mirabeau' WHERE lo_code='RATP:1746'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8737063841262, lo_geoloc_long =2.31519918493339, lo_name ='Miromesnil' WHERE lo_code='RATP:1747'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8806306676395, lo_geoloc_long =2.30896624223491, lo_name ='Monceau' WHERE lo_code='RATP:1749'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8442504626131, lo_geoloc_long =2.38980213751236, lo_name ='Montgallet' WHERE lo_code='RATP:1750'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8430428502558, lo_geoloc_long =2.32263505064878, lo_name ='Montparnasse-Bienvenue' WHERE lo_code='RATP:1751'");

		return $ret;
    }

    public function down(){

    }
}