<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<div class="container">
	<h3>CULTIVATION OF <?=$crop['Name']?></h3><hr/><br />
	Total Cost: <?=$cultivation['TotalCost']?> tk.<br />
	Total Production: <?=$cultivation['TotalProduction']?> kg<br />
	Total Land Used: <?=$cultivation['TotalLandInUse']?><br />
	Started In: <?=$cultivation['StartDate']?> | 
	Ended In: <?=$cultivation['EndDate']?><br /><br />
	<a href="/AgriERP/?cultivation_history">BACK TO HISTORY</a>
	<hr>
</div>