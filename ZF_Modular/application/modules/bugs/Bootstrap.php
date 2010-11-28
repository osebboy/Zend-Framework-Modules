<?php
class Bugs_Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	/**
	 * If separate module autoload is required, then need to remove
	 * My_App::_moduleAutoload() and create module autoloaders for
	 * each module as described below. Good for development environment
	 * to focus on one module only and control the interaction between
	 * modules if there's any. Again this is all for different use cases
	 * depending on the application. 
	 */
	/*protected function _initAutoload()
	{
		$loader = new Zend_Application_Module_Autoloader(array(
    		'namespace' => 'Bugs',
    		'basePath'  => APPLICATION_PATH . '/modules/bugs',
		));
		return $loader;
	}*/
}