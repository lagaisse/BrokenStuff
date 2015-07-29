<?php

class Migration_Brokenstuff_limits extends CI_Migration {
    public function up(){

/*
	CREATE TABLE `limits` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `uri` varchar(255) NOT NULL,
	  `count` int(10) NOT NULL,
	  `hour_started` int(11) NOT NULL,
	  `api_key` varchar(40) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	
	*/

	$fields = array(
	    'id' => array(
	        'type' => 'INT',
	        'constraint' => 11,
	        'null' => FALSE,
	        'auto_increment' => TRUE
	    ),
	    'uri' => array(
	        'type' => 'VARCHAR',
	        'constraint' => 255,
	        'null' => FALSE
	    ),
	    'count' => array(
	        'type' => 'int',
	        'constraint' => 10,
	        'null' => FALSE
	    ),
	    'hour_started' => array(
	        'type' => 'int',
	        'constraint' => 11,
	        'null' => FALSE
	    ),
	    'api_key' => array(
	        'type' => 'varchar',
	        'constraint' => 40,
	        'null' => FALSE
	    )      
	);

	$this->dbforge->add_field($fields);

	$this->dbforge->add_key('id', TRUE);

	$this->dbforge->create_table('limits', TRUE);
	log_message('debug', 'create limits table : ' . $this->db->last_query());



	}

	public function down(){
	    $this->dbforge->drop_table('limits');
	}
}