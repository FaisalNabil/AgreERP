<?php require_once(APP_ROOT."/data/status_data_access.php") ?>
<?php
	function addStatus($status){
		return addStatusToDb($status);
	}
	
	function editStatus($status){	
		return editStatusToDb($status);
	}
	
	function removeStatus($id){
		return removeStatusFromDb($id);
	}
	
	function getAllStatus(){
		return getAllStatusFromDb();
	}

	function getStatusById($id){	
		return getStatusByIdFromDb($id);
	}
?>