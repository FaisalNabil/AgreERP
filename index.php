<?php

session_start();
	//var_dump($GLOBALS);
	define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/AgriERP");

	$hasError=true;
	if(count($_GET)>0){
		$key = array_keys($_GET)[0];
		
		$path = explode("_", $key);
		if(count($path)==2){
			$hasError = false;
			
			$controller = $path[0];
			$view = $path[1];
			
			$isDispatchedByFrontController=true;
			include_once(APP_ROOT."/app/controller/".$controller."_controller.php");				
		}
	}
	if($hasError){
		include_once(APP_ROOT."/app/error.php");
	}
?>