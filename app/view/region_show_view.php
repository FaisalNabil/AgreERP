<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>

<div class="container">
<br /><h3>SHOW REGION</h3><hr/><br />
<table>
	<tr>
		<td><b>RegionNumber</b></td>
		<td><b>Area</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
	//print_r($regionList);
		foreach($regionList as $region){
			echo"<tr>
					<td>$region[RegionNumber]</td>
					<td>$region[Area]</td>
					 

					<td><a href='/AgriERP/?region_edit&id=$region[RegionId]' class='btn btn-info'>edit</a></td>
					<td><a href='/AgriERP/?region_delete&id=$region[RegionId]' class='btn btn-info'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>