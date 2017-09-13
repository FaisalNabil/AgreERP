<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<br /><h3>HISTORY</h3><hr/><br />
<table>
	<tr>
		<td><b>ID</b></td>
		<td><b>Crop Name</b></td>
		<td><b>Starting date</b></td>
		<td><b>Starting date</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($cultivationList as $cultivation){
			$cropName=getCropById($cultivation['CropId']);
			if ($cultivation['Status']=='Ended') {
				echo"<tr>
					<td>$cultivation[CultivationId]</td>
					<td>$cropName[Name]</td>
					<td>$cultivation[StartDate]</td>
					<td><a href='/AgriERP/?cultivation_details&cultivationid=$cultivation[CultivationId]'>Details</a></td>
				</tr>";
			}
			
		}
	?>	
</table>
<br /><hr />