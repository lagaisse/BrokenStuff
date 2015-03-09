<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2006 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * MY_Migration Class
 *
 * All migrations should implement this, forces up() and down() and gives
 * access to the CI super-global.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		Reactor Engineers
 * @link
 */
class MY_Migration extends CI_Migration {


	public function __construct($config = array())
	{
		// Only run this constructor on main library load
		if (get_parent_class($this) !== 'CI_Migration')
		{
			return;
		}

		foreach ($config as $key => $val)
		{
			$this->{'_' . $key} = $val;
		}

		log_message('debug', 'Migrations class initialized');

		// Are they trying to use migrations while it is disabled?
		if ($this->_migration_enabled !== TRUE)
		{
			show_error('Migrations has been loaded but is disabled or set up incorrectly. IN CHILD');
		}

		// If not set, set it
		$this->_migration_path == '' AND $this->_migration_path = APPPATH . 'migrations/';

		// Add trailing slash if not set
		$this->_migration_path = rtrim($this->_migration_path, '/').'/';

		// Load migration language
		$this->lang->load('migration');

		// They'll probably be using dbforge
		$this->load->dbforge();

		// If the migrations table is missing, make it
		if ( ! $this->db->table_exists('migrations'))
		{
			$this->dbforge->add_field(array(
				'version' => array('type' => 'INT', 'constraint' => 3),
			));

			$this->dbforge->create_table('migrations', TRUE);

			$this->db->insert('migrations', array('version' => 0));
		}
		log_message('debug', 'Migrations class initialized IN CHILD');
	}
	// --------------------------------------------------------------------

	/**
	 * Set's the schema to the latest migration
	 *
	 * @return	mixed	true if already latest, false if failed, int if upgraded
	 */
	public function find_migrations()
	{
		return parent::find_migrations();
	}


	// --------------------------------------------------------------------

	/**
	 * Retrieves current schema version
	 *
	 * @return	int	Current Migration
	 */
	function get_version()
	{
		return parent::_get_version();
	}
	// --------------------------------------------------------------------

	/**
	 * Retrieves target version
	 *
	 * @return	int	Target version
	 */
	function get_target_version()
	{
		return $this->_migration_version;
	}
}

/* End of file MY_Migration.php */
/* Location: ./application/libraries/MY_Migration.php */