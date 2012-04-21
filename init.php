<?php defined('SYSPATH') or die('No direct script access.');

// define autoload function so that propel runtime files can be found by Kohana
function propel_schema_auto_load($class) {
	try {
		if ($path = Kohana::find_file('schema/build/classes/kohana', $class)) {
			require $path;
			return TRUE;
		} else if ($path = Kohana::find_file('schema/build/classes/kohana/om', $class)) {
			require $path;
			return TRUE;
		} else if ($path = Kohana::find_file('schema/build/classes/kohana/map', $class)) {
			require $path;
			return TRUE;
		}

		return FALSE;
	} catch (Exception $e) {
		Kohana_Exception::handler($e);
	}
}

spl_autoload_register('propel_schema_auto_load');

// include required Propel class to enable Prople functionality
require_once (Kohana::find_file('vendor/propel/runtime/lib', 'Propel'));

// initialize Propel with db configuration
Propel::init( Kohana::find_file('schema/build/conf', 'propel-conf') );

// This needs to be done to avoid a problem with class loading
//Propel::setDatabaseMapClass( 'Propel_DatabaseMap' );