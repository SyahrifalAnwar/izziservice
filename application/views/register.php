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
<link rel="icon" href="images/logo.ico" type="image/ico" sizes="16x16">
<title>Register | IZZI</title>

<!-- <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
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
							<h6 class="sec-one">Daftar</h6>
							<div class="speci-login first-look">
								<img src="<?= base_url(); ?>assets/images/user.png" alt="" class="img-responsive">
							</div>
						</div>
						<div class="bottom-content">
							<form action="#" method="post">
								<input type="text" name="username" class="input-form" placeholder="Username"
										required="required" />
							<input type="password" name="password" class="input-form"
										placeholder="Password" required="required" />
								<input type="text" name="nama_lengkap" class="input-form" placeholder="Nama Lengkap"
								required="required" />
								<input type="text" name="email" class="input-form" placeholder="Email"
								required="required" />
								<input type="text" name="alamat" class="input-form" placeholder="Alamat"
								required="required" />
								<select required="" name="jenis_kelamin" class="input-form" id="jk">
									<option value="" class="select">Jenis Kelamin</option>
									<option value="PRIA" >Pria</option>
									<option value="WANITA" >Wanita</option>

								</select>
							<!-- 	<input type="text" name="jenis_kelamin" class="input-form" placeholder="Jenis Kelamin"
								required="required" /> -->
								<input type="number" name="no_telp" class="input-form"
										placeholder="Nomor Telepon" required="required" />
								<button type="submit" class="loginhny-btn btn">Daftar</button>
							</form>
							<p>Sudah Punya Akun? <a href="<?php echo base_url('login') ?>">Login Yuk!</a></p>
							
						</div>
					</div>
				</div>
				<div class="w3l-copy-right text-center">
					<p>Copyright © <?php echo date("Y"); ?> -  PT. IZZI MITRA SOLUSINDO | Design by
						<a href="#" target="_blank">Aji Permana</a></p>
				</div>
			</div>
			<?php echo $this->session->flashdata("msg");?> 
		</div>
	</section>
	
	<!-- <div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<center>
					<br><br><i>IZZI SERVICE</i>
					<img src="https://izzi-soft.com/assets/images/logonya.png" style="width:128px;height:68px;"></center>
			
				<div class="panel-body">
					 <center>	<h2>IZZI SERVICE</h2></center>

					<form action="<?php echo base_url();?>login/register_data" method="post">
						
							<div class="form-group">
								<input class="form-control" placeholder="Masukan Username" name="username" type="text" required id="username">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Masukan Password" name="password" type="password" required id="password">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text" required id="nama_lengkap">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Masukan Email" name="email" type="email" required id="email">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Masukan alamat" name="alamat" type="alamat" required id="alamat">
							</div>
							<div class="form-group">
					     <select required="" name="jenis_kelamin" class="form-control" id="jk">
					     	<option value="">Jenis Kelamin</option>
					     	<option value="PRIA">PRIA</option>
					     	<option value="WANITA">WANITA</option>

					     </select>
					</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nomor Telepon" name="no_telp" type="number" required id="no_telp"></div>
						<button style="width: 100%" type="submit" class="btn btn-warning">Registrasi</button><br>
							<br>
							<a href="<?php echo base_url('login') ?>" text-align="center" class="text-warning">Sudah Punya Akun ? Login Yuk!</a><br>
					</form>
				</div>
			</div>
			<?php echo $this->session->flashdata("msg");?> -->
	<!-- 	</div> --><!-- /.col-->
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
<!-- 	<div>
	<footer>
	<center display="inline-block"> Copyright © <?php echo date("Y"); ?> -  PT. IZZI MITRA SOLUSINDO </center>
	</footer></div> -->
</body>
</html>
