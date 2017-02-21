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
  $this->load->view('includes/navigations/V_Main_Navigation_Active_todo',$places);

?>
<div class="container-fluid" style="margin-left:0px;">

<!--#######################################End of nav bar #################################################-->
<!--#######################################start todo #################################################-->
<div class="row">
  <br>
  <?php

  $dir = $todo[0]->image_path;


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
        if($j%4 == 0)
        {
          echo "</div>";
          echo "<br/>";
          echo "<div class=\"row\"  >";
          echo "<div class=\"col-xs-6 col-md-3\">";
          echo "<img src=\"$image\" class=\"img-rounded\" alt=\"Cinque Terre\" width=\"100%\" height=\"40%\" style=\"padding-right:10px;padding-bottom:10px\">";
          echo "</div>";
        }else {
          echo "<div class=\"col-xs-6 col-md-3\">";
          echo "<img src=\"$image\" class=\"img-rounded\" alt=\"Cinque Terre\" width=\"100%\" height=\"40%\" style=\"padding-right:10px;padding-bottom:10px\">";
          echo "</div>";
        }
      }

    }
    closedir($dh);
  }
}
?>
</div>
<!--#######################################End todo #################################################-->


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
