<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8344079354527, lo_geoloc_long =2.36716524071823, lo_name ='Chevaleret' WHERE lo_code='RATP:1959'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8551005857888, lo_geoloc_long =2.3467203742446, lo_name ='Cité' WHERE lo_code='RATP:1969'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8510383641319, lo_geoloc_long =2.34522158237992, lo_name ='Cluny-La Sorbonne' WHERE lo_code='RATP:54244'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8779422921331, lo_geoloc_long =2.37014713779616, lo_name ='Colonel Fabien' WHERE lo_code='RATP:1972'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.844811191807, lo_geoloc_long =2.29335345012085, lo_name ='Commerce' WHERE lo_code='RATP:1973'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8661829956315, lo_geoloc_long =2.32329987859148, lo_name ='Concorde' WHERE lo_code='RATP:1885'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8374696207371, lo_geoloc_long =2.29689958279762, lo_name ='Convention' WHERE lo_code='RATP:1887'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8949061258374, lo_geoloc_long =2.38244550268222, lo_name ='Corentin-Cariou' WHERE lo_code='RATP:1888'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8272434444069, lo_geoloc_long =2.27930670368976, lo_name ='Corentin-Celton' WHERE lo_code='RATP:1889'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8296116848646, lo_geoloc_long =2.34943832730731, lo_name ='Corvisart' WHERE lo_code='RATP:1890'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8792362487704, lo_geoloc_long =2.30360515293852, lo_name ='Courcelles' WHERE lo_code='RATP:1892'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8689698757764, lo_geoloc_long =2.379868518699, lo_name ='Couronnes' WHERE lo_code='RATP:1893'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8334843071503, lo_geoloc_long =2.38761298844824, lo_name ='Cour Saint-Emilion' WHERE lo_code='RATP:50055'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7964623870188, lo_geoloc_long =2.44906187102647, lo_name ='Créteil-L\'Echat (Hôpital Henri Mondor)' WHERE lo_code='RATP:1897'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7797484034104, lo_geoloc_long =2.45914426746537, lo_name ='Créteil-Préfecture (Hôtel de Ville)' WHERE lo_code='RATP:1898'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7893506910917, lo_geoloc_long =2.45144739751129, lo_name ='Créteil-Université' WHERE lo_code='RATP:1899'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8906811628606, lo_geoloc_long =2.37681528947191, lo_name ='Crimée' WHERE lo_code='RATP:1894'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8579269412394, lo_geoloc_long =2.43609830308268, lo_name ='Croix-de-Chavaux (Jacques Duclos)' WHERE lo_code='RATP:1896'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8820231366362, lo_geoloc_long =2.39270205235331, lo_name ='Danube' WHERE lo_code='RATP:1900'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8393629125482, lo_geoloc_long =2.39584590805199, lo_name ='Daumesnil (Félix Eboué)' WHERE lo_code='RATP:1901'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8335919035577, lo_geoloc_long =2.33189346001924, lo_name ='Denfert-Rochereau' WHERE lo_code='RATP:1902'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8389122332307, lo_geoloc_long =2.38895257216093, lo_name ='Dugommier' WHERE lo_code='RATP:1906'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8508056365633, lo_geoloc_long =2.29276958714394, lo_name ='Dupleix' WHERE lo_code='RATP:1907'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8467835319339, lo_geoloc_long =2.31672285703746, lo_name ='Duroc' WHERE lo_code='RATP:1908'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8545185491092, lo_geoloc_long =2.30554381620113, lo_name ='Ecole Militaire' WHERE lo_code='RATP:1909'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8151517942859, lo_geoloc_long =2.42075635931134, lo_name ='Ecole Vétérinaire de Maisons-Alfort' WHERE lo_code='RATP:23674'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8403339877984, lo_geoloc_long =2.3261713916465, lo_name ='Edgar-Quinet' WHERE lo_code='RATP:1910'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8471813581933, lo_geoloc_long =2.26890098784783, lo_name ='Eglise d\'Auteuil' WHERE lo_code='RATP:1911'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.893113981741, lo_geoloc_long =2.41328568033304, lo_name ='Eglise de Pantin' WHERE lo_code='RATP:1912'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.887843122138, lo_geoloc_long =2.25044232471862, lo_name ='Esplanade de la Défense' WHERE lo_code='RATP:1913'");

		return $ret;
    }

    public function down(){

    }
}