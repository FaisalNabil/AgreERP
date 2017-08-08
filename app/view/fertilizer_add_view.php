<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['fertilizerId'];
		$name = $_POST['name'];
		$pricePerUnit = $_POST['pricePerUnit'];
		$fertilizer = array("FertilizerId"=>$id, "Name"=>$name, "PricePerUnit"=>$pricePerUnit);
		
		if(addFertilizer($fertilizer)){
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>ADD FERTILIZER</h3><hr/><br />
	Id:<br /><input type="text" name="fertilizerId"/><br />
	Name:<br /><input type="text" name="name"/><br />
	Price Unit:<br /><input type="number" name="pricePerUnit"/><br />
	
	<input type="submit" value="Add"/>
	<a href="/AgriERP/?fertilizer_show">SHOW ALL</a>
</form>