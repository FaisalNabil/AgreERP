<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

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
<form method="post">
	<br /><h3>ADD STATUS</h3><hr/><br />
	Id:<br /><input type="text" name="StatusId"/><br />
	Done Task:<br /><input type="text" name="DoneTask"/><br />

	<input type="submit" value="Add"/>
	<a href="/AgreERP/?status_show">SHOW ALL</a>
</form>