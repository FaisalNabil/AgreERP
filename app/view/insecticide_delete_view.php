<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['InsecticideId'];
		
		if(removeInsecticide(($id)){
			echo "Record Deleted!";
		}
	}
?>