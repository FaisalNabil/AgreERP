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
		$regionNumber = $_POST['regionNumber'];
		$area = $_POST['area'];
		$region = array("RegionId"=>$id, "RegionNumber"=>$regionNumber, "Area"=>$area);
		
		if(editRegion($region)){
			echo "Record Updated!";
		}
	}
?>
<div class="container">
<form method="post">
	<br /><h3>EDIT REGION</h3><hr/><br />
	Region Id: <?=$region['RegionId']?><input type="hidden" name="regionId" value="<?=$region['RegionId']?>"/><br />
	Region Number: <input type="text" name="regionNumber" value="<?=$region['RegionNumber']?>"/><br />
	Area: <input type="text" name="area" value="<?=$region['Area']?>"/><br />

	<input type="submit" value="Update" class='btn btn-primary'/>
	<a href="/AgriERP/?region_show" class="btn btn-info">SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>