<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<br /><h3>WEEKLY TASKS FOR CROP:</h3><hr/><br />
<table>
	<tr>
		<td><b>Week No</b></td>
		<td><b>Fertilizer task</b></td>
		<td><b>Insecticide task</b></td>
		<td><b>other task</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
	//print_r($crop_WeeklytaskList);
	$cropId=$_GET['cropid'];
		foreach($crop_WeeklytaskList as $crop_Weeklytask){
			echo"<tr>
					<td>$crop_Weeklytask[WeekNumber]</td>
					<td>$crop_Weeklytask[FertilizerTask]</td>
					<td>$crop_Weeklytask[InsecticideTask]</td>
					<td>$crop_Weeklytask[OtherTask]</td>
					<td><a href='/AgriERP/?cropweeklytask_edit&id=$crop_Weeklytask[WeekId]'>edit</a></td>
					<td><a href='/AgriERP/?cropweeklytask_delete&id=$crop_Weeklytask[WeekId]&cropid=$cropId'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />