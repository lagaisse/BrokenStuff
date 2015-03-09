<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8313196995984, lo_geoloc_long =2.32942693483694, lo_name ='Mouton-Duvernet' WHERE lo_code='RATP:1753'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8484657505532, lo_geoloc_long =2.39590574456544, lo_name ='Nation' WHERE lo_code='RATP:1758'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8327104551183, lo_geoloc_long =2.36204546183122, lo_name ='Nationale' WHERE lo_code='RATP:1761'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8766256956919, lo_geoloc_long =2.33845371043763, lo_name ='Notre-Dame de Lorette' WHERE lo_code='RATP:1767'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8449178498434, lo_geoloc_long =2.32885296806704, lo_name ='Notre-Dame des Champs' WHERE lo_code='RATP:1768'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8645156235565, lo_geoloc_long =2.36867423637139, lo_name ='Oberkampf' WHERE lo_code='RATP:1769'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8522489363668, lo_geoloc_long =2.33855755868422, lo_name ='Odéon' WHERE lo_code='RATP:1770'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8268582996999, lo_geoloc_long =2.36729701204889, lo_name ='Olympiades' WHERE lo_code='RATP:171507'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8707029411588, lo_geoloc_long =2.33180515640395, lo_name ='Opéra' WHERE lo_code='RATP:1771'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.728513469933, lo_geoloc_long =2.35872141880901, lo_name ='Orly-Ouest' WHERE lo_code='RATP:11038'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.727837315206, lo_geoloc_long =2.36795987285204, lo_name ='Orly-Sud' WHERE lo_code='RATP:11039'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8869750227319, lo_geoloc_long =2.38602958795485, lo_name ='Ourcq' WHERE lo_code='RATP:1773'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8628468213553, lo_geoloc_long =2.33581661194832, lo_name ='Palais-Royal (Musée du Louvre)' WHERE lo_code='RATP:1774'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8651606067898, lo_geoloc_long =2.37584679468414, lo_name ='Parmentier' WHERE lo_code='RATP:1779'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8576333212361, lo_geoloc_long =2.28586501138629, lo_name ='Passy' WHERE lo_code='RATP:1780'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8429383503106, lo_geoloc_long =2.31265644504969, lo_name ='Pasteur' WHERE lo_code='RATP:1781'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.868519874537, lo_geoloc_long =2.40135199013901, lo_name ='Pelleport' WHERE lo_code='RATP:1782'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8845503317922, lo_geoloc_long =2.29751704870328, lo_name ='Péreire' WHERE lo_code='RATP:1740'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8626131584417, lo_geoloc_long =2.38672181193918, lo_name ='Père-Lachaise' WHERE lo_code='RATP:1741'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8338169001883, lo_geoloc_long =2.31766395823272, lo_name ='Pernéty' WHERE lo_code='RATP:1783'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8583654720925, lo_geoloc_long =2.38938739145325, lo_name ='Philippe Auguste' WHERE lo_code='RATP:1784'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8452604478542, lo_geoloc_long =2.40125516453104, lo_name ='Picpus' WHERE lo_code='RATP:1785'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8156836605119, lo_geoloc_long =2.3772866229916, lo_name ='Pierre et Marie Curie' WHERE lo_code='RATP:1786'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8824943850352, lo_geoloc_long =2.3376226051814, lo_name ='Pigalle' WHERE lo_code='RATP:1787'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8836233671973, lo_geoloc_long =2.32730682210246, lo_name ='Place de Clichy' WHERE lo_code='RATP:1790'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8768191471423, lo_geoloc_long =2.39347313514395, lo_name ='Place des Fêtes' WHERE lo_code='RATP:1792'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8314061535553, lo_geoloc_long =2.35572137338498, lo_name ='Place d\'Italie' WHERE lo_code='RATP:1789'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8431960998294, lo_geoloc_long =2.35217845099659, lo_name ='Place Monge (Jardin des Plantes)' WHERE lo_code='RATP:1788'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8317625860832, lo_geoloc_long =2.31406734480211, lo_name ='Plaisance' WHERE lo_code='RATP:1705'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7679578710506, lo_geoloc_long =2.46598982922341, lo_name ='Pointe du Lac' WHERE lo_code='RATP:397629'");

		return $ret;
    }

    public function down(){

    }
}