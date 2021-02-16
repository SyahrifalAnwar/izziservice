<button class="btn-up btn-general js-btn-up" type="button"><i class="fas fa-chevron-up"></i></button>

    <div class="popup-form remodal" data-remodal-id="call_back_form">
        <div class="popup-form__section">
            <h2 class="popup-form__title title-general">LOGIN <strong>IZZI SERVICE</strong></h2>
         
            <div class="call-back-form">
                <div class="call-back-form__section">
                    <form action="<?php echo base_url();?>login/login_akses" method="POST" class="call-back-form__form" >
                           <?php echo $this->session->flashdata("msg");?>
                        <div class="call-back-form__inputs">
                            <div class="call-back-form__input">
                                <input type="text" name="username" id="exampleInputEmail1" placeholder="Username/Email" required="">
                            </div>
                            <div class="call-back-form__input">
                                <input type="password" name="password" id="exampleInputPassword1" placeholder="Password"required="">
                            </div>
                            <a href="#" class="app-footer__get-location-link" data-remodal-target="call_back_form_regist"><i
                                            class="fas fa-chevron-right"></i>REGISTRASI</a>
                            <div class="call-back-form__bottom">
                                <button type="submit" class="call-back-form__btn-submit btn-general" >LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- call-back-form -->
        </div>
       <!--  <div class="popup-success">
            <div class="popup-success__section">
                <div class="popup-success__icon"><img src="assets/images/success-icon.png" alt=""></div>
                <div class="popup-success__desc">
                    <span>
                        Berhasil Login.
                    </span>
                    <strong>Silahkan Menikmati Layanan Kami!</strong>
                </div>
            </div>
        </div> -->
        <!-- b:popup-success -->
    </div>
    <!-- popup-form -->
    <!-- modal register -->
        <div class="popup-form remodal" data-remodal-id="call_back_form_regist">
        <div class="popup-form__section">
            <h2 class="popup-form__title title-general">DAFTAR <strong>IZZI SERVICE</strong></h2>
            <div class="call-back-form">
                <div class="call-back-form__section">
                    <form action="<?php echo base_url();?>login/register_data" method="POST" class="call-back-form__form">
                        <div class="call-back-form__inputs" >
                            <div class="call-back-form__input">
                            <!--     <label for="username">Username</label> -->
                                <input type="text" placeholder="Username" required="" name="username" id="username">
                            </div>
                            <div class="call-back-form__input">
                                <input type="password" placeholder="Password" required="">
                            </div>
                            <div class="call-back-form__input">
                                <input type="text" placeholder="Nama Lengkap" required="">
                            </div>
                             <div class="call-back-form__input">
                                <input type="email" placeholder="Email" required="">
                            </div>
                            <div class="call-back-form__textarea">
                                                    <textarea name="text-feedback" class="text-feedback" placeholder="Alamat Lengkap" onfocus="placeholder='';" onblur="placeholder='Alamat Lengkap;" required=""></textarea>
                            </div>
                             <div class="call-back-form__input">
                               <input type="text" name="jenis_kelamin"  id="jk" placeholder="Jenis Kelamin" >                     
                                      </div>
                                      
                            <div class="call-back-form__input">
                                <input type="number" placeholder="No Telphone" required="">
                            </div>
                            <a href="#" class="app-footer__get-location-link" data-remodal-target="call_back_form"><i
                                            class="fas fa-chevron-right"></i>LOGIN</a>
                            <div class="call-back-form__bottom">
                                <button type="submit" class="call-back-form__btn-submit btn-general" >DAFTAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- call-back-form -->
        </div>
        <div class="popup-success">
            <div class="popup-success__section">
                <div class="popup-success__icon"><img src="assets/images/success-icon.png" alt=""></div>
                <div class="popup-success__desc">
                    <span>
                        Pendaftaran Berhasil, Silahkan 
                    </span>
                    <strong>Login Kembali!</strong>
                </div>
            </div>
        </div>
        <!-- b:popup-success -->
    </div>

      

    <div class="popup-about-us remodal" data-remodal-id="about_us">
        <button data-remodal-action="close" class="remodal-close"></button>
        <div class="popup-about-us__section">
            <div class="popup-about-us__items">
                <div class="popup-about-us__item">
                    <div class="popup-about-us__content">
                        <h2 class="popup-about-us__title title-general">IZZI <strong>SOFT</strong></h2>
                        <div class="popup-about-us__text text-general">
                   PT. IZZI MITRA SOLUSINDO
Kami PT. IZZI MITRA SOLUSINDO adalah perusahaan yang bergerak dibidang teknologi informasi dan komunikasi.

