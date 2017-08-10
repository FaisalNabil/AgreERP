<?php require_once(APP_ROOT."/data/crop_region_data_access.php") ?>
<?php
	function addCrop($crop){
		return addCropToDb($crop);
	}
	
	function editCrop($crop){	
		return editCropToDb($crop);
	}
	
	function removeCrop($id){
		return removeCropFromDb($id);
	}
	
	function getAllCrop(){
		return getAllCropFromDb();
	}

	function getCropById($id){	
		return getCropByIdFromDb($id);
	}
	
	function getAllRegion(){
		return getAllRegionFromDb();
	}

	function getRegionByArea($area){
		return getRegionByAreaFromDb($area);
	}
	
	function getAllFertilizer(){
		return getAllFertilizerFromDb();
	}
	
	function getAllInsecticide(){
		return getAllInsecticideFromDb();
	}
?>