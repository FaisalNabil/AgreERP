<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}

	switch($view){
		case "show":
			include_once(APP_ROOT."/app/view/home_view.php");
			break;
		case "admin":
			include_once(APP_ROOT."/app/view/admin_home_view.php");
			break;

		case "farmer":
			include_once(APP_ROOT."/app/view/farmer_home_view.php");
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>