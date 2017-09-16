<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<div class="container">
<br /><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Type crops name" title="Type in a name"><br><br><hr/><br />

	<?php
		echo "<ul id='myUL'>";
		foreach($cropList as $crop){
			if(isset($_SESSION['farmerid']))
				$addToCultivationLink='/AgriERP/?cultivation_add&cropid='.$crop['CropId'];
			else
				$addToCultivationLink='/AgriERP/?login_show';

			echo"<li style='display: block'><span>CROP NAME: $crop[Name]<br>
					GROUP: $crop[CropGroupName]<br>
					TIME PERIOD: $crop[TimePeriod] | COST: $crop[TotalCost] | PRODUCTION: $crop[EstimatedProduction] KG <br>
					<a href='/AgriERP/?cultivation_cropdetails&cropid=$crop[CropId]' class='btn btn-primary'>DETAILS</a> | <a href=$addToCultivationLink class='btn btn-info'>ADD TO CULTIVATION</a><br /><hr /></a></li>";
		}
		echo "</ul>";
	?>
<br />
</div>