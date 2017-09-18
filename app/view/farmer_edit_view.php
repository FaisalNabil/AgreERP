<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php include 'navbar-farmer.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['farmerId'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$district = $_POST['district'];
		$password = $_POST['password'];
		$farmer = array("FarmerId"=>$id, "Name"=>$name, "District"=>$district, "Phone"=>$phone, "Password"=>$password);
		
		if(editFarmer($farmer)){
			echo "Record Updated!";
		}
	}
?>
<div class="container">
<form method="post">
	<?php if($_SESSION['role']=='farmer'){ ?>
	<br /><h3>EDIT FARMER</h3><hr/><br />
	<input type="hidden" name="farmerId" value="<?=$farmer['FarmerId']?>"/><br />
	Name: <input type="text" name="name" value="<?=$farmer['Name']?>"/><br />
	Phone: <input type="text" name="phone" value="<?=$farmer['Phone']?>"/><br /><br />
	District: <input type="text" name="district" value="<?=$farmer['District']?>"/><br /><br /><hr />
	Password: <input type="text" name="password" value="<?=$farmer['Password']?>"/><br /><br />
	<?php }else{
		?>
	<input type="hidden" name="farmerId" value="<?=$farmer['FarmerId']?>"/><br />
	<input type="hidden" name="name" value="<?=$farmer['Name']?>"/><br />
	<input type="hidden" name="phone" value="<?=$farmer['Phone']?>"/><br /><br />
	<input type="hidden" name="district" value="<?=$farmer['District']?>"/><br /><br /><hr />
	<input type="text" name="password" value="<?=$farmer['Password']?>"/><br /><br />
		<?php
	} ?>
	
	<input type="submit" value="Update" class='btn btn-primary'/>
</form>
<br /><hr />
<a href="/AgriERP/?farmer_show" class="btn btn-primary">BACK TO ALL FARMERS</a> | <a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>