<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<a href="/AgriERP/?farmer_add">ADD FARMER</a> | <a href="/AgriERP/?farmer_show">SHOW FARMER</a></br>
<a href="/AgriERP/?fertilizer_add">ADD FERTILIZER</a> | <a href="/AgriERP/?fertilizer_show">SHOW FERTILIZER</a></br>
<a href="/AgriERP/?insecticide_add">ADD INSECTICIDE</a> | <a href="/AgriERP/?insecticide_show">SHOW INSECTICIDE</a></br></br>
<a href="/AgriERP/?region_add">ADD REGION</a> | <a href="/AgriERP/?region_show">SHOW REGION</a></br>
<a href="/AgriERP/?status_add">ADD STATUS</a> | <a href="/AgriERP/?status_show">SHOW STATUS</a></br></br>
<a href="/AgriERP/?cropregion_add">ADD CROP</a> | <a href="/AgriERP/?cropregion_show">SHOW CROP</a></br></br>

<?php
session_start();
 echo 'Session';
 echo $_SESSION['farmerid'];
 ?>
