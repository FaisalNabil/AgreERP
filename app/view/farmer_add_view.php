<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['farmerId'];
		$name = $_POST['address'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$farmer = array("FarmerId"=>$id, "Name"=>$name, "Address"=>$address, "Phone"=>$phone);
		
		if(addFarmer($farmer)){
			echo "Record Added!";
		}
	}
?>