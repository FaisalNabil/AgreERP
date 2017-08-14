<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['StatusId'];
		
		if(removeStatus($id)){
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>DELETE STATUS</h3><hr/><br />
	Id: <?=$status['StatusId']?><br />
	DoneTask: <?=$status['DoneTask']?><br />
	 

	<input type="submit" value="Delete"/>
	<a href="/AgriERP/?status_show">SHOW ALL</a>
</form>