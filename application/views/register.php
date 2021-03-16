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
						<form action="<?php echo base_url(); ?>login/register_data" method="post">
							<input type="text" name="username" class="input-form" placeholder="Username" required="required" />
							<input type="password" name="password" class="input-form" placeholder="Password" required="required" />
							<input type="text" name="nama_lengkap" class="input-form" placeholder="Nama Lengkap" required="required" />
							<input type="text" name="email" class="input-form" placeholder="Email" required="required" />
							<input type="text" name="alamat" class="input-form" placeholder="Alamat" required="required" />
							<select required="" name="jenis_kelamin" class="input-form" id="jk">
								<option value="" class="select">Jenis Kelamin</option>
								<option value="PRIA">Pria</option>
								<option value="WANITA">Wanita</option>

							</select>
							<!-- 	<input type="text" name="jenis_kelamin" class="input-form" placeholder="Jenis Kelamin"
								required="required" /> -->
							<input type="number" name="no_telp" class="input-form" placeholder="Nomor Telepon" required="required" />
							<button type="submit" class="loginhny-btn btn">Daftar</button>
						</form>
						<p>Sudah Punya Akun? <a href="<?php echo base_url('login') ?>">Login Yuk!</a></p>
						<?php echo $this->session->flashdata("msg_regist"); ?>


					</div>
				</div>
			</div>