<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$id = $_POST['cultivationId'];
		$farmerId = $_GET['farmerid'];
		$startDate = date("Y-m-d H:i:s");
		$endDate = "";
		$totalLandInUse = $_POST['landValue']." ".$_POST['landUnit'];
		$totalCost = "";
		$cropId = $_GET['cropid'];

		$cultivation = array("CultivationId"=>$id, "CropId"=>$cropId, "FarmerId"=>$farmerId, "StartDate"=>$startDate, "EndDate"=>$endDate, "TotalLandInUse"=>$totalLandInUse, "TotalCost"=>$totalCost);
		//print_r($cultivation);
		$weekId = getCrop_WeeklytaskByCropId($cropId);
		//print_r($weekId);
		
		
		if(addCultivation($cultivation)){
			foreach ($weekId as $week) {
				$cultivation_Weeklytask = array("WeekSysId"=>$week['WeekId'], "CultivationId"=>$id, "StatusId"=>'0');
				if (addCultivation_Weeklytask($cultivation_Weeklytask)) {
					echo "Weekly task and ";
				}
			}
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>ADD CULTIVATION</h3><hr/><br />
	Id:<br /><input type="text" name="cultivationId"/><br />
	Total Land In Use:<br /><input type="number" name="landValue"/>
	<select name="landUnit">
		<option value="Katha">Katha</option>
		<option value="Bigha">Bigha</option>
		<option value="Hector">Hector</option>
		<option value="Acre">Acre</option>
	</select></br></br>
	
	<input type="submit" value="Add"/>
	<a href="/AgriERP/?cultivation_cropshow">SHOW ALL CROPS</a>
	<a href="/AgriERP/?cultivation_show&farmerid=<?=$_GET['farmerid']?>">SHOW ALL CULTIVATION</a>
</form>