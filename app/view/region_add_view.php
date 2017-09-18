<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

 <?php include 'navbar.php'; ?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$regionNumber = $_POST['regionNumber'];
		$area = $_POST['area'];
		$region = array("RegionNumber"=>$regionNumber, "Area"=>$area);
		
		if(addRegion($region)){
			echo "Record Added!";
		}
	}
?>

<div class="container">
<form method="post">
	<br /><h3>ADD REGION</h3><hr/><br />
	Region Number:<br /><input type="text" name="regionNumber"/><br />
	Area:<br /><input type="text" name="area"/><br />
	
	<input type="submit" value="Add" class='btn btn-primary'/>
	<a href="/AgriERP/?region_show" class='btn btn-info'>SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>