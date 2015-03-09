<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8332522883745, lo_geoloc_long =2.33622001540028, lo_name ='Saint-Jacques' WHERE lo_code='RATP:1688'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8755778691635, lo_geoloc_long =2.326185658552, lo_name ='Saint-Lazare' WHERE lo_code='RATP:1689'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8462977572576, lo_geoloc_long =2.41867310093048, lo_name ='Saint-Mandé' WHERE lo_code='RATP:1690'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8395141857768, lo_geoloc_long =2.36140877914038, lo_name ='Saint-Marcel' WHERE lo_code='RATP:1691'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8532875817267, lo_geoloc_long =2.34346845196892, lo_name ='Saint-Michel' WHERE lo_code='RATP:1694'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8551436006388, lo_geoloc_long =2.36065335403361, lo_name ='Saint-Paul (Le Marais)' WHERE lo_code='RATP:1695'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8721798206485, lo_geoloc_long =2.30982009380661, lo_name ='Saint-Philippe du Roule' WHERE lo_code='RATP:1696'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8465803886283, lo_geoloc_long =2.32693263560201, lo_name ='Saint-Placide' WHERE lo_code='RATP:1697'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8612805878047, lo_geoloc_long =2.36702409525746, lo_name ='Saint-Sébastien-Froissart' WHERE lo_code='RATP:1699'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8508047851976, lo_geoloc_long =2.33086756439724, lo_name ='Saint-Sulpice' WHERE lo_code='RATP:1698'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8467524550776, lo_geoloc_long =2.30782041849586, lo_name ='Ségur' WHERE lo_code='RATP:1631'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8674133308826, lo_geoloc_long =2.3466136387446, lo_name ='Sentier' WHERE lo_code='RATP:1702'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8512043552606, lo_geoloc_long =2.32587286292213, lo_name ='Sèvres-Babylone' WHERE lo_code='RATP:1632'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8451307700065, lo_geoloc_long =2.31018390371145, lo_name ='Sèvres-Lecourbe' WHERE lo_code='RATP:1633'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8946326891969, lo_geoloc_long =2.34709106533484, lo_name ='Simplon' WHERE lo_code='RATP:1621'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8585512442859, lo_geoloc_long =2.32268062216292, lo_name ='Solférino' WHERE lo_code='RATP:1622'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.88430478953, lo_geoloc_long =2.3670850145355, lo_name ='Stalingrad' WHERE lo_code='RATP:1627'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8691997057755, lo_geoloc_long =2.35409710573389, lo_name ='Strasbourg-Saint-Denis' WHERE lo_code='RATP:1628'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8510338403896, lo_geoloc_long =2.36186696356924, lo_name ='Sully-Morland' WHERE lo_code='RATP:1630'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8753936353787, lo_geoloc_long =2.3985900637686, lo_name ='Telegraphe' WHERE lo_code='RATP:55329'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8663687823143, lo_geoloc_long =2.36108072227889, lo_name ='Temple' WHERE lo_code='RATP:1634'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8780661989513, lo_geoloc_long =2.29803071264819, lo_name ='Ternes' WHERE lo_code='RATP:1635'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8265068988465, lo_geoloc_long =2.35724192740466, lo_name ='Tolbiac' WHERE lo_code='RATP:1636'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.87650879316, lo_geoloc_long =2.33305807671909, lo_name ='Trinité-d\'Estienne d\'Orves' WHERE lo_code='RATP:1638'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8629708358403, lo_geoloc_long =2.2870198439694, lo_name ='Trocadéro' WHERE lo_code='RATP:1639'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8644970966975, lo_geoloc_long =2.33031418026416, lo_name ='Tuileries' WHERE lo_code='RATP:1640'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.848871662506, lo_geoloc_long =2.32193434751113, lo_name ='Vaneau' WHERE lo_code='RATP:1643'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8575166012889, lo_geoloc_long =2.31553023354222, lo_name ='Varenne' WHERE lo_code='RATP:1644'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.839568032804, lo_geoloc_long =2.30098263992519, lo_name ='Vaugirard (Adolphe Chérioux)' WHERE lo_code='RATP:1645'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8420036541946, lo_geoloc_long =2.32900321886739, lo_name ='Vavin' WHERE lo_code='RATP:1646'");

		return $ret;
    }

    public function down(){

    }
}