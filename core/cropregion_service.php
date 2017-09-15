<?php require_once(APP_ROOT."/data/crop_data_access.php") ?>
<?php require_once(APP_ROOT."/data/region_data_access.php") ?>
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

	function getAllCropByRegion($regionid){
		return getAllCropByRegionFromDb($regionid);
	}
	
	function getAllRegion(){
		return getAllRegionFromDb();
	}

	function getRegionByArea($area){
		return getRegionByAreaFromDb($area);
	}
	
	function getRegionById($id){
		return getRegionByIdFromDb($id);
	}
?>