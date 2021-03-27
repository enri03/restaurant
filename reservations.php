<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Rezervimet</title>
    
    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style-magnific-popup.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/icons-main.css" rel="stylesheet">
    <link href="css/icons-helper.css" rel="stylesheet">
    
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
     
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">	
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
    
</head>
<body>
    
    <!--begin header -->
    <header class="header">

        <!--begin nav -->
        <nav class="navbar navbar-default navbar-fixed-top">
            
            <!--begin container -->
            <div class="container">
        
                <!--begin navbar -->
                <div class="navbar-header">
                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                                                                        
                    <a href="index.html" class="navbar-brand brand scrool"><img src="images/logo22.png" alt="logo"></a>
                </div>
                        
                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">			      
                        <li><a href="index.html">Kryefaqja</a></li>
                       
                        <li><a href="menu.php">Menut</a></li>
                        <li class="selected"><a href="reservations.php">Rezervime</a></li>
                        <li><a href="gallery.html">Galeria</a></li>
                        <li><a href="about.html">Rreth Nesh</a></li>
                        <li><a href="contact.html">Na Kontaktoni</a></li>
                        
                        <li class="social"><a href="#" class="first"><i class="fa fa-twitter"></i></a></li>
                        <li class="social"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="social"><a href="#" class="last"><i class="fa fa-instagram"></i></a></li>
                        
                        <li><a href="reservations.php" class="purchase"   target="_blank">Rezervime</a></li>
                    </ul>
                </div>
                <!--end navbar -->
                                    
            </div>
    		<!--end container -->
            
        </nav>
    	<!--end nav -->
        
    </header>
    <!--end header -->
        
    <!--begin reservation-hero-section -->
    <section id="hero-section" class="reservation-hero-section">
    
        <!--begin image-overlay -->
        <div class="image-overlay"></div>
        <!--end image-overlay -->
            
        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">
                
                    <span class="comic-text wow fadeIn" data-wow-delay="0.5s">La Cuisine</span>
                    
                    <h2 class="section-title white wow bounceIn" data-wow-delay="1s">Shija e Lumturise</h2>
                    
                    <p class="hero-text wow fadeInUp" data-wow-delay="2s">Rezervo dhe ti tani tavolinen tende ne Casa del Cibo per te shijuar gatimet me te mira nen komoditetin bashkekohor qe kuzhina Cibo ofron per ju.</p>
                    
                </div>
                <!--end col-md-10-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </section>
    <!--end reservation-hero-section -->
    
    <!--begin section-white-->
    <section class="section-white small-padding no-padding-bottom">
    
      <!--begin container-->
      <div class="container"> 

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6 wow bounceInUp">
                                    
                    <img src="images/rez3.jpg" alt="picture" class="width-100">
                                    
                </div>
                <!--end col-md-6-->
                
                <!--begin col-md-6-->
                <div class="col-md-6 text-center register-inner padding-top-30">
            
                    <span class="comic-text">Rezervo Tani</span>
                    
                    <h2 class="section-title">Pronotime Online</h2>
                    
                    <p>Pronoto dhe ti tavolinen tende tashme online direkt nga smartphone apo laptopi jote dhe per gjithca tjeter kujdesemi ne sipas cdo deshire apo kerkese speciale qe te keni.</p>                
                    
                    <!--begin success message -->
                    <p class="register_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                    <!--end success message -->
                    
                    <!--begin register form -->
                	<form action="php/form-inc.php" method="post">
                        
                        <!--begin col-md-6-->
                		<div class="col-md-6">
                
                            <input class="register-input white-input" required="" name="register_names" placeholder="Emri " type="text">
                            <input class="register-input white-input" required="" name="register_phone" placeholder="Numri i celularit" type="text">
                            <input class="register-input white-input" required="" name="register_date" type="date">
                                                       
                        </div>
                        <!--end col-md-6-->
                        
                        <!--begin col-md-6-->
                		<div class="col-md-6">
                        
                            <input class="register-input white-input" required="" name="register_email" placeholder="Email ose Adresa" type="email">
                            <select class="register-input white-input" required="" name="register_ticket">
                                <option value="">Sa persona?</option>
                                <option value="1 Person">1 Person</option>
                                <option value="2 People">2 Persona</option>
                                <option value="3 People">3 Persona</option>
                                <option value="4 People">4 Persona</option>
                                <option value="5 People">5 Persona</option>
                                <option value="6 People">6 Persona</option>
                                <option value="7 People">7 Persona</option>
                                <option value="8 People">8 Persona</option>
                                <option value="9 People">9 Persona</option>
                                <option value="10 People">10 Persona</option>
                            </select>
                            <input class="register-input white-input" required="" name="register_time" placeholder="Koha qe planifikoni te qendroni" type="text">
                                                         
                        </div>
                        <!--end col-md-6-->
                
                        <!--begin col-md-12-->
                		<div class="col-md-12">
                        
                            <input value="Rezervo Tavolinen" name="submit"  class="register-submit" type="submit">
                                                         
                        </div>
                        <!--end col-md-12-->
                                            
                    </form>
                    <!--end register form -->
                                        
                </div>
                <!--end col-md-6-->
                 
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
        
    </section>
    <!--end section-white-->
    
    <!-- begin revolution slider -->
    <div id="rev_slider_110_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="rotating-words82" style="background-color:#e5e5e5;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
            <div id="rev_slider_110_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>	
                
                	<!-- SLIDE  -->
                    <li data-index="rs-333" data-transition="fade" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="http://placehold.it/1920x1280"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- BACKGROUND VIDEO LAYER -->
                        <div class="rs-background-video-layer" 
                            data-forcerewind="on" 
                            data-volume="mute" 
                            data-videowidth="100%" 
                            data-videoheight="100%" 
                            data-videomp4="videos/videoCibo.mp4" 
                            data-videopreload="preload" 
                            data-videoloop="loopandnoslidestop" 
                            data-forceCover="1" 
                            data-aspectratio="16:9" 
                            data-autoplay="true" 
                            data-autoplayonlyfirsttime="false" 
                            data-nextslideatend="true" 
                        ></div>
                        
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                             id="slide-333-layer-10" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                        data-width="full"
                            data-height="full"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                 
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                             data-transform_out="s:300;s:300;" 
                            data-start="0" 
                            data-basealign="slide" 
                            data-responsive_offset="on" 
                            data-responsive="off"
                            
                            style="z-index: 5;background-color:rgba(41, 46, 49, 0.9);border-color:rgba(0, 0, 0, 0.50);"> 
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption RotatingWords-TitleWhite   tp-resizeme  toblur rs-parallaxlevel-0" 
                             id="slide-333-layer-1" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-152','-152']" 
                                        data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                 
                             data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                             data-transform_out="s:300;s:300;" 
                            data-start="750" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 

                            
                            style="z-index: 6; white-space: nowrap;">Cilesi dhe  <span style="color:#F2B410;">Komoditet</span>
                        </div>

                       

                    </li>
                </ul>
                <div class="tp-static-layers"></div>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
            </div>
        </div>
    <!-- end revolution slider -->
    
    <!--begin section-white-->
    <section class="section-white">
    
      <!--begin container-->
      <div class="container"> 

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6 text-center padding-top-50 padding-bottom-50 wow slideInLeft">
            
                    <span class="comic-text">Atmosfere</span>
                    
                    <h2 class="section-title">Relaksuese</h2>
                    
                    <p>Eja ne Casa del Cibo dhe shijo gatimet nga me tradicionalet tek me bashkekohoret nen rehatin e ambjenteve bashkekohore qe kuzhina cibo ofron vetem per ju.</p>
                    
                    <a href="gallery.html" class="btn btn-lg btn-yellow">Galeria</a>
                
                </div>
                <!--end col-md-6-->
                
                <!--begin col-md-6-->
                <div class="col-md-6 wow slideInRight">
                                    
                    <!--begin carousel1-->
                    <div id="myCarousel1" class="carousel carousel1 slide" data-interval="true">
                        
                        <!--begin carousel-inner-->
                        <div class="carousel-inner">
                        
                            <!--begin carousel item-->
                            <div class="item active">
                            
                                <!--begin image-wrapper-->
                                <div class="image-wrapper">
                                    <img src="images/rez4.jpg" alt="picture" class="width-100">
                                </div>
                                <!--end image-wrapper-->
                                
                            </div>
                            <!--end carousel item-->
                            
                            <!--begin carousel item-->
                            <div class="item">
                            
                                <!--begin image-wrapper-->
                                <div class="image-wrapper">
                                    <img src="images/rez5.jpg" alt="picture" class="width-100">
                                </div>
                                <!--end image-wrapper-->
                                
                            </div>
                            <!--end carousel item-->
                                                       
                        </div>
                        <!--end carousel-inner-->
                        
                        <!-- begin carousel-indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                        </ol>
                        <!-- end carousel-indicators -->
                        
                    </div>
                    <!--end carousel1-->
                                            
                </div>
                <!--end col-md-6-->
                 
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
        
    </section>
    <!--end section-white-->
    
      <!--begin footer -->
      <div class="footer">
            
        <!--begin container -->
        <div class="container">
        
            <!--begin row -->
            <div class="row footer-top">
            
                <!--begin col-md-3 -->
                <div class="col-md-3 padding-bottom-50">
                
                    <h4>RRETH NESH</h4>
                    
                    <p>Casa del cibo eshte nje restorante prane kompleksit Prestigj i hapur qe prej vitit 2001 per te vetmet arsye , te sjelle prane klienteve te saje shijen e gatimeve te gjyshes,te risjelli kujtimet e femijrise me shijen e gatimeve mbreslenese</p>
                    
                    <a href="about.html" class="btn btn-lg btn-yellow-x-small scrool">MESO ME SHUME</a>
                    
                </div>
                <!--end col-md-3 -->
                
                <!--begin col-md-3 -->
                <div class="col-md-3 padding-bottom-50">
                
                    <h4>RECETAT ME TE FUNDIT</h4>
                    
                    <ul class="footer-list">
                        
                        <li class="first"><a href="menu.html" target="blank">Canelloni me lakra të stinës </a></li>
                        
                        <li><a href="menu.html" target="blank">Eskallop me kerpudha </a></li>
                        
                        <li><a href="menu.html" target="blank">Llazanja</a></li>
                        
                        <li><a href="menu.html" target="blank">Quinoa me perime</a></li>
                        
                    </ul>
                    
                </div>
                <!--end col-md-3 -->
                
                <!--begin col-md-3 -->
                <div class="col-md-3 padding-bottom-50">
                
                    <h4>Pjatat e Dites</h4>
                    
                    <ul class="footer-gallery">
                        
                        <li class="popup-gallery">
                            <a class="popup2" href="images/foot2.jpg">
                                <img src="images/foot2.jpg" alt="instagram" />
                            </a>
                        </li>
                        
                        <li class="popup-gallery">
                            <a class="popup2" href="images/foot1.jpg">
                                <img src="images/foot1.jpg" alt="instagram" />
                            </a>
                        </li>
                        
                        <li class="popup-gallery">
                            <a class="popup2" href="images/foot3.jpg">
                                <img src="images/foot3.jpg" alt="instagram" />
                            </a>
                        </li>
                        
                        <li class="popup-gallery">
                            <a class="popup2" href="images/foot4.jpg">
                                <img src="images/foot4.jpg" alt="instagram" />
                            </a>
                        </li>
                        
                        <li class="popup-gallery">
                            <a class="popup2" href="images/foot5.jpg">
                                <img src="images/foot5.jpg" alt="instagram" />
                            </a>
                        </li>
                        
                        <li class="popup-gallery">
                            <a class="popup2" href="images/foot6.jpg">
                                <img src="images/foot6.jpg" alt="instagram" />
                            </a>
                        </li>
                        
                    </ul>
                    
                </div>
                <!--end col-md-3 -->
                
                <!--begin col-md-3 -->
                <div class="col-md-3 padding-bottom-50">
                
                    <h4>NA KONTAKTONI</h4>
                    
                    <p>Per me shume informacion rreth kuzhines sone na kontaktoni ne adresat e meposhtme.</p>
                    
                    <p class="contact_info"><i class="fa fa-map-marker"></i>Kompleksi Prestigj,rruga Panorama,Tirane</p>
                    
                    <p class="contact_info"><i class="fa fa-phone"></i> +355685321156 / +35567896563</p>
                
                    <p class="contact_info"><i class="fa fa-envelope-square"></i> <a href="mailto:info@casadelcibo.al">info@casadelcibo.al</a></p>
                    
                </div>
                <!--end col-md-3 -->
                
            </div>
            <!--end row -->
            
            <!--begin row -->
            <div class="row">
                
                <!--begin footer-bottom -->
                <div class="footer-bottom">
                
                    <!--begin col-md-5 -->
                    <div class="col-md-5">
                        
                        <!--begin copyright -->
                        <div class="copyright ">
                            <p>© 2020  Designed by <a href="#" target="_blank">Enri Kapaj</a></p>
                            
                        </div>
                        <!--end copyright -->
                       
                    </div>
                    <!--end col-md-5 -->
                    
                    <!--begin col-md-2 -->
                    <div class="col-md-2 text-center">
                    
                        <a href="#hero-section" class="scrool top-scroll"><i class="fa fa-angle-double-up"></i></a>
                        
                    </div>
                    <!--end col-md-2 -->
                    
                    <!--begin col-md-5 -->
                    <div class="col-md-5">
                                                        
                        <!--begin footer_social -->
                        <ul class="footer_social">
                            <li>
                                Na ndiqni:
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                        <!--end footer_social -->
                        
                    </div>
                    <!--end col-md-5 -->
                        
                </div>
                <!--end footer-bottom -->
                        
            </div>
            <!--end row -->
            
        </div>
        <!--end container -->
                
    </div>
    <!--end footer -->
    

    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.scrollTo-min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/wow.js"></script>
     
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    
    <!-- begin custom script-->
    <script src="js/custom.js"></script>
    <script src="js/plugins.js"></script>
    
</body></html>