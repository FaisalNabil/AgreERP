<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$phone = $_POST['phone'];
		$pass = $_POST['password'];

		$farmer = getFarmerByPhonePassword($phone, $pass);
		//echo $farmer;
		if($farmer['Role'] == 'admin'){
			$_SESSION['farmerid']=$farmer['FarmerId'];
			$_SESSION['role']=$farmer['Role'];
			//echo $_SESSION['farmerid'];
			header('Location:?home_admin');
			exit();
		}
		else if($farmer['Role'] == 'farmer'){
			$_SESSION['farmerid']=$farmer['FarmerId'];
			$_SESSION['role']=$farmer['Role'];
			//echo $_SESSION['farmerid'];
			header('Location:?home_farmer');
			exit();
		}
		else
			echo "Please enter right credential<br>";

		
		
	}
?>
LOGIN<hr>

<form method="POST">
	Phone: <input type="text" name="phone"><br><br>
	Password: <input type="password" name="password"><br><br>
	<input type="submit" value="LOGIN"/>
</form>