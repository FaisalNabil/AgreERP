<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

 <?php include 'navbar.php'; ?>

<br /><h3>SHOW FARMER</h3><hr/><br />
<table>
	<tr>
		<td><b>NAME</b></td>
		<td><b>PricePerUnit</b></td>
		<td><b>InsectName</b></td>
		<td><b>DiseaseName</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
	//print_r($insecticideList);
		foreach($insecticideList as $insecticide){
			echo"<tr>
					<td>$insecticide[Name]</td>
					<td>$insecticide[PricePerUnit]</td>
					<td>$insecticide[InsectName]</td>
					<td>$insecticide[DiseaseName]</td>

					<td><a href='/AgriERP/?insecticide_edit&id=$insecticide[InsecticideId]'>edit</a></td>
					<td><a href='/AgriERP/?insecticide_delete&id=$insecticide[InsecticideId]'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />

<br /><hr />
<a href="/AgriERP/?home_admin">BACK TO ADMIN PANEL</a>
<br />
