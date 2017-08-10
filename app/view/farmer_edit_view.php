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
		$district = $_POST['district'];
		$farmer = array("FarmerId"=>$id, "Name"=>$name, "District"=>$district, "Phone"=>$phone);
		
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
	District: <input type="text" name="district" value="<?=$farmer['District']?>"/><br /><br />
	<input type="submit" value="Update"/>
	<a href="/AgriERP/?farmer_show">SHOW ALL</a>
</form>