<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addCultivation_WeeklytaskToDb($cultivation_Weeklytask){
		$query = "INSERT INTO Cultivationweeklytask(WeekSysId, CultivationId StatusId) VALUES('$cultivation_Weeklytask[WeekSysId]', '$cultivation_Weeklytask[CultivationId]', '$cultivation_Weeklytask[StatusId]')";
		return executeNonQuery($query);
	}	
	
	function editCultivation_WeeklytaskToDb($cultivation_Weeklytask){
		$query = "UPDATE Cultivationweeklytask SET StatusId='$cultivation_Weeklytask[StatusId]' WHERE WeekSysId=$cultivation_Weeklytask[WeekSysId]";
		return executeNonQuery($query);
	}
	
	function removeCultivation_WeeklytaskFromDb($id){
		$query = "DELETE FROM Cultivationweeklytask WHERE WeekSysId=$id";
		return executeNonQuery($query);
	}
	
	function getAllCultivation_WeeklytaskFromDb(){
		$query = "SELECT WeekSysId, CultivationId, StatusId FROM Cultivationweeklytask";  
		$result = executeQuery($query);	
		$cultivation_WeeklytaskList = array();
		if($cultivation_WeeklytaskList){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$cultivation_WeeklytaskList[$i] = $row;				
			}
		}
		return $cultivation_WeeklytaskList;
	}

	function getCultivation_WeeklytaskByIdFromDb($id){
		$query = "SELECT WeekSysId, CultivationId, StatusId FROM Cultivationweeklytask WHERE WeekSysId=$id";  
		$result = executeQuery($query);	
		$cultivation_Weeklytask = null;
		if($cultivation_Weeklytask){
			$cultivation_Weeklytask = mysqli_fetch_assoc($result);
		}
		return $cultivation_Weeklytask;
	}
?>