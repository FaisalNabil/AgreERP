<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['FertilizerId'];
		
		if(removeFertilizer($id)){
			echo "Record Deleted!";
		}
	}
?>
<div class="container">
<form method="post">
	<br /><h3>DELETE FERTILIZER</h3><hr/><br />
	Id: <?=$fertilizer['FertilizerId']?><input type="hidden" name="FertilizerId" value="<?=$fertilizer['FertilizerId']?>"/><br />
	Name: <?=$fertilizer['Name']?><br />
	PricePerUnit: <?=$fertilizer['PricePerUnit']?><br />
	
	<input type="submit" value="Delete"/>
	<a href="/AgriERP/?fertilizer_show" class="btn btn-primary">SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>
