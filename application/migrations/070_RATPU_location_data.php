<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8319604054521, lo_geoloc_long =2.39829140735388, lo_name ='PORTE DE CHARENTON' WHERE lo_code='RATP:446350'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8198172631532, lo_geoloc_long =2.36391073971091, lo_name ='PORTE DE CHOISY' WHERE lo_code='RATP:136248'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8984987868191, lo_geoloc_long =2.35781721285278, lo_name ='PORTE DE LA CHAPELLE' WHERE lo_code='RATP:446319'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8980008488859, lo_geoloc_long =2.38586957854023, lo_name ='PORTE DE LA VILLETTE - CITE DES SCIENCES ET DE L\'INDUSTRIE' WHERE lo_code='RATP:446314'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8531819873301, lo_geoloc_long =2.41066219297729, lo_name ='PORTE DE MONTREUIL' WHERE lo_code='RATP:446303'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8888205286535, lo_geoloc_long =2.39572123839136, lo_name ='PORTE DE PANTIN - PARC DE LA VILLETTE' WHERE lo_code='RATP:446311'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8768704925935, lo_geoloc_long =2.40686698887072, lo_name ='PORTE DES LILAS' WHERE lo_code='RATP:446323'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8274602446116, lo_geoloc_long =2.30632037796183, lo_name ='PORTE DE VANVES' WHERE lo_code='RATP:136239'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8321677996835, lo_geoloc_long =2.2873128615217, lo_name ='PORTE DE VERSAILLES' WHERE lo_code='RATP:465172'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8327388525271, lo_geoloc_long =2.2881291423162, lo_name ='PORTE DE VERSAILLES - PARC DES EXPOSITIONS' WHERE lo_code='RATP:446285'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.84692733686, lo_geoloc_long =2.40961840670738, lo_name ='PORTE DE VINCENNES' WHERE lo_code='RATP:446354'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.847264376325, lo_geoloc_long =2.4096052592298, lo_name ='PORTE DE VINCENNES' WHERE lo_code='RATP:446302'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8317740310433, lo_geoloc_long =2.28101695641237, lo_name ='PORTE D\'ISSY' WHERE lo_code='RATP:465171'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8190946629611, lo_geoloc_long =2.35948022920578, lo_name ='PORTE D\'ITALIE' WHERE lo_code='RATP:136247'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8217840195029, lo_geoloc_long =2.37010473888322, lo_name ='PORTE D\'IVRY' WHERE lo_code='RATP:136249'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8356137618706, lo_geoloc_long =2.40668229651099, lo_name ='PORTE DOREE' WHERE lo_code='RATP:446351'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8228666213637, lo_geoloc_long =2.32686248925964, lo_name ='PORTE D\'ORLEANS' WHERE lo_code='RATP:136242'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8209294496501, lo_geoloc_long =2.35087222190799, lo_name ='POTERNE DES PEUPLIERS' WHERE lo_code='RATP:136246'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.883158897771, lo_geoloc_long =2.23313695315614, lo_name ='PUTEAUX' WHERE lo_code='RATP:23870'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8974258843192, lo_geoloc_long =2.37249037707827, lo_name ='ROSA PARKS' WHERE lo_code='RATP:446316'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8674280733386, lo_geoloc_long =2.40895224652756, lo_name ='SEVERINE' WHERE lo_code='RATP:446306'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8196267078302, lo_geoloc_long =2.34577478594422, lo_name ='STADE CHARLETY - PORTE DE GENTILLY' WHERE lo_code='RATP:446286'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9245862357246, lo_geoloc_long =2.40120998634057, lo_name ='STADE GEO ANDRE' WHERE lo_code='RATP:142802'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8679505323939, lo_geoloc_long =2.22139713654109, lo_name ='SURESNES LONGCHAMP' WHERE lo_code='RATP:465166'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8336141577488, lo_geoloc_long =2.27627726552119, lo_name ='SUZANNE LENGLEN' WHERE lo_code='RATP:302756'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9372382404843, lo_geoloc_long =2.35017300102966, lo_name ='THEATRE GERARD PHILIPE' WHERE lo_code='RATP:142811'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9331175130385, lo_geoloc_long =2.30119674337625, lo_name ='TIMBAUD' WHERE lo_code='RATP:444985'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9137080056912, lo_geoloc_long =2.23014400439772, lo_name ='VICTOR BASCH' WHERE lo_code='RATP:445422'");

		return $ret;
    }

    public function down(){

    }
}