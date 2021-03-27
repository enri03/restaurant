      <?php
                require 'php/database.php';
                $dita=date('l');
                
                 $res=$conn->query("SELECT * FROM menu WHERE lloji='Pakete'  ") or die($conn->error); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Kryefaqa</title>
    
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
    
	<!--begin loader -->
    <div id="loader">
    	<div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
    	</div>
    </div>
    <!--end loader -->
    
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
                                                                        
                    <a href="index.html" class="navbar-brand brand scrool"><img src="images/logo22.png" alt="logo" class="width-100"></a>
                </div>
                        
                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">			      
                        <li class="selected"><a href="index.html">Kryefaqja</a></li>
                        
                        <li><a href="menu.php">Menut</a></li>
                        <li><a href="reservations.php">Rezervime</a></li>
                        <li><a href="gallery.html">Galeria</a></li>
                        <li><a href="about.html">Rrethnesh</a></li>
                        <li><a href="contact.html">Na kontaktoni</a></li>
                        
                        <li class="social"><a href="#" class="first"><i class="fa fa-twitter"></i></a></li>
                        <li class="social"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="social"><a href="#" class="last"><i class="fa fa-instagram"></i></a></li>
                        
                        <li><a href="card/card.php" class="purchase"   target="_blank">Shporta
                        <span id="count_card">
                        <?php

                                        if (isset($_SESSION['card'])){
                                            $count = count($_SESSION['card']);
                                            echo "<span >$count</span>";
                                        }else{
                                            echo "<span>0</span>";
                                        }

                                        ?>
                        </span>
                    </a>
                    </li>
                    </ul>
                </div>
                <!--end navbar -->
                                    
            </div>
    		<!--end container -->
            
        </nav>
    	<!--end nav -->
        
    </header>
    <!--end header -->
        
    <!--begin home-hero-section -->
    <div id="hero-section" class="home-hero-section">
                          
        <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept1" style="background-color:#000000;padding:0px;">
    
            <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
            <div id="rev_slider_202_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.1RC">
            
                <ul>
                
                    <!-- SLIDE  -->
                    <li data-index="rs-672" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/150x100" data-rotate="0" data-saveperformance="off" data-title="Casa del cibo" data-description="">
                    
                        <!-- MAIN IMAGE -->
                        <img src="images/wallpaper.jpg" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-672-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 0);">
                        </div>

                     

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Concept-SubTitle   tp-resizeme" id="slide-672-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['115','115','107','104']" data-fontsize="['28','28','20','20']" data-lineheight="['28','28','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;font-style:italic;">Kuzhina e gjyshes!
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption Concept-Title   tp-resizeme" id="slide-672-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" data-fontsize="['70','70','50','40']" data-lineheight="['70','70','50','40']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;text-align:center;">Arome Shtepie!
                        </div>

                        
                        <!-- LAYER NR. 5 -->
                      

                    </li>
                    
                    <!-- SLIDE  -->
                    <li data-index="rs-674" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/150x100" data-rotate="0" data-saveperformance="off" data-title="Casa del cibo" data-description="">
                    
                        <!-- MAIN IMAGE -->
                        <img src="images/foto5.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-674-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="bytrigger" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-end="bytrigger" data-lasttriggerstate="keep" style="z-index: 5;background-color:rgba(255, 255, 255, 0.35);border-color:rgba(0, 0, 0, 0);">
                        </div>

                       

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Concept-SubTitle   tp-resizeme" id="slide-672-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['115','115','107','104']" data-fontsize="['28','28','20','20']" data-lineheight="['28','28','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;font-style:italic;">Eja tek Cibo per te shijuar gatimet me mbreslenese
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption Concept-Title   tp-resizeme" id="slide-672-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" data-fontsize="['70','70','50','40']" data-lineheight="['70','70','50','40']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;text-align:center;">Shija e paharruar!
                        </div>
                        
                        <!-- LAYER NR. 5 -->
                        

                    </li>
                    
                  
                    
                </ul>
                
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                
            </div>
            
        </div>
        <!-- END REVOLUTION SLIDER -->
              
    </div>
    <!--end home-hero-section -->
    
    <!--begin section-white-->
    <section class="section-white">
    
      <!--begin container-->
      <div class="container"> 

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6 text-center padding-top-50 padding-bottom-50 wow slideInLeft">
            
                    <span class="comic-text">Mëso</span>
                    
                    <h2 class="section-title">Historine tone</h2>
                    
                    <p>Casa del cibo eshte nje restorante prane kompleksit Prestigj i hapur qe prej vitit 2001 per te vetmet arsye , te sjelle prane klienteve te saje shijen e gatimeve te gjyshes,te risjelli kujtimet e femijrise me shijen e gatimeve mbreslenese.</p>
                    
                    <a href="about.html" class="btn btn-lg btn-yellow">Rreth Nesh</a>
                
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
                                    <img src="images/foto4.jpg" alt="picture" class="width-100">
                                </div>
                                <!--end image-wrapper-->
                                
                            </div>
                            <!--end carousel item-->
                            
                            <!--begin carousel item-->
                            <div class="item">
                            
                                <!--begin image-wrapper-->
                                <div class="image-wrapper">
                                    <img src="images/foto6.jpg" alt="picture" class="width-100">
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
    
    <!--begin image-section -->
    <section class="image-section">
    
        <!--begin image-overlay -->
        <div class="image-overlay"></div>
        <!--end image-overlay -->
            
        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">
                
                    <span class="comic-text wow fadeIn">Shija e Pasionit te vertete</span>
                    
                    
                    
                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
        
    </section>
    <!--end image-section -->
    
    <!--begin section-white-->
    <section class="section-white">
    
      <!--begin container-->
      <div class="container"> 

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6 wow slideInLeft">
                                    
                    <!--begin carousel1-->
                    <div id="myCarousel2" class="carousel carousel1 slide" data-interval="true">
                        
                        <!--begin carousel-inner-->
                        <div class="carousel-inner">
                        
                            <!--begin carousel item-->
                            <div class="item active">
                            
                                <!--begin image-wrapper-->
                                <div class="image-wrapper">
                                    <img src="images/foto7.jpg" alt="picture" class="width-100">
                                </div>
                                <!--end image-wrapper-->
                                
                            </div>
                            <!--end carousel item-->
                            
                            <!--begin carousel item-->
                            <div class="item">
                            
                                <!--begin image-wrapper-->
                                <div class="image-wrapper">
                                    <img src="images/foto9.jpg" alt="picture" class="width-100">
                                </div>
                                <!--end image-wrapper-->
                                
                            </div>
                            <!--end carousel item-->
                                                       
                        </div>
                        <!--end carousel-inner-->
                        
                        <!-- begin carousel-indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                        </ol>
                        <!-- end carousel-indicators -->
                        
                    </div>
                    <!--end carousel1-->
                                            
                </div>
                <!--end col-md-6-->
                
                <!--begin col-md-6-->
                <div class="col-md-6 text-center padding-top-50 padding-bottom-50 wow slideInRight">
            
                    <span class="comic-text">Eksploro</span>
                    
                    <h2 class="section-title">Kuzhinen tone</h2>
                    
                    <p>Casa del cibo aty ku komoditeti bashkohore takon shijen e gatimit te vertete.Casa del chibo ka nje stafe kuzhineresh me eksperience nderkombetare dhe nje nje staf kamarieresh shume mikeprites </p>
                    
                    <a href="gallery.html" class="btn btn-lg btn-yellow scrool">Galeria</a>
                
                </div>
                <!--end col-md-6-->
                 
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
        
    </section>
    <!--end section-white-->
    
    <!--begin home-menu-section -->
    <section class="home-menu-section">
    
        <!--begin image-overlay -->
        <div class="image-overlay"></div>
        <!--end image-overlay -->
            
        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-7-->
                <div class="col-md-7">
                           
                    <div class="text-center margin-bottom-30">
                    
                        <span class="comic-text wow fadeIn">Recetat me te mira </span>
                        
                      
                        
                    </div>
                           
                    <!--begin row-->
                    <div class="row">
                    
                        <!--begin col-md-6-->
                        <div class="col-md-6 wow fadeInUp">
                            
                            <!--begin menu-wrapper-->
                            <div class="menu-wrapper">
                                
                                <!--begin home-menu-list-->
                                <div class="home-menu-list">
                                
                                    <h5 class="white">Mengjes Francez</h5>
                                    
                                    <p class="price">220 leke</p>
                                    
                                    <span class="dot-line"></span>
                            
                                    
                                </div>
                               
                                <!--end home-menu-list-->
                                
                                <p class="home-menu-ingredients">Briosh + Leng frutash mix bio</p>
                              
                                    
                            </div>
                            <!--end menu-wrapper-->
                            
                        </div>
                        <!--end col-md-6-->
                    
                        <!--begin col-md-6-->
                        <div class="col-md-6 wow fadeInUp">
                            
                            <!--begin menu-wrapper-->
                            <div class="menu-wrapper">
                                
                                <!--begin home-menu-list-->
                                <div class="home-menu-list">
                                
                                    <h5 class="white">Supe Perimesh </h5>
                                    
                                    <p class="price">150 leke</p>
                                    
                                    <span class="dot-line"></span>
                                    
                                </div>
                                <!--end home-menu-list-->
                                
                                <p class="home-menu-ingredients">Brokoli i grire, karrota, patellxhan,speca ,domate </p>
                                
                              
                                        
                            </div>
                            <!--end menu-wrapper-->
                            
                        </div>
                        <!--end col-md-6-->
                    
                        <!--begin col-md-6-->
                        <div class="col-md-6 wow fadeInUp">
                            
                            <!--begin menu-wrapper-->
                            <div class="menu-wrapper">
                                
                                <!--begin home-menu-list-->
                                <div class="home-menu-list">
                                
                                    <h5 class="white">Fileto Pule Zgare</h5>
                                    
                                    <p class="price">250 leke</p>
                                    
                                    <span class="dot-line"></span>
                                    
                                </div>
                                <!--end home-menu-list-->
                                
                                <p class="home-menu-ingredients">Fileto pule ne zgare , patellxhan ne zgaare ,speca ne zgare</p>
                               
                                            
                            </div>
                            <!--end menu-wrapper-->
                            
                        </div>
                        <!--end col-md-6-->
                    
                        <!--begin col-md-6-->
                        <div class="col-md-6 wow fadeInUp">
                            
                            <!--begin menu-wrapper-->
                            <div class="menu-wrapper">
                                
                                <!--begin home-menu-list-->
                                <div class="home-menu-list">
                                
                                    <h5 class="white">Eskallop</h5>
                                    
                                    <p class="price">350 leke</p>
                                    
                                    <span class="dot-line"></span>
                                    
                                </div>
                                <!--end home-menu-list-->
                                
                                <p class="home-menu-ingredients">Fileto pule ,eskallop ,arra , oriz,tartuf.</p>
                               
                                                
                            </div>
                            <!--end menu-wrapper-->
                            
                        </div>
                        <!--end col-md-6-->
                    
                    </div>
                    <!--end row-->
                           
                    <!--begin row-->
                    <div class="row text-center margin-top-20 wow bounceIn">
                
                        <a href="menu.php" class="btn btn-lg btn-white-transparent scrool"><i class="pe-7s-note2" style="font-size:20px; float: left; margin-top:-3px; margin-right: 10px; color: #f8bf2c;"></i>Lista e Menuve</a>
                     
                    </div>
                    <!--end row-->
                    
                </div>
                <!--end col-md-7-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </section>
    <!--end home-menu-section -->
    
    <!--begin section-white-->
    <section class="section-white small-padding-bottom">
    
        <!--begin container-->
        <div class="container"> 

            <!--begin row-->
            <div class="row margin-bottom-40">
            
                <!--begin col-md-12-->
                <div class="col-md-12 text-center">
                
                    <div class="text-center">
                    
                        <span class="comic-text wow fadeIn">Te rejat me te fundit</span>
                        
                        <h2 class="section-title wow bounceIn">Paketat Biznesit</h2>
                        
                    </div>
            
                </div>
                <!--end col-md-12-->
            
            </div>
            <!--end row-->
            
            <!--begin row-->
            <div class="row">
     <?php while($row=$res->fetch_assoc()): ?>
                <!--begin col-md-4 -->
                <div class="col-md-4 wow bounceInUp">
              
                    <!--begin blog-item -->
          
                    <form method="POST" action="php/menu-inc.php">
                 
                    <div class="blog-item">
                            
                        <!--begin popup image -->
                        <div class="popup-wrapper" >
                            <div class="popup-gallery" >
                                <a href="#" class="blog-item-pic" ><?php echo ' <img src="admin_dashboard/images/'.$row['img'].'"  class="width-100" alt="food"> '?><span class="eye-wrapper"><i class="pe-7s-link eye-icon"></i></span></a>
                            </div>
                        </div>
                        <!--begin popup image -->
                            
                        <!--begin blog-item_inner -->
                        <div class="blog-item-inner">
                        
                            <h3 class="blog-title"><a href="#"><?php echo $row['produkti']; ?></a></h3>
                            
                                                                    
                            <p>Paketa Biznes numer 1 perfshin <?php echo $row['pershkrimi']; ?> per nje cmim vetem <?php echo $row['cmimi'] ?> leke</p>
    
                            <button type="submit" name="add"  class="btn btn-lg btn-yellow-small scrool">Shto ne shporte</button>
                            <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>" > 
                            <input type="hidden" name="lloji" value="<?php echo $row['lloji'] ?>" >                                
                        </div>
                        <!--end blog-item-inner -->
                        
                    </div>
                    <!--end blog-item -->
                  </form>
                </div>
                <!--end col-md-4-->
                  <?php endwhile; ?> 
               
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
    
	</section>
    <!--end section-white-->
    
    <!--begin instagram feed -->
    <div id="instafeed">
        
        <!--begin iinstagram-text -->
        <div class="instagram-text">
        
        	<a href="#" target="_blank" class="instagram-icon"><i class="fa fa-instagram"></i></a>
        
        	<p>Please follow on Instagram<br>for latest recipes.</p>
        
        </div>
        <!--end instagram-text -->
        
    </div>
    <!--end instagram feed -->
    
    <!--begin slideshow section -->
    <section class="section-white no-padding-bottom">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-12-->
                <div class="col-md-12 text-center">
                
                    <div class="text-center">
                    
                        <span class="comic-text">Specialitetet e Shefit</span>
                        
                        <h2 class="section-title no-margin">Receta Gatimi</h2>
                        
                    </div>
            
                </div>
                <!--end col-md-12-->
            
            </div>
            <!--end row-->
            
            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-12-->
                <div class="col-md-12 text-center">
                
                    <!--begin rev_slider_108_1_wrapper-->
                    <div id="rev_slider_108_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="food-carousel80" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;">
                        
                        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                        <div id="rev_slider_108_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                            
                            <ul>	
                            
                                <!-- SLIDE  -->
                                <li data-index="rs-326" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/recet1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Corbe Proteinike" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/recet1.jpg"  alt=""  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" 
                                         id="slide-326-layer-3" 
                                         data-x="center" data-hoffset="" 
                                         data-y="center" data-voffset="" 
                                                    data-width="['420']"
                                        data-height="['420']"
                                        data-transform_idle="o:1;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style=" z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline" style=" color: #252525; font-weight:700; text-decoration: underline;">Corbe Proteinike</span><br/>
                                        800 ml salcë domatesh<br/>
                                        55 gr thjerrëza të gjelbra<br/>
                                        200 gr kore të thata për llazanje<br/>
                                        1 litër e gjysmë ujë nga perimet<br/>
                                        120 gr spinaq të freskë<br>
                                        2 lugë të vogla koncentrat domatesh
                            <hr  style="border-top: 1px solid #292e31;">
                            Në një tenxhere të madhe nxehni vajin e ullirit në temperaturë mesatare. Shtoni qepën e grirë dhe fërgoni tre deri në katër minuta derisa të bëhet gjysmëtransparent.
                                    </div>
    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption FoodCarousel-Button rev-btn " 
                                         id="slide-326-layer-1" 
                                         data-x="center" data-hoffset="" 
                                         data-y="bottom" data-voffset="50" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" 
                                         data-transform_out="opacity:0;s:300;s:300;" 
                                        data-start="0" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"startlayer","layer":"slide-326-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-326-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-326-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                                    data-lasttriggerstate="reset"
                                        style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-note2" style="font-size: 21px; float: left;margin-top:-6px;margin-right:10px;"></i> SHIKO RECETEN 
                                    </div>
    
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" 
                                         id="slide-326-layer-5" 
                                         data-x="441" 
                                         data-y="110" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"stoplayer","layer":"slide-326-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-326-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-326-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-remove"></i>
                                    </div>
                                    
                                </li>
                                
                                <!-- SLIDE  -->
                                <li data-index="rs-327" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/recete2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Bizele me kërpudha" data-description="">
                                
                                    <!-- MAIN IMAGE -->
                                    <img src="images/recete2.jpg"  alt=""  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" 
                                         id="slide-327-layer-3" 
                                         data-x="center" data-hoffset="" 
                                         data-y="center" data-voffset="" 
                                                    data-width="['420']"
                                        data-height="['420']"
                                        data-transform_idle="o:1;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline" style=" color: #252525; font-weight:700; text-decoration: underline;">Bizele me kërpudha</span><br/>
                                        3 qepë<br/>
                                        600 g bizele<br/>
                                        500 g kërpudha<br/>
                                        200 ml salcë domatesh<br/>
                                        2 lugë miell
                            <hr  style="border-top: 1px solid #292e31;">
                            Qepët e qëruara grini imët dhe fërgoni në vaj.

                            Pastaj shtoni kërpudhat e grira imët dhe vazhdoni t’i fërgoni edhe 10 minuta.
                            
                            Shtoni bizelen e zier në avull dhe të gjitha bashkë fërgoni edhe 20 minuta në zjarr ulët.
                                    </div>
    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption FoodCarousel-Button rev-btn " 
                                         id="slide-327-layer-1" 
                                         data-x="center" data-hoffset="" 
                                         data-y="bottom" data-voffset="50" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" 
                                         data-transform_out="opacity:0;s:300;s:300;" 
                                        data-start="0" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"startlayer","layer":"slide-327-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-327-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-327-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                                    data-lasttriggerstate="reset"
                                        style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-note2" style="font-size: 21px; float: left;margin-top:-6px;margin-right:10px;"></i> SHIKO RECETEN 
                                    </div>
    
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" 
                                         id="slide-327-layer-5" 
                                         data-x="441" 
                                         data-y="110" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"stoplayer","layer":"slide-327-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-327-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-327-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-remove"></i>
                                    </div>
                                    
                                </li>
                                
                                <!-- SLIDE  -->
                                <li data-index="rs-328" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/recete3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Imam Bajelldi" data-description="">
                                
                                    <!-- MAIN IMAGE -->
                                    <img src="images/recete3.jpg"  alt=""  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" 
                                         id="slide-328-layer-3" 
                                         data-x="center" data-hoffset="" 
                                         data-y="center" data-voffset="" 
                                                    data-width="['420']"
                                        data-height="['420']"
                                        data-transform_idle="o:1;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline" style=" color: #252525; font-weight:700; text-decoration: underline;">Imam Bajelldi</span><br/>
                                        6 patëllxhanë<br/>
                                        3 speca të gjelbër<br/>
                                        7 domate<br/>
                                        6 thelpinj hudhre<br/>
                                        spec i kuq bluar
                            <hr  style="border-top: 1px solid #292e31;">
                            Nxehni vajin në tigan. Pastroni patëllxhanët, pastaj i lini një orë në ujë të ftohtë dhe të njelmët.

                            Pas një ore, thani patëllxhanët me peshqir kuzhine.
                            
                            Fërgoni patëllxhanët në vaj të valuar nga të gjitha anët derisa të marrin ngjyrë të artë. Patëllxhanët e fërguar vendosni në letër kuzhine që të kullohet teprica e vajit.
                            
                            
                                    </div>
    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption FoodCarousel-Button rev-btn " 
                                         id="slide-328-layer-1" 
                                         data-x="center" data-hoffset="" 
                                         data-y="bottom" data-voffset="50" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" 
                                         data-transform_out="opacity:0;s:300;s:300;" 
                                        data-start="0" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"startlayer","layer":"slide-328-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-328-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-328-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                                    data-lasttriggerstate="reset"
                                        style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-note2" style="font-size: 21px; float: left;margin-top:-6px;margin-right:10px;"></i> SHIKO RECETEN
                                    </div>
    
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" 
                                         id="slide-328-layer-5" 
                                         data-x="441" 
                                         data-y="110" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"stoplayer","layer":"slide-328-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-328-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-328-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-remove"></i></div>
                                    
                                </li>
                                
                                <!-- SLIDE  -->
                                <li data-index="rs-329" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/recete4.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Speca te Mbushura " data-description="">
                                
                                    <!-- MAIN IMAGE -->
                                    <img src="images/recete4.jpg"  alt=""  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" 
                                         id="slide-329-layer-3" 
                                         data-x="center" data-hoffset="" 
                                         data-y="center" data-voffset="" 
                                                    data-width="['420']"
                                        data-height="['480']"
                                        data-transform_idle="o:1;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline" style=" color: #252525; font-weight:700; text-decoration: underline;">Speca te mbushura</span><br/>
                                        5-7 speca të pjeku<br/>
                                        500 gramë djathë të freskët të kulluar mirë<br/>
                                        2-3 lugë parmezan<br/>
                                        bimë erëzash sipas dëshirës (qepujka, borzilok, rozmarinë)<br/>
                                        2 thelpinj hudhra
                            <hr  style="border-top: 1px solid #292e31;">
                            Djathin e kulluar mirë përzieni dhe shtoni erëzat, sipas dëshirës, hudhrën e grirë mirë dhe kripën.

                            Mbushni specat dhe radhisni në një enë rezistuese ndaj zjarrit, të cilën e keni bërë me vaj ulliri.
                            
                            Fusni në furrën e nxehur dhe piqni rreth 20 minuta në 200 gradë Celsius.
                            
                            Specat shërbeni të nxehtë, por janë të shijshëm edhe kur ftohen.
                                    </div>
    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption FoodCarousel-Button rev-btn " 
                                         id="slide-329-layer-1" 
                                         data-x="center" data-hoffset="" 
                                         data-y="bottom" data-voffset="50" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" 
                                         data-transform_out="opacity:0;s:300;s:300;" 
                                        data-start="0" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"startlayer","layer":"slide-329-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-329-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-329-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                                    data-lasttriggerstate="reset"
                                        style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-note2" style="font-size: 21px; float: left;margin-top:-6px;margin-right:10px;"></i> SHIKO RECETEN
                                    </div>
    
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" 
                                         id="slide-329-layer-5" 
                                         data-x="441" 
                                         data-y="110" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"stoplayer","layer":"slide-329-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-329-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-329-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-remove"></i></div>
                                    
                                </li>
                                
                                <!-- SLIDE 5 -->
                                <li data-index="rs-330" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/recet5.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Mojito" data-description="">
                                
                                    <!-- MAIN IMAGE -->
                                    <img src="images/recet5.jpg"  alt=""  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" 
                                         id="slide-330-layer-3" 
                                         data-x="center" data-hoffset="" 
                                         data-y="center" data-voffset="" 
                                                    data-width="['500']"
                                        data-height="['420']"
                                        data-transform_idle="o:1;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline" style=" color: #252525; font-weight:700; text-decoration: underline;">Mojito</span><br/>
                                        3 gjethe nenexhiku (mente)<br/>
                                        30 ml rum i bardhë<br/>
                                        20-25 ml lëng i freskët lime (limoni ngjyrë jeshil)<br/>
                                        15 ml shurup i thjeshtë (mund të jetë edhe ujë i zierë me sheqer)<br/>
                                        sasi shumë e vogël uji të gazuar/tonik<br/>
                                        
                            <hr  style="border-top: 1px solid #292e31;">
                            1. Përzieni nenexhikun në një shaker (ose tundini në një shishe të thjeshtë).

                            2. Shtoni aty rumin, lëngun e lime, shurupin, akullin dhe tundini të gjithë përbërësit.
                            
                            3. Vendoseni pijen në një gotë të thellë, bashkë me akullin.
                            
                            4. Hidhni pak ujë të gazuar sipër.
                            
                            5. Zbukurojeni gotën me gjethe nenexhiku dhe feta lime.
                            
                            Shijojeni!
                                    </div>
    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption FoodCarousel-Button rev-btn " 
                                         id="slide-330-layer-1" 
                                         data-x="center" data-hoffset="" 
                                         data-y="bottom" data-voffset="50" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" 
                                         data-transform_out="opacity:0;s:300;s:300;" 
                                        data-start="0" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"startlayer","layer":"slide-330-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-330-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-330-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                                    data-lasttriggerstate="reset"
                                        style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-note2" style="font-size: 21px; float: left;margin-top:-6px;margin-right:10px;"></i> SHIKO RECETEN
                                    </div>
    
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" 
                                         id="slide-330-layer-5" 
                                         data-x="441" 
                                         data-y="110" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"stoplayer","layer":"slide-330-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-330-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-330-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-remove"></i></div>
                                    
                                </li>
                                
                                <!-- SLIDE 6 -->
                                <li data-index="rs-331" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/recete6.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Akullore me Banane" data-description="">
                                
                                    <!-- MAIN IMAGE -->
                                    <img src="images/recete6.jpg"  alt=""  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" 
                                         id="slide-331-layer-3" 
                                         data-x="center" data-hoffset="" 
                                         data-y="center" data-voffset="" 
                                                    data-width="['420']"
                                        data-height="['420']"
                                        data-transform_idle="o:1;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline" style=" color: #252525; font-weight:700; text-decoration: underline;">Akullore me banane dhe tershere</span><br/>
                                        3 banane të prera dhe të ngrira<br/>
                                        1/2 gotë qumësht<br/>
                                        1/2 gotë me tërshërë<br/>
                                        1 lugë kanellë<br/>
                                        1/4 gotë me rrush të thatë
                            <hr  style="border-top: 1px solid #292e31;">
                            Vendosini të gjithë përbërësit në një blender derisa të marrin formë të njëtrajtshme.

                            Shoqërojeni me rrush të thatë, sipas dëshirës.
                            
                            Mund ta konsumoni në moment ose ta vendosni në ngrirje dhe ta konsumoni më vonë.
                                    </div>
    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption FoodCarousel-Button rev-btn " 
                                         id="slide-331-layer-1" 
                                         data-x="center" data-hoffset="" 
                                         data-y="bottom" data-voffset="50" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" 
                                         data-transform_out="opacity:0;s:300;s:300;" 
                                        data-start="0" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"startlayer","layer":"slide-331-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-331-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-331-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                                    data-lasttriggerstate="reset"
                                        style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-note2" style="font-size: 21px; float: left;margin-top:-6px;margin-right:10px;"></i> SHIKO RECETEN 
                                    </div>
    
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" 
                                         id="slide-331-layer-5" 
                                         data-x="441" 
                                         data-y="110" 
                                                    data-width="['auto']"
                                        data-height="['auto']"
                                        data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"
                             
                                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" 
                                         data-transform_out="auto:auto;s:500;" 
                                        data-start="bytrigger" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-actions='[{"event":"click","action":"stoplayer","layer":"slide-331-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-331-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-331-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-remove"></i></div>
                                    
                                </li>
                                
                            </ul>
                            
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                            
                        </div>
                        
                    </div>
                    <!--end rev_slider_108_1_wrapper-->
                    
                </div>
                <!--end col-md-12-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </section>
    <!--end slideshow section -->
    
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
                        
                        <li class="first"><a href="#" target="blank">Canelloni me lakra të stinës </a></li>
                        
                        <li><a href="#" target="blank">Eskallop me kerpudha </a></li>
                        
                        <li><a href="#" target="blank">Llazanja</a></li>
                        
                        <li><a href="#" target="blank">Quinoa me perime</a></li>
                        
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
    <script src="js/instafeed.js"></script>
    <script src="js/instagram.js"></script>
     
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    
    <!-- begin custom script-->
    <script src="js/custom.js"></script>
    <script src="js/plugins.js"></script>
    
</body></html>