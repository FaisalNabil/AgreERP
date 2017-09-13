<?php

	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php
 
     $Arr = "";
    if (isset($_SESSION['Arr'])) {
       
     $Arr = explode(",",$_SESSION['Arr']);
     //$Arr = $_SESSION['Arr'];
     //print_r($Arr);

     $c = 0;
     $temp = 0;
     $t = 0;
     $newArray = array();
     
     for ($i=0; $i <sizeof($Arr); $i++) { 
     	 $crop_Weeklytask_arr[$c] = $Arr[$i];
     	 $c++;
     	   
     	 if ($c == 6) {
            $newArray[$t++] = $crop_Weeklytask_arr; 
          $c = 0;
     	 }    	  
     }
     //print_r($newArray);
     $k = 0;
      foreach( $newArray as $key => $obj)
		{
		    $cropId = $_GET['id'];
			$weekNumber = $obj[0];
			$fertilizerId = $obj[1];
			$fertilizerTask = $obj[2];
			$insecticideId = $obj[3];
			$insecticideTask = $obj[4];
			$otherTask = $obj[5];

			$crop_Weeklytask = array("CropId"=>$cropId, "WeekNumber"=>$weekNumber, "CropInsectSysId"=>$insecticideId, "CropFertSysId"=>$fertilizerId, "FertilizerTask"=>$fertilizerTask, "InsecticideTask"=>$insecticideTask, "OtherTask"=>$otherTask);
			if(addCrop_Weeklytask($crop_Weeklytask)){
			  $k = 1;
		    }
		}
		if($k = 1){
			echo "Data Added Successfully";
			 session_unset();
		}else{
			echo "Not Added";
		}
 }   

?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			 <form method="post"></br></br>
				Week Number:
					<select name="weekNumber" id="week">
					  <?php for($i = 1; $i<=$crop['TotalWeek']; $i++){ 
						  echo "<option value='$i'>week$i</option>";
						}?>	 
				    </select></br></br>
				Select fertilizer Name:</br>
				    <select name="fertilizer" id="fertilizerId">
						  
					    <?php 
							$fertilizerList = getAllFertilizer();
							foreach( $fertilizerList as $fertilizer){ 
								echo "<option value='".$fertilizer['FertilizerId']."'>".$fertilizer['Name']."</option>";
						}?>	 
				   </select></br></br>
				<textarea name="fertilizerTask" id="fertilizerTask" placeholder="Write Some task for this week.."></textarea></br>
				Select Insecticide Name:</br>
				    <select name="insecticide" id="insecticideId">
						  
					    <?php 
							$insecticideList = getAllInsecticide();
							foreach( $insecticideList as $insecticide){ 
								echo "<option value='".$insecticide['InsecticideId']."'>".$insecticide['Name']."</option>";
						}?>	 
				   </select></br></br>
				<textarea name="insecticideTask" id="insecticideTask" placeholder="Write Some task for this week.."></textarea></br>
				Other Task:</br>
				<textarea name="otherTask" id="otherTask" placeholder="Write Some task for this week.."></textarea></br>
					 <input type="submit" id="addNew" value="Add"/>
					 <a href="/AgriERP/?cropweeklytask_show&cropid=<?=$_GET['id']?>">SHOW ALL</a>
				</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>Week</th>
			      <th>Fertilizer Id</th> 
			      <th>Fertilizer Task</th> 
			      <th>Insecticide Id</th> 
			      <th>Insecticide Task</th> 
			      <th>Other Task</th> 
			    </tr>
			  </thead>
			  <tbody id="cropWeeklyTask">
			  </tbody>
			</table>		
	    </div>
	    <input id="sendServer" name="sendServer" type="button" value="Send to Server" />	
	</div>
		 
</div>

