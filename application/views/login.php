<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords"
		content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
<link rel="icon" href="<?= base_url();?>assets/images/icon.png" type="image/ico" sizes="16x16">
	<title>IZZI SERVICE | LOGIN</title>

<!-- <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet"> -->
<link href="<?php echo base_url();?>assets/login/style.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<h1>IZZI SERVICE</h1>
				<!-- if logo is image enable this   
					<a class="logo" href="index.html">
					  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> 
				-->
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one">Silahkan Login</h6>
							<div class="speci-login first-look">
								<img src="<?= base_url();?>assets/images/user.png" alt="" class="img-responsive">
							</div>
						</div>
						<div class="bottom-content">
							<form action="<?php echo base_url();?>login/login_akses" method="post">
								<input type="text" name="username" class="input-form" placeholder="Username"
										required="required" />
								<input type="password" name="password" class="input-form"
										placeholder="Password" required="required" />
								<button type="submit" class="loginhny-btn btn">Login</button>
							</form>
							<p>Belum Punya Akun? <a href="<?php echo base_url('register') ?>">Daftar Yuk!</a></p>
							<a href="<?php echo base_url('forget_password') ?>">Lupa Password?</a>
						</div>
					</div>
				</div>
				<div class="w3l-copy-right text-center">
					<p>Copyright © <?php echo date("Y"); ?> -  PT. IZZI MITRA SOLUSINDO. <!-- | Design by
						<a href="http://w3layouts.com/" target="_blank">Aji Permana</a> --></p>
				</div>
			</div>
						<?php echo $this->session->flashdata("msg");?>

		</div>
	</section>
	
<!-- 	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<center>
					<br><br><p>IZZI SERVICE</p>
					<img src="https://izzi-soft.com/assets/images/logonya.png" style="width:128px;height:68px;"></center>
						<center><h2>IZZI SERVICE</h2></center>

				<div class="panel-body">
					<form action="<?php echo base_url();?>login/login_akses" method="post">
						
							<div class="form-group">
								<input class="form-control" placeholder="Username / E-mail" name="username" type="text" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
							
							<button style="width: 100%" type="submit" class="btn btn-warning">Login</button>
							<br>
							<a href="<?php echo base_url('forget_password') ?>" class="text-warning">Forget Password</a>
							<br>
							<a href="<?php echo base_url('register') ?>"  class="text-warning">Registrasi</a>
						
					</form>
				</div>
			</div>

			<?php echo $this->session->flashdata("msg");?> -->
		<!-- </div> --><!-- /.col-->
	<!-- </div> --><!-- /.row -->	
	
		

	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
<!-- 	<center> Copyright © <?php echo date("Y"); ?> -  PT. IZZI MITRA SOLUSINDO </center> -->
</body>

</html>
