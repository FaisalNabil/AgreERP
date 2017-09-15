<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['CultivationId'];
		
		if(removeCultivation($id)){
			echo "Record Deleted!";
		}
	}
?>
<div class="container">

<form method="post">
	<br /><h3>DELETE CULTIVATION</h3><hr/><br />
	Id: <?=$cultivation['CultivationId']?><input type="hidden" name="CultivationId" value="<?=$cultivation['CultivationId']?>"/><br />
	Name: <?=$insecticide['Name']?><br />
	PricePerUnit: <?=$insecticide['PricePerUnit']?><br />
	InsectName: <?=$insecticide['InsectName']?><br /> 
	DiseaseName: <?=$insecticide['DiseaseName']?><br /> 
	<input type="submit" value="Delete"/>
	<a href="/AgriERP/?insecticide_show">SHOW ALL</a>
</form>
</div>
