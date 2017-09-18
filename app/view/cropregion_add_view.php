<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$cropName = $_POST['cropName'];
		$CropGroupName = $_POST['CropGroupName'];
		$region = $_POST['region'];
		$TimePeriod = $_POST['TimePeriodStart']."-".$_POST['TimePeriodEnd'];
		$TotalCost = $_POST['TotalCost'];
		if($_POST['unit']=='KG'){
			$EstimatedProduction = $_POST['EstimatedProduction'];
		}
		else {
			$EstimatedProduction = $_POST['EstimatedProduction']*1000;
		}
		$LandType = $_POST['LandType'];
		$WaterSource = $_POST['WaterSource'];
		$totalWeeks = $_POST['TotalWeeks'];
		$regionId=getRegionByArea($region);
		//print_r($regionId);
		$crop = array("Name"=>$cropName, "CropGroupName"=>$CropGroupName, "RegionId"=>$regionId['RegionId'], "TimePeriod"=>$TimePeriod, "TotalCost"=>$TotalCost, "EstimatedProduction"=>$EstimatedProduction, "LandType"=>$LandType, "WaterSource"=>$WaterSource, 'TotalWeeks'=>$totalWeeks);
		//print_r($crop);
		if(addCrop($crop)){
			echo "Record Added!";
		}
	}
?>

<div class="container">
<form method="post"></br></br>
Crops Name:</br>
<input type="text" name="cropName"></br></br>
Crops Group Name:
	<select name="CropGroupName">
		<option value="Rice">Rice</option>
		<option value="Pulses">Pulses</option>
		<option value="Oilseeds">Oilseeds</option>
		<option value="Fibres">Fibres</option>
		<option value="Starches">Starches</option>
		<option value="Spices">Spices</option>
	</select></br></br>
Select Region:
	<select name="region">
		<?php 
			$regionList = getAllRegion();
			foreach($regionList as $region){
			  echo '<option value="'.$region["Area"].'">'.$region["Area"].'</option>';
			}
		?>
	</select></br></br>
Time Period:
  <select name="TimePeriodStart">
	<option>Jan</option>
	<option>Feb</option>
	<option>Mar</option>
	<option>Apr</option>
	<option>May</option>
	<option>Jun</option>
	<option>Jal</option>
	<option>Aug</option>
	<option>Sep</option>
	<option>Nov</option>
	<option>Dec</option>
  </select>
  -
  <select name="TimePeriodEnd">
	<option>Jan</option>
	<option>Feb</option>
	<option>Mar</option>
	<option>Apr</option>
	<option>May</option>
	<option>Jun</option>
	<option>Jal</option>
	<option>Aug</option>
	<option>Sep</option>
	<option>Nov</option>
	<option>Dec</option>
  </select>
</br></br>
Total Weeks Needed: <input type="number" name="TotalWeeks"><br><br>
Total Cost: <input type="text" name="TotalCost">TK.</br></br>
Estimated Production: <input type="number" name="EstimatedProduction">
<select name="unit">
	<option>KG</option>
	<option>Ton</option>
</select></br></br>
Land Type:
	<select name="LandType">
	  <option value="High ground">High ground</option>
	  <option value="Low ground">Low ground</option>
	  <option value="Beside river">Beside river</option>
	</select></br></br>
Water Source: 
	 <select name="WaterSource">
		<option value="River">River</option>
		<option value="Pond">Pond</option>
		<option value="Well">Well</option>
	 </select></br></br></br>
	 <input type="submit" value="Add" class="btn btn-primary" />
	 <a href="/AgriERP/?cropregion_show" class="btn btn-info" >SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-info">BACK TO ADMIN PANEL</a>
<br />

</div>