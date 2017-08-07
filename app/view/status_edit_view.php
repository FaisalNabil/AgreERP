<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['StatusId'];
		$doneTask = $_POST['DoneTask'];
		$status = array("StatusId"=>$id, "DoneTask"=>$doneTask);
		
		if(addStatus($status)){
			echo "Record Added!";
		}
	}
?>