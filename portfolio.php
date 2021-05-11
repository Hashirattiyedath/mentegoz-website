<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="mentegoz" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="HTML5 Template mentegoz" />
    <meta name="description" content="mentegoz - Startup Agency and SasS Business Template" />

    <!-- title  -->
    <title>Mentegoz Technologies,Best Web-design,web-development,software company in calicut,Kerala</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="img/eye_left.png" />
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css">

    <!-- switcher css -->
    <link href="css/switcher.css" rel="stylesheet">

    <!-- core style css -->
    <link href="css/styles.css" rel="stylesheet" id="colors">
    <link rel="stylesheet" href="css/additional_style.css">

<style>
#baguetteBox-overlay .full-image img {
  display: inline-block;
  width: auto;
  padding: 25px;
  border-radius: 10px;
  height: auto;
  max-height: 100%;
  max-width: 100%;
  vertical-align: middle;
  -moz-box-shadow: 0 0 8px rgba(0, 0, 0, .6);
  box-shadow: 0 0 8px rgba(0, 0, 0, .6);
}

.tz-gallery .lightbox:before {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -13px;
  margin-left: -13px;
  opacity: 0;
  color: #fff;
  font-size: 26px;
  font-family: 'Glyphicons Halflings';
  content: '\e003';
  pointer-events: none;
  z-index: 9000;
  transition: 0.4s;
  border-radius: 10px;
}

.tz-gallery .lightbox:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  background-color: rgba(46, 132, 206, 0.7);
  content: '';
  transition: 0.4s;
}

.items:hover .carousel-indicators {
  opacity: 0;
}

.items:hover .middle {
  opacity: 1;
}

.items:hover .middle1 {
  opacity: 1;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  background-color: #000000d1;
  padding: 10px;
  bottom: 0%;
  height: 20%;
  width: 94%;
  bottom: -8%;
  left: 50%;
  border-radius: 3px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  z-index: 10;
  box-shadow: 0 0 3px #5d5b5b;
}

.middle1 {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  background-color: #000000d1;
  padding: 8px;
  bottom: 0%;
  height: 36%;
  width: 89%;
  bottom: -17%;
  left: 50%;
  border-radius: 3px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  z-index: 10;
  box-shadow: 0 0 3px #5d5b5b;
}

.middle .text {
  color: #fff;
  text-transform: uppercase;
}

.middle1 .text {
  color: #fff;
  line-height: 22px;
  text-transform: uppercase;
}

.carousel-indicators .active {
  box-sizing: content-box;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 5px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: var(--brand-color);
  background-clip: padding-box;
  border: none;
  opacity: 1;
  transition: opacity .6s ease;
}

.carousel-indicators li {
  box-sizing: content-box;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 25px;
  height: 5px;
  margin-right: 3px;
  margin-left: 3px;
  border: none;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  opacity: .5;
  transition: opacity .6s ease;
}

.navbar>ul>li.has-sub>a:after {
  position: absolute;
  top: 29px;
  right: -7px;
  content: "";
  border-color: transparent #232323 #232323 transparent;
  border-style: solid;
  border-width: 0 1px 1px 0;
  display: block;
  height: 6px;
  transform: rotate(45deg);
  transition: border 0.3s ease 0s;
  width: 6px;
}
</style>

</head>
<body>

<!--------- preloader-start ---------->
<div class="preloader__new">
  <div class="preloader__img">
    <img loading="lazy" src="img/eye_left.png" class="eyez" alt="">
    <img loading="lazy" src="img/eye_right.png" class="eyez" alt="">
    <h6>loading...</h6>
  </div>
</div>
<!---------- preloader-end ----------->

<!-- start main-wrapper section -->
<div class="main-wrapper">

<!-- start header section -->
<?php $page = 'portfolio'; include 'header.php'; ?>
<!-- end header section -->

<!-- start page title section -->
<section class="page-title-section bg-img cover-background theme-overlay" data-overlay-dark="7" data-background="img/banner/bg9.jpg">
   <div class="container">
   </div>
</section>
<!-- end page title section -->

