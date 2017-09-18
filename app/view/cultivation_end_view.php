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
		if($_POST['unit']=='KG'){
			$totalProduction = $_POST['TotalProduction'];
		}else {
			$totalProduction = $_POST['TotalProduction']*1000;
		}
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
	Total Production: <input type="number" name="TotalProduction">
	<select name="unit">
	<option>KG</option>
	<option>Ton</option>
	</select><br>
	<br>
	<input type="submit" value="End Cultivation" class="btn btn-primary">
	<a href="/AgriERP/?cultivation_show" class="btn btn-info">SHOW ALL CULTIVATION</a>
</form>
</div>