<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_SNCFU_Location_data extends CI_Migration {
    public function up(){
        $ret=true;
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.005736642, lo_geoloc_long =1.90188702143 WHERE lo_code='SNCF:87381830'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.94700319, lo_geoloc_long =2.25717871305 WHERE lo_code='SNCF:87381848'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9686551718, lo_geoloc_long =2.19337424669 WHERE lo_code='SNCF:87381863'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9903516533, lo_geoloc_long =2.16198853167 WHERE lo_code='SNCF:87381889'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.997043425, lo_geoloc_long =2.09803681774 WHERE lo_code='SNCF:87381897'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9055805862, lo_geoloc_long =2.26857173893 WHERE lo_code='SNCF:87382002'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8982514361, lo_geoloc_long =2.24797129852 WHERE lo_code='SNCF:87382200'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8383162045, lo_geoloc_long =2.1868735901 WHERE lo_code='SNCF:87382259'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.812136312, lo_geoloc_long =2.18783398094 WHERE lo_code='SNCF:87382333'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8274217325, lo_geoloc_long =2.20055846234 WHERE lo_code='SNCF:87382341'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8542235026, lo_geoloc_long =2.13224046835 WHERE lo_code='SNCF:87382440'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8713498332, lo_geoloc_long =2.09662765703 WHERE lo_code='SNCF:87382465'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0497023367, lo_geoloc_long =2.03445484969 WHERE lo_code='SNCF:87382499'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =49.0485388268, lo_geoloc_long =2.01227395158 WHERE lo_code='SNCF:87382655'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9031868487, lo_geoloc_long =2.07312748284 WHERE lo_code='SNCF:87382804'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7347809541, lo_geoloc_long =2.27314560366 WHERE lo_code='SNCF:87383281'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.875357836, lo_geoloc_long =2.32473327749 WHERE lo_code='SNCF:87384008'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9015475909, lo_geoloc_long =2.21516720292 WHERE lo_code='SNCF:87386318'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9459130297, lo_geoloc_long =2.14464783894 WHERE lo_code='SNCF:87386425'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9395062922, lo_geoloc_long =1.99947999933 WHERE lo_code='SNCF:87386649'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.9719470473, lo_geoloc_long =1.84846949108 WHERE lo_code='SNCF:87386730'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8461610853, lo_geoloc_long =2.27686168157 WHERE lo_code='SNCF:87393066'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8079219482, lo_geoloc_long =2.24094197508 WHERE lo_code='SNCF:87393082'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7436769393, lo_geoloc_long =1.92077150693 WHERE lo_code='SNCF:87393272'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8293825611, lo_geoloc_long =2.26320018157 WHERE lo_code='SNCF:87393306'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.6259584399, lo_geoloc_long =1.77076179071 WHERE lo_code='SNCF:87393348'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.8593481468, lo_geoloc_long =1.87584668455 WHERE lo_code='SNCF:87393363'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7960015891, lo_geoloc_long =1.60224956795 WHERE lo_code='SNCF:87393462'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7591305371, lo_geoloc_long =2.19203757667 WHERE lo_code='SNCF:87393538'");
        $ret=$ret && $this->db->simple_query("UPDATE ".$this->db->dbprefix('location')." SET lo_geoloc_lat  =48.7400090233, lo_geoloc_long =2.23114741428 WHERE lo_code='SNCF:87393561'");

		return $ret;
    }

    public function down(){

    }
}