<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<h5>PLEASE PROVIDE THESE INFORMATIONS TO END THE CULTIVATION:</h5><br>
<?php
	$totalCost = 0;
	foreach ($cultivationweeklytaskList as $cultivationWeeklyTask) {
		$totalCost+=$cultivationWeeklyTask['WeeklyCost'];
	}
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$totalCost = $_POST['TotalCost'];
		$totalProduction = $_POST['TotalProduction'];
		$endDate = date("Y-m-d");

		$avgCost = ($totalCost+$crop['TotalCost'])/2;
		$avgProduction = ($totalProduction+$crop['EstimatedProduction'])/2;

		$cropUpdate = array("CropId"=>$cultivation['CropId'], "TotalCost"=>$avgCost, "EstimatedProduction"=>$avgProduction);

		$cultivation = array("CultivationId"=>$cultivation['CultivationId'], "CropId"=>$cultivation['CropId'], "FarmerId"=>$cultivation['FarmerId'], "StartDate"=>$cultivation['StartDate'], "EndDate"=>$endDate, "TotalLandInUse"=>$cultivation['TotalLandInUse'], "TotalCost"=>$totalCost, "TotalProduction"=>$totalProduction, "Status"=>'Ended');

		if(editCultivation($cultivation)){
			editCropCostProduction($cropUpdate);
			echo "Cultivation Ended!";
		}
	}
?>
<div class="container">

<form method="POST">
	Total Cost: <input type="number" name="TotalCost" value="<?=$totalCost?>" readonly><br><br>
	Total Production: <input type="number" name="TotalProduction"><br>
	<br>
	<input type="submit" value="End Cultivation">
	<a href="/AgriERP/?cultivation_show">SHOW ALL CULTIVATION</a>
</form>
</div>