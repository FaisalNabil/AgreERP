<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['CropId'];
		
		if(removeCrop($id)){
			echo "Record Deleted!";
		}
	}
?>

<form method="post">
	<br /><h3>DELETE CROP</h3><hr/><br />
	
	Crops Id:<?=$crop['CropId']?><input type="hidden" name="CropId" value="<?=$crop['CropId']?>"/><br />
	Crops Name:<?=$crop['Name']?> <br />
	Crops Group Name:<?=$crop['CropGroupName']?> <br />
	Region:<?=$region['Area']?> <br />
	Time Period:<?=$crop['TimePeriod']?> <br />
	Total Cost:<?=$crop['TotalCost']?> <br />
	Estimated Production:<?=$crop['EstimatedProduction']?> <br />
	Land Type:<?=$crop['LandType']?> <br />
	Water Source: <?=$crop['WaterSource']?> <br />

	<input type="submit" value="Delete"/>
	<a href="/AgriERP/?cropregion_show">SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin">BACK TO ADMIN PANEL</a>
<br />