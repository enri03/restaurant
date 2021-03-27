
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Menut</title>
    
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
                       
                        <li class="selected"><a href="menu.php">Menut</a></li>
                        <li><a href="reservations.php">Rezervimet</a></li>
                        <li><a href="gallery.html">Galeria</a></li>
                        <li><a href="about.html">Reth Nesh</a></li>
                        <li><a href="contact.html">Na Kontaktoni</a></li>
                        
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
         
    <!--begin menu-hero-section -->
    <section id="hero-section" class="menu-hero-section">
    
        <!--begin image-overlay -->
        <div class="image-overlay"></div>
        <!--end image-overlay -->
            
        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">
                
                    <span class="comic-text white wow fadeIn" data-wow-delay="0.5s">Menuja Jone</span>
                    
                    <h2 class="section-title white wow bounceIn" data-wow-delay="1s">Pije &amp; Ushqime</h2>
                    
                    <p class="hero-text wow fadeInUp" data-wow-delay="2s">Per nje dreke te paharrueshme ne zemer te qytetit te Tiranes.<br>
Ejani dhe shijoni magjine e ushqimeve ne menun tone.</p>
                    
                </div>
                <!--end col-md-10-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </section>
    <!--end menu-hero-section -->

   <!--Lidhja me databazen -->
   <?php require 'php/database.php';
   $dita=date('l');
   
  $result=  $conn->query("SELECT * FROM menu WHERE kategoria='mengjesi' AND  dita='$dita' OR lloji='produkt'") or die($conn->error);
  $result1=  $conn->query("SELECT * FROM menu WHERE kategoria='kryesore' AND  dita='$dita' OR lloji='produkt'") or die($conn->error);
  $result2=  $conn->query("SELECT * FROM menu WHERE kategoria='embelsira' AND  dita='$dita' OR lloji='produkt'") or die($conn->error);
  $result3=  $conn->query("SELECT * FROM menu WHERE kategoria='pije' AND  dita='$dita' OR lloji='produkt'") or die($conn->error);
  $res=$conn->query("SELECT * FROM menu WHERE lloji='Pakete'  ") or die($conn->error);

