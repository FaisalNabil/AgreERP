<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>


<?php include 'navbar.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['InsecticideId'];
		
		if(removeInsecticide($id)){
			echo "Record Deleted!";
		}
	}
?>
<div class="container">
<form method="post">
	<br /><h3>DELETE INSECTICIDE</h3><hr/><br />
	Id: <?=$insecticide['InsecticideId']?><input type="hidden" name="InsecticideId" value="<?=$insecticide['InsecticideId']?>"/><br />
	Name: <?=$insecticide['Name']?><br />
	PricePerUnit: <?=$insecticide['PricePerUnit']?><br />
	InsectName: <?=$insecticide['InsectName']?><br /> 
	DiseaseName: <?=$insecticide['DiseaseName']?><br /> 
	<input type="submit" value="Delete" class='btn btn-primary'/>
	<a href="/AgriERP/?insecticide_show" class='btn btn-info'>SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>