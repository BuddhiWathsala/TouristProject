<?php $base = base_url();?>

<nav class="navbar-inverse  navbar-inverse offcanvas" style="margin-bottom:0px;z-index:9999;">
  <div class="container-fluid" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="z-index: 2;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome to Sri Lanka</a>
    </div>

    <ul class="nav navbar-nav" id="myNavbar">
      <li ><a href=<?php echo "$base/index.php/C_Public_Page_Navigate/home"; ?>>Home</a></li>
      <li class="active">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Places to go
       <span class="caret"></span></a>
       <ul class="dropdown-menu">
         <?php foreach ($places as $place)
         {
            echo "<li><a href=\"$base/index.php/C_Public_Page_Navigate/placesToGo/$place->place_id\">$place->place_name</a></li>";
         }

         ?>

       </ul>
     </li>
      <li><a href=<?php echo "$base/index.php/C_Public_Page_Navigate/thingsToDo/"; ?>>What you can do</a></li>
      <li><a href="#">Plan your trip</a></li>
    </ul>
  </div>
</nav>
