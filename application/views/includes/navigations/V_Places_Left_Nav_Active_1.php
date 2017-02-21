

<div class="navbar navbar-inverse navbar-fixed-left" id="myLeftNavbar">


  <ul class="nav navbar-nav">
    
    <?php
    foreach ($places as $place)
    {
      echo "<li><a href=\"#\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i>&nbsp $place->place_name</a></li>";
    }

    ?>

  </ul>
</div>
