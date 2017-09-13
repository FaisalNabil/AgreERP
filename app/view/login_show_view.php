<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$farmerid = $_POST['farmerid'];
		$pass = $_POST['password'];

		$farmer = getFarmerByIdPassword($farmerid, $pass);
		//echo $farmer;
		if($farmer['Role'] == 'admin'){
			$_SESSION['farmerid']=$farmerid;
			//echo $_SESSION['farmerid'];
			header('Location:?home_admin');
			exit();
		}
		else if($farmer['Role'] == 'farmer'){
			$_SESSION['farmerid']=$farmerid;
			//echo $_SESSION['farmerid'];
			header('Location:?home_farmer');
			exit();
		}
		else
			echo "Please enter right credential";

		
		
	}
?>
LOGIN<hr>

<form method="POST">
	Farmer ID:<input type="text" name="farmerid"><br>
	Password:<input type="password" name="password"><br><br>
	<input type="submit" value="LOGIN"/>
</form>