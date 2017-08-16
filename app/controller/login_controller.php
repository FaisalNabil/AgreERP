<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/farmer_service.php"); ?>
<?php
	switch($view){
			
		case "show":
			include_once(APP_ROOT."/app/view/login_show_view.php");
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>