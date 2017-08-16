<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$cropId = $_GET['id'];
		$weekNumber = $_POST['weekNumber'];
		$fertilizerId = $_POST['fertilizer'];
		$fertilizerTask = $_POST['fertilizerTask'];
		$insecticideId = $_POST['insecticide'];
		$insecticideTask = $_POST['insecticideTask'];
		$otherTask = $_POST['otherTask'];
		$crop_Weeklytask = array("CropId"=>$cropId, "WeekNumber"=>$weekNumber, "CropInsectSysId"=>$insecticideId, "CropFertSysId"=>$fertilizerId, "FertilizerTask"=>$fertilizerTask, "InsecticideTask"=>$insecticideTask, "OtherTask"=>$otherTask);
		
		if(addCrop_Weeklytask($crop_Weeklytask)){
			echo "Record Added!";
		}
	}
?>
<form method="post"></br></br>
Week Number:
	<select name="weekNumber">
	  <?php for($i = 1; $i<=5; $i++){ 
		  echo "<option value='$i'>week$i</option>";
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
	 <a href="/AgriERP/?cropweeklytask_show&cropid=<?=$_GET['id']?>">SHOW ALL</a>
</form>