<?php 
define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/AgriERP");
include_once(APP_ROOT."/core/cultivation_service.php");

if (isset($_POST['cost']) && isset($_POST['weekid'])) {
	$cultivation_WeeklytaskCost = array("WeeklyCost"=>$_POST['cost'], "Cultivationweekid"=>$_POST['weekid']);
	if(editCultivation_WeeklytaskCost($cultivation_WeeklytaskCost))
	 	echo "Success";
}else{
	echo "Not Success";
}

?>