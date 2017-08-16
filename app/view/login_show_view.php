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

		$farmer = getFarmerById($farmerid);
		if($pass = $farmer['Password']){
			$_SESSION['farmerid']=$farmerid;
			//echo $_SESSION['farmerid'];
			header('Location:?home_show');
			exit();
		}
		
		
	}
?>
LOGIN<hr>

<form method="POST">
	Farmer ID:<input type="text" name="farmerid"><br>
	Password:<input type="password" name="password"><br><br>
	<input type="submit" value="LOGIN"/>
</form>