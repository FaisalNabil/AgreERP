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
	District:<br/><input type="text" name="district"/><br />
	<input type="submit" value="Add"/>
	<a href="/AgriERP/?farmer_show">SHOW ALL</a>
</form>