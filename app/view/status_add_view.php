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
		$doneTask = $_POST['DoneTask'];
		$status = array("StatusId"=>$id, "DoneTask"=>$doneTask);
		
		if(addStatus($status)){
			echo "Record Added!";
		}
	}
?>

<div class="container">

<form method="post">
	<br /><h3>ADD STATUS</h3><hr/><br />
	Id:<br /><input type="text" name="StatusId"/><br />
	Done Task:<br /><input type="text" name="DoneTask"/><br />

	<input type="submit" value="Add"/>
	<a href="/AgriERP/?status_show" class="btn btn-primary">SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>