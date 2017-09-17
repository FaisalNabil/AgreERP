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
			include_once(APP_ROOT."/app/view/home_view.php");
			break;
		case "admin":
			include APP_ROOT.'/app/view/navbar.php';
			$totalFarmers = count(getAllRegisteredFarmer());
			$totalActiveFarmers = count(getAllActiveFarmer());
			$totalCultivation = count(getAllCultivation());
			include_once(APP_ROOT."/app/view/admin_home_view.php");
			break;

		case "farmer":
			include_once(APP_ROOT."/app/view/farmer_home_view.php");
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>