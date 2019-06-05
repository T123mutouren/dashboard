<?php 

namespace dashboardservice;

use Dashboard;

/**
 * 
 */
class index extends Dashboard
{
	
	
	function index()
	{
		$dashboard = new Dashboard();

		$this->pushMsgToApp();
	}
}


 ?>