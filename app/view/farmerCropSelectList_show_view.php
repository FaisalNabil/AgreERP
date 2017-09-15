<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php 
	if(isset($_SESSION['role']) && $_SESSION['role']=='farmer'){
		$name = "crops_show_view";
	  	include 'navbar-farmer.php';
	}else{
		$name = "farmerCropSelectList_show_view";
	  	include 'navbar-home.php';
	}
	
?>
<div class="container">
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
					<a href='/AgriERP/?cultivation_cropdetails&cropid=$crop[CropId]' class='btn btn-primary'>DETAILS</a> | <a href=$addToCultivationLink class='btn btn-info'>ADD TO CULTIVATION</a><br /><hr />";
		}
	?>
<br />
</div>