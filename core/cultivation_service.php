<?php require_once(APP_ROOT."/data/cultivation_data_access.php") ?>
<?php
	function addCultivation($cultivation){
		return addCultivationToDb($cultivation);
	}
	
	function editCultivation($cultivation){	
		return editCultivationToDb($cultivation);
	}
	
	function removeCultivation($id){
		return removeCultivationFromDb($id);
	}
	
	function getAllCultivation(){
		return getAllCultivationFromDb();
	}

	function getCultivationById($id){	
		return getCultivationByIdFromDb($id);
	}
?>