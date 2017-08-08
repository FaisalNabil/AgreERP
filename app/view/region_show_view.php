<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<br /><h3>SHOW REGION</h3><hr/><br />
<table>
	<tr>
		<td><b>RegionId</b></td>
		<td><b>RegionNumber</b></td>
		<td><b>Area</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($regionList as $region){
			echo"<tr>
					<td>$region[regionId]</td>
					<td>$region[RegionNumber]</td>
					<td>$region[Area]</td>
					 

					<td><a href='/AgriERP/?region_edit&id=$region[regionId]'>edit</a></td>
					<td><a href='/AgriERP/?region_delete&id=$region[regionId]'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />