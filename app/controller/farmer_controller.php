<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/farmer_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/farmer_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$farmer = getFarmerById($id); //Getting the model for view
				if($farmer){
					include_once(APP_ROOT."/app/view/farmer_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$farmer = getFarmerById($id); //Getting the model for view
				if($farmer){
					include_once(APP_ROOT."/app/view/farmer_delete_view.php");
				}
			}
			break;
			
		case "show":
			$farmerList = getAllFarmer(); //Getting the model for view
			if(count($farmerList)>0){
				include_once(APP_ROOT."/app/view/farmer_show_view.php");
			}
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>