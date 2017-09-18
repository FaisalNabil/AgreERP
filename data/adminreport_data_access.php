<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function getAllActiveFarmerFromDb()
	{
		$query = "SELECT DISTINCT(FarmerId) FROM cultivation WHERE CultivationId=(SELECT CultivationId FROM cultivationweeklytask WHERE DoneDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW())";
		$result = executeQuery($query);	
		$farmerList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$farmerList[$i] = $row;				
			}
		}
		return $farmerList;
	}

	function getAllRegisteredFarmerFromDb(){
		$query = "SELECT FarmerId, Name, District, Phone, Password, Role FROM Farmer WHERE Role='farmer'";  
		$result = executeQuery($query);	
		$farmerList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$farmerList[$i] = $row;				
			}
		}
		return $farmerList;
	}

	function getAllCropFromDb(){
		$query = "SELECT CropId, Name, CropGroupName, RegionId, TimePeriod, TotalCost, EstimatedProduction, LandType, WaterSource, TotalWeeks FROM Crop";  
		$result = executeQuery($query);	
		$cropList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$cropList[$i] = $row;				
			}
		}
		return $cropList;
	}

	function getAllCultivationFromDb(){
		$query = "SELECT CultivationId, CropId, FarmerId, StartDate, EndDate, TotalLandInUse, TotalCost, TotalProduction, Status FROM Cultivation";  
		$result = executeQuery($query);	
		$cultivationList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$cultivationList[$i] = $row;				
			}
		}
		return $cultivationList;
	}

	function getAllOngoingCultivationFromDb(){
		$query = "SELECT CultivationId, CropId, FarmerId, StartDate, EndDate, TotalLandInUse, TotalCost, TotalProduction, Status FROM Cultivation WHERE Status='ongoing'";  
		$result = executeQuery($query);	
		$cultivationList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$cultivationList[$i] = $row;				
			}
		}
		return $cultivationList;
	}
?>