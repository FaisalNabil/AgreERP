<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>


<?php include 'navbar.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		
		$id = $_POST['insecticideId'];
		$name = $_POST['name'];
		$pricePerUnit = $_POST['pricePerUnit'];
		$insectName = $_POST['insectName'];
		$diseaseName = $_POST['diseaseName'];

		$insecticide = array("InsecticideId"=>$id, "Name"=>$name, "PricePerUnit"=>$pricePerUnit, "InsectName"=>$insectName, "DiseaseName"=>$diseaseName);
		
		if(editInsecticide($insecticide)){
			echo "Record Updated!";
		}
	}
?>
<div class="container">
<form method="post">
	<br /><h3>EDIT INSECTICIDE</h3><hr/><br />
	Insecticide Id: <?=$insecticide['InsecticideId']?><input type="hidden" name="insecticideId" value="<?=$insecticide['InsecticideId']?>"/><br />
	Name: <input type="text" name="name" value="<?=$insecticide['Name']?>"/><br />
	PricePer Unit: <input type="text" name="pricePerUnit" value="<?=$insecticide['PricePerUnit']?>"/><br />
	Insect Name: <input type="text" name="insectName" value="<?=$insecticide['InsectName']?>"/><br />
	Disease Name: <input type="text" name="diseaseName" value="<?=$insecticide['DiseaseName']?>"/><br />

	<input type="submit" value="Update" class='btn btn-primary'/>
	<a href="/AgriERP/?insecticide_show" class='btn btn-info'>SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>