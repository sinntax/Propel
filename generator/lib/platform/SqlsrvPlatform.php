<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

require_once dirname(__FILE__) . '/MssqlPlatform.php';

/**
 * MS SQL Server using pdo_sqlsrv implementation.
 *
 * @author     Benjamin Runnels
 * @version    $Revision$
 * @package    propel.generator.platform
 */
class SqlsrvPlatform extends MssqlPlatform
{
	/**
	* Initializes db specific domain mapping.
	*/
	protected function initialize()
	{
		parent::initialize();
		$this->setSchemaDomainMapping(new Domain(PropelTypes::DATE, "DATETIME2"));
		$this->setSchemaDomainMapping(new Domain(PropelTypes::BU_DATE, "DATETIME2"));
		$this->setSchemaDomainMapping(new Domain(PropelTypes::TIME, "DATETIME2"));
		$this->setSchemaDomainMapping(new Domain(PropelTypes::TIMESTAMP, "DATETIME2"));
		$this->setSchemaDomainMapping(new Domain(PropelTypes::BU_TIMESTAMP, "DATETIME2"));
	}
	
	/**
	 * @see        Platform#getMaxColumnNameLength()
	 */
	public function getMaxColumnNameLength()
	{
		return 128;
	}
}
