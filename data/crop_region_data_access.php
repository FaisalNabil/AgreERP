<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addCropToDb($crop){
		$query = "INSERT INTO Crop(CropId, Name, GroupName, RegionId, TimePeriod, TotalCost, EstimatedProduction, LandType, WaterSource) VALUES($crop[CropId], '$crop[Name]', '$crop[GroupName]', $crop[RegionId], '$crop[TimePeriod]', $crop[TotalCost], $crop[EstimatedProduction], '$crop[LandType]', '$crop[WaterSource]')";
		return executeNonQuery($query);
	}	
	
	function editCropToDb($crop){
		$query = "UPDATE Crop SET Name='$crop[Name]', 'GroupName=$crop[GroupName]', RegionId=$crop[RegionId], TimePeriod='$crop[TimePeriod]', TotalCost=$crop[TotalCost], EstimatedProduction=$crop[EstimatedProduction], LandType='$crop[LandType]', WaterSource='$crop[WaterSource]' WHERE CropId=$crop[CropId]";
		return executeNonQuery($query);
	}
	
	function removeCropFromDb($id){
		$query = "DELETE FROM Crop WHERE CropId=$id";
		return executeNonQuery($query);
	}
	
	function getAllCropFromDb(){
		$query = "SELECT CropId, Name, GroupName, RegionId, TimePeriod, TotalCost, EstimatedProduction, LandType, WaterSource FROM Crop";  
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
		$query = "SELECT CropId, Name, GroupName, RegionId, TimePeriod, TotalCost, EstimatedProduction, LandType, WaterSource FROM Crop WHERE CropId=$id";  
		$result = executeQuery($query);	
		$crop = null;
		if($result){
			$crop = mysqli_fetch_assoc($result);
		}
		return $crop;
	}
	function getAllRegionFromDb(){
		$query = "SELECT RegionId, RegionNumber, Area FROM Region";  
		$result = executeQuery($query);	
		$regionList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$regionList[$i] = $row;				
			}
		}
		return $regionList;
	}
	function getRegionByAreaFromDb($area){
		$query = "SELECT RegionId, RegionNumber, Area FROM Region WHERE Area=$area";  
		$result = executeQuery($query);	
		$region = null;
		if($result){
			$region = mysqli_fetch_assoc($result);
		}
		return $region;
	}
	function getAllFertilizerFromDb(){
		$query = "SELECT FertilizerId, Name, PricePerUnit FROM Fertilizer";  
		$result = executeQuery($query);	
		$fertilizerList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$fertilizerList[$i] = $row;				
			}
		}
		return $fertilizerList;
	}
	function getAllInsecticideFromDb(){
		$query = "SELECT InsecticideId, Name, PricePerUnit, InsectName, DiseaseName FROM Insecticide";  
		$result = executeQuery($query);	
		$insecticideList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$insecticideList[$i] = $row;				
			}
		}
		return $insecticideList;
	}
?>