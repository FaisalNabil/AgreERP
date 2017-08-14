<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$name = $_POST['name'];
		$pricePerUnit = $_POST['pricePerUnit'];
		$insectName = $_POST['insectName'];
		$diseaseName = $_POST['diseaseName'];
		$insecticide = array("InsecticideId"=>$id, "Name"=>$name, "PricePerUnit"=>$pricePerUnit, "InsectName"=>$insectName, "DiseaseName"=>$diseaseName);
		
		if(addInsecticide($insecticide)){
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>ADD INSECTICIDE</h3><hr/><br />
	Name:<br /><input type="text" name="name"/><br />
	Price Unit:<br /><input type="number" name="pricePerUnit"/><br />
	Insect Name:<br /><input type="text" name="insectName"/><br />
	Disease Name:<br /><input type="text" name="diseaseName"/><br />
	
	<input type="submit" value="Add"/>
	<a href="/AgriERP/?insecticide_show">SHOW ALL</a>
</form>