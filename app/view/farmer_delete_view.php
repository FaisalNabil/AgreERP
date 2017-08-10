<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['FarmerId'];
		
		if(removeFarmer($id)){
			echo "Record Deleted!";
		}
	}
?>

<form method="post">
	<br /><h3>DELETE FARMER</h3><hr/><br />
	Id: <?=$farmer['FarmerId']?><input type="hidden" name="FarmerId" value="<?=$farmer['FarmerId']?>"/><br />
	Name: <?=$farmer['Name']?><br />
	Phone: <?=$farmer['Phone']?><br />
	District: <?=$farmer['District']?><br /> 
	<input type="submit" value="Delete"/>
	<a href="/AgriERP/?farmer_show">SHOW ALL</a>
</form>