<!-- start portfolio section -->
<section class="portfolio wow fadeInUp">
   <div class="container">
      <div class="text-center section-heading">
         <h2>Some Recent Projects!</h2>
      </div>
      <div class="container">
         <div class="row">
            <!-- Start links -->
            <div class="filtering col-sm-12 text-center">
               <span data-filter='*' class="active">ALL</span>
               <span data-filter='.web'>WEB</span>
               <span data-filter='.app'>MOBILE APP</span>
               <span data-filter='.br'>BRANDING</span>
               <!--<span data-filter='.sm'>SOCIAL MEDIA</span>-->
            </div>
            <!-- End links -->
            <div class="clearfix"></div>
            <!-- gallery -->
            <div class="gallery text-center width-100">
               <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://thebakingmommy.com">
                           <div class="text"><span style="text-transform: uppercase;">E-Commerce Website</span><br> The Bakingmommy<br><span style="font-size: 12px;">Riyadh, KSA</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/thebakingmommy/1.jpg" alt="Ecommerce website provider" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/thebakingmommy/2.jpg" alt="e-commerce website designing" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/thebakingmommy/3.jpg" alt="e-commerce Development" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/thebakingmommy/4.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

              <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://www.cotonblossom.org/">
                           <div class="text"><span style="text-transform: uppercase;">Dynamic Website</span><br> Coton Blossom<br><span style="font-size: 12px;">Tamil nadu</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/cottom blossom/1.jpg" alt="Ecommerce website provider" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/cottom blossom/2.jpg" alt="e-commerce website designing" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/cottom blossom/3.jpg" alt="e-commerce Development" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

               <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="https://olivepublications.in/">
                           <div class="text"><span style="text-transform: uppercase;">E-Commerce Website</span><br> Olive publications<br><span style="font-size: 12px;">Calicut, kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/olive/1.jpg" alt="E-commerce website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/olive/2.jpg" alt="E-commerce website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/olive/3.jpg" alt="E-commerce website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

               <!-- start gallery item -->
               <div class="col-md-8 items web">
                  <div class="tz-gallery">
                     <div class="middle">
                        <a href="http://asadi.edu.in">
                           <div class="text"><span>E-COLLEGE MANAGEMENT SYSTEM</span> <br>Asian School of Architecture and Design Innovation (ASADI) <br><span style="font-size: 12px;"> Kochi, Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/asadi/asadi1.jpg" alt="asadi" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/asadi/asadi2.jpg" alt="asadi" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/asadi/asadi3.jpg" alt="asadi" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/asadi/asadi.jpg" alt="asadi" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

               <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://jdtislamiti.org">
                           <div class="text"><span>Dynamic Website</span> <br>JDT ISLAM Group Of Institutions <br><span style="font-size: 12px;">Kozhikode,Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/jdt/1.jpg" alt="institution website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/jdt/2.jpg" alt="Collage website calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/jdt/3.jpg" alt="Jdt islam website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/jdt/4.jpg" alt="Digital marketing and ads" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

               <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://www.highlinepestcontrol.com/">
                           <div class="text"><span>Dynamic Website</span> <br>High Line Pest Control <br><span style="font-size: 12px;">Ajman,UAE</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/pest/1.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/pest/2.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/pest/3.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/pest/4.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->
               

                <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://skillhatservices.com/">
                           <div class="text"><span>Dynamic Website</span> <br>Skill hat services <br><span style="font-size: 12px;">Calicut, Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/skillhat/1.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/skillhat/2.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/skillhat/3.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->



               <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://www.ellipsiztrading.com/">
                           <div class="text"><span>Dynamic Website</span> <br>Ellipsiz the Couturier <br><span style="font-size: 12px;">Calicut, Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/ELLIPSIZ (WEB)/1.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/ELLIPSIZ (WEB)/elipsiz-mob.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->


               <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://www.ellipsiztrading.com/">
                           <div class="text"><span>Dynamic Website</span> <br>Koyla Cafe<br><span style="font-size: 12px;">Calicut, Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/koyla/1.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/koyla/2.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->




              <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://spiceonflame.in/">
                           <div class="text"><span>Dynamic Website</span> <br>Spice on flame <br><span style="font-size: 12px;">Thrissur, Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/spice-on/1.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/spice-on/2.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/spice-on/3.jpg" alt="Dynamic Website designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

              <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://artic-ads.com/">
                           <div class="text"><span>Dynamic Website</span> <br>Artic Advertising <br><span style="font-size: 12px;">Saudi Arabia, Jubail</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/artic-adv/1.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/artic-adv/2.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/artic-adv/3.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

               <!-- start gallery item -->
<!--                <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://mobind.in">
                           <div class="text"><span style="text-transform: uppercase;">Dynamic Website</span><br>MOBIND AUTO MULTIMEDIA <br><span style="font-size: 12px;">Calicut, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/mobind/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/mobind/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/mobind/3.jpg" alt="Responcive design" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/mobind/4.jpg" alt="Best web designing company in calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <!-- end gallery item -->

               <!-- start gallery item -->
