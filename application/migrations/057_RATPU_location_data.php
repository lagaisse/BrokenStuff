<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8844176451841, lo_geoloc_long =2.33871281165883, lo_name ='Abbesses' WHERE lo_code='RATP:1975'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.828398514348, lo_geoloc_long =2.32674567371924, lo_name ='Alésia' WHERE lo_code='RATP:1981'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8561744489676, lo_geoloc_long =2.3949898158233, lo_name ='Alexandre-Dumas' WHERE lo_code='RATP:1978'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8646460306735, lo_geoloc_long =2.30088336611718, lo_name ='Alma-Marceau' WHERE lo_code='RATP:1980'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8924723754181, lo_geoloc_long =2.285373878396, lo_name ='Anatole-France' WHERE lo_code='RATP:1982'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7547197227554, lo_geoloc_long =2.30131372490699, lo_name ='Antony' WHERE lo_code='RATP:11037'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8831322902739, lo_geoloc_long =2.34397282520569, lo_name ='Anvers' WHERE lo_code='RATP:1984'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.875533092935, lo_geoloc_long =2.2893216639617, lo_name ='Argentine' WHERE lo_code='RATP:1986'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8652929436681, lo_geoloc_long =2.35637778086357, lo_name ='Arts-et-Métiers' WHERE lo_code='RATP:1988'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9301634125573, lo_geoloc_long =2.28407447167184, lo_name ='Asnieres-Gennevilliers Les Courtilles' WHERE lo_code='RATP:225437'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8608996856827, lo_geoloc_long =2.32063223779825, lo_name ='Assemblée Nationale' WHERE lo_code='RATP:1989'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9038299162483, lo_geoloc_long =2.3920219501423, lo_name ='Aubervilliers Pantin (4 Chemins)' WHERE lo_code='RATP:1992'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8469642745973, lo_geoloc_long =2.29493807524416, lo_name ='Avenue Emile-Zola' WHERE lo_code='RATP:1994'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8509782113622, lo_geoloc_long =2.39798013009568, lo_name ='Avron' WHERE lo_code='RATP:1995'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8362754634973, lo_geoloc_long =2.27821832700082, lo_name ='Balard' WHERE lo_code='RATP:1997'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8836207315381, lo_geoloc_long =2.34973719426844, lo_name ='Barbès-Rochechouart' WHERE lo_code='RATP:1999'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9366033097107, lo_geoloc_long =2.35941471750625, lo_name ='Basilique de Saint-Denis' WHERE lo_code='RATP:50622'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8528417309667, lo_geoloc_long =2.36918060506559, lo_name ='Bastille' WHERE lo_code='RATP:2000'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8418961424237, lo_geoloc_long =2.40120562705964, lo_name ='Bel-Air' WHERE lo_code='RATP:2003'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8720416041714, lo_geoloc_long =2.37680560769084, lo_name ='Belleville' WHERE lo_code='RATP:2004'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8453342425325, lo_geoloc_long =2.42923849792977, lo_name ='Bérault' WHERE lo_code='RATP:1938'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8404280893475, lo_geoloc_long =2.37958296880394, lo_name ='Bercy' WHERE lo_code='RATP:2005'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8296059726948, lo_geoloc_long =2.3760926116913, lo_name ='Bibliotheque-Francois Mitterrand' WHERE lo_code='RATP:51020'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8319437593265, lo_geoloc_long =2.23810999708736, lo_name ='Billancourt' WHERE lo_code='RATP:2006'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8543331586284, lo_geoloc_long =2.28878285580103, lo_name ='Bir-Hakeim (Grenelle)' WHERE lo_code='RATP:2007'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8836536085134, lo_geoloc_long =2.33166752315741, lo_name ='Blanche' WHERE lo_code='RATP:2009'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9069699442981, lo_geoloc_long =2.44962071744096, lo_name ='Bobigny-Pablo-Picasso' WHERE lo_code='RATP:2010'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8952689905167, lo_geoloc_long =2.42480187771966, lo_name ='Bobigny-Pantin (Raymond Queneau)' WHERE lo_code='RATP:2011'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8670270457182, lo_geoloc_long =2.29047384540453, lo_name ='Boissière' WHERE lo_code='RATP:2012'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8805834299155, lo_geoloc_long =2.37397783298056, lo_name ='Bolivar' WHERE lo_code='RATP:2014'");

		return $ret;
    }

    public function down(){

    }
}