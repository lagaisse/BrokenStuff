<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8705587205312, lo_geoloc_long =2.34867956971335, lo_name ='Bonne Nouvelle' WHERE lo_code='RATP:2015'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8793377265439, lo_geoloc_long =2.38873399145736, lo_name ='Botzaris' WHERE lo_code='RATP:2016'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8412408953716, lo_geoloc_long =2.28763431751091, lo_name ='Boucicaut' WHERE lo_code='RATP:2017'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8422216612984, lo_geoloc_long =2.23883585019659, lo_name ='Boulogne-Jean-Jaurès' WHERE lo_code='RATP:2018'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8407983651067, lo_geoloc_long =2.22821129036639, lo_name ='Boulogne Pont de Saint-Cloud' WHERE lo_code='RATP:2019'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8687976838596, lo_geoloc_long =2.34123268333609, lo_name ='Bourse' WHERE lo_code='RATP:1930'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8565162145681, lo_geoloc_long =2.3709371333348, lo_name ='Bréguet-Sabin' WHERE lo_code='RATP:1933'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8903794211931, lo_geoloc_long =2.32002765158099, lo_name ='Brochant' WHERE lo_code='RATP:1931'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8777769835483, lo_geoloc_long =2.38112931956877, lo_name ='Buttes-Chaumont' WHERE lo_code='RATP:1936'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8517360615634, lo_geoloc_long =2.40102482535231, lo_name ='Buzenval' WHERE lo_code='RATP:1937'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.875475187116, lo_geoloc_long =2.34305895381275, lo_name ='Cadet' WHERE lo_code='RATP:1939'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8474563362776, lo_geoloc_long =2.30180780419231, lo_name ='Cambronne' WHERE lo_code='RATP:1940'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8357759721732, lo_geoloc_long =2.35815314107711, lo_name ='Campo-Formio' WHERE lo_code='RATP:1941'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8463912485782, lo_geoloc_long =2.35147807315592, lo_name ='Cardinal-Lemoine' WHERE lo_code='RATP:1942'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9194552102366, lo_geoloc_long =2.34320024908898, lo_name ='Carrefour-Pleyel' WHERE lo_code='RATP:228266'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8405358795008, lo_geoloc_long =2.35142881208972, lo_name ='Censier-Daubenton' WHERE lo_code='RATP:1944'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8674114214171, lo_geoloc_long =2.31395945009909, lo_name ='Champs-Elysées-Clémenceau' WHERE lo_code='RATP:1949'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8447174018404, lo_geoloc_long =2.26654168725371, lo_name ='Chardon-Lagache' WHERE lo_code='RATP:1950'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8213638104296, lo_geoloc_long =2.41407434683562, lo_name ='Charenton-Ecoles' WHERE lo_code='RATP:1951'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8744076036607, lo_geoloc_long =2.29576268465124, lo_name ='Charles de Gaulle-Etoile' WHERE lo_code='RATP:1953'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8463362741362, lo_geoloc_long =2.28633238561987, lo_name ='Charles Michels' WHERE lo_code='RATP:1952'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8547662368488, lo_geoloc_long =2.38527064781972, lo_name ='Charonne' WHERE lo_code='RATP:1955'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8725890109106, lo_geoloc_long =2.35547036877069, lo_name ='Château d\'Eau' WHERE lo_code='RATP:1961'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8445363116503, lo_geoloc_long =2.43950970545674, lo_name ='Château de Vincennes' WHERE lo_code='RATP:1962'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8783126784077, lo_geoloc_long =2.36229890860251, lo_name ='Château Landon' WHERE lo_code='RATP:1963'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8871760670966, lo_geoloc_long =2.34982663344309, lo_name ='Château Rouge' WHERE lo_code='RATP:1960'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8585195224421, lo_geoloc_long =2.34711940104793, lo_name ='Châtelet' WHERE lo_code='RATP:1964'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8103147675511, lo_geoloc_long =2.30124802198432, lo_name ='Châtillon Montrouge' WHERE lo_code='RATP:1968'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8728970365659, lo_geoloc_long =2.33350116136944, lo_name ='Chaussée d\'Antin (La Fayette)' WHERE lo_code='RATP:1957'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8575640614859, lo_geoloc_long =2.36793452563335, lo_name ='Chemin Vert' WHERE lo_code='RATP:1958'");

		return $ret;
    }

    public function down(){

    }
}