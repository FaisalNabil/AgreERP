<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['farmerId'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$farmer = array("FarmerId"=>$id, "Name"=>$name, "Address"=>$address, "Phone"=>$phone);
		
		if(editFarmer($farmer)){
			echo "Record Updated!";
		}
	}
?>

<form method="post">
	<br /><h3>EDIT FARMER</h3><hr/><br />
	FarmerId: <?=$farmer['FarmerId']?><input type="hidden" name="farmerId" value="<?=$farmer['FarmerId']?>"/><br />
	Name: <input type="text" name="name" value="<?=$farmer['Name']?>"/><br />
	Phone: <input type="text" name="phone" value="<?=$farmer['Phone']?>"/><br /><br /><hr />
	Address: <input type="text" name="address" value="<?=$farmer['Address']?>"/><br /><br />
	<input type="submit" value="Update"/>
	<a href="/AgreERP/?farmer_show">SHOW ALL</a>
</form>