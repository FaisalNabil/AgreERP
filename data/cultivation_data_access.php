<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addCultivationToDb($cultivation){
		$query = "INSERT INTO Cultivation (CultivationId, CropId, FarmerId, StartDate, EndDate, TotalLandInUse, TotalCost) VALUES($cultivation[CultivationId], $cultivation[CropId], $cultivation[FarmerId], '$cultivation[StartDate]', '$cultivation[EndDate]', '$cultivation[TotalLandInUse]', '$cultivation[TotalCost]')";
		return executeNonQuery($query);
	}	
	
	function editCultivationToDb($cultivation){
		$query = "UPDATE Cultivation SET CropId=$cultivation[CropId], FarmerId=$cultivation[FarmerId], StartDate='$cultivation[StartDate]', EndDate='$cultivation[EndDate]', TotalLandInUse='$cultivation[TotalLandInUse]', TotalCost='$cultivation[TotalCost]'' WHERE CultivationId=$cultivation[CultivationId]";
		return executeNonQuery($query);
	}
	
	function removeCultivationFromDb($id){
		$query = "DELETE FROM Cultivation WHERE CultivationId=$id";
		return executeNonQuery($query);
	}
	
	function getAllCultivationFromDb($farmer){
		$query = "SELECT CultivationId, CropId, FarmerId, StartDate, EndDate, TotalLandInUse, TotalCost FROM Cultivation WHERE FarmerId='$farmer'";  
		$result = executeQuery($query);	
		$cultivationList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$cultivationList[$i] = $row;				
			}
		}
		return $cultivationList;
	}

	function getCultivationByIdFromDb($id){
		$query = "SELECT CultivationId, CropId, FarmerId, StartDate, EndDate, TotalLandInUse, TotalCost FROM Cultivation WHERE CultivationId=$id";  
		$result = executeQuery($query);	
		$cultivation = null;
		if($result){
			$cultivation = mysqli_fetch_assoc($result);
		}
		return $cultivation;
	}
?>