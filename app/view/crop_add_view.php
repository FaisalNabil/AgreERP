<?php include 'header.php'; ?>

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
		$CropGroupName = $_POST['CropGroupName'];
		$region = $_POST['region'];
		$TimePeriod = $_POST['TimePeriod'];
		$TotalCost = $_POST['TotalCost'];
		$EstimatedProduction = $_POST['EstimatedProduction'];
		$LandType = $_POST['LandType'];
		$WaterSource = $_POST['WaterSource'];

		 
	}
?>
 
<div class="container">
  <div class="login-header text-center">
      <h2>Crops</h2>
  </div>
   <div class="row">
      <div class="col-md-4">
         <form method="post" >

          <div class="form-group">
            <label for="CropId">Crops Id:</label>
            <input type="text" class="form-control" id="CropId" placeholder="Enter Crop Id" name="cropId">
          </div>

          <div class="form-group">
            <label for="CropName">Crops Name:</label>
            <input type="text" class="form-control" id="CropName" placeholder="Enter Crops Name" name="cropName">
          </div>

          <div class="form-group">
            <label for="group">Crops Group Name:</label>
            <input type="text" class="form-control" id="group" placeholder="Enter Crops Group Name" name="CropGroupName">
          </div>

          <div class="form-group">
            <label for="region">Select Region:</label>
              <select name="region">
                <option>Select Region</option>
                    <?php 
		                $regionList = getAllRegion();
				        foreach($regionList as $region){
			              echo '<option value="'.$region["Area"].'">'.$region["Area"].'</option>';
			            }
			        ?>
                </select>
          </div>

          <div class="form-group">
            <label for="TimePeriod">Time Period: </label>
              <select name="TimePeriod">
                <option>Select Any One</option>
                <option>January-April</option>
                <option>May-Aug</option>
                <option>Sep-Dec</option>
              </select>
          </div>

          <div class="form-group">
            <label for="cost">Total Cost:</label>
            <input type="text" class="form-control" id="cost" placeholder="Enter Total Cost" name="TotalCost">
          </div>

          <div class="form-group">
            <label for="cost">Estimated Production:</label>
            <input type="text" class="form-control" id="cost" placeholder="Enter Estimated Production" name="EstimatedProduction">
          </div>

          <div class="form-group">
            <label for="cost">Land Type:</label>
            <select name="LandType">
              <option value="উঁচু">উঁচু</option>
              <option value="নিছু">নিছু</option>
              <option value="উঁচু">পানির ধারে</option>
            </select>
          </div>

          <div class="form-group">
             <label for="filed">Water Source:</label>
             <select name="WaterSource" class="water-source">
                <option value="নদী">নদী</option>
                <option value="পুকুর্">পুকুর্</option>
                <option value="সেচ">সেচ</option>
             </select>
          </div>

          <div class="form-group">
            <div class="panel-group">
              <div class="panel panel-primary" style="width: 646px;">
                <div class="panel-heading text-center">Fertilizer</div>
                <div class="panel-body">
             <div class="option-control">
               <label for="week">Select Week:</label>
               <select id="week" name="week">
                  <?php for($i = 1; $i<=5; $i++){ 
                      echo "<option value='week$i'>week$i</option>";
                  	}?>
                     
               </select>
               <label for="fertilizer">Select fertilizer Name:</label>
               <select id="fertilizer" name="fertilizer">
                      
                  <?php 
                       $fertilizerList = getAllFertilizer();
                  foreach( $fertilizerList as $fertilizer){ 
                      echo "<option value='".$fertilizer['Name']."'>".$fertilizer['Name']."</option>";
                  	}?>
                     
               </select>
             </div>
             <div class="textAreaControl">
              <textarea name="" id="FertilizerTask" cols="10" rows="3"style="width: 353px; height: 61px; margin-left: 4px;margin-top: 10px;" placeholder="Write Something task this week.."></textarea>
             </div>
             <button type="submit" id="fertilizerBtn" class="btn btn-info" style="margin-left: 401px;margin-top: -65px;">Add</button>
              
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Week</th>
						  <th>Fertilizer</th>
                          <th>Task</th> 
                        </tr>
                      </thead>
                      <tbody id="fertilizerList">
                      </tbody>
                    </table>
                </div>
              </div>  
            </div>
          </div>
          <div class="form-group">
            <div class="panel-group">
              <div class="panel panel-primary" style="width: 646px;">
                <div class="panel-heading text-center">Insecticide</div>
                <div class="panel-body">
             <div class="option-control">
               <label for="week">Select Week:</label>
               <select id="weekName" name="week">
                  <?php for($i = 1; $i<=5; $i++){ 
                      echo "<option value='week$i'>week$i</option>";
                  	}?>
                     
               </select>
               <label for="insecticide">Select Insecticide Name:</label>
               <select id="insecticide" name="insecticide">
                      
                  <?php 
                       $insecticideList = getAllInsecticide();
                  foreach( $insecticideList as $insecticide){ 
                      echo "<option value='".$insecticide['Name']."'>".$insecticide['Name']."</option>";
                  	}?>
                     
               </select>
             </div>
             <div class="textAreaControl">
              <textarea name="" id="InserticideTask" cols="10" rows="3"style="width: 353px; height: 61px; margin-left: 4px;margin-top: 10px;" placeholder="Write Something task this week.."></textarea>
             </div>
             <button type="submit" id="insecticideBtn" class="btn btn-info" style="margin-left: 401px;margin-top: -65px;">Add</button>
              
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Week</th>
						  <th>insecticide</th>
                          <th>Task</th> 
                        </tr>
                      </thead>
                      <tbody id="insecticideList">
                      </tbody>
                    </table>
                </div>
              </div>  
            </div>
          </div>

          <div class="form-group">
            <div class="panel-group">
              <div class="panel panel-primary" style="width: 646px;">
                <div class="panel-heading text-center">Other Task</div>
                <div class="panel-body">
             <div class="option-control">
               <label for="week">Select Week:</label>
               <select id="otherTaskweekName" name="week">
                  <?php for($i = 1; $i<=5; $i++){ 
                      echo "<option value='week$i'>week$i</option>";
                  	}?>
                     
               </select>
             </div>
             <div class="textAreaControl">
              <textarea name="" id="otherTask" cols="10" rows="3"style="width: 353px; height: 61px; margin-left: 4px;margin-top: 10px;" placeholder="Write Something task this week.."></textarea>
             </div>
             <button type="submit" id="otherTaskBtn" class="btn btn-info" style="margin-left: 401px;margin-top: -65px;">Add</button>
              
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Week</th>
                          <th>Task</th> 
                        </tr>
                      </thead>
                      <tbody id="otherTaskList">
                      </tbody>
                    </table>
                </div>
              </div>  
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
   </div>
     
</div>



<?php include 'footer.php'; ?>