<!--                <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://winsgroup.in">
                           <div class="text"><span style="text-transform: uppercase;">Dynamic Website</span><br>Wins Group<br><span style="font-size: 12px;">Calicut, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/wins/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/wins/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/wins/3.jpg" alt="Responcive design" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/wins/4.jpg" alt="Best web designing company in calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <!-- end gallery item -->


               <!-- start gallery item -->
               <div class="col-md-8 items web">
                  <div class="tz-gallery">
                     <div class="middle">
                        <a href="http://arifassociates.in">
                           <div class="text"><span>Dynamic Website</span> <br>Arif and Associates <br><span style="font-size: 12px;"> Calicut,Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/arifassociate/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/arifassociate/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/arifassociate/3.jpg" alt="Responcive design" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/arifassociate/4.jpg" alt="Best web designing company in calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://tallmen.in">
                           <div class="text"><span>Dynamic Website</span> <br>TallMen Association <br><span style="font-size: 12px;"> Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/tallmen/1.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/tallmen/2.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/tallmen/3.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/tallmen/4.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->
               <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://taifa.in">
                           <div class="text"><span style="text-transform: uppercase;">Dynamic Website</span><br> Tai Football Academy<br><span style="font-size: 12px;">Poonoor, Calicut</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/tfa/1.jpg" alt="Ecommerce website provider" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/tfa/2.jpg" alt="e-commerce website designing" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/tfa/4.jpg" alt="e-commerce Development" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/tfa/3.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>OZO Events<br><span style="font-size: 12px;">Calicut,Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/ozo/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/ozo/2.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/ozo/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/ozo/2.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

               <!-- start gallery item -->
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span>Branding</span> <br>Abana<br><span style="font-size: 12px;">Riyadh, Saudi Arabia</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/abana/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/abana/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/abana/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/abana/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->


               <!-- start gallery item -->
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span>Branding</span> <br>D CLUB<br><span style="font-size: 12px;">Calicut, Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/d-club/3.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/d-club/6.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->


               <!-- start gallery item -->
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span>Branding</span> <br>FRS Food<br><span style="font-size: 12px;">Calicut, Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/FRS-FOOD/f4.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/FRS-FOOD/f-5.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/FRS-FOOD/f6.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->


                <!-- start gallery item -->
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span>Branding</span> <br>Bosq<br><span style="font-size: 12px;">Kozhikode, Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/branding/bosq/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/branding/bosq/2.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

              <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="https://starpestcontroluae.com/">
                           <div class="text"><span style="text-transform: uppercase;">Dynamic Website</span><br> Star Pest Control<br><span style="font-size: 12px;">UAE</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/starpess/1.jpg" alt="Dynamic website provider" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/starpess/2.jpg" alt="Dynamic website designing" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/starpess/3.jpg" alt="Dynamic website Development" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

                <!-- start gallery item -->
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://yescubetrading.com/">
                           <div class="text"><span style="text-transform: uppercase;">Dynamic Website</span><br> Yes Cube Trading<br><span style="font-size: 12px;">UAE</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/portfolio/yes cube/1.jpg" alt="Dynamic website provider" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/yes cube/2.jpg" alt="Dynamic website designing" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/portfolio/yes cube/3.jpg" alt="Dynamic website Development" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

               <!-- start gallery item -->
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br> Sabarigiri Marin Engineering<br><span style="font-size: 12px;">Kochi, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/sabarigiri/3.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/sabarigiri/1.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/sabarigiri/2.jpg" alt="Responcive design" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

<!--                <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://mmalkaabi.com">
                           <div class="text"><span style="text-transform: uppercase;">Dynamic Website</span><br> MEHMOUD MUNEEF ALKAABI<br><span style="font-size: 12px;"> Doha,Qatar</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/mm/1.jpg" alt="Ecommerce website provider" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/mm/2.jpg" alt="e-commerce website designing" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/mm/4.jpg" alt="e-commerce Development" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/mm/3.jpg" alt="e-commerce designing calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->


