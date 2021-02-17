<!doctype html>
<html lang="en">

<?php $this->load->view('include/head') ;?>
<body class="app home">
<?php $this->load->view('include/navbar_mobile') ;?>
<!--     <div class="mobile-panel">
        <div class="mobile-panel__section">
            <div class="logo">
                <a href="/" class="logo__img"><img src="assets/images/logo.svg" alt=""></a>
            </div> -->
            <!-- logo -->
            <!-- <button class="mobile-panel__btn-burger btn-general js-btn-burger" type="button" data-remodal-target="mobile_panel"><i class="fas fa-bars"></i></button>
            <div class="mobile-panel__inner remodal" data-remodal-id="mobile_panel">
                <button data-remodal-action="close" class="remodal-close"></button>
                <div class="mobile-panel__content">
                    <div class="logo">
                        <a href="/" class="logo__img"><img src="assets/images/logo.svg" alt=""></a>
                    </div> -->
                    <!-- logo -->
                   <!--  <div class="main-nav">
                        <div class="main-nav__nav">
                            <ul>
                                <li class="js-nav-to-anchor"><a href="#home">HOME</a></li>
                                <li class="js-nav-to-anchor"><a href="#projects">PROJECTS</a></li>
                                <li class="js-nav-to-anchor"><a href="#contact">CONTACT</a></li>

                            </ul>
                        </div>
                    </div> -->
                    <!-- main-nav -->
                   <!--  <div class="contacts">
                        <a href="tel:101234547700" class="contacts__phone">+10 123 454 77 00</a>
                    </div> -->
                    <!-- contacts -->
                   <!--  <button class="btn-general" data-remodal-target="call_back_form" type="button">CALL BACK</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- mobile-panel -->

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <div class="app__wrapper">

        <header id="home" class="app-header">
            <div class="app-header__section full-contain light-bg">
                <div class="v-lines">
                    <div class="v-lines__inner"></div>
                </div>
                <!-- NAVBAR CONTAINT -->
             <?php $this->load->view('include/navbar'); ?>
             <!-- SLIDER CONTAINT -->
              <?php $this->load->view('include/slider'); ?>
                <!-- about-us -->

                <!-- our product -->
                       <div class="our-clients" id="layanan">
                    <div class="our-clients__section">
                        <div class="v-lines v-lines--mods-color">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="our-clients__inner contain">
                            <h2 class="our-clients__title title-general">OUR <strong>PRODUCT</strong></h2>
                            <div class="our-clients__items js-our-clients-slider owl-carousel">
                                <?php foreach ($get_kategori as $key => $get_kategori) {?>

                                <div class="our-clients__item">
                                    <div class="our-clients__body">
                                        <div class="our-clients__img"><img src="<?php echo base_url('assets/images/icon/').$get_kategori['icon'] ;?>" alt=""></div>
                                        <div class="our-clients__content">
                                            <div class="our-clients__name"><?php echo $get_kategori['nama_kategori']; ?></div>
                                            <div class="our-clients__text text-general"><?php echo $get_kategori['desk'] ;?></div><a class="our-services__more js-more-info" href="#" data-remodal-target="<?php echo $get_kategori['modal'] ;?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                           </div>

                             <div class="our-services__bot">
                                <a class="our-services__btn-consultation btn-general" href="<?php echo base_url();?>ticket/add" type="button">Pesan Sekarang!</a>
                            </div>               
                         </div>
                    </div>
                </div>

               <!--  <div class="our-services" id="layanan">
                    <div class="our-services__section full-contain">
                        <div class="v-lines v-lines--mods-color">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="our-services__inner contain">
                            <h2 class="our-services__title title-general">PRODUK <strong>KAMI</strong></h2>
                 <div class="our-services__items js-our-services-slider owl-carousel">


                            <div class="our-services__items">
                                <div class="our-services__item our-item">
                                    <div class="our-services__body">
                                        <div class="our-services__img"><img src="assets/images/services/1.jpg" alt="">
                                        </div>
                                        <div class="our-services__content">
                            <div class="our-services__name our-name">AC</div>
                            <div class="our-services__text text-general">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                            <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                            <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                            <a class="our-services__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                        </div>
                                    </div>
                                </div>
                                <div class="our-services__item our-item">
                                    <div class="our-services__body">
                                        <div class="our-services__img"><img src="assets/images/services/1.jpg" alt="">
                                        </div>
                                        <div class="our-services__content">
                            <div class="our-services__name our-name">CCTV</div>
                            <div class="our-services__text text-general">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                            <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                            <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                            <a class="our-services__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                        </div>
                                    </div>
                                </div>
                                <div class="our-services__item our-item">
                                    <div class="our-services__body">
                                        <div class="our-services__img"><img src="assets/images/services/1.jpg" alt="">
                                        </div>
                                        <div class="our-services__content">
                            <div class="our-services__name our-name">Komputer</div>
                            <div class="our-services__text text-general">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                            <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                            <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                            <a class="our-services__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                        </div>
                                    </div>
                                </div>
                                          <div class="our-services__item our-item">
                                    <div class="our-services__body">
                                        <div class="our-services__img"><img src="assets/images/services/1.jpg" alt="">
                                        </div>
                                        <div class="our-services__content">
                            <div class="our-services__name our-name">FURNITURE</div>
                            <div class="our-services__text text-general">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                            <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                            <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                            <a class="our-services__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="our-services__bot">
                                <button class="our-services__btn-consultation btn-general" data-remodal-target="call_back_form_free" type="button">PESAN SEKARANG!</button>
                            </div>
                        </div>
                    </div>
                
            </div> -->
                <!-- our-services -->

                <div class="presentation">
                    <div class="presentation__section full-contain light-bg" style="background-image: url('assets/images/background/project-6.jpg');">
                        <div class="v-lines">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="presentation__inner contain" >
                            <h2 class="presentation__title title-general title-general--colors">BERSAMA IZZI <strong>MEMBANGUN NEGERI</strong></h2>
                            <div class="presentation__body">
                                <div style="background-image: url('assets/images/blog-2.jpg');" class="presentation__video-preview">
                                    <a class="presentation__btn-play btn-general" data-remodal-target="video" href="https://www.youtube.com/embed/cs4bt5_BncA"></a>
                                </div>
                                <div class="presentation__text text-general">For us, making quality accessible means developing a unique kind of quality, achievable thanks to reliable, robust and durable design materials, so that the price of the product reflects its true value
                                </div>
                            </div>
                            <div class="popup-video">
                                <div class="popup-video__section">
                                    <div class="popup-video__video remodal" data-remodal-id="video">
                                        <button data-remodal-action="close" class="remodal-close"></button>
                                        <iframe width="100" height="700" src="https://www.youtube.com/embed/cs4bt5_BncA" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- b:popup-video -->
                        </div>
                    </div>
                </div>
                <!-- presentation -->

                <div class="our-advantages" id="number">
                    <div class="our-advantages__section">
                        <div class="v-lines v-lines--mods-color">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="our-advantages__inner contain">
                            <h2 class="our-advantages__title title-general">PORTFOLIO <strong>PERUSAHAAN</strong></h2>
                            <div class="our-advantages__items">
                                <div class="our-advantages__item">
                                    <div class="our-advantages__body">
                                        <div class="our-advantages__content">
                                            <div class="our-advantages__number">400+</div>
                                            <div class="our-advantages__name">Happy Clients</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-advantages__item">
                                    <div class="our-advantages__body">
                                        <div class="our-advantages__content">
                                            <div class="our-advantages__number">2k+</div>
                                            <div class="our-advantages__name">Succesfull works</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-advantages__item">
                                    <div class="our-advantages__body">
                                        <div class="our-advantages__content">
                                            <div class="our-advantages__number">150+</div>
                                            <div class="our-advantages__name">Masters</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-advantages__item">
                                    <div class="our-advantages__body">
                                        <div class="our-advantages__content">
                                            <div class="our-advantages__number">70+</div>
                                            <div class="our-advantages__name">City Offices</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-advantages__bot">
                                <a class="our-advantages__btn-call btn-general"  href="#pertanyaan">Punya Pertanyaan?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- our-advantages -->

                <div id="our_team" class="our-team">
                    <div class="our-team__section full-contain light-bg" style="background-image: url('assets/images/background/project-4.jpg');">
                        <div class="v-lines">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="our-team__inner contain">
                            <h2 class="our-team__title title-general title-general--colors">OUR <strong>TEAM</strong>
                            </h2>
                            <div class="our-team__items js-our-team-slider owl-carousel">
                                <div class="our-team__item">
                                    <div class="our-team__body">
                                        <div class="our-team__info">
                                            <div class="our-team__img"><img src="assets/images/team/6.jpg" alt=""></div>
                                            <div class="social-links">
                                                <div class="social-links__items">
                                                    <a href="https://www.facebook.com/" target="_blank" class="social-links__item social-links__item--facebook"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/" target="_blank" class="social-links__item social-links__item--twitter"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/" target="_blank" class="social-links__item social-links__item--instagram"><i
                                                            class="fab fa-instagram"></i></a>
                                                    <a href="https://mail.google.com/" target="_blank" class="social-links__item social-links__item--envelope"><i
                                                            class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            <!-- social-links -->
                                        </div>
                                        <div class="our-team__content">
                                            <div class="our-team__name">Albert Robertson</div>
                                            <div class="our-team__place text-general">Company CEO</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-team__item">
                                    <div class="our-team__body">
                                        <div class="our-team__info">
                                            <div class="our-team__img"><img src="assets/images/team/6.jpg" alt=""></div>
                                            <div class="social-links">
                                                <div class="social-links__items">
                                                    <a href="https://www.facebook.com/" target="_blank" class="social-links__item social-links__item--facebook"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/" target="_blank" class="social-links__item social-links__item--twitter"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/" target="_blank" class="social-links__item social-links__item--instagram"><i
                                                            class="fab fa-instagram"></i></a>
                                                    <a href="https://mail.google.com/" target="_blank" class="social-links__item social-links__item--envelope"><i
                                                            class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            <!-- social-links -->
                                        </div>
                                        <div class="our-team__content">
                                            <div class="our-team__name">Alexandr Ravilov</div>
                                            <div class="our-team__place text-general">Company CEO</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-team__item">
                                    <div class="our-team__body">
                                        <div class="our-team__info">
                                            <div class="our-team__img"><img src="assets/images/team/6.jpg" alt=""></div>
                                            <div class="social-links">
                                                <div class="social-links__items">
                                                    <a href="https://www.facebook.com/" target="_blank" class="social-links__item social-links__item--facebook"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/" target="_blank" class="social-links__item social-links__item--twitter"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/" target="_blank" class="social-links__item social-links__item--instagram"><i
                                                            class="fab fa-instagram"></i></a>
                                                    <a href="https://mail.google.com/" target="_blank" class="social-links__item social-links__item--envelope"><i
                                                            class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            <!-- social-links -->
                                        </div>
                                        <div class="our-team__content">
                                            <div class="our-team__name">Calvin Harris</div>
                                            <div class="our-team__place text-general">Company CEO</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-team__item">
                                    <div class="our-team__body">
                                        <div class="our-team__info">
                                            <div class="our-team__img"><img src="assets/images/team/6.jpg" alt=""></div>
                                            <div class="social-links">
                                                <div class="social-links__items">
                                                    <a href="https://www.facebook.com/" target="_blank" class="social-links__item social-links__item--facebook"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/" target="_blank" class="social-links__item social-links__item--twitter"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/" target="_blank" class="social-links__item social-links__item--instagram"><i
                                                            class="fab fa-instagram"></i></a>
                                                    <a href="https://mail.google.com/" target="_blank" class="social-links__item social-links__item--envelope"><i
                                                            class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            <!-- social-links -->
                                        </div>
                                        <div class="our-team__content">
                                            <div class="our-team__name">Calvin Harris</div>
                                            <div class="our-team__place text-general">Company CEO</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-team__item">
                                    <div class="our-team__body">
                                        <div class="our-team__info">
                                            <div class="our-team__img"><img src="assets/images/team/6.jpg" alt=""></div>
                                            <div class="social-links">
                                                <div class="social-links__items">
                                                    <a href="https://www.facebook.com/" target="_blank" class="social-links__item social-links__item--facebook"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/" target="_blank" class="social-links__item social-links__item--twitter"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/" target="_blank" class="social-links__item social-links__item--instagram"><i
                                                            class="fab fa-instagram"></i></a>
                                                    <a href="https://mail.google.com/" target="_blank" class="social-links__item social-links__item--envelope"><i
                                                            class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            <!-- social-links -->
                                        </div>
                                        <div class="our-team__content">
                                            <div class="our-team__name">Calvin Harris</div>
                                            <div class="our-team__place text-general">Company CEO</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-team__item">
                                    <div class="our-team__body">
                                        <div class="our-team__info">
                                            <div class="our-team__img"><img src="assets/images/team/6.jpg" alt=""></div>
                                            <div class="social-links">
                                                <div class="social-links__items">
                                                    <a href="https://www.facebook.com/" target="_blank" class="social-links__item social-links__item--facebook"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/" target="_blank" class="social-links__item social-links__item--twitter"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/" target="_blank" class="social-links__item social-links__item--instagram"><i
                                                            class="fab fa-instagram"></i></a>
                                                    <a href="https://mail.google.com/" target="_blank" class="social-links__item social-links__item--envelope"><i
                                                            class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            <!-- social-links -->
                                        </div>
                                        <div class="our-team__content">
                                            <div class="our-team__name">Calvin Harris</div>
                                            <div class="our-team__place text-general">Company CEO</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-team__item">
                                    <div class="our-team__body">
                                        <div class="our-team__info">
                                            <div class="our-team__img"><img src="assets/images/team/6.jpg" alt=""></div>
                                            <div class="social-links">
                                                <div class="social-links__items">
                                                    <a href="https://www.facebook.com/" target="_blank" class="social-links__item social-links__item--facebook"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/" target="_blank" class="social-links__item social-links__item--twitter"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/" target="_blank" class="social-links__item social-links__item--instagram"><i
                                                            class="fab fa-instagram"></i></a>
                                                    <a href="https://mail.google.com/" target="_blank" class="social-links__item social-links__item--envelope"><i
                                                            class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            <!-- social-links -->
                                        </div>
                                        <div class="our-team__content">
                                            <div class="our-team__name">Calvin Harris</div>
                                            <div class="our-team__place text-general">Company CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- our-team -->

                <div class="work-process">
                    <div class="work-process__section full-contain">
                        <div class="v-lines v-lines--mods-color">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="work-process__inner">
                            <h2 class="work-process__title contain title-general">WORK <strong>PROCESS</strong></h2>
                            <div class="work-process__items js-work-process-slider owl-carousel">
                                <div class="work-process__item">
                                    <div class="work-process__body">
                                        <div class="work-process__img"><img src="assets/images/process/21.jpg" alt=""></div>
                                        <div class="work-process__num"></div>
                                        <div class="work-process__content">
                                            <div class="work-process__name">MEASURE</div>
                                            <div class="work-process__text text-general">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-process__item">
                                    <div class="work-process__body">
                                        <div class="work-process__img"><img src="assets/images/process/21.jpg" alt=""></div>
                                        <div class="work-process__num"></div>
                                        <div class="work-process__content">
                                            <div class="work-process__name">DESIGN</div>
                                            <div class="work-process__text text-general">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-process__item">
                                    <div class="work-process__body">
                                        <div class="work-process__img"><img src="assets/images/process/21.jpg" alt=""></div>
                                        <div class="work-process__num"></div>
                                        <div class="work-process__content">
                                            <div class="work-process__name">PLACE</div>
                                            <div class="work-process__text text-general">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-process__item">
                                    <div class="work-process__body">
                                        <div class="work-process__img"><img src="assets/images/process/21.jpg" alt=""></div>
                                        <div class="work-process__num"></div>
                                        <div class="work-process__content">
                                            <div class="work-process__name">DESIGN</div>
                                            <div class="work-process__text text-general">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-process__item">
                                    <div class="work-process__body">
                                        <div class="work-process__img"><img src="assets/images/process/21.jpg" alt=""></div>
                                        <div class="work-process__num"></div>
                                        <div class="work-process__content">
                                            <div class="work-process__name">MEASURE</div>
                                            <div class="work-process__text text-general">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- work-process -->

                <div id="projects" class="our-projects">
                    <div class="our-projects__section full-contain light-bg" style="background-image: url('assets/images/background/square-3.jpg');">
                        <div class="v-lines">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="our-projects__inner contain">
                            <h2 class="our-projects__title title-general title-general--colors">OUR
                                <strong>PROJECTS</strong></h2>
                                <h3 >Beberapa Foto Dokumentasi Proyek Yang Sudah Selesai/Sedang Dikerjakan Oleh Tim <strong>IZZI SERVICE</strong></h3>
                            <div class="our-projects__items js-our-projects-slider owl-carousel">
                                <div class="our-projects__item spotlight-group" data-title="">
                                    <div class="our-projects__gallery our-projects__gallery--gallery-thumbnail">
                                        <a href="assets/images/projects/g1.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g1.jpg" alt=""></a>
                                        <a href="assets/images/projects/g2.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g2.jpg" alt=""></a>
                                        <a href="assets/images/projects/g3.jpg" class="our-projects__img spotlight our-projects__img--img-horizontal"><img src="assets/images/projects/g3.jpg" alt=""></a>
                                    </div>
                                    <div class="our-projects__gallery our-projects__gallery--gallery-single">
                                        <a href="assets/images/projects/g4.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g4.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="our-projects__item spotlight-group" data-title="">
                                    <div class="our-projects__gallery our-projects__gallery--gallery-thumbnail">
                                        <a href="assets/images/projects/g5.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g5.jpg" alt=""></a>
                                        <a href="assets/images/projects/g7.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g7.jpg" alt=""></a>
                                        <a href="assets/images/projects/g8.jpg" class="our-projects__img spotlight our-projects__img--img-horizontal"><img src="assets/images/projects/g8.jpg" alt=""></a>
                                    </div>
                                    <div class="our-projects__gallery our-projects__gallery--gallery-single">
                                        <a href="assets/images/projects/g6.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g6.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="our-projects__item spotlight-group" data-title="">
                                    <div class="our-projects__gallery our-projects__gallery--gallery-thumbnail">
                                        <a href="assets/images/projects/g9.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g9.jpg" alt=""></a>
                                        <a href="assets/images/projects/g10.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g10.jpg" alt=""></a>
                                         <a href="assets/images/projects/g13.jpg" class="our-projects__img spotlight our-projects__img--img-horizontal"><img src="assets/images/projects/g13.jpg" alt=""></a>
                                    </div>
                                    <div class="our-projects__gallery our-projects__gallery--gallery-single">
                                        <a href="assets/images/projects/g12.jpg" class="our-projects__img spotlight"><img src="assets/images/projects/g12.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- our-projects -->

                <div class="our-clients">
                    <div class="our-clients__section">
                        <div class="v-lines v-lines--mods-color">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="our-clients__inner contain">
                            <h2 class="our-clients__title title-general">TESTIMONI DARI <strong>PELANGGAN KAMI</strong></h2>
                            <div class="our-clients__items js-our-clients-slider owl-carousel">
                                <div class="our-clients__item">
                                    <div class="our-clients__body">
                                        <div class="our-clients__img"><img src="assets/images/clients/bayu.jpeg" alt=""></div>
                                        <div class="our-clients__content">
                                            <div class="our-clients__name">JOHN <strong>MCCONELY</strong></div>
                                            <div class="our-clients__text text-general">Pelayanan dan service yang mantab budjhank
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-clients__item">
                                    <div class="our-clients__body">
                                        <div class="our-clients__img"><img src="assets/images/clients/2.jpg" alt=""></div>
                                        <div class="our-clients__content">
                                            <div class="our-clients__name">MARIA <strong>ROBERTSON</strong></div>
                                            <div class="our-clients__text text-general">Dipilihkan teknisi sesuai dengan Gender bikin nyaman Banget :(
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-clients__item">
                                    <div class="our-clients__body">
                                        <div class="our-clients__img"><img src="assets/images/clients/2.jpg" alt=""></div>
                                        <div class="our-clients__content">
                                            <div class="our-clients__name">ALBERT <strong>JACKMANN</strong></div>
                                            <div class="our-clients__text text-general">Tidak lagi kesulitan dalam memilih tukang untuk pembangunan rumah saya
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-clients__item">
                                    <div class="our-clients__body">
                                        <div class="our-clients__img"><img src="assets/images/clients/2.jpg" alt=""></div>
                                        <div class="our-clients__content">
                                            <div class="our-clients__name">JOHN <strong>MCCONELY</strong></div>
                                            <div class="our-clients__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-clients__item">
                                    <div class="our-clients__body">
                                        <div class="our-clients__img"><img src="assets/images/clients/2.jpg" alt=""></div>
                                        <div class="our-clients__content">
                                            <div class="our-clients__name">MARIA <strong>ROBERTSON</strong></div>
                                            <div class="our-clients__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-clients__item">
                                    <div class="our-clients__body">
                                        <div class="our-clients__img"><img src="assets/images/clients/2.jpg" alt=""></div>
                                        <div class="our-clients__content">
                                            <div class="our-clients__name">ALBERT <strong>JACKMANN</strong></div>
                                            <div class="our-clients__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-clients__item">
                                    <div class="our-clients__body">
                                        <div class="our-clients__img"><img src="assets/images/clients/2.jpg" alt=""></div>
                                        <div class="our-clients__content">
                                            <div class="our-clients__name">MARIA <strong>ROBERTSON</strong></div>
                                            <div class="our-clients__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- our-clients -->

                <!-- <div class="company-news">
                    <div class="company-news__section full-contain light-bg" style="background-image: url('assets/images/background/blog-2.jpg');">
                        <div class="v-lines">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="company-news__inner contain">
                            <h2 class="company-news__title title-general title-general--colors">BLOG &
                                <strong>NEWS</strong></h2>
                            <div class="company-news__items js-company-news-slider owl-carousel">
                                <div class="company-news__item our-item">
                                    <div class="company-news__body">
                                        <div class="company-news__img"><img src="assets/images/news/5.jpg" alt=""></div>
                                        <div class="company-news__info">
                                            <div class="company-news__date">Nov 28, 2019</div>
                                            <div class="company-news__content">
                                                <div class="company-news__name our-name">Improvements in Technology</div>
                                <div class="company-news__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                                <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                                <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                                <a class="company-news__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-news__item our-item">
                                    <div class="company-news__body">
                                        <div class="company-news__img"><img src="assets/images/news/5.jpg" alt=""></div>
                                        <div class="company-news__info">
                                            <div class="company-news__date">Nov 28, 2019</div>
                                            <div class="company-news__content">
                                                <div class="company-news__name our-name">Improvements in Technology</div>
                                <div class="company-news__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                                <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                                <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                                <a class="company-news__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-news__item our-item">
                                    <div class="company-news__body">
                                        <div class="company-news__img"><img src="assets/images/news/5.jpg" alt=""></div>
                                        <div class="company-news__info">
                                            <div class="company-news__date">Nov 28, 2019</div>
                                            <div class="company-news__content">
                                                <div class="company-news__name our-name">Improvements in Technology</div>
                                <div class="company-news__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                                <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                                <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                                <a class="company-news__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-news__item our-item">
                                    <div class="company-news__body">
                                        <div class="company-news__img"><img src="assets/images/news/5.jpg" alt=""></div>
                                        <div class="company-news__info">
                                            <div class="company-news__date">Nov 28, 2019</div>
                                            <div class="company-news__content">
                                                <div class="company-news__name our-name">Improvements in Technology</div>
                                <div class="company-news__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                                <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                                <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                                <a class="company-news__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-news__item our-item">
                                    <div class="company-news__body">
                                        <div class="company-news__img"><img src="assets/images/news/5.jpg" alt=""></div>
                                        <div class="company-news__info">
                                            <div class="company-news__date">Nov 28, 2019</div>
                                            <div class="company-news__content">
                                                <div class="company-news__name our-name">Improvements in Technology</div>
                                <div class="company-news__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                                <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                                <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                                <a class="company-news__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-news__item our-item">
                                    <div class="company-news__body">
                                        <div class="company-news__img"><img src="assets/images/news/5.jpg" alt=""></div>
                                        <div class="company-news__info">
                                            <div class="company-news__date">Nov 28, 2019</div>
                                            <div class="company-news__content">
                                                <div class="company-news__name our-name">Improvements in Technology</div>
                                <div class="company-news__text text-general">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                                <div class="our-text-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</div>
                                <div class="our-text-more-additional">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</div>
                                <a class="company-news__more js-more-info" href="#" data-remodal-target="our_blog">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- company-news -->

               <!--  <div class="contact-form" id="pertanyaan">
                    <div class="contact-form__section">
                        <div class="v-lines v-lines--mods-color">
                            <div class="v-lines__inner"></div>
                        </div>
                        <div class="contact-form__inner contain">
                            <div class="contact-form__pic">
                                <div class="contact-form__img"><img src="assets/images/10.jpg" alt=""></div>
                            </div>
                            <div class="contact-form__container-form">
                                <h2 class="contact-form__title title-general">PUNYA <strong>PERTANYAAN?</strong></h2>
                                <div class="call-back-form">
                                    <div class="call-back-form__section">
                                        <form class="call-back-form__form">
                                            <div class="call-back-form__inputs">
                                                <div class="call-back-form__input">
                                                    <input type="text" placeholder="Your Name*" required="">
                                                </div>
                                                <div class="call-back-form__input">
                                                    <input type="email" placeholder="Your Email*" required="">
                                                </div>
                                                <div class="call-back-form__input">
                                                    <input type="tel" placeholder="Phone Number*" required="">
                                                </div>
                                                <div class="call-back-form__textarea">
                                                    <textarea name="text-feedback" class="text-feedback" placeholder="Your Message*" onfocus="placeholder='';" onblur="placeholder='Your Message*';" required=""></textarea>
                                                </div>
                                                <div class="call-back-form__bottom">
                                                    <button class="call-back-form__btn-submit btn-general" type="submit">TANYA!</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- contact-form -->

            </main>
            <!-- e:main -->

        </div>
        <!-- b:m-content -->

<?php $this->load->view('include/footer');?>
        <!-- b:app-footer -->

    </div>
    <!-- b:wrapper -->

<!-- LOGIN MODAL -->
    <?php $this->load->view('include/modal');?>

   
<!-- popup-our-blog -->

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>


</body>
<!-- b:w-page -->

</html>