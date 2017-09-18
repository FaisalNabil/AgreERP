<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<div style="text-align: left; width: 70%; padding: 10px">
	<div>
		<b>Total Registererd Farmers:</b> <?=$totalFarmers;?><br>
		<b>Total Active Farmers:</b> <?=$totalActiveFarmers;?>
	</div>
	<div>
		<b>Total crops available in system: </b> <?=$totalCrop;?><br>
		<b>Total crop cultivated so far: </b> <?=$totalCultivation;?><br>
		<b>Total crops being cultivated now: </b><?=$totalOngoingCultivation;?><br>
	</div>
</div>


