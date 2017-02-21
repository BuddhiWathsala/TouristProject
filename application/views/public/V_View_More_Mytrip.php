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
    height:50px;
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
<link href=<?php echo $base."assets/bootstrap/css/bootstrap.min.css"; ?> rel=”stylesheet” type=”text/css” />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script type=”text/javascript” src="assets/bootstrap/js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<!-- ########################## This is nav bar ######################################################### -->
<div class="container-fluid">
  <div class="row"><!--start row 1-->
    <?php
      $this->load->view('includes/navigations/V_Main_Navigation_Active_Home');

    ?>
</div><!--end row 1-->
<!--#######################################End of nav bar #################################################-->

<!-- ###################################### start more trips ##################################################-->

<?php
if(isset($mytrip_more))
{
  $mytrip = $mytrip_more[0];
}
?>
<?php if(isset($mytrip_more)): ?>
  <div class="row"><!--start row 2-->
    <div class="col-md-6">
      <h2><?php echo $mytrip->trip_name;?>
    </div>
  </div><!--end row 2-->

  <div class="row" style="height:50%"><!--start row 3-->
    <div class="col-md-6">
      <img src=<?php echo $base.$mytrip->main_image; ?> class="img-rounded" alt="Cinque Terre" width="100%" height="100%" style="padding-right:10px;padding-bottom:10px">
    </div>

    <div class="col-md-6">
      <strong></strong>
    </div>
  </div><!--end row 3-->
  <?php
  $dir = $mytrip->img_album;
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
  <?php endif;?>

<!-- ###################################### end more trips ##################################################-->


</div> <!--end of container-->
</body>
</html>
