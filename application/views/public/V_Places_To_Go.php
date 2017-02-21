<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base = base_url();
?>

<html >
<head>

<title>Sri Lanka</title>
<link rel="stylesheet" href=<?php echo $base."assets/bootstrap/css/bootstrap.min.css";?> />
<link rel="stylesheet" href=<?php echo $base."assets/my/css/footer_css.css";?> />
<script type=”text/javascript” src=<?php echo $base."assets/bootstrap/js/bootstrap.min.js";?> ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />

</head>
<body>
<!-- ########################## This is nav bar ######################################################### -->
<?php
  $this->load->view('includes/navigations/V_Main_Navigation_Active_Places',$places);

?>
<div class="container-fluid" style="margin-left:0px;">

    <!--#######################################End of nav bar #################################################-->
    <!--#######################################start image and map#################################################-->

    <div class="row" style="height:50%;width:100%;margin-top:10px;margin-left:2%;">
      <div class="col-md-3">
         <img class="img-responsive" src=<?php echo $base.$specific_place[0]->main_image; ?> style="height:100%;width:100%;" alt="Chania">

      </div><!--end col-->
      <div class="col-xs-12 col-md-6" style="">
            <div id="map"></div>
              <script>
                function initMap() {
                  var uluru = {lat: <?php echo $specific_place[0]->latitude;?>, lng: <?php echo $specific_place[0]->longitude;?>};
                  var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: uluru
                  });
                  var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                  });
                }
              </script>
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNqwqKoRsL1nxEwDoYzfo_tlZRZEBR-kU&callback=initMap">
              </script>
            </div>
      </div><!--end inside row 1-->
      <br>
      <div class="row" style="height:15%;margin-left:2%;"><!--start inside row 2-->
        <div class="col-xs-12 col-md-12">
        <p class="text-success"><?php echo $specific_place[0]->description;?></p>
      </div>
      </div><!--end inside row 2-->
      <!--#######################################End image and map #################################################-->
      <!--#######################################start images #################################################-->
      <div class="row" style="height:20%;margin-left:2%;">

      <?php if(isset($specific_place)): ?>
        <?php
        $dir = $specific_place[0]->image_album;
        //echo "$dir";

        if (is_dir($dir))
        {
        if ($dh = opendir($dir))
        {
          $j = 1;
          while (($file = readdir($dh)) !== false)
          {
            if((stripos($file,'.jpg')>0)||(stripos($file,'.png')>0)||(stripos($file,'.jpeg')>0))
            {
              $image = $base.$dir."/".$file;
              if($j%5 == 0)
              {


                echo "</div>";
                echo "<br/>";
                echo "<div class=\"row\" style=\"height:15%;margin-left:2%;\">";
                echo "<div class=\"col-xs-12 col-md-2\">";
                echo "<img src=\"$image\" class=\"img-rounded\" alt=\"Cinque Terre\" width=\"100%\" height=\"100%\" style=\"padding-right:1px;padding-bottom:1px\">";
                echo "</div>";
              }else {


                echo "<div class=\"col-xs-12 col-md-2\">";
                echo "<img src=\"$image\" class=\"img-rounded\" alt=\"Cinque Terre\" width=\"100%\" height=\"100%\" style=\"padding-right:1px;padding-bottom:1px\">";
                echo "</div>";
              }
              $j++;

            }

          }
          closedir($dh);
        }
      }
      ?>
        <?php endif;?>

      </div>



<br>

  <!--#######################################End images #################################################-->


<!--#######################################start footer #################################################-->
  <div class="row"><!--start row 2-->
    <div class="col-xs-12 col-md-12">
  <?php
    $this->load->view('includes/navigations/V_Main_Footer');

  ?>
</div>
  </div><!--ebd row2-->
</div><!--end container-->
<!--#######################################End footer #################################################-->

</body>
</html>
