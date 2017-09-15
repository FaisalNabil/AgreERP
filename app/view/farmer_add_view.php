<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['password'])){	
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$district = $_POST['district'];
		$password = $_POST['password'];
		$farmer = array("Name"=>$name, "District"=>$district, "Phone"=>$phone, "Password"=>$password, "Role"=>"farmer");
		if(addFarmer($farmer)){
			echo "Record Added!";
		}
	}
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/AgriERP/?home_show">AgriERP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($name == 'crops_show_view')? 'active':'' ?>" ><a href="/AgriERP/?cultivation_cropshow">LIST OF CROPS</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        

        <li><a href="/AgriERP/?login_show"><span class="fa fa-sign-out"></span>LOGIN</a></li>
 
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<form method="post">
   <fieldset>
	 
	<legend>REGISTER FARMER:</legend>
	Name:<br /><input type="text" name="name"/><br />
	Phone:<br /><input type="text" name="phone"/><br />
	District:<br /><input type="text" name="district"/><br /><hr />
	Password: <br /><input type="text" name="password"><br>
	<input type="submit" class="btn btn-primary" value="Done"/>
   </fieldset>
</form>
</div>
 

