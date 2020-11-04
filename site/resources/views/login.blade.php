<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Life Care/Login</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="<?php echo url('/'); ?>/images/fevicon.ico1.png" type="image/x-icon" />
   <link rel="apple-touch-icon1" href="<?php echo url('/'); ?>/images/apple-touch-icon1.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="<?php echo url('/'); ?>/js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="<?php echo url('/'); ?>/images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="/"><img src="<?php echo url('/'); ?>/images/logo1.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="<?php echo url('/'); ?>/images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@Lifecare.com</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn" style="background:#BC8F8F;">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="/">Home</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="#about">Registration</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="#doctors">Doctors</a></li> 
                        <li><a href="#getintouch">Contact</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
      <!-- end section -->

      <!--login form-->
      
      <div id="login" class="form" style="margin-top: 150px;">
         <ul class="tab-group">
            <li class="tab active"><a href="#patient">Patient</a></li>
            <li class="tab"><a href="#doctor">Doctor</a></li>
         </ul>
         <div class="tab-content">
               <div id="patient">   
                  <h1>Welcome Back!</h1>
          
                  <form action="/" method="post">
          
                     <div class="field-wrap">
                        <label>Email Address<span class="req">*</span></label>
                        <input type="email"required autocomplete="off"/>
                     </div>
                     <div class="field-wrap">
                        <label>Password<span class="req">*</span></label>
                        <input type="password"required autocomplete="off"/>
                     </div>
          
                     <p class="forgot"><a href="#">Forgot Password?</a></p>
          
                     <button class="button button-block"/>Log In</button>
          
                  </form>
               </div>
        
               <div id="doctor">   
                  <h1>Welcome Back Doctor!</h1>
          
                  <form action="/" method="post">
          
                     <div class="field-wrap">
                        <label>Email Address<span class="req">*</span></label>
                        <input type="email"required autocomplete="off"/>
                     </div>
                     <div class="field-wrap">
                        <label>Password<span class="req">*</span></label>
                        <input type="password"required autocomplete="off"/>
                     </div>
          
                     <p class="forgot"><a href="#">Forgot Password?</a></p>
          
                     <button class="button button-block"/>Log In</button>
          
                  </form>

               </div>
         </div><!-- tab-content -->
      </div>
      <!--end login form-->
     
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href="/"><img src="<?php echo url('/'); ?>/images/logo1.png" alt=""></a>
                     <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+1) 800 123 456</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright-area wow fadeIn"  style="background:#C71585;">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>© 2020 Lifecare. All Rights Reserved.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#login" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="<?php echo url('/'); ?>/js/all.js"></script>
      <!-- all plugins -->
      <script src="<?php echo url('/'); ?>/js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>

<!-- for login

                  <form action="/" method="post">
                     <div class="top-row">
                        <div class="field-wrap">
                           <label>First Name<span class="req">*</span></label>
                           <input type="text" required autocomplete="off" />
                        </div>
                        <div class="field-wrap">
                           <label>Last Name<span class="req">*</span></label>
                           <input type="text"required autocomplete="off"/>
                        </div>
                     </div>

                     <div class="field-wrap">
                        <label>Email Address<span class="req">*</span></label>
                        <input type="email"required autocomplete="off"/>
                     </div>
          
                     <div class="field-wrap">
                     <label>Set A Password<span class="req">*</span></label>
                     <input type="password"required autocomplete="off"/>
                     </div>
          
                     <button type="submit" class="button button-block"/>Get Started</button>
                  </form>
-->