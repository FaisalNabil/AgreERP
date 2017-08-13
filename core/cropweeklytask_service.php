<?php require_once(APP_ROOT."/data/cropweeklytask_data_access.php") ?>
<?php require_once(APP_ROOT."/data/insecticide_data_access.php") ?>
<?php require_once(APP_ROOT."/data/fertilizer_data_access.php") ?>
<?php
	function addCrop_Weeklytask($crop_Weeklytask){
		return addCrop_WeeklytaskToDb($crop_Weeklytask);
	}
	
	function editCrop_Weeklytask($crop_Weeklytask){	
		return editCrop_WeeklytaskToDb($crop_Weeklytask);
	}
	
	function removeCrop_Weeklytask($id){
		return removeCrop_WeeklytaskFromDb($id);
	}
	
	function getAllCrop_Weeklytask(){
		return getAllCrop_WeeklytaskFromDb();
	}

	function getCrop_WeeklytaskByCropId($id){	
		return getCrop_WeeklytaskByCropIdFromDb($id);
	}

	function getCrop_WeeklytaskById($id){	
		return getCrop_WeeklytaskByIdFromDb($id);
	}
?>