PT. IZZI MITRA SOLUSINDO didukung oleh infrastruktur yang sangat baik dengan sumberdaya manusia yang profesional, berpengalaman, bersertifikat internasional dan menerapkan teknologi terkini. Dengan berbekal semangat, inovasi, kreatifitas serta networking, PT. IZZI MITRASOLUSINDO sanggup bersaing di bisnis Teknologi Informasi.
                        </div>
                    </div>
                    <div class="popup-about-us__pic">
                        <div class="popup-about-us__img"><img src="assets/images/gambar1.png" alt=""></div>
                    </div>
                </div>
                <div class="popup-about-us__item">
                    <div class="popup-about-us__content">
                                                <h2 class="popup-about-us__title title-general">VISI <strong>MISI</strong></h2>

                        <div class="popup-about-us__text text-general">
                          <p>VISI</p>
Menjadi sebuah perusahaan teknologi informasi dan komunikasi yang mampu bersaing dalam dunia global saat ini. <br>

 <p>MISI</p>
<ul>
    <li>Mengedepankan profesionalisme dan teamwork.</li>
    <li>Menghasilkan layanan yang berkualitas.</li>
    <li>Mengembangkan inovasi teknologi terbaik dan terkini dalam setiap produk.</li>


</ul>
                        </div>
                    </div>
                    <div class="popup-about-us__pic">
                        <div class="popup-about-us__img"><img src="assets/images/gambar2.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="popup-about-us__bottom">
                <a class="popup-about-us__btn-consultation btn-general" data-remodal-target="call_back_form_free" href="#">PESAN SEKARANG!</a>
            </div>
        </div>
    </div>
    <!-- popup-about-us -->

    <div class="popup-our-blog remodal" data-remodal-id="our_blog_ac">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="popup-our-blog__section">
        <div class="popup-our-blog__items">
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__pic">
                    <div class="popup-our-blog__img"><div class="style-img-bg js-img"><img src="assets/images/services/ac.png" alt=""></div></div>
                </div>
                <div class="popup-our-blog__content">
                    <h2 class="popup-our-blog__title title-general js-title">IZZI SERVICE AC</h2>
                    <div class="popup-our-blog__text text-general js-more-text">Menyediakan Jasa Layanan AC seperti 
                        <ul>
                            <li>Instalasi AC</li>
                            <li>Service AC</li>
                            <li>Cuci AC</li>

                        </ul></div>
                </div>
            </div>
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__text text-general js-more-additional-text">Kami Memiliki Banyak Teknisi yang sudah bersetifikat dan terbukti ahli dalam Pemasangan/Perawatan AC</div>
            </div>
        </div>
        <div class="popup-our-blog__bottom">
            <a class="popup-our-blog__btn-consultation btn-general"  href="<?php echo base_url();?>ticket/add"">PESAN SEKARANG!</a>
        </div>
    </div>
</div>
 <div class="popup-our-blog remodal" data-remodal-id="our_blog_eye">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="popup-our-blog__section">
        <div class="popup-our-blog__items">
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__pic">
                    <div class="popup-our-blog__img"><div class="style-img-bg js-img"><img src="assets/images/services/ac.png" alt=""></div></div>
                </div>
                <div class="popup-our-blog__content">
                    <h2 class="popup-our-blog__title title-general js-title">IZZI EYE</h2>
                    <div class="popup-our-blog__text text-general js-more-text">IZZI EYE Menyediakan jasa yang berhubungan dengan CCTV , Seperti ;
                        <ul>
                            <li>Instalasi CCTV</li>
                            <li>Maintenace CCTV Dll.</li>
                        

                        </ul></div>
                </div>
            </div>
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__text text-general js-more-additional-text">Kami Mengerti akan kebutuhan untuk keamanan dan kenyamanan anda , untuk itu IZZI EYE hadir dengan sistem CCTV yang aman dengan harga yang ekonomis</div>
            </div>
        </div>
        <div class="popup-our-blog__bottom">
            <a class="popup-our-blog__btn-consultation btn-general" data-remodal-target="call_back_form_free" href="#">PESAN SEKARANG!</a>
        </div>
    </div>
