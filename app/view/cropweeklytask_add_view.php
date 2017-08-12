<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$weekId=$_POST['weekId'];	
		$cropId = $_GET['id'];
		$weekNumber = $_POST['weekNumber'];
		$fertilizerId = $_POST['fertilizer'];
		$fertilizerTask = $_POST['fertilizerTask'];
		$insecticideId = $_POST['insecticide'];
		$insecticideTask = $_POST['insecticideTask'];
		$otherTask = $_POST['otherTask'];
		$crop_Weeklytask = array("WeekId"=>$weekId, "CropId"=>$cropId, "WeekNumber"=>$weekNumber, "CropInsectSysId"=>$fertilizerId, "CropFertSysId"=>$insecticideId, "FertilizerTask"=>$fertilizerTask, "InsecticideTask"=>$insecticideTask, "OtherTask"=>$otherTask);
		
		if(addCrop_Weeklytask($crop_Weeklytask)){
			echo "Record Added!";
		}
	}
?>
<form method="post"></br></br>
Week Id:<input type="text" name="weekId">
Week Number:</br>
	<select name="weekNumber">
	  <?php for($i = 1; $i<=5; $i++){ 
		  echo "<option value='week$i'>week$i</option>";
		}?>	 
    </select></br></br>
Select fertilizer Name:</br>
    <select name="fertilizer">
		  
	    <?php 
			$fertilizerList = getAllFertilizer();
			foreach( $fertilizerList as $fertilizer){ 
				echo "<option value='".$fertilizer['FertilizerId']."'>".$fertilizer['Name']."</option>";
		}?>	 
   </select></br></br>
<textarea name="fertilizerTask" placeholder="Write Some task for this week.."></textarea></br>
Select Insecticide Name:</br>
    <select name="insecticide">
		  
	    <?php 
			$insecticideList = getAllInsecticide();
			foreach( $insecticideList as $insecticide){ 
				echo "<option value='".$insecticide['InsecticideId']."'>".$insecticide['Name']."</option>";
		}?>	 
   </select></br></br>
<textarea name="insecticideTask" placeholder="Write Some task for this week.."></textarea></br>
Other Task:</br>
<textarea name="otherTask" placeholder="Write Some task for this week.."></textarea></br>
	 <input type="submit" value="Add"/>
	 <a href="/AgriERP/?crop_show">SHOW ALL</a>
</form>