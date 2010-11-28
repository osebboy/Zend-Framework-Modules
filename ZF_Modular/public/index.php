<?php
defined(
		'APPLICATION_ENV') || 
		define('APPLICATION_ENV', 'development');
		
defined(
		'APPLICATION_PATH') || 
		define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

set_include_path(implode(
	PATH_SEPARATOR, array(realpath(APPLICATION_PATH . '/../library'), 
	get_include_path())));
	

require_once 'My/App.php';
$application = new My_App(APPLICATION_ENV);
$application->bootstrap()
			->run();
/*require_once 'Zend/Controller/Front.php';
$front = Zend_Controller_Front::getInstance();
$front->addModuleDirectory(APPLICATION_PATH . '/modules');
$front->dispatch();*/
