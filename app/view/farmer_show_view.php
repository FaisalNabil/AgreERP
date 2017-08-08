<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<br /><h3>SHOW FARMER</h3><hr/><br />
<table>
	<tr>
		<td><b>ID</b></td>
		<td><b>NAME</b></td>
		<td><b>PHONE</b></td>
		<td><b>ADDRESS</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($farmerList as $farmer){
			echo"<tr>
					<td>$farmer[FarmerId]</td>
					<td>$farmer[Name]</td>
					<td>$farmer[Address]</td>
					<td>$farmer[Phone]</td>
					<td><a href='/AgriERP/?farmer_edit&id=$farmer[FarmerId]'>edit</a></td>
					<td><a href='/AgriERP/?farmer_delete&id=$farmer[FarmerId]'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />