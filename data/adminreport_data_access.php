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
?>