</div>
 <div class="popup-our-blog remodal" data-remodal-id="our_blog_elektronik">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="popup-our-blog__section">
        <div class="popup-our-blog__items">
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__pic">
                    <div class="popup-our-blog__img"><div class="style-img-bg js-img"><img src="assets/images/services/ac.png" alt=""></div></div>
                </div>
                <div class="popup-our-blog__content">
                    <h2 class="popup-our-blog__title title-general js-title">IZZI ELEKTRONIK</h2>
                    <div class="popup-our-blog__text text-general js-more-text">Kami juga menyediakan Jasa Pembelian,Perawatan/Service, dan Upgrade barang-barang Elektronik lainnya seperti ;
                        <ul>
                            <li>Komputer</li>
                            <li>Laptop</li>
                            <li>Printer</li>
                            <li>Dispenser dll.</li>


                        </ul></div>
                </div>
            </div>
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__text text-general js-more-additional-text">Di Pelayanan kami, Kami selalu mengedepankan Kualitas , dan kami tidak mengenal kata "barang bagus/barang jelek" , Karena Di IZZI ELEKTRONIK Kami hanya menyediakan Yang Terbaik!</div>
            </div>
        </div>
        <div class="popup-our-blog__bottom">
            <a class="popup-our-blog__btn-consultation btn-general" data-remodal-target="call_back_form_free" href="#">PESAN SEKARANG!</a>
        </div>
    </div>
</div>
 <div class="popup-our-blog remodal" data-remodal-id="our_blog_furniture">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="popup-our-blog__section">
        <div class="popup-our-blog__items">
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__pic">
                    <div class="popup-our-blog__img"><div class="style-img-bg js-img"><img src="assets/images/services/ac.png" alt=""></div></div>
                </div>
                <div class="popup-our-blog__content">
                    <h2 class="popup-our-blog__title title-general js-title">IZZI FURNITURE</h2>
                    <div class="popup-our-blog__text text-general js-more-text">Tersedia berbagai macam pilihan Furniture yang lengkap dan terjangkau , Dan bukan hanya Kualitas dan Harga, Kami juga Memperhatikan Tentang Keindahan!
                        </div>
                </div>
            </div>
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__text text-general js-more-additional-text">Furniture yang kami sediakan Terbukti mempunyai kualitas yang lebih tinggi dari value barang tersebut!</div>
            </div>
        </div>
        <div class="popup-our-blog__bottom">
            <a class="popup-our-blog__btn-consultation btn-general" data-remodal-target="call_back_form_free" href="#">PESAN SEKARANG!</a>
        </div>
    </div>
</div>
 <div class="popup-our-blog remodal" data-remodal-id="our_blog_renov">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="popup-our-blog__section">
        <div class="popup-our-blog__items">
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__pic">
                    <div class="popup-our-blog__img"><div class="style-img-bg js-img"><img src="assets/images/services/ac.png" alt=""></div></div>
                </div>
                <div class="popup-our-blog__content">
                    <h2 class="popup-our-blog__title title-general js-title">RENOVASI RUMAH</h2>
                    <div class="popup-our-blog__text text-general js-more-text">Jasa Renovasi Rumah kami memiliki kualitas yang unggul dengan ketersediaan Sumber Daya Manusia yang Terampil serta Jujur dalam Bekerja di Bidang Interior maupunn Eksterior Rumah Anda
                       </div>
                </div>
            </div>
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__text text-general js-more-additional-text">Renovasi Rumah Anda akan menjadi hal yang menyenangkan dan meningkatkan Kualitas Hidup Anda!</div>
            </div>
        </div>
        <div class="popup-our-blog__bottom">
            <a class="popup-our-blog__btn-consultation btn-general" data-remodal-target="call_back_form_free" href="#">PESAN SEKARANG!</a>
        </div>
    </div>
</div>
 <div class="popup-our-blog remodal" data-remodal-id="our_blog_bangun">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="popup-our-blog__section">
        <div class="popup-our-blog__items">
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__pic">
                    <div class="popup-our-blog__img"><div class="style-img-bg js-img"><img src="assets/images/services/pembangunan.jpg" alt=""></div></div>
                </div>
                <div class="popup-our-blog__content">
                    <h2 class="popup-our-blog__title title-general js-title">PEMBANGUNAN RUMAH</h2>
                    <div class="popup-our-blog__text text-general js-more-text">Kami juga menyediakan Jasa Kontraktor, Mandor, Tukang yang Jujur dan Terampil di Bidangnya Masing-masing. 
                       </div>
                </div>
            </div>
            <div class="popup-our-blog__item">
                <div class="popup-our-blog__text text-general js-more-additional-text">Dengan Puluhan bahkan Ratusan Kuli Jawa yang setara dengan Jutaan Sarjana Teknik, Pembangunan Rumah Anda akan selesai dengan Jauh Lebih Cepat dengan Kualitas yang Jauh Lebih Baik!</div>
            </div>
        </div>
        <div class="popup-our-blog__bottom">
            <a class="popup-our-blog__btn-consultation btn-general" data-remodal-target="call_back_form_free" href="#">PESAN SEKARANG!</a>
        </div>
    </div>
</div>