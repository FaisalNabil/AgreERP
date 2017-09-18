<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/AgriERP/?home_admin">AgriERP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/AgriERP/?farmer_show">SHOW ALL FARMERS</a></li>


        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CROP<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?cropregion_add">ADD CROP</a></li>
            <li><a href="/AgriERP/?cropregion_show">SHOW ALL CROP</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">FERTILIZER <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?fertilizer_add">ADD FERTILIZER</a></li>
            <li><a href="/AgriERP/?fertilizer_show">SHOW ALL FERTILIZERS</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">INSECTICIDE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?insecticide_add">ADD INSECTICIDE</a></li>
            <li><a href="/AgriERP/?insecticide_show">SHOW ALL INSECTICIDE</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">REGION <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?region_add">ADD REGION</a></li>
            <li><a href="/AgriERP/?region_show">SHOW ALL REGION</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">STATUS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?status_add">ADD STATUS</a></li>
            <li><a href="/AgriERP/?status_show">SHOW ALL STATUS</a></li>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/AgriERP/?farmer_edit&id=<?=$_SESSION['farmerid']?>">Change Password</a></li>
        <?php if($key!='login_logout' && $key!='login_show'){ ?>

        <li><a href="/AgriERP/?login_logout"><span class="fa fa-sign-out"></span>Logout</a></li>
        
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>