<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/logo.ico" type="image/ico" sizes="16x16">
<title>Register | IZZI</title>

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<center>
					<br><br><i>IZZI SERVICE</i>
					<!-- <img src="https://izzi-soft.com/assets/images/logonya.png" style="width:128px;height:68px;"> --></center>
				<h1></h1>
				<div class="panel-body">
					<form action="<?php echo base_url();?>login/register_data" method="post">
						
							<div class="form-group">
								<label for="username"><p color=#999>Username</p></label>
								<input class="form-control" placeholder="Masukan Username" name="username" type="text" required id="username">
							</div>
							<div class="form-group">
								<label for="password"><p color=#999>Password</p></label>
								<input class="form-control" placeholder="Masukan Password" name="password" type="password" required id="password">
							</div>
							<div class="form-group">
								<label for="nama_lengkap"><p color=#999>Nama Lengkap</p></label>
								<input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text" required id="nama_lengkap">
							</div>
							<div class="form-group">
								<label for="email"><p color=#999>Email</p></label>
								<input class="form-control" placeholder="Masukan Email" name="email" type="email" required id="email">
							</div>
							<div class="form-group">
								<label for="alamat"><p color=#999>Alamat</p></label>
								<input class="form-control" placeholder="Masukan alamat" name="alamat" type="alamat" required id="alamat">
							</div>
							<div class="form-group">
						<label for="jk"><p color=#999>Jenis Kelamin</p></label>			
					     <select required="" name="jenis_kelamin" class="form-control" id="jk">
					     	<option value=""></option>
					     	<option value="PRIA">PRIA</option>
					     	<option value="WANITA">WANITA</option>

					     </select>
					</div>
							<div class="form-group">
								<label for="no_telp"><p color=#999>No.Telphone</p></label>
								<input class="form-control" placeholder="Nomor Telepon" name="no_telp" type="number" required id="no_telp"></div>
						<button style="width: 100%" type="submit" class="btn btn-primary">Registrasi</button><br>
							<br>
							<a href="<?php echo base_url('login') ?>" text-align="center">Sudah Punya Akun ? Login Sekarang</a><br>
					</form>
				</div>
			</div>
			<?php echo $this->session->flashdata("msg");?>
		</div><!-- /.col-->
	</div><!-- /.row -->	
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
	<div>
	<footer>
	<center display="inline-block"> Copyright © <?php echo date("Y"); ?> -  PT. IZZI MITRA SOLUSINDO </center>
	</footer></div>
</body>
</html>
