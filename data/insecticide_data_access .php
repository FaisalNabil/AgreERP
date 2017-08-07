<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addInsecticideToDb($insecticide){
		$query = "INSERT INTO Insecticide(InsecticideId, Name, PricePerUnit, InsectName, DiseaseName) VALUES($insecticide[InsecticideId], '$insecticide[Name]', '$insecticide[PricePerUnit]', '$insecticide[InsectName]', '$insecticide[DiseaseName]')";
		return executeNonQuery($query);
	}	
	
	function editInsecticideToDb($insecticide){
		$query = "UPDATE Insecticide SET Name='$insecticide[Name]', PricePerUnit='$insecticide[PricePerUnit]', InsectName='$insecticide[InsectName]', DiseaseName='$insecticide[DiseaseName]' WHERE InsecticideId=$insecticide[InsecticideId]";
		return executeNonQuery($query);
	}
	
	function removeInsecticideFromDb($id){
		$query = "DELETE FROM Insecticide WHERE InsecticideId=$id";
		return executeNonQuery($query);
	}
	
	function getAllInsecticideFromDb(){
		$query = "SELECT InsecticideId, Name, PricePerUnit, InsectName, DiseaseName FROM Insecticide";  
		$result = executeQuery($query);	
		$insecticideList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$insecticideList[$i] = $row;				
			}
		}
		return $insecticideList;
	}

	function getInsecticideByIdFromDb($id){
		$query = "SELECT InsecticideId, Name, PricePerUnit, InsectName, DiseaseName FROM Insecticide WHERE InsecticideId=$id";  
		$result = executeQuery($query);	
		$insecticide = null;
		if($result){
			$insecticide = mysqli_fetch_assoc($result);
		}
		return $insecticide;
	}
?>