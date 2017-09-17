<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<?php

    $failed = "";
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$phone = $_POST['phone'];
		$pass = $_POST['password'];
		$farmer = getFarmerByPhonePassword($phone, $pass);
		//echo $farmer;
		if($farmer['Role'] == 'admin'){
			$_SESSION['farmerid']=$farmer['FarmerId'];
			$_SESSION['role']=$farmer['Role'];
			//echo $_SESSION['farmerid'];
			header('Location:?home_admin');
			exit();
		}
		else if($farmer['Role'] == 'farmer'){
			$_SESSION['farmerid']=$farmer['FarmerId'];
			$_SESSION['role']=$farmer['Role'];
			//echo $_SESSION['farmerid'];
			header('Location:?home_farmer');
			exit();
		}
		else
			$failed="Please enter right credential<br>";

		
		
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
      <ul class="nav navbar-nav pull-right">
        <li><a href="/AgriERP/?farmer_add"><span class="fa fa-user-plus"></span>REGISTER</a></li>
      </ul>
       
    </div>
  </div>
</nav>

<!-- <form method="POST">
	Phone: <input type="text" name="phone"><br><br>
	Password: <input type="password" name="password"><br><br>
	<input type="submit" value="LOGIN"/>
</form> -->


<div class="container">

  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control test" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo $failed; ?><br>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary loginBtnSub">Submit</button>
    </div>
  </div>
    
  </form>
</div>