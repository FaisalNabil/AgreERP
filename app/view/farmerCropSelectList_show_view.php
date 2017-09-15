<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php 
if (isset($_SESSION['role']) && $_SESSION['role']=='farmer') {
	$name = 'crops_show_view';
	include 'navbar-farmer.php'; 
}
	
?>
<br /><h3>SHOW CROP</h3><hr/><br />

	<?php
		foreach($cropList as $crop){
			if(isset($_SESSION['farmerid']))
				$addToCultivationLink='/AgriERP/?cultivation_add&cropid='.$crop['CropId'];
			else
				$addToCultivationLink='/AgriERP/?login_show';

			echo"CROP NAME: $crop[Name]<br>
					GROUP: $crop[CropGroupName]<br>
					TIME PERIOD: $crop[TimePeriod] | COST: $crop[TotalCost] | PRODUCTION: $crop[EstimatedProduction] KG <br>
					<a href='/AgriERP/?cultivation_cropdetails&cropid=$crop[CropId]'>DETAILS</a> | <a href=$addToCultivationLink>ADD TO CULTIVATION</a><br /><hr />";
		}
	?>
<br /><hr />