<!--                <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://ceestirur.com/">
                           <div class="text"><span>Static Website</span> <br>Cess 
                              CEES Watches & Opticals<br><span style="font-size: 12px;">Tirur,Kerala</span> <br>
                           </div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/cees/1.jpg" alt="Best Ecommerce Webdesign Company" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/cees/2.jpg" alt="Ecommerce portal" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/cees/3.jpg" alt="Ecommerce service calicut" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/cees/4.jpg" alt="Ecommerce service Kozhikode" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->

               
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://techpointstore.com/">
                           <div class="text"><span>E-commerce Store</span> <br>TechPoint Solutions <br><span style="font-size: 12px;">Kozhikode,Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/tech/1.jpg" alt="Best Ecommerce Webdesign Company" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/tech/2.jpg" alt="Ecommerce portal" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/tech/3.jpg" alt="Ecommerce service calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="http://egfacademy.com/">
                           <div class="text"><span>Dynamic Website</span> <br>EGF Academy<br><span style="font-size: 12px;">Palakkad,Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/egf/1.jpg" alt="Best Ecommerce Webdesign Company" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/egf/2.jpg" alt="Ecommerce portal" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/egf/3.jpg" alt="Ecommerce service calicut" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


<!--                <div class="col-md-4 items web">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="https://digitalupdates.in">
                           <div class="text"><span>News Portal</span> <br>Digital Updates<br><span style="font-size: 12px;">Kozhikode,Kerala</span> <br></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/web designing/digi/1.jpg" alt="Best Ecommerce Webdesign Company" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/digi/2.jpg" alt="Ecommerce portal" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/web designing/digi/3.jpg" alt="Ecommerce service calicut" style="width:100%;">
                           </div>
                        </div>  
                     </div>
                  </div>
               </div> -->


               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br> Frontline Tours & Travels<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/fr/30.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/fr/1.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/fr/2.jpg" alt="Responcive design" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Meemi Aquarium<br><span style="font-size: 12px;">Calicut,Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/meemi/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/meemi/1.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Zero Wast Calicut<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/zero/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/zero/1.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Expressions<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/exp/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/exp/1.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Ellipsiz<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/elip/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/elip/1.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Bicyclecafe<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/bcafe/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/bcafe/1.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Arif and Associates<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/branding/arif/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/branding/arif/1.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

              <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Plan hut<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/branding/plan-hut/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/branding/plan-hut/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


              <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Happy Cravings<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/branding/happy-cravings/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/branding/happy-cravings/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>



               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Vaayo<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/branding/vaayo/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/branding/vaayo/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                                                      <div class="item">
                              <img loading="lazy" src="img/branding/vaayo/3.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                                                      <div class="item">
                              <img loading="lazy" src="img/branding/vaayo/4.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


              <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>New Star Pest Control<br><span style="font-size: 12px;">UAE</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/branding/newstar/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/branding/newstar/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


              <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>RV Perfumes<br><span style="font-size: 12px;">Kozhikode Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/branding/RV/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/branding/RV/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="col-md-4 items br">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Branding</span><br>Zoha Gold & Diamonds<br><span style="font-size: 12px;">Kozhikode Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                           <li data-target="#" data-slide-to="2"></li>
                           <li data-target="#" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/branding/zoho/1.jpg" alt="Dynamic Website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/branding/zoho/2.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                            <div class="item">
                              <img loading="lazy" src="img/branding/zoho/3.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/branding/zoho/4.jpg" alt="Mobile responsive website" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="col-md-4 items app">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Android App</span><br>TechPoint Store<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/app/techpoint/2.jpg" alt="Best android app Developer Kozhikode" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/app/techpoint/1.jpg" alt="Best Mobile app Developer Kozhikode" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 items app">
                  <div class="tz-gallery">
                     <div class="middle1">
                        <a href="#">
                           <div class="text"><span style="text-transform: uppercase;">Android App</span><br>TechPoint Store<br><span style="font-size: 12px;">Kozhikode, Kerala</span></div>
                        </a>
                     </div>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#" data-slide-to="0" class="active"></li>
                           <li data-target="#" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img loading="lazy" src="img/work/app/digital/1.jpg" alt="Best android app Developer Kozhikode" style="width:100%;">
                           </div>
                           <div class="item">
                              <img loading="lazy" src="img/work/app/digital/2.jpg" alt="Best Mobile app Developer Kozhikode" style="width:100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end gallery item -->

               <!-- start gallery item -->
               <!--<div class="col-md-4 items sm">-->
               <!--   <div class="tz-gallery">-->
               <!--      <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                        <!-- Wrapper for slides -->
               <!--         <div class="carousel-inner">-->
               <!--            <div class="item active">-->
               <!--               <img loading="lazy" src="img/social-media/1.jpeg" alt="Dynamic Website" style="width:100%;">-->
               <!--               <a class="lightbox" href="img/social-media/1.jpeg"></a>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <!-- end gallery item -->

                <!-- start gallery item -->
               <!--<div class="col-md-4 items sm">-->
               <!--   <div class="tz-gallery">-->
               <!--      <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                        <!-- Wrapper for slides -->
               <!--         <div class="carousel-inner">-->
               <!--            <div class="item active">-->
               <!--               <img loading="lazy" src="img/social-media/2.jpeg" alt="Dynamic Website" style="width:100%;">-->
               <!--               <a class="lightbox" href="img/social-media/2.jpeg"></a>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <!-- end gallery item -->


              <!-- start gallery item -->
               <!--<div class="col-md-4 items sm">-->
               <!--   <div class="tz-gallery">-->
               <!--      <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                        <!-- Wrapper for slides -->
               <!--         <div class="carousel-inner">-->
               <!--            <div class="item active">-->
               <!--               <img loading="lazy" src="img/social-media/3.jpg" alt="Dynamic Website" style="width:100%;">-->
               <!--               <a class="lightbox" href="img/social-media/3.jpg"></a>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <!-- end gallery item -->


              <!-- start gallery item -->
               <!--<div class="col-md-4 items sm">-->
               <!--   <div class="tz-gallery">-->
               <!--      <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                        <!-- Wrapper for slides -->
               <!--         <div class="carousel-inner">-->
               <!--            <div class="item active">-->
               <!--               <img loading="lazy" src="img/social-media/4.jpg" alt="Dynamic Website" style="width:100%;">-->
               <!--               <a class="lightbox" href="img/social-media/4.jpg"></a>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <!-- end gallery item -->


               <!-- start gallery item -->
               <!--<div class="col-md-4 items sm">-->
               <!--   <div class="tz-gallery">-->
               <!--      <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                        <!-- Wrapper for slides -->
               <!--         <div class="carousel-inner">-->
               <!--            <div class="item active">-->
               <!--               <img loading="lazy" src="img/social-media/5.jpeg" alt="Dynamic Website" style="width:100%;">-->
               <!--               <a class="lightbox" href="img/social-media/5.jpeg"></a>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <!-- end gallery item -->


              <!-- start gallery item -->
               <!--<div class="col-md-4 items sm">-->
               <!--   <div class="tz-gallery">-->
               <!--      <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                        <!-- Wrapper for slides -->
               <!--         <div class="carousel-inner">-->
               <!--            <div class="item active">-->
               <!--               <img loading="lazy" src="img/social-media/6.jpeg" alt="Dynamic Website" style="width:100%;">-->
               <!--               <a class="lightbox" href="img/social-media/6.jpeg"></a>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <!-- end gallery item -->


              <!-- start gallery item -->
               <!--<div class="col-md-4 items sm">-->
               <!--   <div class="tz-gallery">-->
               <!--      <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                        <!-- Wrapper for slides -->
               <!--         <div class="carousel-inner">-->
               <!--            <div class="item active">-->
               <!--               <img loading="lazy" src="img/social-media/7.jpeg" alt="Dynamic Website" style="width:100%;">-->
               <!--               <a class="lightbox" href="img/social-media/7.jpeg"></a>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <!-- end gallery item -->




              <!-- start gallery item -->
               <!--<div class="col-md-4 items sm">-->
               <!--   <div class="tz-gallery">-->
               <!--      <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                        <!-- Wrapper for slides -->
               <!--         <div class="carousel-inner">-->
               <!--            <div class="item active">-->
               <!--               <img loading="lazy" src="img/social-media/8.jpeg" alt="Dynamic Website" style="width:100%;">-->
               <!--               <a class="lightbox" href="img/social-media/8.jpeg"></a>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <!-- end gallery item -->



               <div class="clear-fix"></div>
            </div>
         </div>
      </div>
