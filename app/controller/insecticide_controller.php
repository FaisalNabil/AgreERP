<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/insecticide_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/insecticide_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$insecticide = getInsecticideById($id); //Getting the model for view
				if($insecticide){
					include_once(APP_ROOT."/app/view/insecticide_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$insecticide = getInsecticideById($id); //Getting the model for view
				if($insecticide){
					include_once(APP_ROOT."/app/view/insecticide_delete_view.php");
				}
			}
			break;
			
		case "show":
			$insecticideList = getAllInsecticide(); //Getting the model for view
			if(count($insecticideList)>0){
				include_once(APP_ROOT."/app/view/insecticide_show_view.php");
			}
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>