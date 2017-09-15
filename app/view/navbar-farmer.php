

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/AgriERP/?home_farmer">AgriERP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($name == 'crops_show_view')? 'active':'' ?>" ><a href="/AgriERP/?cultivation_cropshow">LIST OF CROPS</a></li>
        <li class="<?php echo ($name == 'cultivation_show_view')? 'active':'' ?>" ><a href="/AgriERP/?cultivation_show">ONGOING CULTIVATIONS</a></li>
        <li class="<?php echo ($name == 'cultivation_history_view')? 'active':'' ?>" ><a href="/AgriERP/?cultivation_history">HISTORY</a></li>
        <li class="<?php echo ($name == 'crops_by_system_show_view')? 'active':'' ?>" ><a href="/AgriERP/?cultivation_cropshowbysystem">GET SUGGESTION</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if($key!='login_logout' && $key!='login_show'){ ?>

        <li><a href="/AgriERP/?login_logout"><span class="fa fa-sign-out"></span>Logout</a></li>
        
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>