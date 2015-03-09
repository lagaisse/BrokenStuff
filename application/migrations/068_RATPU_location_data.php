<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_RATPU_Location_data extends MY_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9226869546748, lo_geoloc_long =2.40664217821568, lo_name ='DANTON' WHERE lo_code='RATP:142801'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8944859588706, lo_geoloc_long =2.39769717384562, lo_name ='DELPHINE SEYRIG' WHERE lo_code='RATP:446312'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8343862270764, lo_geoloc_long =2.28383227976527, lo_name ='DESNOUETTES' WHERE lo_code='RATP:136235'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8259070128131, lo_geoloc_long =2.31341317966581, lo_name ='DIDOT' WHERE lo_code='RATP:136240'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9181194385692, lo_geoloc_long =2.41723145097352, lo_name ='DRANCY-AVENIR' WHERE lo_code='RATP:142798'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.917787011844, lo_geoloc_long =2.41709457576743, lo_name ='DRANCY-AVENIR' WHERE lo_code='RATP:142794'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8973415754459, lo_geoloc_long =2.39319552116119, lo_name ='ELLA FITZGERALD - GRANDS MOULINS DE PANTIN' WHERE lo_code='RATP:453852'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9132036843636, lo_geoloc_long =2.43512660474404, lo_name ='ESCADRILLE NORMANDIE-NIEMEN' WHERE lo_code='RATP:433651'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8968433724045, lo_geoloc_long =2.24020423299722, lo_name ='FAUBOURG DE L\'ARCHE' WHERE lo_code='RATP:445426'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9333168819557, lo_geoloc_long =2.30717786681876, lo_name ='GARE DE GENNEVILLIERS' WHERE lo_code='RATP:444984'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9359715234943, lo_geoloc_long =2.34530967666892, lo_name ='GARE DE ST-DENIS RER' WHERE lo_code='RATP:433655'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9149555096477, lo_geoloc_long =2.43031659953867, lo_name ='GASTON ROULAUD' WHERE lo_code='RATP:142796'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9146950249276, lo_geoloc_long =2.43013887159837, lo_name ='GASTON ROULAUD' WHERE lo_code='RATP:142792'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8298342391211, lo_geoloc_long =2.29569395650457, lo_name ='GEORGES BRASSENS' WHERE lo_code='RATP:136237'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8349064280108, lo_geoloc_long =2.27259304891558, lo_name ='HENRI FARMAN' WHERE lo_code='RATP:465170'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9156510461004, lo_geoloc_long =2.42566809745386, lo_name ='HOPITAL AVICENNE' WHERE lo_code='RATP:142793'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9158666428332, lo_geoloc_long =2.42579118664877, lo_name ='HOPITAL AVICENNE' WHERE lo_code='RATP:142797'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9339407100428, lo_geoloc_long =2.3702031683557, lo_name ='HOPITAL DELAFONTAINE' WHERE lo_code='RATP:142807'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8793811765532, lo_geoloc_long =2.40109289782322, lo_name ='HOPITAL ROBERT DEBRE' WHERE lo_code='RATP:446309'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9065596142388, lo_geoloc_long =2.4434644166626, lo_name ='HOTEL DE VILLE DE BOBIGNY' WHERE lo_code='RATP:433650'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9272730173584, lo_geoloc_long =2.39285960667936, lo_name ='HOTEL DE VILLE DE LA COURNEUVE' WHERE lo_code='RATP:142803'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8293373341873, lo_geoloc_long =2.26273740578347, lo_name ='ISSY - VAL DE SEINE' WHERE lo_code='RATP:465169'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9107503528726, lo_geoloc_long =2.23419952059866, lo_name ='JACQUELINE AURIOL' WHERE lo_code='RATP:445423'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8238750489213, lo_geoloc_long =2.25917222491321, lo_name ='JACQUES-HENRI LARTIGUE' WHERE lo_code='RATP:445433'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8247081187782, lo_geoloc_long =2.31881078177456, lo_name ='JEAN MOULIN' WHERE lo_code='RATP:136241'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9077721466046, lo_geoloc_long =2.45385567981373, lo_name ='JEAN ROSTAND' WHERE lo_code='RATP:142786'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9207254126076, lo_geoloc_long =2.41062836351795, lo_name ='LA COURNEUVE - 8 MAI 1945' WHERE lo_code='RATP:433652'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.930103095549, lo_geoloc_long =2.38426298216103, lo_name ='LA COURNEUVE - SIX ROUTES' WHERE lo_code='RATP:433653'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8918972901127, lo_geoloc_long =2.23641771047807, lo_name ='LA DEFENSE' WHERE lo_code='RATP:465165'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9096743362744, lo_geoloc_long =2.43745817936778, lo_name ='LA FERME' WHERE lo_code='RATP:142790'");

		return $ret;
    }

    public function down(){

    }
}