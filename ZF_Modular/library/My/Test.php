<?php
class My_Test extends Zend_Controller_Plugin_Abstract
{
	public function routeStartup(Zend_Controller_Request_Abstract $request)
	{
		var_dump($request);

	}  
}
