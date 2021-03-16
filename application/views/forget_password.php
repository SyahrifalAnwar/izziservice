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
						<h6 class="sec-one">Forget your password?</h6>
						<div class="speci-login first-look">
							<img src="<?= base_url(); ?>assets/images/user.png" alt="" class="img-responsive">
						</div>
					</div>
					<div class="bottom-content">
						<form action="<?php echo base_url('forget_password/index'); ?>" method="post">
							<input type="email" name="email" id="email" class="input-form" placeholder="Email" />
							<?= form_error('password', '<small ">', '</small>'); ?>
							<button type="submit" class="loginhny-btn btn">Reset</button>
						</form>
						<p>Kembali Ke <a href="<?php echo base_url('login') ?>">Login</a></p>
					</div>
				</div>
			</div>