?>


    <!--begin first-menu-section -->
    <section class="section-white">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6">
                
                    <h2 class="menu-section-title">Mengjesi</h2>

                    <?php while($row=$result->fetch_assoc()): ?>
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                        <form method="POST" action="php/menu-inc.php">
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                        <?php echo ' <img src="admin_dashboard/images/'.$row['img'].'"  class="width-100" alt="food"> '?>
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5><?php echo $row['produkti'] ?></h5>
                                
                                <p class="price" ><?php echo $row['cmimi']."leke"; ?></p>
                                
                                <span class="menu-dot-line"></span>

                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="home-menu-ingredients" style="color:black;"><?php echo $row['pershkrimi'] ?></p>
                           
                         
                             
                        </div>
                        <!--end menu-description-->
                        
                          <button type="submit" name="add" class="btn" style="margin:20px 0 0 0; position:relative;background:#FABC2E; color:black; border:none">Shto ne Shporte</button> 
                   <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>" >
                  
                    </form>
                        </div>
                    <!--end menu-wrapper-->
                    <?php endwhile ?>  

                   
                </div>
                <!--end col-md-6-->
            
                <!--begin col-md-6-->
                <div class="col-md-6">
                
                    <h2 class="menu-section-title">Kryesore</h2>
                                     
                    <?php while($row=$result1->fetch_assoc()): ?>
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                    <form method="POST" action="php/menu-inc.php">
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                        <?php echo ' <img src="admin_dashboard/images/'.$row['img'].'"  class="width-100" alt="food"> '?>
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5><?php echo $row['produkti'] ?></h5>
                                
                                <p class="price" ><?php echo $row['cmimi']."leke"; ?></p>
                                
                                <span class="menu-dot-line"></span>

                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="home-menu-ingredients" style="color:black;"><?php echo $row['pershkrimi'] ?></p>
                            
                        </div>
                        <!--end menu-description-->
                        
                        <button type="submit" name="add" class="btn" style="margin:20px 0 0 0; position:relative;background:#FABC2E; color:black; border:none">Shto ne Shporte</button> 
                   <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>" >
                    </form>       
                    </div>
                    
                    <!--end menu-wrapper-->
                    <?php endwhile ?> 
                    
                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
            
            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6">
                
                    <h2 class="menu-section-title">Embelsira</h2>
                    
                    <?php while($row=$result2->fetch_assoc()): ?>
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                    <form method="POST" action="php/menu-inc.php">
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                        <?php echo ' <img src="admin_dashboard/images/'.$row['img'].'"  class="width-100" alt="food"> '?>
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5><?php echo $row['produkti'] ?></h5>
                                
                                <p class="price" ><?php echo $row['cmimi']."leke"; ?></p>
                                
                                <span class="menu-dot-line"></span>

                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="home-menu-ingredients" style="color:black;"><?php echo $row['pershkrimi'] ?></p>
                            
                        </div>
                        <!--end menu-description-->
                        <button type="submit" name="add" class="btn" style="margin:20px 0 0 0; position:relative;background:#FABC2E; color:black; border:none">Shto ne Shporte</button> 
                   <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>" >
                    </form>          
                    </div>
                    <!--end menu-wrapper-->
                    <?php endwhile ?> 
                    
                </div>
                <!--end col-md-6-->
            
                <!--begin col-md-6-->
                <div class="col-md-6">
                
                    <h2 class="menu-section-title">Kafet &amp; Pijet</h2>
                    
                    <?php while($row=$result3->fetch_assoc()): ?>
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                    <form method="POST" action="php/menu-inc.php">
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                        <?php echo ' <img src="admin_dashboard/images/'.$row['img'].'"  class="width-100" alt="food"> '?>
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5><?php echo $row['produkti'] ?></h5>
                                
                                <p class="price" ><?php echo $row['cmimi']."leke"; ?></p>
                                
                                <span class="menu-dot-line"></span>

                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="home-menu-ingredients" style="color:black;"><?php echo $row['pershkrimi'] ?></p>
                            
                        </div>
                        <!--end menu-description-->
                        <button type="submit" name="add" class="btn" style="margin:20px 0 0 0; position:relative;background:#FABC2E; color:black; border:none">Shto ne Shporte</button> 
                   <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>" >
                    </form>      
                    </div>
                    <!--end menu-wrapper-->
                    <?php endwhile ?> 
                    
                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </section>
    <!--end first-menu-section -->
        
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
                            
                                <h5 class="white">Pica krudo</h5>
                                
                                <p class="price">300 leke</p>
                                
                                <span class="dot-line"> </span>
                        
                                
                            </div>
                           
                            <!--end home-menu-list-->
                            
                            <p class="home-menu-ingredients">Rukola,salce domate, djathkackavall,proshut krudo</p>
                          
                                
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
                            
                                <h5 class="white">Pica alla krema</h5>
                                
                                <p class="price">250 leke</p>
                                
                                <span class="dot-line"></span>
                                
                            </div>
                            <!--end home-menu-list-->
                            
                            <p class="home-menu-ingredients">Djath kackavall ,kremvice mishpule ,mocarela .</p>
                            
                                            
                        </div>
                        <!--end menu-wrapper-->
                        
                    </div>
                    <!--end col-md-6-->
                
                </div>
                <!--end row-->
                       
                <!--begin row-->
                <div class="row text-center margin-top-20 wow bounceIn">
            
                    <a href="#" class="btn btn-lg btn-white-transparent scrool"><i class="pe-7s-note2" style="font-size:20px; float: left; margin-top:-3px; margin-right: 10px; color: #f8bf2c;"></i>Lista e Menuve</a>
                 
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
        
    
    <!--begin slideshow section -->
    <section class="section-white no-padding-bottom">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-12-->
                <div class="col-md-12 text-center">
                
                    <div class="text-center">
                    
                        <span class="comic-text">Ofertat Promocinale</span>
                        
                        <h2 class="section-title no-margin">Paketat Biznes</h2>
                        
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
                            <?php while($row=$res->fetch_assoc()): ?>
                                <!-- SLIDE  -->
                                
                             <li data-index="<?php echo $row['id'] ?>" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="admin_dashboard/images/<?php echo $row['img']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="<?php echo $row['produkti']?>" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="admin_dashboard/images/<?php echo $row['img']; ?>"  alt=""  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    
                                    
                                    <!-- LAYERS -->
    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" 
                                         id="slide-<?php echo $row['id'] ?>-layer-3" 
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
                                        style=" z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline" style=" color: #252525; font-weight:700; text-decoration: underline;"><?php echo $row['produkti'] ?></span><br/>
                                        Ne paket biznes 1 <br/>
                                        perfshihen:<?php echo $row['pershkrimi'] ?>
                                        <br>
                                        per vetem <?php echo $row['cmimi'] ?> leke<br/>
                                        
                            <hr  style="border-top: 1px solid #292e31;">
                            <form method="POST" action="php/menu-inc.php">
                            <button type="submit" name="add" class="btn" style="margin:20px 0 0 0; position:relative;background:#FABC2E; color:black; border:none">Shto ne Shporte</button> 
                            <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>" > 
                            </form>
                                    </div>
    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption FoodCarousel-Button rev-btn " 
                                         id="slide-<?php echo $row['id'] ?>-layer-1" 
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
                                        data-actions='[{"event":"click","action":"startlayer","layer":"slide-<?php echo $row['id'] ?>-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-<?php echo $row['id'] ?>-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-<?php echo $row['id'] ?>-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                                    data-lasttriggerstate="reset"
                                        style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-note2" style="font-size: 21px; float: left;margin-top:-6px;margin-right:10px;"></i> SHIKO PAKETEN 
                                    </div>
    

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" 
                                         id="slide-<?php echo $row['id'] ?>-layer-5" 
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
                                        data-actions='[{"event":"click","action":"stoplayer","layer":"slide-<?php echo $row['id'] ?>-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-<?php echo $row['id'] ?>-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-<?php echo $row['id'] ?>-layer-1","delay":""}]'
                                        data-responsive_offset="on" 
    
                                         data-end="bytrigger"
                                        data-lasttriggerstate="reset"
                                        style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa fa-remove"></i>
                                    </div>
                                    
                                </li>
                                <?php endwhile; ?>

                                
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
     
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>

    <!-- begin custom script-->
    <script src="js/custom.js"></script>
    <script src="js/plugins.js"></script>
    
</body></html>