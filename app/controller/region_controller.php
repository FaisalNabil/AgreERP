<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/region_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/region_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$region = getRegionById($id); //Getting the model for view
				if($region){
					include_once(APP_ROOT."/app/view/region_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$region = getRegionById($id); //Getting the model for view
				if($region){
					include_once(APP_ROOT."/app/view/region_delete_view.php");
				}
			}
			break;
			
		case "show":
			$regionList = getAllRegion(); //Getting the model for view
			if(count($regionList)>0){
				include_once(APP_ROOT."/app/view/region_show_view.php");
			}
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>