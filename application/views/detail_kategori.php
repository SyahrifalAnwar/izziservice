 <!DOCTYPE html>
<html lang="en">

<?php $this->load->view('include/head'); ?>

<body>

    <div class="page-loader"></div>

    

    <div class="wrapper">

        <!--Use class "navbar-fixed" or "navbar-default" -->
        <!--If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)-->

        <!-- ======================== Navigation ======================== -->
<?php $this->load->view('include/navbar'); ?>

        <!-- ========================  Header content ======================== -->

       <?php $this->load->view('include/slider'); ?>

        <!-- ========================  Icons slider ======================== -->

        <!-- <section class="owl-icons-wrapper owl-icons-frontpage"> -->

            <!-- === header === -->
            

            <header class="hidden">
                <h2>Kategori Terpopuler</h2>
            </header>

            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->
<!-- <?php foreach ($get_kategori as $key => $get_kategori) {?>
                    <a href="<?php echo base_url('page/kategori/'). $get_kategori['id_kategori'] ?>">
                        <figure>
                            <img style="width: 50px;margin-bottom: 30px;" src="<?php echo base_url('assets/images/icon/').$get_kategori['icon'] ?>"/>
                            <figcaption><?php echo $get_kategori['nama_kategori'] ?></figcaption>
                        </figure>
                    </a>
<?php } ?> -->
                    <!-- === icon item === -->

                   
                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>

        <!-- ========================  Products widget ======================== -->

      
        <?php $this->load->view('include/footer'); ?>


       

    <!--JS files-->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.ion.rangeSlider.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.isotope.pkgd.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>

</html>