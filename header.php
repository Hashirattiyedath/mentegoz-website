<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@media screen and (max-width: 800px){
.navbar {
position: relative;
min-height: 50px;
margin-bottom: 0px;
border: 0px solid transparent;
}}
</style>

<!-- start page loading -->
<div class="preloader">
    <div class="loader-1 loader"></div>
    <div class="loader-2 loader"></div>
    <div class="loader-3 loader"></div>
</div>

<header>
   <div class="navbar-default">
      <!-- start top search -->
      <!-- end top search -->
      <div class="row align-items-center">
         <div class="col-12 col-lg-12">
            <div class="menu_area alt-font">
               <nav class="navbar navbar-all-page navbar-expand-lg navbar-light no-padding">
                  <div class="navbar-header navbar-header-custom1">
                     <!-- start logo -->
                     <a href="index" class="navbar-brand1"><img id="logo" src="img/logo.png" alt="logo"></a>
                     <!-- end logo -->
                  </div>
                  <div class="navbar-toggler"></div>
                  <!-- start menu Area -->
                  <ul style="margin-top: 0px; " class="navbar-nav ml-auto" id="nav" style="display: none;">
                     <li><a style="color: #242424;" href="index">Home</a>
                     </li>
                     <li><a class="<?php if($page=='about'){echo 'active';}?>" style="color: #242424;" href="about">Profile</a></li>
                     <li>
                        <a class="<?php if($page=='services'){echo 'active';}?>" style="color: #242424;" href="services">Services</a>
                        <!--    <ul>
                           <li><a style="color: #242424;" href="#">Our Team</a></li>
                           <li><a style="color: #242424;" href="#">FAQ</a></li>
                           <li><a style="color: #242424;" href="#">Projects</a></li>
                           </ul> -->
                     </li>
                     <!-- <li><a style="color: #242424;" href="Products">Products</a> -->
                     <!--  <ul>
                        <li><a style="color: #242424;" href="#">Our Team</a></li>
                        <li><a style="color: #242424;" href="#">FAQ</a></li>
                        <li><a style="color: #242424;" href="#">Projects</a></li>    
                        </ul> -->
                     </li>
                     <li><a class="<?php if($page=='portfolio'){echo 'active';}?>" style="color: #242424;" href="portfolio">Portfolio</a></li>
                     <!--              <li><a style="color: #242424;" href="Clients">Clients</a></li> -->
                    <li><a class="<?php if($page=='products'){echo 'active';}?>" style="color: #242424;" href="products">Products</a></li>
                     <li><a class="<?php if($page=='clients'){echo 'active';}?>" style="color: #242424;" href="clients">Clients</a></li>
                     <li><a class="<?php if($page=='contact'){echo 'active';}?>" style="color: #242424;" href="contact">Contact</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>


