<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addStatusToDb($status){
		$query = "INSERT INTO Status(StatusId, DoneTask) VALUES($status[StatusId], '$status[DoneTask]')";
		return executeNonQuery($query);
	}	
	
	function editStatusToDb($status){
		$query = "UPDATE Status SET DoneTask='$status[DoneTask]' WHERE StatusId=$status[StatusId]";
		return executeNonQuery($query);
	}
	
	function removeStatusFromDb($id){
		$query = "DELETE FROM Status WHERE StatusId=$id";
		return executeNonQuery($query);
	}
	
	function getAllStatusFromDb(){
		$query = "SELECT StatusId, DoneTask FROM Status";  
		$result = executeQuery($query);	
		$statusList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$statusList[$i] = $row;				
			}
		}
		return $statusList;
	}

	function getStatusByIdFromDb($id){
		$query = "SELECT StatusId, DoneTask FROM Status WHERE StatusId=$id";  
		$result = executeQuery($query);	
		$status = null;
		if($result){
			$status = mysqli_fetch_assoc($result);
		}
		return $status;
	}
?>