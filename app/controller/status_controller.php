<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/status_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/status_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$status = getStatusById($id); //Getting the model for view
				if($status){
					include_once(APP_ROOT."/app/view/status_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$status = getStatusById($id); //Getting the model for view
				if($status){
					include_once(APP_ROOT."/app/view/status_delete_view.php");
				}
			}
			break;
			
		case "show":
			$statusList = getAllStatus(); //Getting the model for view
			if(count($statusList)>0){
				include_once(APP_ROOT."/app/view/status_show_view.php");
			}
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>