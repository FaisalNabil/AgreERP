<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>

<br /><h3>SHOW FERTILIZER</h3><hr/><br />
<table>
	<tr>
		<td><b>NAME</b></td>
		<td><b>PricePerUnit</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($fertilizerList as $fertilizer){
			echo"<tr>
					<td>$fertilizer[Name]</td>
					<td>$fertilizer[PricePerUnit]</td>

					<td><a href='/AgriERP/?fertilizer_edit&id=$fertilizer[FertilizerId]'>edit</a></td>
					<td><a href='/AgriERP/?fertilizer_delete&id=$fertilizer[FertilizerId]'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />

<br /><hr />
<a href="/AgriERP/?home_admin">BACK TO ADMIN PANEL</a>
<br />