</section>
<!-- end portfolio section -->
<!--   <section class="bg-light-gray">
   <div class="container">
       <div class="section-heading">
           <h3>What Our Client Say</h3>
       </div>
       <div class="owl-carousel owl-theme" id="testmonials-carousel">
           <div class="testmonial-single text-center">
               <img loading="lazy" src="img/testmonials/t-1.jpg" alt="" class="rounded-circle border">
               <h4 class="padding-20px-top font-size16 letter-spacing-1 no-margin-bottom">Alivin Corondo</h4>
               <h6 class="no-margin font-size11 text-uppercase letter-spacing-2 padding-25px-bottom">Networking Lead</h6>
               <p class="line-height-28 width-50 sm-width-75 xs-width-90 center-col">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
               
           </div>
           <div class="testmonial-single text-center">
               <img loading="lazy" src="img/testmonials/t-2.jpg" alt="" class="rounded-circle border">
               <h4 class="padding-20px-top font-size16 letter-spacing-1 no-margin-bottom">Finley Walkeror</h4>
               <h6 class="no-margin font-size11 text-uppercase letter-spacing-2 padding-25px-bottom">App Developer</h6>
               <p class="line-height-28 width-50 sm-width-75 xs-width-90 center-col">Developer ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur voluptate.</p>
               
           </div>
           <div class="testmonial-single text-center">
               <img loading="lazy" src="img/testmonials/t-3.jpg" alt="" class="rounded-circle border">
               <h4 class="padding-20px-top font-size16 letter-spacing-1 no-margin-bottom">Niamah Hower</h4>
               <h6 class="no-margin font-size11 text-uppercase letter-spacing-2 padding-25px-bottom">Sales Designer</h6>
               <p class="line-height-28 width-50 sm-width-75 xs-width-90 center-col">Designer ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo consequat.</p>
               
           </div>
   
       </div>
   </div>
   </section>
   
   <section class="parallax cover-background" data-overlay-dark="7" data-background="img/banner/bg9.jpg">
   <div class="container">
       <div class="row">
           <div class="col-md-9 text-center center-col">
               <h4 class="text-white sm-margin-20px-bottom">Haven't found what you like? feel free to contact</h4>
               <p class="text-white font-size16 xs-font-size14 margin-30px-bottom">We always try to provide you our best business consulting service.</p>
               <a href="#" class="butn"><span>Buy Now</span></a>
           </div>
   
       </div>
   </div>
   </section> -->
