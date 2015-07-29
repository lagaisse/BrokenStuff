<?php

class Migration_Brokenstuff_reports_signature extends CI_Migration {
    public function up(){

/*
ALTER TABLE `report` ADD `r_signature` CHAR(40);
	*/

	$fields = array(
	    'r_signature' => array(
	        'type' => 'CHAR',
	        'constraint' => 40,
	        'null' => TRUE
	    )
	);

	$this->dbforge->add_column('report', $fields);
	log_message('debug', 'added column r_signature : ' . $this->db->last_query());

  $this->db->query('update '. $this->db->dbprefix("report") .' set r_signature = SHA1(CONCAT_WS(":", r_name, r_desc, r_status, lo_path))');
	log_message('debug', 'updated column r_signature : ' . $this->db->last_query());
  }

	public function down(){
	    $this->dbforge->drop_column('report','r_signature');
	}
}
