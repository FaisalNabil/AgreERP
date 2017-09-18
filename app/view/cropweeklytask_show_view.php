<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<div class="container">

<br /><h3>WEEKLY TASKS FOR CROP: <?=$crop['Name']?></h3><hr/><br />
<table>
	<tr>
		<td><b>Week No</b></td>
		<td><b>Fertilizer to be used</b></td>
		<td><b>Fertilizer task</b></td>
		<td><b>Insecticide to be used</b></td>
		<td><b>Insecticide task</b></td>
		<td><b>other task</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
	//print_r($crop_WeeklytaskList);
	$cropId=$_GET['cropid'];
		foreach($crop_WeeklytaskList as $crop_Weeklytask){
			$fertilizer = getFertilizerById($crop_Weeklytask['CropFertSysId']);
			$insecticide = getInsecticideById($crop_Weeklytask['CropInsectSysId']);
			echo"<tr>
					<td>$crop_Weeklytask[WeekNumber]</td>
					<td>$fertilizer[Name]</td>
					<td>$crop_Weeklytask[FertilizerTask]</td>
					<td>$insecticide[Name]</td>
					<td>$crop_Weeklytask[InsecticideTask]</td>
					<td>$crop_Weeklytask[OtherTask]</td>
					<td><a href='/AgriERP/?cropweeklytask_edit&id=$crop_Weeklytask[WeekId]' class='btn btn-info'>edit</a></td>
					<td><a href='/AgriERP/?cropweeklytask_delete&id=$crop_Weeklytask[WeekId]&cropid=$cropId' class='btn btn-info'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<a href='/AgriERP/?cropweeklytask_add&id=<?=$cropId?>' class="btn btn-primary">ADD NEW</a>
<br /><hr />

</div>
