<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CarrerPath</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="gestionReclamation/view/front/img/banner/rec.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/magnific-popup.css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css">
    <link rel="stylesheet" href="front/css/themify-icons.css">
    <link rel="stylesheet" href="front/css/nice-select.css">
    <link rel="stylesheet" href="front/css/flaticon.css">
    <link rel="stylesheet" href="front/css/gijgo.css">
    <link rel="stylesheet" href="front/css/animate.css">
    <link rel="stylesheet" href="front/css/slicknav.css">
    <link rel="stylesheet" href="front/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                <a class="navbar-brand absolute" href="index.html">CarrerPath</a>
                                
                                
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="front/index.html">
                                <img id="logo" src="logo.png" alt="Image placeholder" class="img-md-fluid">

                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="front/index.html">user</a></li>
                                        <li><a href="#">offre</a></li>
                                        <li><a href="#">entretien <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">cv</a></li>
                                                <li><a href="#">reclamation</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">elements</a></li>
                                                <li><a href="#">Cause</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../ajouterReclamationFront.php">reclamation</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">LOGIN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(img/rec.png);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>reclamation</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form method="POST" onsubmit="return verif();">
                            <div class="mb-5">
                                <div class="row">
                                    <div class="card-body" style="margin-left:50px;">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control valid" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'" name="nom" id="nom" placeholder="Nom">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control valid" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control valid" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" name="phone" id="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control valid" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sujet'" name="sujet" id="sujet" placeholder="Sujet">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control w-100" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" name="description" id="description" placeholder="Description"></textarea>
                                            </div>
                                        <br>
                                        </div>
                                        <div class="text-center">
                                            <input class="button button-contactForm boxed-btn" type="submit" name="envoyer" value="Envoyer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                <img id="recl" src="recl.png" alt="Image placeholder" class="img-md-fluid">
                                </a>
                            </div>
                            <p class="address_text">Ma Reclamation Faite-vous ENTENDRE!! , <br> <br> 
                            </p>
                            <div class="socail_links">
                            <img id="recl" src="C:/xampp/htdocs/rec/gestionReclamation/view/front/img/recl.jpg" alt="Image placeholder" class="img-md-fluid">   
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">about us</a></li>
                                <li><a href="#">Formation</a></li>
                                <li><a href="#">entretien</a></li>
                                <li><a href="#">offre</a></li>
                                <li><a href="#">chance</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+2(305) 587-3407 <br>
                                    info@loveuscharity.com <br>
                                    Flat 20, Reynolds Neck, North
                                    Helenaville, FV77 8WS
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>
                                                Work chance</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>
                                                </h4>
                                        </a>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->
    
        <!-- JS here -->
        <script src="front/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="front/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="front/js/popper.min.js"></script>
        <script src="front/js/bootstrap.min.js"></script>
        <script src="front/js/owl.carousel.min.js"></script>
        <script src="front/js/isotope.pkgd.min.js"></script>
        <script src="front/js/ajax-form.js"></script>
        <script src="front/js/waypoints.min.js"></script>
        <script src="front/js/jquery.counterup.min.js"></script>
        <script src="front/js/imagesloaded.pkgd.min.js"></script>
        <script src="front/js/scrollIt.js"></script>
        <script src="front/js/jquery.scrollUp.min.js"></script>
        <script src="front/js/wow.min.js"></script>
        <script src="front/js/nice-select.min.js"></script>
        <script src="front/js/jquery.slicknav.min.js"></script>
        <script src="front/js/jquery.magnific-popup.min.js"></script>
        <script src="front/js/plugins.js"></script>
        <script src="front/js/gijgo.min.js"></script>
    
        <!--contact js-->
        <script src="front/js/contact.js"></script>
        <script src="front/js/jquery.ajaxchimp.min.js"></script>
        <script src="front/js/jquery.form.js"></script>
        <script src="front/js/jquery.validate.min.js"></script>
        <script src="front/js/mail-script.js"></script>
        <script src="front/js/main.js"></script>

        <script src="ctrlReclamations.js"></script>
    </body>
    
    </html>
