<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addCultivation_WeeklytaskToDb($cultivation_Weeklytask){
		$query = "INSERT INTO Cultivationweeklytask(WeekSysId, CultivationId, StatusId) VALUES($cultivation_Weeklytask[WeekSysId], $cultivation_Weeklytask[CultivationId], $cultivation_Weeklytask[StatusId])";
		return executeNonQuery($query);
	}	
	
	function editCultivation_WeeklytaskToDb($cultivation_Weeklytask){
		$query = "UPDATE Cultivationweeklytask SET StatusId=$cultivation_Weeklytask[StatusId], DoneDate='$cultivation_Weeklytask[DoneDate]' WHERE Cultivationweekid=$cultivation_Weeklytask[Cultivationweekid]";
		return executeNonQuery($query);
	}

	function editCultivation_WeeklytaskCostToDb($cultivation_Weeklytask){
		$query = "UPDATE Cultivationweeklytask SET WeeklyCost=$cultivation_Weeklytask[WeeklyCost] WHERE Cultivationweekid=$cultivation_Weeklytask[Cultivationweekid]";
		return executeNonQuery($query);
	}
	
	function removeCultivation_WeeklytaskFromDb($id){
		$query = "DELETE FROM Cultivationweeklytask WHERE Cultivationweekid=$id";
		return executeNonQuery($query);
	}
	
	function getAllCultivation_WeeklytaskFromDb(){
		$query = "SELECT Cultivationweekid, WeekSysId, CultivationId, StatusId, DoneDate, WeeklyCost FROM Cultivationweeklytask";  
		$result = executeQuery($query);	
		$cultivation_WeeklytaskList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$cultivation_WeeklytaskList[$i] = $row;				
			}
		}
		return $cultivation_WeeklytaskList;
	}

	function getCultivation_WeeklytaskByIdFromDb($id){
		$query = "SELECT Cultivationweekid, WeekSysId, CultivationId, StatusId, DoneDate, WeeklyCost FROM Cultivationweeklytask WHERE Cultivationweekid=$id";  
		$result = executeQuery($query);	
		$cultivation_Weeklytask = null;
		if($result){
			$cultivation_Weeklytask = mysqli_fetch_assoc($result);
		}
		return $cultivation_Weeklytask;
	}

	function getCultivation_WeeklytaskByCultivationIdFromDb($id){
		$query = "SELECT Cultivationweekid, WeekSysId, CultivationId, StatusId, DoneDate, WeeklyCost FROM Cultivationweeklytask WHERE CultivationId=$id";  
		$result = executeQuery($query);	
		$cultivation_WeeklytaskList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$cultivation_WeeklytaskList[$i] = $row;				
			}
		}
		return $cultivation_WeeklytaskList;
	}
?>