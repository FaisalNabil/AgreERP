<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

	<br /><h3>DETAILS: <?=$crop['Name']?> </h3><hr/><br />

	Crops Id:<?=$crop['CropId']?><input type="hidden" name="CropId" value="<?=$crop['CropId']?>"/><br />
	Crops Name:<?=$crop['Name']?> <br />
	Crops Group Name:<?=$crop['CropGroupName']?> <br />
	Region:<?=$region['Area']?> <br />
	Time Period:<?=$crop['TimePeriod']?> <br />
	Total Cost:<?=$crop['TotalCost']?> <br />
	Estimated Production:<?=$crop['EstimatedProduction']?> <br />
	Land Type:<?=$crop['LandType']?> <br />
	Water Source: <?=$crop['WaterSource']?> <br />

	<a href="/AgriERP/?cultivation_add&cropid=<?=$crop['CropId']?>&farmerid=f-001">Add To Cultivation</a>
	<a href="/AgriERP/?cultivation_cropshow">SHOW ALL</a>

