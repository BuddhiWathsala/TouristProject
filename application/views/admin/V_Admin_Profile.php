<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base = base_url();
?>

<html >
<head>
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
<?php
  $this->load->view('includes/navigations/V_Main_Navigation_Active_Home');
  $this->load->view('includes/navigations/V_Admin_Left_Navigation_Active_Profile');
?>
<!--#######################################End of nav bar #################################################-->
<div class="container">
  <div class="row">
     <img src=<?php  echo $base."images/2.jpg" ;?> class="img-rounded" alt="Cinque Terre" width="304" height="236">
  </div>

</div><!--end container-->
</body>
</html>
