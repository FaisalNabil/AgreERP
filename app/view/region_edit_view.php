<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

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

<form method="post">
	<br /><h3>EDIT REGION</h3><hr/><br />
	Region Id: <?=$region['RegionId']?><input type="hidden" name="regionId" value="<?=$region['RegionId']?>"/><br />
	Region Number: <input type="text" name="regionNumber" value="<?=$region['RegionNumber']?>"/><br />
	Area: <input type="text" name="area" value="<?=$region['Area']?>"/><br />

	<input type="submit" value="Update"/>
	<a href="/AgriERP/?region_show">SHOW ALL</a>
</form>