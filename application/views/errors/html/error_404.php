<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</body>
</html> -->

<?php 
$_SERVER['HTTP_HOST']
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Error 404! | </title>

    <?php 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on"){
    ?>
    <!-- Bootstrap -->
    <link href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/custom.css" rel="stylesheet">
	<?php }else{?>
	<!-- Bootstrap -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/custom.css" rel="stylesheet">
	<?php } ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number" style="color: #E54E4E"><?php echo $heading; ?></h1>
              <p><?php echo $message; ?> </p>
              <h2>Kami tidak menemukan halaman yang anda pilih</h2>
              <div class="mid_center">
               <button type="button" onclick="window.history.go(-1);" class="btn btn-lg btn-round btn-danger"><span class="fa fa-history"></span> Halaman Sebelumnya</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

    <?php 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on"){
    ?>
    <!-- jQuery -->
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/js/custom.js"></script>
	<?php }else{?>
	<!-- jQuery -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/js/custom.js"></script>
	<?php } ?>
  </body>
</html>
