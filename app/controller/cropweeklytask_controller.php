<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/cropweeklytask_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/cropweeklytask_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$crop_Weeklytask = getCrop_WeeklytaskById($id); //Getting the model for view
				if($crop_Weeklytask){
					include_once(APP_ROOT."/app/view/cropweeklytask_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$crop_Weeklytask = getCrop_WeeklytaskById($id); //Getting the model for view
				if($crop_Weeklytask){
					include_once(APP_ROOT."/app/view/cropweeklytask_delete_view.php");
				}
			}
			break;
			
		case "show":
			$crop_WeeklytaskList = getAllCrop_Weeklytask(); //Getting the model for view
			if(count($crop_WeeklytaskList)>0){
				include_once(APP_ROOT."/app/view/cropweeklytask_show_view.php");
			}
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>