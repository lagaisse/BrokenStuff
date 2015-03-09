<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8773395505122, lo_geoloc_long =2.34960623902438, lo_name ='Poissonnière' WHERE lo_code='RATP:1706'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8971187551468, lo_geoloc_long =2.28048941733931, lo_name ='Pont de Levallois-Bécon' WHERE lo_code='RATP:1708'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8845093796136, lo_geoloc_long =2.25989172465632, lo_name ='Pont de Neuilly' WHERE lo_code='RATP:1709'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8295929841028, lo_geoloc_long =2.23025364790437, lo_name ='Pont de Sèvres' WHERE lo_code='RATP:1710'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8533107454827, lo_geoloc_long =2.35745881597611, lo_name ='Pont Marie (Cité des Arts)' WHERE lo_code='RATP:1711'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8584022524727, lo_geoloc_long =2.34194923634659, lo_name ='Pont Neuf' WHERE lo_code='RATP:1712'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8716448024995, lo_geoloc_long =2.2766480745793, lo_name ='Porte Dauphine (Maréchal de Lattre de Tassigny)' WHERE lo_code='RATP:1714'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8480737822692, lo_geoloc_long =2.25864782764785, lo_name ='Porte d\'Auteuil' WHERE lo_code='RATP:1717'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8643963044636, lo_geoloc_long =2.40799995272687, lo_name ='Porte de Bagnolet' WHERE lo_code='RATP:1721'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8855507197363, lo_geoloc_long =2.29274204135011, lo_name ='Porte de Champerret' WHERE lo_code='RATP:1722'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8325258939597, lo_geoloc_long =2.39970109937032, lo_name ='Porte de Charenton' WHERE lo_code='RATP:1723'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8201452157747, lo_geoloc_long =2.36434644526859, lo_name ='Porte de Choisy' WHERE lo_code='RATP:1724'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8943611610735, lo_geoloc_long =2.31373834378485, lo_name ='Porte de Clichy' WHERE lo_code='RATP:1725'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8972870603971, lo_geoloc_long =2.34477887737988, lo_name ='Porte de Clignancourt' WHERE lo_code='RATP:1726'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8980716716703, lo_geoloc_long =2.35909154194382, lo_name ='Porte de la Chapelle' WHERE lo_code='RATP:1734'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8978102190581, lo_geoloc_long =2.38580611263705, lo_name ='Porte de la Villette' WHERE lo_code='RATP:1735'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8534495044418, lo_geoloc_long =2.41043444867178, lo_name ='Porte de Montreuil' WHERE lo_code='RATP:1727'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8883327364608, lo_geoloc_long =2.39146861403051, lo_name ='Porte de Pantin' WHERE lo_code='RATP:1728'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8378883866228, lo_geoloc_long =2.25680251499702, lo_name ='Porte de Saint-Cloud' WHERE lo_code='RATP:1729'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8972510523147, lo_geoloc_long =2.32883766969025, lo_name ='Porte de Saint-Ouen' WHERE lo_code='RATP:1730'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8770699912197, lo_geoloc_long =2.40638582344912, lo_name ='Porte des Lilas' WHERE lo_code='RATP:1736'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8276756893336, lo_geoloc_long =2.30534014881766, lo_name ='Porte de Vanves' WHERE lo_code='RATP:1731'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8324619819728, lo_geoloc_long =2.28800279639373, lo_name ='Porte de Versailles' WHERE lo_code='RATP:1732'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8472657113718, lo_geoloc_long =2.40888352534985, lo_name ='Porte de Vincennes' WHERE lo_code='RATP:1733'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8189346110715, lo_geoloc_long =2.35985580265649, lo_name ='Porte d\'Italie' WHERE lo_code='RATP:1718'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8212704974684, lo_geoloc_long =2.36909494347048, lo_name ='Porte d\'Ivry' WHERE lo_code='RATP:1719'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8354388891914, lo_geoloc_long =2.40601835314784, lo_name ='Porte Dorée' WHERE lo_code='RATP:1715'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8226012875276, lo_geoloc_long =2.3248055530705, lo_name ='Porte d\'Orléans (Général Leclerc)' WHERE lo_code='RATP:1720'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.877964502968, lo_geoloc_long =2.28183617255428, lo_name ='Porte Maillot' WHERE lo_code='RATP:1716'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8799349564117, lo_geoloc_long =2.39907689689178, lo_name ='Pré-Saint-Gervais' WHERE lo_code='RATP:1737'");

		return $ret;
    }

    public function down(){

    }
}