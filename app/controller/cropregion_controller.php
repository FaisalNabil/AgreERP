<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/cropregion_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/cropregion_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$crop = getCropById($id); //Getting the model for view
				if($crop){
					include_once(APP_ROOT."/app/view/cropregion_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$crop = getCropById($id); //Getting the model for view
				if($crop){
					include_once(APP_ROOT."/app/view/cropregion_delete_view.php");
				}
			}
			break;
			
		case "show":
			$cropList = getAllCrop(); //Getting the model for view
			if(count($cropList)>0){
				include_once(APP_ROOT."/app/view/cropregion_show_view.php");
			}
			else
				echo "none";
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>