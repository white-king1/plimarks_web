<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Digital Marketing-One Page</title>
   <link rel="shortcut icon" href="/assets/img/fv.png" type="image/x-icon">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="/assets/css/fontawesome-all.css">
   <link rel="stylesheet" href="/assets/css/flaticon-10.css">
   <link rel="stylesheet" href="/assets/css/rs6.css">
   <link rel="stylesheet" href="/assets/css/animate.css">
   <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">
   <link rel="stylesheet" href="/assets/css/odometer-theme-default.css">
   <link rel="stylesheet" href="/assets/css/slick.css">
   <link rel="stylesheet" href="/assets/css/slick-theme.css">
   <link rel="stylesheet" href="/assets/css/owl.carousel.css">
   <link rel="stylesheet" href="/assets/css/side-demo.css">
   <link rel="stylesheet" href="/assets/css/rs6.css">
   <link rel="stylesheet" href="/assets/css/digital-marketing.css">
</head>
<body class="app-dm" data-spy="scroll" data-target=".app-dm-main-navigation" data-offset="80">
   <div id="app-dm-preloader"></div>
   <div class="up">
       <a href="#" class="app-dm-scrollup text-center"><i class="fas fa-angle-up"></i></a>
   </div>
   <!-- Start of header section
       ============================================= -->
       <header id="app-dm-header" class="app-dm-header-main">
           <div class="container">
               <div class="app-dm-header-content position-relative">
                   <span class="app-dm-logo-shape position-absolute"><img src="/assets/img/d-marketing/img/logo/logo-shape1.png" alt=""></span>
                   <div class="app-dm-brand-logo  position-absolute">
                       <a href="#">
                           <img class="logo-1" src="/assets/img/d-marketing/img/logo/logo1.1.png" alt="">
                           <img class="logo-2" src="/assets/img/d-marketing/img/logo/logo1.2.png" alt="">
                       </a>
                   </div>
                   <div class="app-dm-main-header-content">
                       <div class="app-dm-header-top d-flex justify-content-between align-items-center">
                           <div class="app-dm-header-cta ul-li ">
                               <ul>
                                   <li>We Are Open </li>
                                   <li>24/7 </li>
                                   <li>Everyday</li>
                               </ul>
                           </div>
                           <div class="app-dm-header-top-social d-flex align-items-center">
                               <span>Follow us on</span>
                               <a href="#"><i class="fab fa-facebook-f"></i></a>
                               <a href="#"><i class="fab fa-twitter"></i></a>
                               <a href="#"><i class="fab fa-linkedin-in"></i></a>
                           </div>
                       </div>
                       <div class="app-dm-main-menu-wrapper d-flex justify-content-end align-items-center">
                           <nav class="app-dm-main-navigation clearfix ul-li">
                               <ul id="app-dm-main-nav" class="nav navbar-nav clearfix">
                                   <li><a class="nav-link" href="#app-dm-banner">Home</a></li>
                                   <li><a class="nav-link" href="#app-dm-about">About</a></li>
                                   <li><a class="nav-link" href="#app-dm-service">Service</a></li>
                                   <li><a class="nav-link" href="#app-dm-benifit">Feature</a></li>
                                   <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                   <li><a class="nav-link" href="{{ route('register') }}">SignUp</a></li>
                               </ul>
                           </nav>
                           <div class="app-dm-btn">
                               <a class="d-flex justify-content-center align-items-center" href="#"><i class="flaticon-shopping-cart"></i>View produ<i class="flaticon-right-arrow"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="app-dm-mobile_menu position-relative">
                       <div class="app-dm-mobile_menu_button app-dm-open_mobile_menu">
                           <i class="fas fa-bars"></i>
                       </div>
                       <div class="app-dm-mobile_menu_wrap">
                           <div class="mobile_menu_overlay app-dm-open_mobile_menu"></div>
                           <div class="app-dm-mobile_menu_content">
                               <div class="app-dm-mobile_menu_close app-dm-open_mobile_menu">
                                   <i class="fas fa-times"></i>
                               </div>
                               <div class="m-brand-logo text-center">
                                   <a href="!#"><img src="/assets/img/d-marketing/img/logo/logo1.1.png" alt=""></a>
                               </div>
                               <nav class="app-dm-mobile-main-navigation  clearfix ul-li">
                                <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                   <li><a class="nav-link" href="#app-dm-bannerr">Home</a></li>
                                   <li><a class="nav-link" href="#app-dm-about">About</a></li>
                                   <li><a class="nav-link" href="#app-dm-service">Service</a></li>
                                   <li><a class="nav-link" href="#app-dm-benifit">Feature</a></li>
                                   <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                   <li><a class="nav-link" href="{{ route('register') }}">SignUp</a></li>
                               </ul>
                           </nav>
                       </div>
                   </div>
                   <!-- /Mobile-Menu -->
               </div>
           </div>
       </header>
   <!-- End of header section
       ============================================= -->

