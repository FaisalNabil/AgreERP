<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

 <?php include 'navbar.php'; ?>
<div class="container">

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
			if ($insecticide['Name']!='none') {
			echo"<tr>
					<td>$insecticide[Name]</td>
					<td>$insecticide[PricePerUnit]</td>
					<td>$insecticide[InsectName]</td>
					<td>$insecticide[DiseaseName]</td>

					<td><a href='/AgriERP/?insecticide_edit&id=$insecticide[InsecticideId]' class='btn btn-info'>edit</a></td>
					<td><a href='/AgriERP/?insecticide_delete&id=$insecticide[InsecticideId]' class='btn btn-info'>delete</a></td>
				</tr>";
			}
		}
	?>	
</table>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>
