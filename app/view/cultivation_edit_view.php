<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$id = $_POST['cultivation'];
		$farmerId = $_POST['farmerId'];
		$startDate = $_POST['startDate'];
		$endDate = $_POST['endDate'];
		$totalLandInUse = $_POST['totalLandInUse'];
		$totalCost = $_POST['totalCost'];
		$cropId = $_POST['cropId'];
		$insecticide = array("CultivationId"=>$id, "CropId"=>$cropId, "FarmerId"=>$farmerId, "StartDate"=>$startDate, "EndDate"=>$endDate, "TotalLandInUse"=>$totalLandInUse, "TotalCost"=>$totalCost);
		
		if(editCultivation($cultivation)){
			echo "Record Updated!";
		}
	}
?>
<div class="container">
<form method="post">
	<br /><h3>EDIT INSECTICIDE</h3><hr/><br />
	Insecticide Id: <?=$insecticide['InsecticideId']?><input type="hidden" name="insecticideId" value="<?=$insecticide['InsecticideId']?>"/><br />
	Name: <input type="text" name="name" value="<?=$insecticide['Name']?>"/><br />
	PricePer Unit: <input type="text" name="pricePerUnit" value="<?=$insecticide['PricePerUnit']?>"/><br />
	Insect Name: <input type="text" name="insectName" value="<?=$insecticide['InsectName']?>"/><br />
	Insect Name: <input type="text" name="diseaseName" value="<?=$insecticide['DiseaseName']?>"/><br />

	<input type="submit" value="Update"/>
	<a href="/AgriERP/?insecticide_show">SHOW ALL</a>
</form>
</div>