<!-- end testmonials section -->

<!-- start clients section -->
<div class="section-clients bg-light-gray">
<div class="section-heading">
<h3>Our Clients</h3>
</div>
    <div class="container">
        <div class="owl-carousel owl-theme clients" id="clients">
            <div class="item"><img loading="lazy" alt="asadi-kochi" src="img/partners/asadi.png"></div>
            <div class="item"><img loading="lazy" alt="bosq-calicut" src="img/partners/bosq.png"></div>
            <div class="item"><img loading="lazy" alt="arif associates" src="img/partners/arifassociat.png"></div>
            <div class="item"><img loading="lazy" alt="olive publications" src="img/partners/olive.png"></div>
            <div class="item"><img loading="lazy" alt="partner-image" src="img/partners/baking60.png"></div>
            <div class="item"><img loading="lazy" alt="Jdt Islam iti" src="img/partners/jdt.png"></div>
            <div class="item"><img loading="lazy" alt="Tallmen association Kerala" src="img/partners/tallmen.png"></div>
            <div class="item"><img loading="lazy" alt="partner-image" src="img/partners/abana.png"></div>
            <div class="item"><img loading="lazy" alt="partner-image" src="img/partners/elite60.png"></div>
            <div class="item"><img loading="lazy" alt="partner-image" src="img/partners/vaayo.png"></div>
            <div class="item"><img loading="lazy" alt="partner-image" src="img/partners/cottom.png"></div>
            <div class="item"><img loading="lazy" alt="partner-image" src="img/partners/taifa60.png"></div>
            <div class="item"><img loading="lazy" alt="partner-image" src="img/partners/zoha.png"></div>
            <div class="item"><img loading="lazy" alt="partner-image" src="img/partners/we-corp.png"></div>
        </div>
    </div>
</div>
<!-- end clients section -->


<!-- start footer section -->
<?php include 'footer.php' ?>
<!-- end footer section -->


<!-- scroll-top -->
<a href="#" style="padding-top: 9px" class="scroll-to-top"><i style="font-size: 2rem;" class="fas fa-angle-up" aria-hidden="true"></i></a>
<!-- scroll-top -->

</div>
<!-- end main-wrapper section -->

<!-- all js include start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>
<!-- Java script -->
<script src="js/core.min.js"></script>
<!-- serch -->
<script src="search/search.js"></script>
<script src="js/SmoothScrollMouseWheel.js"></script>
<!-- custom scripts -->
<script src="js/main.js"></script>
<!-- contact form scripts -->
<script src="js/mailform/jquery.form.min.js"></script>
<script src="js/mailform/jquery.rd-mailform.min.c.js"></script>

<!-- all js include end -->

</body>

</html>