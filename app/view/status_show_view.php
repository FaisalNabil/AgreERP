<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<br /><h3>SHOW STATUS</h3><hr/><br />
<table>
	<tr>
		<td><b>Status Id</b></td>
		<td><b>Done Task</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
	//print_r($statusList);
		foreach($statusList as $status){
			echo"<tr>
					<td>$status[StatusId]</td>
					<td>$status[DoneTask]</td>
					 

					<td><a href='/AgriERP/?status_edit&id=$status[StatusId]'>edit</a></td>
					<td><a href='/AgriERP/?status_delete&id=$status[StatusId]'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />

<br /><hr />
<a href="/AgriERP/?home_admin">BACK TO ADMIN PANEL</a>
<br />