<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data_069 extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9349737947418, lo_geoloc_long =2.32677179093878, lo_name ='LA NOUE' WHERE lo_code='RATP:444981'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9316391521181, lo_geoloc_long =2.28849908383256, lo_name ='LE LUTH' WHERE lo_code='RATP:444987'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8567332361984, lo_geoloc_long =2.22035301247059, lo_name ='LES COTEAUX' WHERE lo_code='RATP:57293'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9300102647517, lo_geoloc_long =2.28324944464076, lo_name ='LES COURTILLES' WHERE lo_code='RATP:444988'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9024417344135, lo_geoloc_long =2.23945079487089, lo_name ='LES FAUVELLES' WHERE lo_code='RATP:446344'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8499933641322, lo_geoloc_long =2.22109678526621, lo_name ='LES MILONS' WHERE lo_code='RATP:57292'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8215148922789, lo_geoloc_long =2.25135631324916, lo_name ='LES MOULINEAUX' WHERE lo_code='RATP:23879'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9332951014774, lo_geoloc_long =2.29467656895352, lo_name ='LE VILLAGE' WHERE lo_code='RATP:444986'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9068738690984, lo_geoloc_long =2.43863886272332, lo_name ='LIBERATION' WHERE lo_code='RATP:142789'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9357830430896, lo_geoloc_long =2.33986691734332, lo_name ='L\'ILE-SAINT-DENIS' WHERE lo_code='RATP:444979'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9355943066754, lo_geoloc_long =2.33411727792386, lo_name ='MAIRIE DE VILLENEUVE-LA GARENNE' WHERE lo_code='RATP:444980'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9385316221225, lo_geoloc_long =2.35567090935926, lo_name ='MARCHE DE SAINT-DENIS' WHERE lo_code='RATP:142810'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8588222270759, lo_geoloc_long =2.40964862479711, lo_name ='MARIE DE MIRIBEL' WHERE lo_code='RATP:446304'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8242534045346, lo_geoloc_long =2.37736809751795, lo_name ='MARYSE BASTIE' WHERE lo_code='RATP:446347'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9190919350681, lo_geoloc_long =2.41434200630114, lo_name ='MAURICE LACHATRE' WHERE lo_code='RATP:142799'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9188134710873, lo_geoloc_long =2.41413704491281, lo_name ='MAURICE LACHATRE' WHERE lo_code='RATP:142795'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8192277635677, lo_geoloc_long =2.23998869052697, lo_name ='MEUDON SUR-SEINE' WHERE lo_code='RATP:465168'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.840524052395, lo_geoloc_long =2.40907164766505, lo_name ='MONTEMPOIVRE' WHERE lo_code='RATP:446352'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8214379781018, lo_geoloc_long =2.33362737917325, lo_name ='MONTSOURIS' WHERE lo_code='RATP:136243'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.828683337868, lo_geoloc_long =2.22526235345025, lo_name ='MUSEE DE SEVRES' WHERE lo_code='RATP:23876'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8953328034556, lo_geoloc_long =2.45951834006075, lo_name ='NOISY-LE-SEC RER' WHERE lo_code='RATP:142782'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9339204416829, lo_geoloc_long =2.31356806119225, lo_name ='PARC DES CHANTERAINES' WHERE lo_code='RATP:444983'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8429702843216, lo_geoloc_long =2.22177972032894, lo_name ='PARC DE ST-CLOUD' WHERE lo_code='RATP:465167'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.917639128237, lo_geoloc_long =2.22451777695119, lo_name ='PARC PIERRE LAGRAVERE' WHERE lo_code='RATP:445421'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9001081024747, lo_geoloc_long =2.46510491253035, lo_name ='PETIT NOISY' WHERE lo_code='RATP:142783'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9233479903808, lo_geoloc_long =2.2174887713866, lo_name ='PONT DE BEZONS' WHERE lo_code='RATP:446346'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9052704317164, lo_geoloc_long =2.46991643608493, lo_name ='PONT DE BONDY' WHERE lo_code='RATP:142784'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8379613092664, lo_geoloc_long =2.2709622239273, lo_name ='PONT GARIGLIANO - HOPITAL EUROPEEN GEORGE POMPIDOU' WHERE lo_code='RATP:446284'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8986536474348, lo_geoloc_long =2.36885169363032, lo_name ='PORTE D\'AUBERVILLIERS' WHERE lo_code='RATP:446317'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8635591194467, lo_geoloc_long =2.4087698120476, lo_name ='PORTE DE BAGNOLET' WHERE lo_code='RATP:446305'");

		return $ret;
    }

    public function down(){

    }
}