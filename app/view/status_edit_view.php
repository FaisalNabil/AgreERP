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
	<br /><h3>EDIT STATUS</h3><hr/><br />
	Status Id: <?=$status['StatusId']?><input type="hidden" name="StatusId" value="<?=$status['StatusId']?>"/><br />
	Done Task: <input type="text" name="DoneTask" value="<?=$status['DoneTask']?>"/><br />

	<input type="submit" value="Update"/>
	<a href="/AgreERP/?status_show">SHOW ALL</a>
</form>