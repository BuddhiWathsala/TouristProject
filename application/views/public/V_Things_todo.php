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
<?php
  if(isset($all_todo))
  {
    $i = 1;
    foreach ($all_todo as $todo)
    {
      if($i%4==0)
      {
  ?>
</div>
<div class="row">
  <div class="col-md-3">
    <a class="thumbnail" href=<?php echo "$base/index.php/C_Public_Page_Navigate/viewMoreTodo/$todo->id";?>>
      <img class="img-responsive" src=<?php echo $base.$todo->main_image;?> alt="">
    </a>
  </div>
</div>
<?php
}else{
?>

<div class="col-md-3">
  <a class="thumbnail" href=<?php echo "$base/index.php/C_Public_Page_Navigate/viewMoreTodo/$todo->id";?>>
    <img class="img-responsive" src=<?php echo $base.$todo->main_image;?> alt="" style="height:50%;weight:100%;">
    <span><b><?php echo $todo->name;?><b><span>
  </a>
</div>
<?php
      }//end else
    }//end foreach
  }//end if
?>
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
