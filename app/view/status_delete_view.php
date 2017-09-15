<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['StatusId'];
		
		if(removeStatus($id)){
			echo "Record Added!";
		}
	}
?>
<div class="container">
<form method="post">
	<br /><h3>DELETE STATUS</h3><hr/><br />
	Id: <?=$status['StatusId']?><br />
	DoneTask: <?=$status['DoneTask']?><br />
	 

	<input type="submit" value="Delete"/>
	<a href="/AgriERP/?status_show" class="btn btn-primary">SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>