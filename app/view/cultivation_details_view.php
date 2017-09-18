<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<div class="container">

	<h3>CULTIVATION OF <?=$crop['Name']?></h3><hr/><br />
	Estimated Cost: <?=$crop['TotalCost']?><br />
	Estimated Production: <?=$crop['EstimatedProduction']?><br />
	Land Type: <?=$crop['LandType']?><br />
	Water Source: <?=$crop['WaterSource']?><br />
	Status: <b><?=$cultivation['Status']?></b><br />
<?php if ($cultivation['Status'] == 'Ongoing') {
	?>

	<hr/><hr/>
	WEEKLY TASKS:<br />

	<?php
		foreach($cultivationweeklytaskList as $cultivationweeklytask){
			$weektask = getCrop_WeeklytaskById($cultivationweeklytask['WeekSysId']);
			$weekid=$cultivationweeklytask['Cultivationweekid'];
			$cultivationid=$cultivationweeklytask['CultivationId'];
			$fertilizerName = getFertilizerById($weektask['CropFertSysId']);
			$insecticideName = getInsecticideById($weektask['CropInsectSysId']);

			$status=$cultivationweeklytask['StatusId'];
			//echo $status;
			if($cultivationweeklytask['WeeklyCost'] == 0)
				$costStatus='false';
			elseif ($cultivationweeklytask['WeeklyCost'] != 0) 
				$costStatus='true';

			//print_r($weektask);
			?><b>Week:<?php echo $weektask['WeekNumber']?></b><br><br>

			<?php if($weektask['CropFertSysId'])
			?><input type='checkbox' name='fertilizertask_<?php echo $cultivationid?>_<?php echo $weekid?>' id='fertilizertask_<?php echo $cultivationid?>_<?php echo $weekid?>' <?php if($status==1 || $status==4 || $status==5 || $status==7 ){?> checked <?php }?>><b>Fertilizer</b>: <?php echo $fertilizerName['Name'] ?></input><?php if($fertilizerName['PricePerUnit']){?> | Price Per KG: <?php echo $fertilizerName['PricePerUnit']; } ?><br>
					 Task: <?php echo $weektask['FertilizerTask']?><br><br>

			<?php if($weektask['CropInsectSysId'])
			?><input type='checkbox' name='insecticidetask_<?php echo $cultivationid?>_<?php echo $weekid?>' id='insecticidetask_<?php echo $cultivationid?>_<?php echo $weekid?>' <?php if($status==2 || $status==4 || $status==6 || $status==7 ){?> checked <?php }?>><b>Insecticide</b>: <?php echo $insecticideName['Name'] ?></input><?php if($insecticideName['PricePerUnit']){?> | Price Per KG: <?php echo $insecticideName['PricePerUnit']; } ?><br>
					 Task: <?php echo $weektask['InsecticideTask']?><br><br>

			<?php if($weektask['OtherTask'])
			?><input type='checkbox' name='othertask_<?php echo $cultivationid?>_<?php echo $weekid?>' id='othertask_<?php echo $cultivationid?>_<?php echo $weekid?>' <?php if($status==3 || $status==5 || $status==6 || $status==7 ){?> checked <?php }?>><b>Other tasks</b>:
					 <?php echo $weektask['OtherTask'] ?></input><br><br>
				Total Cost in This Week: <input type="number" name='weekcosttext_<?php echo $cultivationid?>_<?php echo $weekid?>' <?php if($costStatus == 'true'){ ?> value=<?=$cultivationweeklytask['WeeklyCost']?> readonly<?php } ?> >
				<input type="button" name='weekcostbutton_<?php echo $cultivationid?>_<?php echo $weekid?>' value='Add'><br><br><hr/>
	<?php
		}
	?>
	<br>
	<a href="/AgriERP/?cultivation_end&cultivationid=<?=$cultivation['CultivationId']?>" class="btn btn-primary">END CULTIVATION</a> | 
	<a href="/AgriERP/?cultivation_show" class="btn btn-primary">BACK TO CULTIVATION LIST</a>
	<br>
<?php
	}
?>
</div>