<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['insecticideId'];
		$name = $_POST['name'];
		$pricePerUnit = $_POST['pricePerUnit'];
		$insectName = $_POST['insectName'];
		$diseaseName = $_POST['diseaseName'];
		$insecticide = array("InsecticideId"=>$id, "Name"=>$name, "PricePerUnit"=>$pricePerUnit, "InsectName"=>$insectName, "DiseaseName"=>$diseaseName);
		
		if(editInsecticide($insecticide)){
			echo "Record Updated!";
		}
	}
?>