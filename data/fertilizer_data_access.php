<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addFertilizerToDb($fertilizer){
		$query = "INSERT INTO Fertilizer(FertilizerId, Name, PricePerUnit) VALUES('$fertilizer[FertilizerId]', '$fertilizer[Name]', $fertilizer[PricePerUnit])";
		return executeNonQuery($query);
	}	
	
	function editFertilizerToDb($fertilizer){
		$query = "UPDATE Fertilizer SET Name='$fertilizer[Name]', PricePerUnit=$fertilizer[PricePerUnit] WHERE FertilizerId='$fertilizer[FertilizerId]'";
		return executeNonQuery($query);
	}
	
	function removeFertilizerFromDb($id){
		$query = "DELETE FROM Fertilizer WHERE FertilizerId='$id'";
		return executeNonQuery($query);
	}
	
	function getAllFertilizerFromDb(){
		$query = "SELECT FertilizerId, Name, PricePerUnit FROM Fertilizer";  
		$result = executeQuery($query);	
		$fertilizerList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$fertilizerList[$i] = $row;				
			}
		}
		return $fertilizerList;
	}

	function getFertilizerByIdFromDb($id){
		$query = "SELECT FertilizerId, Name, PricePerUnit FROM Fertilizer WHERE FertilizerId='$id'";  
		$result = executeQuery($query);	
		$fertilizer = null;
		if($result){
			$fertilizer = mysqli_fetch_assoc($result);
		}
		return $fertilizer;
	}
?>