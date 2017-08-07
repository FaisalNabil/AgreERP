<?php require_once(APP_ROOT."/data/insecticide_data_access.php") ?>
<?php
	function addInsecticide($insecticide){
		return addInsecticideToDb($insecticide);
	}
	
	function editInsecticide($insecticide){	
		return editInsecticideToDb($insecticide);
	}
	
	function removeInsecticide($id){
		return removeInsecticideFromDb($id);
	}
	
	function getAllInsecticide(){
		return getAllInsecticideFromDb();
	}

	function getInsecticideById($id){	
		return getInsecticideByIdFromDb($id);
	}
?>