<?php require_once(APP_ROOT."/data/region_data_access.php") ?>
<?php
	function addRegion($region){
		return addRegionToDb($region);
	}
	
	function editRegion($region){	
		return editRegionToDb($region);
	}
	
	function removeRegion($id){
		return removeRegionFromDb($id);
	}
	
	function getAllRegion(){
		return getAllRegionFromDb();
	}

	function getRegionById($id){	
		return getRegionByIdFromDb($id);
	}

	function getRegionByArea($area){
		return getRegionByAreaFromDb($area);
	}
?>