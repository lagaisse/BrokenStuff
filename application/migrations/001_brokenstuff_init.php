<?php

class Migration_Brokenstuff_init extends CI_Migration {
    public function up(){

/*
DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client 
/*!40101 SET character_set_client = utf8 
CREATE TABLE `report` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` text NOT NULL,
  `r_desc` text,
  `r_add_date` datetime NOT NULL,
  `r_end_date` datetime DEFAULT NULL,
  `r_geoloc_lat` float DEFAULT NULL,
  `r_geoloc_long` float DEFAULT NULL,
  `r_picture` varchar(255) DEFAULT NULL,
  `r_status` enum('open','closed') DEFAULT NULL,
  `r_nb_vote` int(11) DEFAULT NULL,
  `lo_path` char(9) DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  KEY `ENDDATE` (`r_end_date`) USING BTREE,
  KEY `ADDDATE` (`r_add_date`) USING BTREE,
  KEY `RELOPATH` (`lo_path`) USING BTREE*/

	$fields = array(
	    'r_id' => array(
	        'type' => 'INT',
	        'constraint' => 11, 
	        'unsigned' => TRUE,
	        'null' => FALSE,
	        'auto_increment' => TRUE
	    ),
	    'r_name' => array(
	        'type' => 'text',
	        'null' => FALSE
	    ),
	    'r_desc' => array(
	        'type' => 'text',
	        'null' => TRUE
	    ),
	    'r_add_date' => array(
	        'type' => 'datetime',
	        'null' => FALSE
	    ),
	    'r_end_date' => array(
	        'type' => 'datetime',
	        'null' => TRUE
	    ),
	    'r_geoloc_lat' => array(
	        'type' => 'float',
	        'null' => TRUE
	    ),
	    'r_geoloc_long' => array(
	        'type' => 'float',
	        'null' => TRUE
	    ),
	    'r_picture' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '255', 
	        'null' => TRUE,
	        'default' => 'NULL'
	    ),
	    'r_status' => array(
	        'type' => 'enum("open","closed")',
	        'null' => TRUE,
	        'default' => 'open'
	    ),
	    'r_nb_vote' => array(
	        'type' => 'INT',
	        'constraint' => '11', 
	        'null' => TRUE,
	        'default' => 0
	    ),
	    'lo_path' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '9', 
	        'null' => TRUE,
	        'default' => 'NULL'
	    )
	);

$this->dbforge->add_field($fields);

		$this->dbforge->add_key('r_id', TRUE);
		$this->dbforge->add_key('r_end_date');
		$this->dbforge->add_key('r_add_date');
		$this->dbforge->add_key('lo_path');

		$this->dbforge->create_table('report', TRUE);
		log_message('debug', 'create report table : ' . $this->db->last_query());

/*

  `lo_id` int(11) NOT NULL AUTO_INCREMENT,
  `lo_code` varchar(15) NOT NULL,
  `lo_name` varchar(255) NOT NULL,
  `lo_geoloc_lat` float DEFAULT NULL,
  `lo_geoloc_long` float DEFAULT NULL,
  `lo_path` char(9) DEFAULT NULL,
  PRIMARY KEY (`lo_id`),
  UNIQUE KEY `LOPATH` (`lo_path`) USING BTREE,
  KEY `LOCODE` (`lo_code`) USING BTREE,
  KEY `LOPLACE` (`lo_code`,`lo_path`) USING BTREE*/

	$fields = array(
	    'lo_id' => array(
	        'type' => 'INT',
	        'constraint' => 11, 
	        'unsigned' => TRUE,
	        'null' => FALSE,
	        'auto_increment' => TRUE
	    ),
	    'lo_code' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '15', 
	        'null' => FALSE,
	    ),
	    'lo_name' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '255', 
	        'null' => FALSE,
	    ),
	    'lo_geoloc_lat' => array(
	        'type' => 'FLOAT',
	        'null' => TRUE
	    ),
	    'lo_geoloc_long' => array(
	        'type' => 'FLOAT',
	        'null' => TRUE
	    ),
	    'lo_path' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '9', 
	        'null' => TRUE,
	        'default' => 'NULL'
	    )
	);

		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('lo_id', TRUE);
		$this->dbforge->add_key('lo_path');
		$this->dbforge->add_key('lo_code');
		$this->dbforge->add_key(array('lo_code','lo_path'));

		$this->dbforge->create_table('location', TRUE);
		log_message('debug', 'create location table : ' . $this->db->last_query());


	}

	public function down(){
	    $this->dbforge->drop_table('report');
	    $this->dbforge->drop_table('location');
	}
}