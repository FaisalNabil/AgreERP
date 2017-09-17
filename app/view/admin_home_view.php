<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<div>
	<b>Total Registererd Farmers:</b> <?=$totalFarmers;?><br>
	<b>Total Active Farmers:</b> <?=$totalActiveFarmers;?>
</div>
<div>
	<b>Total crops being cultivated</b> <?=$totalCultivation;?>
</div>



