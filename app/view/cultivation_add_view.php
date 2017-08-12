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
		$cultivation = array("CultivationId"=>$id, "CropId"=>$cropId, "FarmerId"=>$farmerId, "StartDate"=>$startDate, "EndDate"=>$endDate, "TotalLandInUse"=>$totalLandInUse, "TotalCost"=>$totalCost);
		
		if(addCultivation($cultivation)){
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>ADD CULTIVATION</h3><hr/><br />
	Id:<br /><input type="text" name="insecticideId"/><br />
	Farmer Id:<br /><input type="text" name="farmerId"/><br />
	StartDate:<br /><input type="text" name="startDate"/><br />
	EndDate:<br /><input type="text" name="endDate"/><br />
	Total Land In Use:<br /><input type="number" name="totalLandInUse"/><br />
	Total Cost:<br /><input type="number" name="totalCost"/><br />
	
	Crop Id:<br /><input type="number" name="cropId"/><br />
	
	<input type="submit" value="Add"/>
	<a href="/AgriERP/?insecticide_show">SHOW ALL</a>
</form>