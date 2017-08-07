<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['regionId'];
		$regionNumber = $_POST['regionNumber'];
		$area = $_POST['area'];
		$region = array("RegionId"=>$id, "RegionNumber"=>$regionNumber, "Area"=>$area);
		
		if(addRegion($region)){
			echo "Record Added!";
		}
	}
?>