<?php	
	$serverName = "localhost";
	$userName = "root";
	$dbpassword = "";
	$dbName = "agrierp";
	
	function executeNonQuery($query){
		global $serverName, $userName, $dbpassword, $dbName;
		$result = false;
		$connection = mysqli_connect($serverName, $userName, $dbpassword, $dbName);		
		if($connection){
			$result = mysqli_query($connection, $query);
			mysqli_close($connection);
		}
		return $result;
	}
	
	function executeQuery($query){
		return executeNonQuery($query);	
	}
?>