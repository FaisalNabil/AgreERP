<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/fertilizer_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/fertilizer_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$fertilizer = getFertilizerById($id); //Getting the model for view
				if($fertilizer){
					include_once(APP_ROOT."/app/view/fertilizer_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$fertilizer = getFertilizerById($id); //Getting the model for view
				if($fertilizer){
					include_once(APP_ROOT."/app/view/fertilizer_delete_view.php");
				}
			}
			break;
			
		case "show":
			$fertilizerList = getAllFertilizer(); //Getting the model for view
			if(count($fertilizerList)>0){
				include_once(APP_ROOT."/app/view/fertilizer_show_view.php");
			}
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>