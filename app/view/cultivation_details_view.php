<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

	<h3>CULTIVATION OF <?=$crop['Name']?></h3><hr/><br />
	Cultivation Id: <?=$cultivation['CultivationId']?><input type="hidden" name="insecticideId" value="<?=$cultivation['CultivationId']?>"/><br />
	Estimated Cost: <?=$crop['TotalCost']?><br />
	Estimated Production: <?=$crop['EstimatedProduction']?><br />
	Land Type: <?=$crop['LandType']?><br />
	Water Source: <?=$crop['WaterSource']?><br />
	<hr/>
	WEEKLY TASKS:<br />
<form>
	<?php
		foreach($cultivationweeklytaskList as $cultivationweeklytask){
			$weektask = getCrop_WeeklytaskById($cultivationweeklytask['WeekId']);
			$fertilizerName = getFertilizerById($weektask['CropFertSysId']);
			$insecticideName = getInsecticideById($weektask['CropInsectSysId']);
			//print_r($weektask);
			echo "Week:$weektask[WeekNumber]<br><br>";
			if($weektask['CropFertSysId'])
				echo "Fertilizer: $fertilizerName[Name]<br>
					 Task: $weektask[FertilizerTask]<br>";
			if($weektask['CropInsectSysId'])
				echo "Insecticide: $insecticideName[Name]<br>
					 Task: $weektask[InsecticideTask]<br>";
			if($weektask['OtherTask'])
				echo "Other tasks: 
					 $weektask[OtherTask]<br><br><br>";
		}
	?>	

</form>