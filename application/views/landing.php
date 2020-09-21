<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Author Meta -->
	<meta name="author" content="sicakep">
	<!-- Meta Description -->
	<meta name="Sistem Pencatatan Kesehatan" content="">
	<!-- Meta Keyword -->
	<meta name="sicakep, windstand" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>SIPENTING | Sistem Pengidetifikasi Balita Stunting</title>
	<link rel="shortcut icon" href="<?php echo base_url('build/images/logopenting.png');?>" type="image/x-icon"/>

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url('assets_landing/css/linearicons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets_landing/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets_landing/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets_landing/css/magnific-popup.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets_landing/css/nice-select.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets_landing/css/animate.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets_landing/css/owl.carousel.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets_landing/css/main.css');?>">
</head>

<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="<?php echo site_url('landing_page'); ?>"><img src="<?php echo base_url('assets_landing/img/logokecil.png');?>" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="<?php echo site_url('landing_page'); ?>">Home</a></li>
						<!-- <li><a href="about.html">About</a></li> -->
						<li class="menu-has-children"><a href="#">Akun</a>
							<ul>
								<li><a href="<?php echo site_url('c_login');?>">Login</a></li>
								<li><a href="<?php echo site_url('c_login/register');?>">Register</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="wow fadeIn" data-wow-duration="4s" style="color: #686868">Sistem Pengidentifikasi <br> Balita Stunting</h1>
					<p class="text-sicaket">
						SIPENTING (Sistem Pengidetifikasi Balita Stunting) merupakan sekumpulan komponen yang bekerja sama menghasilkan informasi untuk mencapai tujuan yaitu mengindentifikasi stunting pada balita.
					</p>
				</div>
			</div>
		</div>
		<!-- <div class="rocket-img">
			<img src="<?php echo base_url('assets_landing/img/rocket.png');?>" alt="">
		</div> -->
	</section>
	<!-- End Banner Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="<?php echo base_url('assets_landing/img/stunting2.png');?>" alt="">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						Prevalensi Stunting Balita Indonesia <br> Kedua di Regional Asia Tenggara
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Berdasarkan Data prevalensi balita stunting yang dikumpulkan World Health Organization (WHO), Indonesia termasuk ke dalam negara ketiga dengan prevalensi tertinggi di regional Asia Tenggara/South-East Asia Regional (SEAR). Rata-rata prevalensi balita stunting di Indonesia tahun 2005-2017 adalah 36,4%. (Pusat Data dan Informasi, 2018).
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start Footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Menu</h4>
					<ul>
						<li><a href="<?php echo site_url('c_login');?>">Login</a></li>
						<li><a href="<?php echo site_url('c_login');?>">Register</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					
				</div>
		
			<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>Untuk mendapatkan update dari kami,</p>
					<div class="form-wrap">
						<form method="post" action="<?php echo site_url('c_api/add_subs'); ?>" class="form-inline">
							
							<input class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required type="email">

							<input class="form-control" name="nama" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name '"
							 required="" type="text">

							<button type="submit" class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
							<div style="position: absolute; left: -5000px;">
								<input name="newsletter" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>

			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> SIPENTING
				</p>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="<?php echo base_url('assets_landing/js/vendor/jquery-2.2.4.min.js');?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');?>" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="<?php echo base_url('assets_landing/js/vendor/bootstrap.min.js');?>"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="<?php echo base_url('assets_landing/js/easing.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/hoverIntent.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/superfish.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/jquery.ajaxchimp.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/jquery.magnific-popup.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/owl.carousel.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/owl-carousel-thumb.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/jquery.sticky.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/jquery.nice-select.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/parallax.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/waypoints.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/wow.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/jquery.counterup.min.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/mail-script.js');?>"></script>
	<script src="<?php echo base_url('assets_landing/js/main.js');?>"></script>


<script type="text/javascript">
  $(function(){
      $("#eng").click(function(){
      $.ajax({

          type:'POST',

          url:"<?php echo site_url('c_landing/language'); ?>",

          data:{bahasa:'english'},

          success: function(data)

          { 
           
          if(data==1) {
            location.reload();
          } 

              }

          });

        });

       $("#ina").click(function(){
      $.ajax({

          type:'POST',

          url:"<?php echo site_url('c_landing/language'); ?>",

          data:{bahasa:'indonesian'},

          success: function(data)

          { 
           
          if(data==1) {
            location.reload();
          } 

              }

          });

        });
  });
</script>
</body>

</html>