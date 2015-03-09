<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8616865404563, lo_geoloc_long =2.31435704324728, lo_name ='Invalides' WHERE lo_code='RATP:1857'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8709749040173, lo_geoloc_long =2.36053788394075, lo_name ='Jacques-Bonsergent' WHERE lo_code='RATP:1859'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8523396005309, lo_geoloc_long =2.26790681383725, lo_name ='Jasmin' WHERE lo_code='RATP:1860'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8825437461168, lo_geoloc_long =2.37023181919226, lo_name ='Jaurès' WHERE lo_code='RATP:1861'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8461034637876, lo_geoloc_long =2.27845497841475, lo_name ='Javel-André-Citroen' WHERE lo_code='RATP:1862'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8751674276782, lo_geoloc_long =2.38919309981893, lo_name ='Jourdain' WHERE lo_code='RATP:1864'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8924519921638, lo_geoloc_long =2.34446469630622, lo_name ='Jules Joffrin' WHERE lo_code='RATP:1865'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8458380895278, lo_geoloc_long =2.35469159842714, lo_name ='Jussieu' WHERE lo_code='RATP:1866'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8710948130145, lo_geoloc_long =2.29307915421584, lo_name ='Kléber' WHERE lo_code='RATP:1867'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8839663987791, lo_geoloc_long =2.35849962591676, lo_name ='La Chapelle' WHERE lo_code='RATP:1868'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9209043594324, lo_geoloc_long =2.41045542691904, lo_name ='La Courneuve-8-Mai-1945' WHERE lo_code='RATP:1869'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8919344692345, lo_geoloc_long =2.23788279833084, lo_name ='La Défense (Grande Arche)' WHERE lo_code='RATP:1850'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8873918956469, lo_geoloc_long =2.32603867708385, lo_name ='La Fourche' WHERE lo_code='RATP:1872'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8897560451806, lo_geoloc_long =2.33889013654466, lo_name ='Lamarck-Caulaincourt' WHERE lo_code='RATP:1879'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8491605024288, lo_geoloc_long =2.29794929910712, lo_name ='La Motte-Picquet-Grenelle' WHERE lo_code='RATP:1874'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8579377398982, lo_geoloc_long =2.27411706697758, lo_name ='La Muette' WHERE lo_code='RATP:1876'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8573850541664, lo_geoloc_long =2.30959864479432, lo_name ='La Tour-Maubourg' WHERE lo_code='RATP:54166'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8850422338428, lo_geoloc_long =2.3795955531979, lo_name ='Laumière' WHERE lo_code='RATP:1882'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8511941201646, lo_geoloc_long =2.37594535235887, lo_name ='Ledru-Rollin' WHERE lo_code='RATP:1798'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8103806352167, lo_geoloc_long =2.36161295005801, lo_name ='Le Kremlin-Bicêtre' WHERE lo_code='RATP:1793'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8749360634737, lo_geoloc_long =2.33980253815072, lo_name ='Le Peletier' WHERE lo_code='RATP:1795'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9229162320519, lo_geoloc_long =2.28582751788663, lo_name ='Les Agnettes' WHERE lo_code='RATP:225436'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8366105352574, lo_geoloc_long =2.35164217355525, lo_name ='Les Gobelins' WHERE lo_code='RATP:1800'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.862194721152, lo_geoloc_long =2.34583626729201, lo_name ='Les Halles' WHERE lo_code='RATP:1801'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.880901799077, lo_geoloc_long =2.27253908542214, lo_name ='Les Sablons (Jardin d\'acclimatation)' WHERE lo_code='RATP:1802'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8258380800419, lo_geoloc_long =2.40692557755493, lo_name ='Liberté' WHERE lo_code='RATP:1803'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8795640572124, lo_geoloc_long =2.32651728518985, lo_name ='Liège' WHERE lo_code='RATP:1804'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8810261029957, lo_geoloc_long =2.3655569576092, lo_name ='Louis Blanc' WHERE lo_code='RATP:1806'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8888292427619, lo_geoloc_long =2.28813731087893, lo_name ='Louise Michel' WHERE lo_code='RATP:1807'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8384881095778, lo_geoloc_long =2.28175852328733, lo_name ='Lourmel' WHERE lo_code='RATP:1808'");

		return $ret;
    }

    public function down(){

    }
}