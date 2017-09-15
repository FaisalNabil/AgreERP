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
		<td><b>PHONE</b></td>
		<td><b>DISTRICT</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($farmerList as $farmer){
			if($farmer['Role']!='admin'){
				echo"<tr>
						<td>$farmer[Name]</td>
						<td>$farmer[Phone]</td>
						<td>$farmer[District]</td>
						<td><a href='/AgriERP/?farmer_edit&id=$farmer[FarmerId]'>EDIT</a></td>
						<td><a href='/AgriERP/?farmer_delete&id=$farmer[FarmerId]'>DELETE</a></td>
					</tr>";
				}
		}
	?>	
</table>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />

</div>