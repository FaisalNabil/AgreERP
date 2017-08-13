<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/cultivation_service.php"); ?>
<?php
	switch($view){
		case "cropshow":
			$cropList = getAllCrop(); //Getting the model for view
			if(count($cropList)>0){
				include_once(APP_ROOT."/app/view/farmerCropSelectList_show_view.php");
			}
			break;

		case "cropdetails":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$crop = getCropById($id); //Getting the model for view
				$region = getRegionById($crop['RegionId']);
				if($crop){
					include_once(APP_ROOT."/app/view/farmerCropSelectList_details_view.php");					
				}
			}
			break;

		case "add":
			include_once(APP_ROOT."/app/view/cultivation_add_view.php");
			break;

		case "show":
			if(isset($_GET['farmerid'])){
				$farmerid = $_GET['farmerid'];
				$cultivationList = getAllCultivation($farmerid); //Getting the model for view
				$farmer = getFarmerById($farmerid);
				if($cultivationList){
					//print_r($cultivationList);
					include_once(APP_ROOT."/app/view/cultivation_show_view.php");					
				}
			}
			break;

		case "details":
			if(isset($_GET['cultivationid'])){
				$cultivationid = $_GET['cultivationid'];
				$cultivation = getCultivationById($cultivationid); //Getting the model for view
				//print_r($cultivation);echo "<br/>";
				$crop = getCropById($cultivation['CropId']);
				//print_r($crop);echo "<br/>";
				$cultivationweeklytaskList = getCrop_WeeklytaskByCropId($cultivation['CultivationId']);
				//print_r($cultivationweeklytaskList);echo "<br/>";
				if($cultivation){
					include_once(APP_ROOT."/app/view/cultivation_details_view.php");					
				}
			}
			break;

		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>