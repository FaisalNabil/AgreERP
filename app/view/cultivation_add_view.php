<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php include 'navbar-farmer.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$farmerId = $_SESSION['farmerid'];
		$startDate = date("Y-m-d");
		$endDate = "";
		$totalLandInUse = $_POST['landValue']." ".$_POST['landUnit'];
		$totalCost = "";
		$totalProduction = "";
		$cultivationid=rand(1,999999);
		$cropId = $_GET['cropid'];

		$cultivation = array("CultivationId"=>$cultivationid, "CropId"=>$cropId, "FarmerId"=>$farmerId, "StartDate"=>$startDate, "EndDate"=>$endDate, "TotalLandInUse"=>$totalLandInUse, "TotalCost"=>$totalCost, "TotalProduction"=>$totalProduction, "Status"=>'Ongoing');
		//print_r($cultivation);
		$weekId = getCrop_WeeklytaskByCropId($cropId);
		//print_r($weekId);
		
		
		if(addCultivation($cultivation)){
			foreach ($weekId as $week) {
				$cultivation_Weeklytask = array("WeekSysId"=>$week['WeekId'], "CultivationId"=>$cultivationid, "StatusId"=>'0');
				//print_r($cultivation_Weeklytask);
				if (addCultivation_Weeklytask($cultivation_Weeklytask)) {
					//echo "Weekly task and ";
				}
			}
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>ADD CULTIVATION</h3><hr/><br />
	Total Land In Use:<br /><input type="number" name="landValue"/>
	<select name="landUnit">
		<option value="Katha">Katha</option>
		<option value="Bigha">Bigha</option>
		<option value="Hector">Hector</option>
		<option value="Acre">Acre</option>
	</select></br></br>
	
	<input type="submit" value="Add"/> <br /><br />
	<a href="/AgriERP/?cultivation_cropshow">SHOW ALL CROPS</a> | 
	<a href="/AgriERP/?cultivation_show">SHOW ALL CULTIVATION</a>
</form>