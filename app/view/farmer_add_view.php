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
		
		if(addFarmer($farmer)){
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>ADD FARMER</h3><hr/><br />
	Id:<br /><input type="text" name="farmerId"/><br />
	Name:<br /><input type="text" name="name"/><br />
	Phone:<br /><input type="text" name="phone"/><br /><br /><hr />
	Address:<br/><input type="text" name="address"/><br />
	<input type="submit" value="Add"/>
	<a href="/AgreERP/?farmer_show">SHOW ALL</a>
</form>