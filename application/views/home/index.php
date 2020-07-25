<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Misterkong landing page</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="<?= base_url() ?>public/appy/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="<?= base_url() ?>public/appy/images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>public/appy/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/appy/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/appy/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/appy/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/appy/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?= base_url() ?>public/appy/css/normalize.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/appy/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/appy/css/responsive.css">
    <script src="<?= base_url() ?>public/appy/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?= base_url() ?>public/appy/images/logo.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="#home_page">Home</a></li>
                    <li><a href="#about_page">Tentang Kami</a></li>
                    <li><a href="#gallery_page">Galeri</a></li>
                    <li><a href="#questions_page">FAQ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#contact_page">Kontak Kami</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <?php if($this->session->userdata('token')==null){ ?>
                        <a href="<?= site_url('auth') ?>">Masuk</a>
                    <?php }else{ ?>
                        <a href="<?= site_url('auth/logout') ?>">Keluar</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay angle" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                    <figure class="mobile-image wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?= base_url() ?>public/appy/images/header-mobile.png" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">Hai, <?= $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?></h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>
                            Temukan berbagai kemudahan berbelanja di Mister Kong Market place.<br>
                            Mister kong menyediakan berbagai fitur untuk mempermudah anda berbelanja
                        </p>
                    </div>
                    <div class="space-20"></div>
                    <a href="#" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-download"></i>Unduh Aplikasi</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="<?= base_url() ?>public/appy/images/about-logo.png" alt="About Logo">
                        <div class="space-20"></div>
                        <h5 class="title">Tentang Mister Kong</h5>
                        <div class="space-30"></div>
                        <h3 class="blue-color">Mister Kong adalah platform lengkap pertama di NTB, Menyediakan berbagai fitur untuk mempermudah hidup anda </h3>
                        <div class="space-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Kontak kami</h5>
                            <h3 class="dark-color">Mari bergabung bersama kami</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>Jl. garut No. 39 <br /> Taman Indah, Mataram</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>+62 817-0339-6989</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>kontak@misterkong.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mister kong All rights reserved</span>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#about_page">About</a></li>
                                <li><a href="#contact_page">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="<?= base_url() ?>public/appy/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url() ?>public/appy/js/vendor/jquery-ui.js"></script>
    <script src="<?= base_url() ?>public/appy/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="<?= base_url() ?>public/appy/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>public/appy/js/contact-form.js"></script>
    <script src="<?= base_url() ?>public/appy/js/ajaxchimp.js"></script>
    <script src="<?= base_url() ?>public/appy/js/scrollUp.min.js"></script>
    <script src="<?= base_url() ?>public/appy/js/magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>public/appy/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="<?= base_url() ?>public/appy/js/main.js"></script>
</body>

</html>
