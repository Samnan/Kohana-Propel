<?php

/**
 * Propel Database Map - Extends the original Propel DatabaseMap class
 * for compatibility with Kohana 3.x
 *
 * @package    Kohana-Propel
 * @category   Modules
 * @author     Samnan ur Rehman
 * @copyright  (c) 2012 Samnan ur Rehman
 * @license    BSD (http://kohanaframework.org/license)
 * @version    0.1
 */

class Propel_DatabaseMap extends DatabaseMap {

	public function getTableByPhpName($phpName) {
		// since autoloading is properly setup, this function needs to do nothing
		return true;
	}

}
