<?php require_once(APP_ROOT."/data/cultivation_data_access.php") ?>
<?php require_once(APP_ROOT."/data/crop_data_access.php") ?>
<?php require_once(APP_ROOT."/data/region_data_access.php") ?>
<?php require_once(APP_ROOT."/data/farmer_data_access.php") ?>
<?php require_once(APP_ROOT."/data/cropweeklytask_data_access.php") ?>
<?php require_once(APP_ROOT."/data/cultivationweeklytask_data_access.php") ?>
<?php require_once(APP_ROOT."/data/fertilizer_data_access.php") ?>
<?php require_once(APP_ROOT."/data/insecticide_data_access.php") ?>
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
	
	function getAllCultivation($farmer){
		return getAllCultivationFromDb($farmer);
	}

	function getCultivationById($id){	
		return getCultivationByIdFromDb($id);
	}

	function getAllCrop(){
		return getAllCropFromDb();
	}

	function getCropById($id){	
		return getCropByIdFromDb($id);
	}
	
	function editCropCostProduction($id){	
		return editCropCostProductionToDb($id);
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

	function getFarmerById($id){	
		return getFarmerByIdFromDb($id);
	}

	function getCrop_WeeklytaskByCropId($id){
		return getCrop_WeeklytaskByCropIdFromDb($id);
	}

	function getCrop_WeeklytaskById($id){	
		return getCrop_WeeklytaskByIdFromDb($id);
	}

	function addCultivation_Weeklytask($cultivation_Weeklytask){
		return addCultivation_WeeklytaskToDb($cultivation_Weeklytask);
	}
	
	function editCultivation_Weeklytask($cultivation_Weeklytask){	
		return editCultivation_WeeklytaskToDb($cultivation_Weeklytask);
	}

	function editCultivation_WeeklytaskCost($cultivation_Weeklytask){	
		return editCultivation_WeeklytaskCostToDb($cultivation_Weeklytask);
	}
	
	function removeCultivation_Weeklytask($id){
		return removeCultivation_WeeklytaskFromDb($id);
	}
	
	function getAllCultivation_Weeklytask(){
		return getAllCultivation_WeeklytaskFromDb();
	}

	function getCultivation_WeeklytaskById($id){	
		return getCultivation_WeeklytaskByIdFromDb($id);
	}

	function getCultivation_WeeklytaskByCultivationId($id){	
		return getCultivation_WeeklytaskByCultivationIdFromDb($id);
	}	

	function getFertilizerById($id){	
		return getFertilizerByIdFromDb($id);
	}

	function getInsecticideById($id){	
		return getInsecticideByIdFromDb($id);
	}
?>