<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['regionId'];
		
		if(removeRegion($id)){
			echo "Record Deleted!";
		}
	}
?>