<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php 
  
  $name = "cultivation_history_view";
  include 'navbar-farmer.php';

?>
<div class="container">
<br /><h3>HISTORY</h3><hr/><br />
<table>
	<tr>
		<td><b>ID</b></td>
		<td><b>Crop Name</b></td>
		<td><b>Starting Date</b></td>
		<td><b>Ending Date</b></td>
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
					<td>$cultivation[EndDate]</td>
					<td><a href='/AgriERP/?cultivation_historydetails&cultivationid=$cultivation[CultivationId]'>DETAILS</a></td>
				</tr>";
			}
			
		}
	?>	
</table>
<br /><a href="/AgriERP/?home_farmer" class="btn btn-primary">BACK TO FARMER HOME</a>
<br /><hr />

</div>