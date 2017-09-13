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
		$id = $_POST['id'];
		$password = $_POST['password'];
		$farmer = array("Name"=>$name, "District"=>$district, "Phone"=>$phone, "FarmerId"=> $id, "Password"=>$password, "Role"=>"farmer");
		if(addFarmer($farmer)){
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>REGISTER FARMER</h3><hr/><br />
	Name:<br /><input type="text" name="name"/><br />
	Phone:<br /><input type="text" name="phone"/><br />
	District:<br /><input type="text" name="district"/><br /><hr />
	ID: <br /><input type="number" name="id"><br />
	Password: <br /><input type="text" name="password"><br>
	<input type="submit" value="Done"/>
</form>
