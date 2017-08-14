<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addCropToDb($crop){
		$query = "INSERT INTO Crop(Name, CropGroupName, RegionId, TimePeriod, TotalCost, EstimatedProduction, LandType, WaterSource) VALUES('$crop[Name]', '$crop[CropGroupName]', '$crop[RegionId]', '$crop[TimePeriod]', $crop[TotalCost], $crop[EstimatedProduction], '$crop[LandType]', '$crop[WaterSource]')";
		return executeNonQuery($query);
	}	
	
	function editCropToDb($crop){
		$query = "UPDATE Crop SET Name='$crop[Name]', 'CropGroupName=$crop[CropGroupName]', RegionId='$crop[RegionId]', TimePeriod='$crop[TimePeriod]', TotalCost=$crop[TotalCost], EstimatedProduction=$crop[EstimatedProduction], LandType='$crop[LandType]', WaterSource='$crop[WaterSource]' WHERE CropId=$crop[CropId]";
		return executeNonQuery($query);
	}
	
	function removeCropFromDb($id){
		$query = "DELETE FROM Crop WHERE CropId=$id";
		return executeNonQuery($query);
	}
	
	function getAllCropFromDb(){
		$query = "SELECT CropId, Name, CropGroupName, RegionId, TimePeriod, TotalCost, EstimatedProduction, LandType, WaterSource FROM Crop";  
		$result = executeQuery($query);	
		$cropList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$cropList[$i] = $row;				
			}
		}
		return $cropList;
	}

	function getCropByIdFromDb($id){
		$query = "SELECT CropId, Name, CropGroupName, RegionId, TimePeriod, TotalCost, EstimatedProduction, LandType, WaterSource FROM Crop WHERE CropId=$id";  
		$result = executeQuery($query);	
		$crop = null;
		if($result){
			$crop = mysqli_fetch_assoc($result);
		}
		return $crop;
	}
	
?>