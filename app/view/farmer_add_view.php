<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$district = $_POST['district'];
		$farmer = array("Name"=>$name, "District"=>$district, "Phone"=>$phone);
		if(addFarmer($farmer)){
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>REGISTER FARMER</h3><hr/><br />
	Name:<br /><input type="text" name="name"/><br />
	Phone:<br /><input type="text" name="phone"/><br /><hr />
	District:<br/><input type="text" name="district"/><br /><br />
	<input type="submit" value="Done"/>
</form>