@yield('content')


   <!-- Start of Footer section
       ============================================= -->
       <footer id="app-dm-footer" class="app-dm-footer-section position-relative">
           <span class="app-dm-footer-bg position-absolute"><img src="/assets/img/d-marketing/img/bg/f-bg.png" alt=""></span>
           <div class="container">
               <div class="app-dm-footer-widget-wrapper">
                   <div class="row">
                       <div class="col-lg-3 col-md-6">
                           <div class="app-dm-footer-widget app-dm-headline pera-content">
                               <div class="logo-widget">
                                   <div class="footer-logo">
                                       <a href="#"><img src="/assets/img/d-marketing/img/logo/logo1.1.png" alt=""></a>
                                   </div>
                                   <div class="f-logo-widget-text">
                                       <p>tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                   </div>
                                   <div class="footer-social">
                                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                                       <a href="#"><i class="fab fa-twitter"></i></a>
                                       <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6">
                           <div class="app-dm-footer-widget app-dm-headline pera-content ul-li-block">
                               <div class="menu-widget">
                                   <h3 class="widget-title">Quick Links</h3>
                                   <ul>
                                       <li><a href="#">About Us</a></li>
                                       <li><a href="#">Meet Our Team</a></li>
                                       <li><a href="#">News & Media</a></li>
                                       <li><a href="#">Our Projects</a></li>
                                       <li><a href="#">Contacts</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6">
                           <div class="app-dm-footer-widget app-dm-headline pera-content ul-li-block">
                               <div class="cta-widget">
                                   <h3 class="widget-title">Contact Us</h3>
                                   <ul>
                                       <li><i class="fas fa-phone"></i> <span> +123 (4567) 890 </span>  </li>
                                       <li><i class="fas fa-envelope"></i> <span> info@envato.com  </span> </li>
                                       <li><i class="fas fa-map-marker-alt"></i> <span>380 St Kilda Road, Melbourne
                                       VIC 3004, Australia </span></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6">
                           <div class="app-dm-footer-widget app-dm-headline pera-content ul-li-block">
                               <div class="newslatter-form-widget">
                                   <h3 class="widget-title">Subscribe  Now</h3>
                                   <p>There are many of simple for not, but the majority alteration.
                                   </p>
                                   <form action="#">
                                       <input class="nw-email" type="text" placeholder="Email">
                                       <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                       <div class="nw-radio position-relative">
                                           <label>
                                               <input class="condition" type="checkbox">
                                               <span class="checkmark-circle"></span>
                                               <span class="slug">I agree to all terms and policies</span>
                                           </label>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="app-dm-footer-copyright d-flex justify-content-between">
                   <div class="app-dm-copyright-text">
                       © 2021 Appilo All rights reserved
                   </div>
                   <div class="app-dm-copyright-menu ul-li">
                       <ul>
                           <li><a href="#">Privacy Policy </a></li>
                           <li><a href="#">Cookie Policy </a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </footer>
   <!-- End of Footer section
       ============================================= -->

       <!-- JS library -->
       <script src="/assets/js/jquery.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/js/appear.js"></script>
       <script src="/assets/js/bootstrap.min.js"></script>
       <script src="/assets/js/wow.min.js"></script>
       <script src="/assets/js/jquery.fancybox.js"></script>
       <script src="/assets/js/tilt.jquery.min.js"></script>
       <script src="/assets/js/owl.js"></script>
       <script src="/assets/js/typer-new.js"></script>
       <script src="/assets/js/odometer.js"></script>
       <script src="/assets/js/slick.js"></script>
       <script src="/assets/js/rs6.min.js"></script>
       <script src="/assets/js/rbtools.min.js"></script>
       <script src="/assets/js/side-demo.js"></script>
       <script src="/assets/js/parallax-scroll.js"></script>
       <script src="/assets/js/digital-marketing.js"></script>
   </body>
   </html>
