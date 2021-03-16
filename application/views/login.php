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
							<img src="<?= base_url(); ?>assets/images/user.png" alt="" class="img-responsive">
						</div>
					</div>
					<div class="bottom-content">
						<form action="<?php echo base_url(); ?>login/login_akses" method="post">
							<input type="text" name="username" class="input-form" placeholder="Username" required="required" />
							<input type="password" name="password" class="input-form" placeholder="Password" required="required" />
							<button type="submit" class="loginhny-btn btn">Login</button>
						</form>
						<p>Belum Punya Akun? <a href="<?php echo base_url('register') ?>">Daftar Yuk!</a></p>
						<a href="<?php echo base_url('forget_password') ?>">Lupa Password?</a>
						<?= $this->session->flashdata('message'); ?>

					</div>
				</div>
			</div>