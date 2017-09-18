<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

 <?php include 'navbar.php'; ?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['regionId'];
		
		if(removeRegion($id)){
			echo "Record Deleted!";
		}
	}
?>
<div class="container">
<form method="post">
	<br /><h3>DELETE REGION</h3><hr/><br />
	Id: <?=$region['RegionId']?><input type="hidden" name="regionId" value="<?=$region['RegionId']?>"/><br />
	RegionNumber: <?=$region['RegionNumber']?><br />
	Area: <?=$region['Area']?><br />

	<input type="submit" value="Delete" class='btn btn-primary'/>
	<a href="/AgriERP/?region_show" class="btn btn-info">SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>