<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$farmerid = $_POST['farmerid'];
		$password = $_POST['password'];

		$_SESSION['farmerid']=$farmerid;

		header("http://localhost/AgriERP/?home_show");
		
	}
?>
LOGIN<hr>

<form method="POST">
	Farmer ID:<input type="text" name="farmerid"><br>
	Password:<input type="password" name="password"><br><br>
	<input type="submit" value="LOGIN"/>
</form>