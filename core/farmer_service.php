<?php require_once(APP_ROOT."/data/farmer_data_access.php") ?>
<?php
	function addFarmer($farmer){
		return addFarmerToDb($farmer);
	}
	
	function editFarmer($farmer){	
		return editFarmerToDb($farmer);
	}
	
	function removeFarmer($id){
		return removeFarmerFromDb($id);
	}
	
	function getAllFarmer(){
		return getAllFarmerFromDb();
	}

	function getFarmerById($id){	
		return getFarmerByIdFromDb($id);
	}
?>