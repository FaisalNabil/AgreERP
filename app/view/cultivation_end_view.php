<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$totalCost = $_POST['TotalCost'];
		$totalProduction = $_POST['TotalProduction'];
		$endDate = date("Y-m-d");

		$cultivation = array("CultivationId"=>$cultivation['CultivationId'], "CropId"=>$cultivation['CropId'], "FarmerId"=>$cultivation['FarmerId'], "StartDate"=>$cultivation['StartDate'], "EndDate"=>$endDate, "TotalLandInUse"=>$cultivation['TotalLandInUse'], "TotalCost"=>$totalCost, "TotalProduction"=>$totalProduction, "Status"=>'Ended');

		if(editCultivation($cultivation)){
			echo "Cultivation Ended!";
		}
	}
?>

<form method="POST">
	Total Cost: <input type="number" name="TotalCost"><br><br>
	Total Production: <input type="number" name="TotalProduction"><br>
	<br>
	<input type="submit" value="End Cultivation">
	<a href="/AgriERP/?cultivation_show">SHOW ALL CULTIVATION</a>
</form>