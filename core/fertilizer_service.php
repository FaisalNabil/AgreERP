<?php require_once(APP_ROOT."/data/fertilizer_data_access.php") ?>
<?php
	function addFertilizer($fertilizer){
		return addFertilizerToDb($fertilizer);
	}
	
	function editFertilizer($fertilizer){	
		return editFertilizerToDb($fertilizer);
	}
	
	function removeFertilizer($id){
		return removeFertilizerFromDb($id);
	}
	
	function getAllFertilizer(){
		return getAllFertilizerFromDb();
	}

	function getFertilizerById($id){	
		return getFertilizerByIdFromDb($id);
	}
?>