<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<a href="/AgriERP/?cultivation_cropshow">LIST OF CROPS</a> | <a href="/AgriERP/?cultivation_show">ONGOING CULTIVATIONS</a> | <a href="/AgriERP/?cultivation_history">HISTORY</a>