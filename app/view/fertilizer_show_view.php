<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>

<div class="container">

<br /><h3>SHOW FERTILIZER</h3><hr/><br />
<table>
	<tr>
		<td><b>NAME</b></td>
		<td><b>PricePerUnit</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($fertilizerList as $fertilizer){
			if ($fertilizer['Name']!='none') {
				echo"<tr>
					<td>$fertilizer[Name]</td>
					<td>$fertilizer[PricePerUnit]</td>

					<td><a href='/AgriERP/?fertilizer_edit&id=$fertilizer[FertilizerId]' class='btn btn-info'>edit</a></td>
					<td><a href='/AgriERP/?fertilizer_delete&id=$fertilizer[FertilizerId]' class='btn btn-info'>delete</a></td>
				</tr>";
			}
			
		}
	?>	
</table>
<br /><hr />

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary"> BACK TO ADMIN PANEL</a>
<br />

</div>