<?php require_once(APP_ROOT."/data/status_data_access.php") ?>
<?php
	function addStatus($status){
		return addStatusToDb($region);
	}
	
	function editStatus($status){	
		return editStatusToDb($region);
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