<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}

	switch($view){
		case "show":
			include_once(APP_ROOT."/app/view/home_view.php");
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>