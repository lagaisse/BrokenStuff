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