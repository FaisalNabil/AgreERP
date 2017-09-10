<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addCrop_WeeklytaskToDb($crop_Weeklytask){
		//print_r($crop_Weeklytask);
		$query = "INSERT INTO Cropweeklytask(WeekNumber, CropId, CropInsectSysId, CropFertSysId, FertilizerTask, InsecticideTask, OtherTask) VALUES('$crop_Weeklytask[WeekNumber]', $crop_Weeklytask[CropId], $crop_Weeklytask[CropInsectSysId], $crop_Weeklytask[CropFertSysId], '$crop_Weeklytask[FertilizerTask]', '$crop_Weeklytask[InsecticideTask]', '$crop_Weeklytask[OtherTask]')";
		//echo $query;
		return executeNonQuery($query);
	}	
	
	function editCrop_WeeklytaskToDb($crop_Weeklytask){
		$query = "UPDATE CropWeeklytask SET WeekNumber='$crop_Weeklytask[WeekNumber]', CropId=$crop_Weeklytask[CropId], CropInsectSysId=$crop_Weeklytask[CropInsectSysId], CropFertSysId=$crop_Weeklytask[CropFertSysId], FertilizerTask='$crop_Weeklytask[FertilizerTask]', InsecticideTask='$crop_Weeklytask[InsecticideTask]', OtherTask='$crop_Weeklytask[OtherTask]' WHERE WeekId=$crop_Weeklytask[WeekId]";
		return executeNonQuery($query);
	}
	
	function removeCrop_WeeklytaskFromDb($id){
		$query = "DELETE FROM CropWeeklytask WHERE WeekId=$id";
		return executeNonQuery($query);
	}
	
	function getAllCrop_WeeklytaskFromDb(){
		$query = "SELECT WeekId, WeekNumber, CropId, CropInsectSysId, CropFertSysId, FertilizerTask, InsecticideTask, OtherTask FROM CropWeeklytask";  
		$result = executeQuery($query);	
		$crop_WeeklytaskList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$crop_WeeklytaskList[$i] = $row;				
			}
		}
		return $crop_WeeklytaskList;
	}

	function getCrop_WeeklytaskByCropIdFromDb($id){
		$query = "SELECT WeekId, WeekNumber, CropId, CropInsectSysId, CropFertSysId, FertilizerTask, InsecticideTask, OtherTask FROM CropWeeklytask WHERE CropId=$id";  
		$result = executeQuery($query);	
		$crop_WeeklytaskList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$crop_WeeklytaskList[$i] = $row;				
			}
		}
		return $crop_WeeklytaskList;
	}
	function getCrop_WeeklytaskByIdFromDb($id){
		$query = "SELECT WeekId, WeekNumber, CropId, CropInsectSysId, CropFertSysId, FertilizerTask, InsecticideTask, OtherTask FROM CropWeeklytask WHERE WeekId=$id";  
		$result = executeQuery($query);	
		$crop_Weeklytask = null;
		if($result){
			$crop_Weeklytask = mysqli_fetch_assoc($result);
		}
		return $crop_Weeklytask;
	}
?>