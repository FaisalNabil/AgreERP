<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$cropId = $_POST['cropId'];
		$cropName = $_POST['cropName'];
		$CropGroupName = $_POST['CropGroupName'];
		$region = $_POST['region'];
		$TimePeriod = $_POST['TimePeriod'];
		$TotalCost = $_POST['TotalCost'];
		$EstimatedProduction = $_POST['EstimatedProduction'];
		$LandType = $_POST['LandType'];
		$WaterSource = $_POST['WaterSource'];
		$regionId=getRegionByArea($region);
		//print_r($regionId);
		$crop = array("CropId"=>$cropId, "Name"=>$cropName, "CropGroupName"=>$CropGroupName, "RegionId"=>$regionId['RegionId'], "TimePeriod"=>$TimePeriod, "TotalCost"=>$TotalCost, "EstimatedProduction"=>$EstimatedProduction, "LandType"=>$LandType, "WaterSource"=>$WaterSource);
		print_r($crop);
		if(addCrop($crop)){
			echo "Record Added!";
		}
	}
?>
<form method="post"></br></br>
Crops Id:</br>
<input type="text" name="cropId"></br></br>
Crops Name:</br>
<input type="text" name="cropName"></br></br>
Crops Group Name:</br>
	<select name="CropGroupName">
		<option>Select Group</option>
		<option value="Rice">Rice</option>
		<option value="Wheat">Wheat</option>
		<option value="Oilseed">Oilseed</option>
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
  <select name="TimePeriod">
	<option>Select Any One</option>
	<option>January-April</option>
	<option>May-Aug</option>
	<option>Sep-Dec</option>
  </select></br></br>
Total Cost:</br>
<input type="text" name="TotalCost"></br></br>
Estimated Production:</br>
<input type="text" name="EstimatedProduction"></br></br>
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
	 <input type="submit" value="Add"/>
	 <a href="/AgriERP/?cropregion_show">SHOW ALL</a>
</form>