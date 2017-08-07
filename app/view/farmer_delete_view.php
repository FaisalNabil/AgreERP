<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['FarmerId'];
		
		if(removeFarmer(($id)){
			echo "Record Deleted!";
		}
	}
?>