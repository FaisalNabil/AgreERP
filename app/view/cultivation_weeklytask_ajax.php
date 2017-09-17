<?php 
define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/AgriERP");
include_once(APP_ROOT."/core/cultivation_service.php");

if (isset($_POST['status']) && isset($_POST['weekid'])) {
	$cultivation_Weeklytask = array("StatusId"=>$_POST['status'], "DoneDate"=>$_POST['date'], "Cultivationweekid"=>$_POST['weekid']);
	if(editCultivation_Weeklytask($cultivation_Weeklytask))
	 	echo "Success";
}else{
	echo "Not Success";
}

?>