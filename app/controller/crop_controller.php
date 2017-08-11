<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/crop_region_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/crop_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$cultivation = getCultivationById($id); //Getting the model for view
				if($cultivation){
					include_once(APP_ROOT."/app/view/cultivation_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$cultivation = getCultivationById($id); //Getting the model for view
				if($cultivation){
					include_once(APP_ROOT."/app/view/cultivation_delete_view.php");
				}
			}
			break;
			
		case "show":
			$cultivationList = getAllCultivation(); //Getting the model for view
			if(count($cultivationList)>0){
				include_once(APP_ROOT."/app/view/cultivation_show_view.php");
			}
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>