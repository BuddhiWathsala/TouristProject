  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base = base_url();
?>

<html >
<head>
<style>
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    width: 100%;
    height:400px;
    margin: auto;
}
</style>

<style>
  .navbar{
    height: 45px;
    background-color: blue;
  }




</style>
<title>Sri Lanka</title>
<link rel="stylesheet" href=<?php echo $base."assets/bootstrap/css/bootstrap.min.css";?> />
<link rel="stylesheet" href=<?php echo $base."assets/my/css/footer_css.css";?> />
<script type=”text/javascript” src=<?php echo $base."assets/bootstrap/js/bootstrap.min.js" ;?>></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />

</head>
<body>
<!-- ########################## This is nav bar ######################################################### -->
<div class="container-fluid">
  <div class="row"><!--start row 1-->
    <?php

      $this->load->view('includes/navigations/V_Main_Navigation_Active_Home',$places);

    ?>
</div><!--end row 1-->
<!--#######################################End of nav bar #################################################-->
<!--#######################################Start slider #################################################-->
<br/>
<div class="row" ><!--start row 2-->
  <div class="col-sm-12" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" height="700px" >
        <?php
          //print_r($slider_images);
          $i=0;
          foreach ($slider_images as $image)
          {

            $current_image = $image->img_path;
            if($i == 0)
            {
              echo "<div class=\"item active\">";
              echo "<img src=".$base.$current_image." style=\"height:500px;\">";
              echo "</div>";
              $i++;
            }else
            {
              echo "<div class=\"item\">";
              echo "<img src=".$base.$current_image." style=\"height:500px;\">";
              echo "</div>";
            }

          }
        ?>

      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div><!--end col-->
</div><!--end row 2-->

<!-- ###################################### end of image slider ##################################################-->
<!-- ###################################### start trips ##################################################-->
<div class="row"><!--start row 3-->
  <h2>&nbsp&nbsp My Trips</h2>

</div><!--end row 3-->
<div class="row">
<?php

    if(isset($my_trip))
      {
        $i = 0;
        $base = base_url();
        foreach ($my_trip as $trip)
        {
          if($i%3 == 0)
          {
            echo "</div>";
            echo "<div class=\"row\" style=\"padding-left:10px;\">";
            echo "<div class=\"col-sm-12 col-md-4\">";
            echo "<div class=\"panel panel-success\">";
            echo "<div class=\"panel-heading\">";
            echo "<h3 class=\"panel-title\">$trip->trip_name</h3>";
            echo "</div>";
            echo "<div class=\"panel-body\">";
            echo "<div class=\"row\" style=\"padding-left:10px;\">";
            echo "<img src=".$base.($trip->main_image)." class=\"img-rounded\" alt=\"Cinque Terre\" width=\"100%\" height=\"160px\" style=\"padding-right:10px\">";
            echo "</div><br />";
            echo "<div class=\"row\" style=\"padding-left:10px;\">";
            echo "<strong>Destination : </strong>".$trip->destination."<br />";
            echo "<strong>Description : </strong>".$trip->description."<br />";
            echo "<br/><strong><a align=\"right\" href=\"$base/index.php/C_Public_Page_Navigate/viewMoreMyTrip/$trip->trip_id\">View more</a></strong>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }else
          {
            echo "<div class=\"col-sm-12 col-md-4\">";
            echo "<div class=\"panel panel-success\">";
            echo "<div class=\"panel-heading\">";
            echo "<h3 class=\"panel-title\">$trip->trip_name</h3>";
            echo "</div>";
            echo "<div class=\"panel-body\">";
            echo "<div class=\"row\" style=\"padding-left:10px;\">";
            echo "<img src=".$base.($trip->main_image)." class=\"img-rounded\" alt=\"Cinque Terre\" width=\"100%\" height=\"160px\" style=\"padding-right:10px\">";
            echo "</div><br />";
            echo "<div class=\"row\" style=\"padding-left:10px;\">";
            echo "<strong>Destination : </strong>".$trip->destination."<br />";
            echo "<strong>Description : </strong>".$trip->description."<br />";
            echo "<br/><strong><a align=\"right\" href=\"$base/index.php/C_Public_Page_Navigate/viewMoreMyTrip/$trip->trip_id\">View more</a></strong>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

          }
          $i++;
        }

      }
      ?>
<!-- ###################################### end trips ##################################################-->
<!-- ###################################### start places to go ##################################################-->

<div class="row"><!--start row 4-->
  <h2>&nbsp&nbsp Places to go</h2>

  <?php
      if(isset($places))
        {
          $i = 0;
          $base = base_url();
          foreach ($places as $place)
          {
            if($i%3 == 0)
            {
              echo "</div>";
              echo "<div class=\"row\" style=\"padding-left:10px;\">";
              echo "<div class=\"col-sm-12 col-md-4\">";
              echo "<div class=\"panel panel-success\">";
              echo "<div class=\"panel-heading\">";
              echo "<h3 class=\"panel-title\">$place->place_name</h3>";
              echo "</div>";
              echo "<div class=\"panel-body\">";
              echo "<div class=\"row\" style=\"padding-left:10px;\">";
              echo "<img src=".$base.($place->main_image)." class=\"img-rounded\" alt=\"Cinque Terre\" width=\"100%\" height=\"160px\" style=\"padding-right:10px\">";
              echo "</div><br />";
              echo "<div class=\"row\" style=\"padding-left:10px;\">";
              echo "<br/><strong><a align=\"right\" href=\"$base/index.php/C_Public_Page_Navigate/viewMoreMyTrip/$place->place_id\">View more</a></strong>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            }else
            {
              echo "<div class=\"col-sm-12 col-md-4\">";
              echo "<div class=\"panel panel-success\">";
              echo "<div class=\"panel-heading\">";
              echo "<h3 class=\"panel-title\">$place->place_name</h3>";
              echo "</div>";
              echo "<div class=\"panel-body\">";
              echo "<div class=\"row\" style=\"padding-left:10px;\">";
              echo "<img src=".$base.($place->main_image)." class=\"img-rounded\" alt=\"Cinque Terre\" width=\"100%\" height=\"160px\" style=\"padding-right:10px\">";
              echo "</div><br />";
              echo "<div class=\"row\" style=\"padding-left:10px;\">";
              echo "<br/><strong><a align=\"right\" href=\"$base/index.php/C_Public_Page_Navigate/viewMoreMyTrip/$place->place_id\">View more</a></strong>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";

            }
            $i++;
          }

        }
        ?>



</div><!--end row 4-->
<!-- ###################################### end places to go ##################################################-->



</div> <!--end of container-->

<!--#######################################start footer #################################################-->
<?php
  $this->load->view('includes/navigations/V_Main_Footer');

?>
<!--#######################################End footer #################################################-->


</html>
