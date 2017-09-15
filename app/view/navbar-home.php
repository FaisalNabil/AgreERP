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
        <li class="<?php echo ($name == 'farmerCropSelectList_show_view')? 'active':'' ?>" ><a href="/AgriERP/?cultivation_cropshow">LIST OF CROPS</a></li>
 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        

        <li><a href="/AgriERP/?login_show"><span class="fa fa-sign-out"></span>LOGIN</a></li>
        <li><a href="/AgriERP/?farmer_add"><span class="fa fa-user-plus"></span>REGISTER</a></li>
 
      </ul>
    </div>
  </div>
</nav>