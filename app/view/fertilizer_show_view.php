<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<br /><h3>SHOW FERTILIZER</h3><hr/><br />
<table>
	<tr>
		<td><b>FertilizerId</b></td>
		<td><b>NAME</b></td>
		<td><b>PricePerUnit</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($fertilizerList as $fertilizer){
			echo"<tr>
					<td>$fertilizer[FertilizerId]</td>
					<td>$fertilizer[Name]</td>
					<td>$fertilizer[PricePerUnit]</td>

					<td><a href='/AgriERP/?fertilizer_edit&id=$fertilizer[FertilizerId]'>edit</a></td>
					<td><a href='/AgriERP/?fertilizer_delete&id=$fertilizer[FertilizerId]'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />
