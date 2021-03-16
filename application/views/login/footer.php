<div class="w3l-copy-right text-center">
    <p>Copyright © <?php echo date("Y"); ?> - PT. IZZI MITRA SOLUSINDO.
        <!--  | Design by
						<a href="http://w3layouts.com/" target="_blank">Aji Permana</a> -->
    </p>
</div>
</div>
<?php echo $this->session->flashdata("msg"); ?>

</div>
</section>
<!-- 	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<center><img width=220 height=68 src='images/logo.png' />
					<img src="https://izzi-soft.com/assets/images/logonya.png" style="width:128px;height:68px;"></center>
				<h1></h1>
				<div class="panel-body">
					<form action="<?php echo base_url(); ?>forget_password/reset_password" method="post">
						
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="email" type="email" required>
							</div>
							
							<button style="width: 50%" type="submit" class="btn btn-primary">Reset password</button>
							<a style="width: 49%" href="<?php echo base_url() ?>" class="btn btn-danger">Cancel</a>
						
					</form>
				</div>
			</div>

			<?php echo $this->session->flashdata("msg"); ?> -->
<!-- z -->
<!-- /.col-->
<!-- z -->
<!-- /.row -->



<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
<script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script>
    ! function($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function() {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function() {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
<!-- 	<center> Copyright © <?php echo date("Y"); ?> -  PT. IZZI MITRA SOLUSINDO </center> -->
</body>

</html>