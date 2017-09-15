<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['WeekId'];
		
		if(removeCrop_Weeklytask($id)){
			echo "Record Deleted!";
		}
	}
?>
<form method="post">
	<br /><h3>DELETE WEEK TASK</h3><hr/><br />
	Id: <?=$crop_Weeklytask['WeekId']?><input type="hidden" name="WeekId" value="<?=$crop_Weeklytask['WeekId']?>"/><br />
	Week Number: <?=$crop_Weeklytask['WeekNumber']?><br />
	Fetilizer: <?=$fertilizer['Name']?><br />
	Fertilizer Task: <?=$crop_Weeklytask['FertilizerTask']?><br /> 
	Insecticide: <?=$insecticide['Name']?><br /> 
	Insecticide Task: <?=$crop_Weeklytask['InsecticideTask']?><br /> 
	Other Task: <?=$crop_Weeklytask['OtherTask']?><br /> 
	<input type="submit" value="Delete"/>
	<a href="/AgriERP/?insecticide_show">SHOW ALL</a>
</form>
