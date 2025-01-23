<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<head>
   <meta charset="utf-8">
   <title>Lunch Box - Contact Us</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <link rel="shortcut icon" type="image/png" href="{{asset('images/logo/favicon1.ico')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">
   <link rel="stylesheet" href="{{asset('css/font-awesome-6.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/grt-youtube-popup.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/fancybox.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}">
</head>

<body>
   <main class="innerPage">

      <!--Preloader Start-->
      <div class="preloader" id="status">
         <div class="preloaderInner" id="preloader">
            <div class="loaderGroup">
               <div class="loaderContent">
                  <div class="loading" data-loading-text="LunchBox..."></div>
               </div>
            </div>
         </div>
      </div>
      <!--Preloader End-->

      <!--Header Start-->
      <header class="w-100 clearfix header" id="header">
         <div class="container">
            <div class="headerInner">
               <nav class="navbar navbar-expand-xl">
                  <div class="container-fluid">
                     <a class="navbar-brand" href="#">
                        <img src="images/logo/logo.png" alt="logo" class="img-fluid">
                     </a>

                     <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                           <li class="nav-item dropdown">
                              <a href="javascript:void(0);" class="nav-link dropdown-toggle"
                                 data-bs-toggle="dropdown">
                                 Home
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="home1.html">Home 1</a></li>
                                 <li><a class="dropdown-item" href="home2.html">Home 2</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown">
                              <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                 About Us
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                 <li><a class="dropdown-item" href="our-chef.html">Our Chef</a></li>
                                 <li><a class="dropdown-item" href="chef-single.html">Chef Single</a></li>
                                 <li><a class="dropdown-item" href="gallery.html">Our Gallery</a></li>
                                 <li><a class="dropdown-item" href="error-404.html">404 Error</a></li>
                                 <li><a class="dropdown-item" href="my-profile.html">My Profile</a></li>
                                 <li><a class="dropdown-item" href="sign-in.html">Sign In </a></li>
                                 <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="service.html">Services</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                 Meals
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="our-meal-list.html">Meals List </a></li>
                                 <li><a class="dropdown-item" href="meal-single.html">Meal Single </a></li>
                                 <li><a class="dropdown-item" href="customer-choice.html">Customer Choice</a></li>
                                 <li><a class="dropdown-item" href="check-out.html">Checkout</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown">
                              <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                 Blog
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="our-blog.html">Our Blog</a></li>
                                 <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                 <li><a class="dropdown-item" href="blog-categories.html">Blog Categories</a></li>
                                 <li><a class="dropdown-item" href="blog-slider-single.html">Blog Slider Single</a></li>
                                 <li><a class="dropdown-item" href="blog-video-single.html">Blog Video Single</a></li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link active" href="contact-us.html">Contact Us</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
               <div class="rightMenu">
                  <div class="search">
                     <a href="javascript:void(0);">
                        <img src="images/icon/search.png" alt="search" class="img-fluid">
                     </a>
                  </div>
                  <div class="cart">
                     <a href="check-out.html">
                        <img src="images/icon/cart.png" alt="cart" class="img-fluid">
                        <span>4</span>
                     </a>
                  </div>
                  <div class="loginBtn">
                      <a href="sign-in.html" class="btn btnPrimary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path
                              d="M14 8V6C14 5.46957 13.7893 4.96086 13.4142 4.58579C13.0391 4.21071 12.5304 4 12 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6V18C3 18.5304 3.21071 19.0391 3.58579 19.4142C3.96086 19.7893 4.46957 20 5 20H12C12.5304 20 13.0391 19.7893 13.4142 19.4142C13.7893 19.0391 14 18.5304 14 18V16"
                              stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M7 12H21L18 9M18 15L21 12" stroke="white" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round" />
                        </svg>
                        <span>Sign In</span>
                     </a>
                  </div>
                  <div class="menuToggle">
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span id="nav-icon2">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                        </span>
                     </button>

                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--header end-->

      <!-- search start -->
      <div class="searchBox">
         <div class="searchBoxCard">
            <a href="javascript:void(0);" class="searchBoxClose">
               <i class="fa-solid fa-xmark"></i>
            </a>
            <div class="searchBoxInner">
               <div class="searchBoxLogo">
                  <img src="images/logo/logo-white.png" alt="search" class="img-fluid">
               </div>
               <div class="searchBoxForm">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search...">
                     <button type="button" class="btn btnSecondary">Search</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- search end -->

      <!--Banner Start-->
      <section class="w-100 clearfix innerPageBanner" id="innerPageBanner">
         <div class="container">
            <div class="innerPageBannerInner">
               <div class="innerPageBannerImgLeft">
                  <img src="images/img24.png" alt="banner-img" class="img-fluid">
               </div>
               <div class="innerPageBannerContent">
                  <h1>Contact <span>Us</span></h1>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">Contact <span>Us</span></li>
                  </ul>
               </div>
               <div class="innerPageBannerImgRight">
                  <img src="images/img23.png" alt="banner-img" class="img-fluid">
               </div>
            </div>
         </div>
      </section>
      <!--Banner End-->

      <!--Get In Touch Start-->
      <section class="w-100 clearfix getInTouch" id="getInTouch">
         <div class="container">
            <div class="getInTouchInner">
               <div class="getInTouchRow">
                  <div class="getInTouchCol">
                     <div class="getInTouchContent">
                        <div class="commonHeading headingLeft">
                           <h4>Get In <span>Touch</span></h4>

                           <p>Serving North-Indian, South-Indian and desi-Chinese cuisines, choose from Vegetarian and
                              Non-Vegetarian meal options. dolor sit amet, consectetur Nulla fringilla purus at leo
                              dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam.
                              Aliquam et elit eu nunc rhoncus viverra quis at felis.
                        </div>
                        <div class="getInTouchMap">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3159.3336167243497!2d-118.97430972367417!3d37.64136001983323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80960c34f4c5b6bb%3A0xef0c15c6f0cbd7d9!2s2443%20Sierra%20Nevada%20Rd%2C%20Mammoth%20Lakes%2C%20CA%2093546%2C%20USA!5e0!3m2!1sen!2sin!4v1710153678617!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
                  </div>

                  <div class="getInTouchCol">
                     <div class="getInTouchImg">
                        <div class="getInTouchImgInner">
                           <div class="getInTouchImg1">
                              <img src="images/img26.png" alt="img" class="img-fluid">
                           </div>
                           <div class="getInTouchImg2">
                              <img src="images/img27.png" alt="img" class="img-fluid">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Get In Touch End-->


      <!--Get In Touch Information Start-->
      <section class="w-100 clearfix getInTouchInfo" id="getInTouchInfo">
         <div class="container">
            <div class="getInTouchInfoInner">
               <div class="getInTouchInfoRow">
                  <div class="getInTouchInfoCol">
                     <a href="javascript:void(0);">
                        <div class="getInTouchInfoItem">
                           <div class="getInTouchInfoOuter">
                              <div class="getInTouchInfoItemInner">
                                 <div class="getInTouchInfoIcon">
                                    <span>
                                       <img src="images/icon/icon1.png" alt="icon" class="img-fluid">
                                    </span>
                                 </div>
                                 <div class="getInTouchInfoContent">
                                    <h6>Phone Number</h6>
                                    <p class="mb-0">+012-3456-789</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="getInTouchInfoCol">
                     <a href="javascript:void(0);">
                        <div class="getInTouchInfoItem">
                           <div class="getInTouchInfoOuter">
                              <div class="getInTouchInfoItemInner">
                                 <div class="getInTouchInfoIcon">
                                    <span>
                                       <img src="images/icon/icon2.png" alt="icon" class="img-fluid">
                                    </span>
                                 </div>
                                 <div class="getInTouchInfoContent">
                                    <h6>Email Address</h6>
                                    <p class="mb-0">tiffinbox123@gmail.com</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="getInTouchInfoCol">
                     <a href="javascript:void(0);">
                        <div class="getInTouchInfoItem">
                           <div class="getInTouchInfoOuter">
                              <div class="getInTouchInfoItemInner">
                                 <div class="getInTouchInfoIcon">
                                    <span>
                                       <img src="images/icon/icon3.png" alt="icon" class="img-fluid">
                                    </span>
                                 </div>
                                 <div class="getInTouchInfoContent">
                                    <h6>Location</h6>
                                    <p class="mb-0">94A Oxford St, Paddington NSW
                                       2021, Australia</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Get In Touch Information End-->

      
      <!--Send Me a Message Start-->
      <section class="w-100 clearfix sendMessage" id="sendMessage">
         <div class="container">
            <div class="sendMessageInner">
               <div class="row">
                  <div class="col-md-6">
                     <div class="sendMessageContentBox">
                        <div class="commonHeading">
                           <h4>Send Me a Message <br> <span>Anytime!</span></h4>
                           <p>Serving North-Indian, South-Indian and desi-Chinese cuisines, choose from Vegetarian and Non-Vegetarian meal options. dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="sendMessageFrom">
                        <form class="sendMessageFromBox">
                           <div class="formGroup">
                              <input type="text" class="form-control require" id="name" placeholder="Enter Name" name="full_name" >
                           </div>
                           <div class="formGroup">
                              <input type="email" class="form-control require" id="email" placeholder="Enter Email" name="email" >
                           </div>
                           <div class="formGroup">
                              <input type="number" class="form-control require" id="number" placeholder="Enter Phone Number" name="contact_no" >
                           </div>
                           <div class="formGroup">
                              <textarea class="form-control require" rows="6" id="message" placeholder="Message" name="message" ></textarea>
                           </div>
                           <div class="response"></div>
                           <div class="formGroup">
                              <button type="button" class="btn btnPrimary submitForm"> Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Send Me a Message End-->

      <!--Trusted by users Start-->
      <section class="w-100 clearfix trustedUsers" id="trustedUsers">
         <div class="container">
            <div class="trustedUsersInner">
               <div class="commonHeading headingCenter">
                  <h2 class="d-none">Trusted Users</h2>
                  <p class="mb-0">Trusted by 45M+ users</p>
               </div>
               <div class="owl-carousel owl-theme trustedUsersCarousel">
                  <div class="item">
                     <div class="trustedUsersItem">
                        <a href="javascript:void(0);"><img src="images/partner1.png" alt="trusted-users"
                              class="img-fluid"></a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="trustedUsersItem">
                        <a href="javascript:void(0);"><img src="images/partner2.png" alt="trusted-users"
                              class="img-fluid"></a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="trustedUsersItem">
                        <a href="javascript:void(0);"><img src="images/partner3.png" alt="trusted-users"
                              class="img-fluid"></a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="trustedUsersItem">
                        <a href="javascript:void(0);"><img src="images/partner4.png" alt="trusted-users"
                              class="img-fluid"></a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="trustedUsersItem">
                        <a href="javascript:void(0);"><img src="images/partner5.png" alt="trusted-users"
                              class="img-fluid"></a>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!--Trusted by users End-->

      <!--Footer Section Start-->
      <footer class="w-100 clearfix footer" id="footer">
         <div class="container">
            <div class="footerInner">
               <div class="subscribeOuter">
                  <div class="row">
                     <div class="col-md-12 col-lg-6">
                        <div class="logisticSubscribeTxt">
                           <h4>Subscribe For <span>Latest News</span></h4>
                           <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                              embarrassing hidden in the middle of text.</p>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-6">
                        <div class="subscribeInpt">
                           <form>
                              <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Enter Email Address">
                                 <button type="submit" class="btn btnPrimary">Subscribe Now</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="middleContent">
                  <div class="footerLogo">
                     <a href="javascript:void(0);"><img src="images/footer-logo.png" alt="footer-logo"
                           class="img-fluid"></a>
                  </div>
                   <div class="footerMenu">
                     <ul class="nav">
                        <li class="nav-item">
                           <a class="nav-link" href="about-us.html">About Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="our-blog.html">Our Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact-us.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="our-chef.html">Our Chef</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="service.html">Service</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog-categories.html">Blog Categories</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="footContent">
                  <div class="copyRight">
                     <p class="mb-0">Copyright © 2024-2025 <a href="javascript:void(0);">Lunch Box</a>. All Rights Reserved.
                     </p>
                  </div>
                  <div class="socialMedia">
                     <ul class="nav">
                        <li class="nav-item">
                           <a class="nav-link" href="javascript:void(0);"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--Footer Section End-->

   </main>
   <script src="js/jquery-3.6.4.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/anime.min.js"></script>
   <script src="js/grt-youtube-popup.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/contact_form.js"></script>
   <script src="js/custom.js"></script>
</body>


<!-- Mirrored from webstrot.com/html/lunchbox/lunchbox/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 17:47:03 GMT -->
</html>