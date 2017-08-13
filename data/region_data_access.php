<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addRegionToDb($region){
		$query = "INSERT INTO Region(RegionId, RegionNumber, Area) VALUES('$region[RegionId]', '$region[RegionNumber]', '$region[Area]')";
		return executeNonQuery($query);
	}	
	
	function editRegionToDb($region){
		$query = "UPDATE Region SET RegionNumber='$region[RegionNumber]', Area='$region[Area]' WHERE RegionId='$region[RegionId]'";
		return executeNonQuery($query);
	}
	
	function removeRegionFromDb($id){
		$query = "DELETE FROM Region WHERE RegionId='$id'";
		return executeNonQuery($query);
	}
	
	function getAllRegionFromDb(){
		$query = "SELECT RegionId, RegionNumber, Area FROM Region";  
		$result = executeQuery($query);	
		$regionList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$regionList[$i] = $row;				
			}
		}
		return $regionList;
	}

	function getRegionByIdFromDb($id){
		$query = "SELECT RegionId, RegionNumber, Area FROM Region WHERE RegionId='$id'";  
		$result = executeQuery($query);	
		$region = null;
		if($result){
			$region = mysqli_fetch_assoc($result);
		}
		return $region;
	}

	function getRegionByAreaFromDb($area){
		$query = "SELECT RegionId, RegionNumber, Area FROM Region WHERE Area='$area'";  
		$result = executeQuery($query);	
		$region = null;
		if($result){
			$region = mysqli_fetch_assoc($result);
		}
		return $region;
	}
?>