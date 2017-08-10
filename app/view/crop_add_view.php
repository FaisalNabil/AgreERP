<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$cropId = $_POST['cropId'];
		$cropName = $_POST['cropName'];
		$group = $_POST['group'];
		$region = $_POST['region'];
		$totalCost = $_POST['totalCost'];
		$estimatedProduction = $_POST['estimatedProduction'];
		$landType = $_POST['landType'];
		$waterSource = $_POST['waterSource'];
		$weekNumber = $_POST['weekNumber'];
		 
	   
	}
?>
<form method="post">
	<br /><h3>ADD CROP</h3><hr/><br />
	Crop Id:<br /><input type="text" name="cropId"/><br />
	Crop Name:<br /><input type="text" name="cropName"/><br />
	Group:<br /><input type="text" name="group"/><br />
	Region:<select name="region" id="">
	    <?php 
	        foreach($regionList as $region){
              echo '<option value="$region[Area]">$region[Area]</option>';
            }
	    ?>
	    </select>
	    <p>Time Period: 
           <select name="timePeriod" id="">
	          <option value=""></option>
	        </select>

	    </p>
		Total Cost: <input type="number" name="totalCost"><br />	
		Estimated Production: <input type="number" name="estimatedProduction"><br />
		Land Type: <select name="landType" id="">
			<option value="high">High</option>
			<option value="low">Low</option>
			<option value="besidewater">Beside Water</option>
		</select><br />
		Water Source: <select name="waterSource" id="">
			<option value="river">River</option>
			<option value="pond">Pond</option>	 
		</select><br /><hr>
		Weak Tasks:<br />
		Week Number: <select name="weekNumber" id="">
			<?php 
			    for($i = 1; $i<=5; $i++){
                   echo '<option value="$i">$i</option>';
			    }
			 ?>
		</select><br />
        Fertilizer: <select name="fertilizerName" id="">
        	<?php 
	        foreach($fertilizerList as $fertilizer){
              echo '<option value="$fertilizer[Name]">$fertilizer[Name]</option>';
               } 
	         ?>
        </select><br />
        Insecticide: <select name="insecticideName" id="">
        	<?php 
	        foreach($insecticideList as $insecticide){
              echo '<option value="$insecticide[Name]">$insecticide[Name]</option>';
               } 
	         ?>
        </select><br />
        Task1: <input type="text" name="task1"><br />
        Task2: <input type="text" name="task2"><br />
        Other Tasks: <input type="text" name="task2"><br />
        <button type="button" name="add" value="Add"></button>
	    <hr><br /><br />
	
	<input type="submit" value="Save"/>
</form>