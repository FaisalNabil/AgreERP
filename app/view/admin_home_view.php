<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<a href="/AgriERP/?farmer_show">SHOW ALL FARMERS</a></br><hr>
<a href="/AgriERP/?fertilizer_add">ADD FERTILIZER</a> | <a href="/AgriERP/?fertilizer_show">SHOW ALL FERTILIZERS</a></br>
<a href="/AgriERP/?insecticide_add">ADD INSECTICIDE</a> | <a href="/AgriERP/?insecticide_show">SHOW ALL INSECTICIDES</a></br></br><hr>
<a href="/AgriERP/?region_add">ADD REGION</a> | <a href="/AgriERP/?region_show">SHOW ALL REGIONS</a></br>
<a href="/AgriERP/?status_add">ADD STATUS</a> | <a href="/AgriERP/?status_show">SHOW ALL STATUS</a></br></br><hr>
<a href="/AgriERP/?cropregion_add">ADD CROP</a> | <a href="/AgriERP/?cropregion_show">SHOW ALL CROPS</a></br></br>


