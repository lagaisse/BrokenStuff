<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8634946589771, lo_geoloc_long =2.34866984004444, lo_name ='Etienne Marcel' WHERE lo_code='RATP:1914'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8787098768874, lo_geoloc_long =2.32282484061213, lo_name ='Europe' WHERE lo_code='RATP:1915'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8424273379119, lo_geoloc_long =2.25973661579821, lo_name ='Exelmans' WHERE lo_code='RATP:1916'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8502384503521, lo_geoloc_long =2.38427458098634, lo_name ='Faidherbe-Chaligny' WHERE lo_code='RATP:1917'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.844637894177, lo_geoloc_long =2.31749646866691, lo_name ='Falguière' WHERE lo_code='RATP:1918'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8429772288922, lo_geoloc_long =2.29199788779218, lo_name ='Félix Faure' WHERE lo_code='RATP:1925'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8633028923386, lo_geoloc_long =2.36645313804373, lo_name ='Filles du Calvaire' WHERE lo_code='RATP:1919'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9146921997335, lo_geoloc_long =2.40417710143886, lo_name ='Fort d\'Aubervilliers' WHERE lo_code='RATP:1923'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8693052286485, lo_geoloc_long =2.30830876451203, lo_name ='Franklin-Roosevelt' WHERE lo_code='RATP:1924'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9065795187205, lo_geoloc_long =2.36587539174522, lo_name ='Front Populaire' WHERE lo_code='RATP:454595'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8844354700414, lo_geoloc_long =2.34340064272908, lo_name ='Funiculaire Gare basse' WHERE lo_code='RATP:2021'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8856217864643, lo_geoloc_long =2.34334627251386, lo_name ='Funiculaire Gare haute' WHERE lo_code='RATP:2022'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9162335021232, lo_geoloc_long =2.29492376422254, lo_name ='Gabriel-Péri' WHERE lo_code='RATP:22443'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8384911503461, lo_geoloc_long =2.32258277982791, lo_name ='Gaité' WHERE lo_code='RATP:1927'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8633345779424, lo_geoloc_long =2.41568260426712, lo_name ='Gallieni (Parc de Bagnolet)' WHERE lo_code='RATP:1928'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8648347782704, lo_geoloc_long =2.39846223866212, lo_name ='Gambetta' WHERE lo_code='RATP:1929'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8431055835176, lo_geoloc_long =2.36431304821499, lo_name ='Gare d\'Austerlitz' WHERE lo_code='RATP:1838'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8760613055252, lo_geoloc_long =2.35791867724751, lo_name ='Gare de l\'Est (Verdun)' WHERE lo_code='RATP:1841'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8447045450658, lo_geoloc_long =2.37406590751466, lo_name ='Gare de Lyon' WHERE lo_code='RATP:1839'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8799654432891, lo_geoloc_long =2.35470307836603, lo_name ='Gare du Nord' WHERE lo_code='RATP:1842'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9060316197727, lo_geoloc_long =2.33173327604333, lo_name ='Garibaldi' WHERE lo_code='RATP:1844'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8719825731694, lo_geoloc_long =2.30046268343343, lo_name ='George V' WHERE lo_code='RATP:1846'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8313647071449, lo_geoloc_long =2.34393889430969, lo_name ='Glacière' WHERE lo_code='RATP:1848'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8696803933807, lo_geoloc_long =2.3712726500969, lo_name ='Goncourt (Hôpital Saint-Louis)' WHERE lo_code='RATP:1849'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8714189081641, lo_geoloc_long =2.34319701067138, lo_name ='Grands Boulevards' WHERE lo_code='RATP:1671'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8924675161233, lo_geoloc_long =2.32722675495985, lo_name ='Guy-Môquet' WHERE lo_code='RATP:1851'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8733427700542, lo_geoloc_long =2.3285077502868, lo_name ='Havre-Caumartin' WHERE lo_code='RATP:1852'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8913165639098, lo_geoloc_long =2.40319741378238, lo_name ='Hoche' WHERE lo_code='RATP:1853'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8567695272423, lo_geoloc_long =2.35149453979435, lo_name ='Hôtel de Ville' WHERE lo_code='RATP:1855'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8644728974464, lo_geoloc_long =2.2937999591139, lo_name ='Iéna' WHERE lo_code='RATP:1858'");

		return $ret;
    }

    public function down(){

    }
}