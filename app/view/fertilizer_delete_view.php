<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['FertilizerId'];
		
		if(removeFertilizer($id)){
			echo "Record Deleted!";
		}
	}
?>
<form method="post">
	<br /><h3>DELETE FERTILIZER</h3><hr/><br />
	Id: <?=$fertilizer['FertilizerId']?><input type="hidden" name="InsecticideId" value="<?=$fertilizer['FertilizerId']?>"/><br />
	Name: <?=$fertilizer['Name']?><br />
	PricePerUnit: <?=$fertilizer['PricePerUnit']?><br />
	
	<input type="submit" value="Delete"/>
	<a href="/AgriERP/?fertilizer_show">SHOW ALL</a>
</form>