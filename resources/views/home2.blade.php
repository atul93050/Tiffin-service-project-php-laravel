<!DOCTYPE html>

<html lang="zxx" dir="ltr">



<head>
   <meta charset="utf-8">
   <title>Lunch Box - Home2</title>
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
   <main class="indxMain1">

      <!--Preloader start-->
      <div class="preloader homeTwoPreloader" id="status">
         <div class="preloaderInner" id="preloader">
            <div class="loaderGroup">
               <div class="loaderContent">
                  <div class="loading" data-loading-text="LunchBox..."></div>
               </div>
            </div>
         </div>
      </div>
      <!--Preloader end-->

      <!--header start-->
      <header class="w-100 clearfix header headerSecondary" id="headerTwo">
         <div class="container">
            <div class="headerInner">
               <nav class="navbar navbar-expand-xl">
                  <div class="container-fluid">
                     <a class="navbar-brand" href="#">
                        <img src="images/logo/logo1.png" alt="logo" class="img-fluid">
                     </a>

                     <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                           <li class="nav-item dropdown">
                              <a href="javascript:void(0);" class="nav-link dropdown-toggle active"
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
                                 <li><a class="dropdown-item" href="sign-in.html">Login </a></li>
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
                              <a class="nav-link" href="contact-us.html">Contact Us</a>
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
                     <a href="login.html" class="btn btnThird">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path
                              d="M14 8V6C14 5.46957 13.7893 4.96086 13.4142 4.58579C13.0391 4.21071 12.5304 4 12 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6V18C3 18.5304 3.21071 19.0391 3.58579 19.4142C3.96086 19.7893 4.46957 20 5 20H12C12.5304 20 13.0391 19.7893 13.4142 19.4142C13.7893 19.0391 14 18.5304 14 18V16"
                              stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M7 12H21L18 9M18 15L21 12" stroke="white" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round" />
                        </svg>
                        <span>Login</span>
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
      <div class="searchBox searchBox2">
         <div class="searchBoxCard">
            <a href="javascript:void(0);" class="searchBoxClose">
               <i class="fa-solid fa-xmark"></i>
            </a>
            <div class="searchBoxInner">
               <div class="searchBoxLogo">
                  <img src="images/logo/logo-white1.png" alt="search" class="img-fluid">
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

      <!--Let’s Eat Start-->
      <section class="w-100 clearfix LetsEatBanner" id="LetsEatBanner">
         <div class="container">
            <div class="LetsEatBannerInner">
               <h1>Let's Eat</h1>
            </div>
            <div class="LetsEatImg text-center">
               <img src="images/home2/img9.png" alt="tiffin" class="img-fluid letsEatThaliTiffin">
               <img src="images/home2/img10.png" alt="5thali" class="img-fluid LetsEatThali">
            </div>
         </div>
         <img src="images/home2/banner-mask6.png" alt="tiffin" data-value="2" class="img-fluid bannerMask1 movingjs" >
         <img src="images/home2/banner-mask5.png" alt="tiffin" data-value="-4" class="img-fluid bannerMask2 movingjs">
         <img src="images/home2/banner-mask3.png" alt="tiffin" data-value="4" class="img-fluid bannerMask3 movingjs">
         <img src="images/home2/banner-mask2.png" alt="tiffin" data-value="-3" class="img-fluid bannerMask4 movingjs">
      </section>
      <!--Let’s Eat Start-->

      <!--Special Tiffin Start-->
      <section class="w-100 clearfix specialTiffinSecondary" id="specialTiffinSecondary">
         <div class="container">
            <div class="specialTiffinSecondaryInner">
               <div class="commonHeading commonSecondaryHeading headingCenter">
                  <h4>Special Tiffin</h4>
                  <p class="mb-0">The state-of-the art facility has automated machinery, is installed with rust-free
                     pipelines and faucets and uses only RO treated water.</p>
               </div>
               <div class="specialTiffinSecondaryGroup">
                  <div class="row">
                     <div class="col-md-6 col-xl-3">
                        <div class="specialTiffinSecondaryItem">
                           <div class="specialTiffinSecondaryImg">
                              <a href="meal-single.html">
                                 <img src="images/home2/image1.png" alt="image" class="img-fluid">
                              </a>
                           </div>
                           <div class="specialTiffinSecondaryContent">
                              <h4><a href="meal-single.html">Rajasthani Thali</a></h4>
                              <p>Butter paneer, mix veg., dal
                                 fry, 4 tawa rotis</p>
                           </div>
                           <div class="specialTiffinRating">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                           </div>
                           <div class="specialTiffinBtnGroup">
                              <a href="check-out.html" class="btn btnForth">Order Now</a>
                              <a href="check-out.html" class="addCardIcon">
                                 <img src="images/home2/icon5.png" alt="icon" class="img-fluid">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-xl-3">
                        <div class="specialTiffinSecondaryItem">
                           <div class="specialTiffinSecondaryImg">
                              <a href="meal-single.html">
                                 <img src="images/home2/image2.png" alt="image" class="img-fluid">
                              </a>
                           </div>
                           <div class="specialTiffinSecondaryContent">
                              <h4><a href="meal-single.html">Gujrati Thali</a></h4>
                              <p>Butter paneer, mix veg., dal
                                 fry, 4 tawa rotis</p>
                           </div>
                           <div class="specialTiffinRating">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                           </div>
                           <div class="specialTiffinBtnGroup">
                              <a href="check-out.html" class="btn btnForth">Order Now</a>
                              <a href="check-out.html" class="addCardIcon">
                                 <img src="images/home2/icon5.png" alt="icon" class="img-fluid">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-xl-3">
                        <div class="specialTiffinSecondaryItem">
                           <div class="specialTiffinSecondaryImg">
                              <a href="meal-single.html">
                                 <img src="images/home2/image3.png" alt="image" class="img-fluid">
                              </a>
                           </div>
                           <div class="specialTiffinSecondaryContent">
                              <h4><a href="meal-single.html">Bengali Thali</a></h4>
                              <p>Butter paneer, mix veg., dal
                                 fry, 4 tawa rotis</p>
                           </div>
                           <div class="specialTiffinRating">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                           </div>
                           <div class="specialTiffinBtnGroup">
                              <a href="check-out.html" class="btn btnForth">Order Now</a>
                              <a href="check-out.html" class="addCardIcon">
                                 <img src="images/home2/icon5.png" alt="icon" class="img-fluid">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-xl-3">
                        <div class="specialTiffinSecondaryItem">
                           <div class="specialTiffinSecondaryImg">
                              <a href="meal-single.html">
                                 <img src="images/home2/image4.png" alt="image" class="img-fluid">
                              </a>
                           </div>
                           <div class="specialTiffinSecondaryContent">
                              <h4><a href="meal-single.html">Marathi Thali</a></h4>
                              <p>Butter paneer, mix veg., dal
                                 fry, 4 tawa rotis</p>
                           </div>
                           <div class="specialTiffinRating">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                           </div>
                           <div class="specialTiffinBtnGroup">
                              <a href="check-out.html" class="btn btnForth">Order Now</a>
                              <a href="check-out.html" class="addCardIcon">
                                 <img src="images/home2/icon5.png" alt="icon" class="img-fluid">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Meet Our Chef Start-->

      <!--About Us Start-->
      <section class="w-100 clearfix bxAboutUs" id="bxAboutUs">
         <div class="container">
            <div class="bxAboutUsInner">
               <div class="row">
                  <div class="col-md-6">
                     <div class="bxAboutUsImg">
                        <div class="bxAboutUsImgInner">
                           <img src="images/home2/chef-image1.png" alt="chef-image1" class="img-fluid">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="bxAboutUsContent">
                        <div class="commonHeading commonSecondaryHeading headingLeft">
                           <h4>About Us</h4>
                           <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendiss luctus nec elit in
                              vulputate. In eget dictum ante, et tempus ex.” </p>
                        </div>
                        <div class="bxAboutUsService">
                           <h5>We are more than multiple service</h5>
                           <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendiss luctus nec elit in
                              vulputate. In eget dictum ante, et tempus ex.” </p>
                        </div>

                        <div class="bxAboutUsList">
                           <div class="bxAboutUsListItem">
                              <div class="bxAboutUsListIcon">
                                 <img src="images/home2/icon1.png" alt="icon" class="img-btn">
                              </div>
                              <div class="bxAboutUsListContent">
                                 <p class="mb-0">Online Order</p>
                              </div>
                           </div>
                           <div class="bxAboutUsListItem">
                              <div class="bxAboutUsListIcon">
                                 <img src="images/home2/icon2.png" alt="icon" class="img-btn">
                              </div>
                              <div class="bxAboutUsListContent">
                                 <p class="mb-0">24/7 Service</p>
                              </div>
                           </div>
                           <div class="bxAboutUsListItem">
                              <div class="bxAboutUsListIcon">
                                 <img src="images/home2/icon3.png" alt="icon" class="img-btn">
                              </div>
                              <div class="bxAboutUsListContent">
                                 <p class="mb-0">Pre-Reservation</p>
                              </div>
                           </div>
                           <div class="bxAboutUsListItem">
                              <div class="bxAboutUsListIcon">
                                 <img src="images/home2/icon4.png" alt="icon" class="img-btn">
                              </div>
                              <div class="bxAboutUsListContent">
                                 <p class="mb-0">Oragonized Foodhut Place</p>
                              </div>
                           </div>
                        </div>
                        <div class="bxAboutUsBtn">
                           <a href="about-us.html" class="btn btnThird">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--About Us End-->

      <!--Service Pricing Table Start-->
      <section class="w-100 clearfix servicePrice OurServicePackages" id="OurServicePackages">
         <div class="container">
            <div class="servicePriceInner">
               <div class="commonHeading commonSecondaryHeading headingCenter">
                  <h4>Our Services Packages</h4>
                  <p>The state-of-the art facility has automated machinery, is installed with rust-free pipelines and
                     faucets and uses only RO treated water.</p>
               </div>
               <div class="servicePriceGroup">
                  <div class="servicePriceGroupInner">
                     <div class="servicePriceCard">
                        <div class="servicePriceCardInner">
                           <div class="servicePriceCardHeading">
                              <h4>$5.99</h4>
                              <span>Regular</span>
                           </div>
                           <div class="servicePriceCardBtn">
                              <a href="javascript:void(0);" class="getStarted">Get Started</a>
                              <a href="javascript:void(0);" class="chatSales">Chat To Sales</a>
                           </div>
                           <div class="servicePriceCardPlanList">
                              <ul>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Day Plan</h5>
                                    </div>
                                    <span class="priceTbl">$ 6.00</span>
                                 </li>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Monthly Plan</h5>
                                    </div>
                                    <span class="priceTbl">$ 180.00</span>
                                 </li>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Yearly Plan</h5>
                                       <p class="mb-0">(5 Day Free Meal)</p>
                                    </div>
                                    <span class="priceTbl">$ 2160.00</span>
                                 </li>
                              </ul>
                           </div>
                           <div class="servicePriceCardLabel">
                              <span>New Offer</span>
                           </div>
                        </div>
                     </div>
                     <div class="servicePriceCard">
                        <div class="servicePriceCardInner">
                           <div class="servicePriceCardHeading">
                              <h4>$9.69</h4>
                              <span>Standard</span>
                           </div>
                           <div class="servicePriceCardBtn">
                              <a href="javascript:void(0);" class="getStarted">Get Started</a>
                              <a href="javascript:void(0);" class="chatSales">Chat To Sales</a>
                           </div>
                           <div class="servicePriceCardPlanList">
                              <ul>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Day Plan</h5>
                                    </div>
                                    <span class="priceTbl">$ 8.99</span>
                                 </li>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Monthly Plan</h5>
                                    </div>
                                    <span class="priceTbl">$ 209.00</span>
                                 </li>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Yearly Plan</h5>
                                       <p class="mb-0">(10 Day Free Meal)</p>
                                    </div>
                                    <span class="priceTbl">$ 2990.00</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="servicePriceCard mb-0">
                        <div class="servicePriceCardInner">
                           <div class="servicePriceCardHeading">
                              <h4>$14.99</h4>
                              <span>Premium</span>
                           </div>
                           <div class="servicePriceCardBtn">
                              <a href="javascript:void(0);" class="getStarted">Get Started</a>
                              <a href="javascript:void(0);" class="chatSales">Chat To Sales</a>
                           </div>
                           <div class="servicePriceCardPlanList">
                              <ul>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Day Plan</h5>
                                    </div>
                                    <span class="priceTbl">$ 15.00</span>
                                 </li>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Monthly Plan</h5>
                                    </div>
                                    <span class="priceTbl">$ 359.00</span>
                                 </li>
                                 <li>
                                    <div class="planLabel">
                                       <h5>Yearly Plan</h5>
                                       <p class="mb-0">(15 Day Free Meal)</p>
                                    </div>
                                    <span class="priceTbl">$ 3279.00</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Service Pricing Table End-->

      <!--Banner Start-->
      <section class="w-100 clearfix regularTiffinBanner" id="regularTiffinBanner">
         <div class="container">
            <div class="regularTiffinBannerInner">
               <!-- <h2 class="d-none">banner</h2>
               <a href="javascript:void(0);">
                  <img src="images/home2/banner1.png" alt="banner" class="img-fluid w-100">
               </a> -->
               <div class="regularTiffinBannerRow">
                  <div class="regularTiffinBannerCol">
                     <h2>Best <span>Regular</span> Tiffin</h2>
                     <p><span>DELICIOUS FOOD</span> MENU WITH 20% OFF</p>
                     <br>
                     <a href="our-meal-list.html" class="btn btnForth">Order Now</a>
                  </div>
                  <div class="regularTiffinBannerCol">
                     <img src="images/home2/img11.png" alt="img" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Banner End-->

      <!--Meet Our Chef Start-->
      <section class="w-100 clearfix meetOurChef" id="meetOurChef">
         <div class="container">
            <div class="meetOurChefInner">
               <div class="commonHeading commonSecondaryHeading headingCenter">
                  <h4>Meet Our Chef</h4>
                  <p class="mb-0">The state-of-the art facility has automated machinery, is installed with rust-free
                     pipelines and faucets and uses only RO treated water.</p>
               </div>
               <div class="meetOurChefGroup">
                  <div class="row">
                     <div class="col-sm-6 col-lg-3">
                        <div class="meetOurChefItem">
                           <div class="meetOurChefImg">
                              <a href="chef-single.html">
                                 <img src="images/home2/chef1.png" alt="chef" class="img-fluid">
                              </a>
                           </div>
                           <div class="meetOurChefContent">
                              <h4><a href="chef-single.html">Shane Watson</a></h4>
                              <span>Chef</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-3">
                        <div class="meetOurChefItem">
                           <div class="meetOurChefImg">
                              <a href="chef-single.html">
                              <img src="images/home2/chef2.png" alt="chef" class="img-fluid">
                              </a>
                           </div>
                           <div class="meetOurChefContent">
                              <h4><a href="chef-single.html">Alice Waters</a></h4>
                              <span>Chef</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-3">
                        <div class="meetOurChefItem">
                           <div class="meetOurChefImg">
                              <a href="chef-single.html">
                              <img src="images/home2/chef3.png" alt="chef" class="img-fluid">
                              </a>
                           </div>
                           <div class="meetOurChefContent">
                              <h4><a href="chef-single.html">Steven Smith</a></h4>
                              <span>Chef</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-3">
                        <div class="meetOurChefItem mb-0">
                           <div class="meetOurChefImg">
                              <a href="chef-single.html">
                              <img src="images/home2/chef4.png" alt="chef" class="img-fluid">
                              </a>
                           </div>
                           <div class="meetOurChefContent">
                              <h4><a href="chef-single.html">Elisha Perry</a></h4>
                              <span>Chef</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Meet Our Chef Start-->

      <!--Partner Logo Start-->
      <section class="w-100 clearfix partnerLogo" id="partnerLogo">
         <div class="container">
            <h2 class="d-none">Partner</h2>
            <div class="partnerLogoInner">
               <div class="partnerLogoItemGroup">
                  <div class="partnerLogoItem">
                     <a href="javascript:void(0);">
                        <img src="images/home2/patner1.png" alt="patner" class="img-fluid">
                     </a>
                  </div>
                  <div class="partnerLogoItem">
                     <a href="javascript:void(0);">
                        <img src="images/home2/patner2.png" alt="patner" class="img-fluid">
                     </a>
                  </div>
                  <div class="partnerLogoItem">
                     <a href="javascript:void(0);">
                        <img src="images/home2/patner3.png" alt="patner" class="img-fluid">
                     </a>
                  </div>
                  <div class="partnerLogoItem">
                     <a href="javascript:void(0);">
                        <img src="images/home2/patner4.png" alt="patner" class="img-fluid">
                     </a>
                  </div>
                  <div class="partnerLogoItem">
                     <a href="javascript:void(0);">
                        <img src="images/home2/patner5.png" alt="patner" class="img-fluid">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Partner Logo End-->

      <!--Mobile App Start-->
      <section class="w-100 clearfix mobileApp" id="mobileApp">
         <div class="container">
            <div class="mobileAppInner">
               <div class="row mobileAppRow">
                  <div class="col-md-6">
                     <div class="mobileAppImg">
                        <img src="images/home2/chef-image2.png" alt="mobileApp" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mobileAppContent">
                        <div class="mobileAppContentInner">
                           <h2>Its Now More Easy to Order by Our Mobile App <span><img src="images/home2/mask7.png" alt="mask" class="img-fluid"></span>
                           </h2>
                           <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendiss luctus nec elit in
                              vulputate. In eget dictum ante, et tempus ex.” </p>
                        </div>
                        <div class="mobileAppStore">
                           <a href="javascript:void(0);" class="d-block">
                              <img src="images/home2/app-store.png" alt="app-store" class="img-fluid">
                           </a>
                           <a href="javascript:void(0);" class="d-block">
                              <img src="images/home2/mobile-app-store.png" alt="mobile-app-store" class="img-fluid">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Mobile App End-->

      <!--Our Blog Start-->
      <section class="w-100 clearfix ourBlog ourBlogSecondary" id="ourBlogSecondary">
         <div class="container">
            <div class="ourBlogInner">
               <div class="commonHeading commonSecondaryHeading headingCenter">
                  <h4>Our Blog</h4>
                  <p class="mb-0">The state-of-the art facility has automated machinery, is installed with rust-free
                     pipelines and faucets and uses only RO treated water.</p>
               </div>
               <div class="row">
                  <div class="col-md-12 col-lg-4">
                     <div class="ourBlogItem">
                        <div class="ourBlogBanner">
                           <a href="blog-single.html">
                              <img src="images/img6.png" alt="our-blog" class="img-fluid">
                           </a>
                           <div class="ourBlogNav">
                              <ul class="nav">
                                 <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                       <img src="images/home2/user-icon.png" alt="user" class="img-fluid">
                                       <span>By Aliana</span>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                       <img src="images/home2/comment-icon.png" alt="user" class="img-fluid">
                                       <span>02</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="ourBlogDate">
                              <h5>28</h5>
                              <p class="mb-0">May</p>
                           </div>
                        </div>
                        <div class="ourBlogTxt">
                           <h4><a href="blog-single.html">Our inspired solutions have helped shape modern acoustic
                                 design.</a></h4>
                           <a href="blog-single.html" class="ourBlogLink">
                              <span>More Details</span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                 fill="none">
                                 <path
                                    d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                    fill="#999999" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="ourBlogItem">
                        <div class="ourBlogBanner">
                           <a href="blog-single.html">
                              <img src="images/img7.png" alt="our-blog" class="img-fluid">
                           </a>
                           <div class="ourBlogNav">
                              <ul class="nav">
                                 <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                       <img src="images/home2/user-icon.png" alt="user" class="img-fluid">
                                       <span>By Aliana</span>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                       <img src="images/home2/comment-icon.png" alt="user" class="img-fluid">
                                       <span>04</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="ourBlogDate">
                              <h5>25</h5>
                              <p class="mb-0">May</p>
                           </div>
                        </div>
                        <div class="ourBlogTxt">
                           <h4><a href="blog-single.html">The ready-to-eat food counters feature the best quality.</a></h4>
                           <a href="blog-single.html" class="ourBlogLink">
                              <span>More Details</span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                 fill="none">
                                 <path
                                    d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                    fill="#999999" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="ourBlogItem mb-0">
                        <div class="ourBlogBanner">
                           <a href="blog-single.html">
                              <img src="images/img8.png" alt="our-blog" class="img-fluid">
                           </a>
                           <div class="ourBlogNav">
                              <ul class="nav">
                                 <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                       <img src="images/home2/user-icon.png" alt="user" class="img-fluid">
                                       <span>By Aliana</span>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);">
                                       <img src="images/home2/comment-icon.png" alt="user" class="img-fluid">
                                       <span>06</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="ourBlogDate">
                              <h5>28</h5>
                              <p class="mb-0">May</p>
                           </div>
                        </div>
                        <div class="ourBlogTxt">
                           <h4><a href="blog-single.html">24Seven Convenience Stores can be found illuminating dark streets at over.</a></h4>
                           <a href="blog-single.html" class="ourBlogLink">
                              <span>More Details</span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                 fill="none">
                                 <path
                                    d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                    fill="#999999" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Our Blog End-->

      <!--Subscribe Newsletter Start-->
      <section class="w-100 clearfix subscribeNewsletter" id="subscribeNewsletter">
         <div class="container">
            <div class="subscribeNewsletterInner">
               <div class="subscribeNewsletterGroup">
                  <h5>Subscribe to our Newsletter</h5>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendiss luctus nec elit in vulputate."</p>
                  <div class="subscribeNewsletterInput">
                     <div class="inputGroup">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Your Email">
                           <button type="button" class="btn btnForth">Subscribe</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Subscribe Newsletter End-->

      <!--Footer Section Start-->
      <footer class="w-100 clearfix footerSecondary" id="footerSecondary">
         <div class="footerSecondaryInner">
            <div class="container">
               <div class="footerSecondaryRow">
                  <div class="footerSecondaryCol">
                     <div class="footerColGroup footerColGroup1">
                        <div class="footerSecondaryLogo">
                           <img src="images/logo/logo1.png" alt="footer-logo" class="img-fluid">
                        </div>
                        <div class="footerSecondaryPara">
                           <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendiss luctus nec elit in
                              vulputate. In eget dictum ante, et tempus ex.”</p>
                        </div>
                     </div>
                  </div>
                  <div class="footerSecondaryCol">
                     <div class="footerColGroup footerColGroup2">
                        <div class="footerHeading">
                           <h5>Menu</h5>
                        </div>
                        <div class="footerMenu">
                           <ul class="nav flex-column">
                              <li class="nav-item">
                                 <a class="nav-link" href="about-us.html">About Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="service-us.html">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="our-blog.html">Blog</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact-us.html">Contact Us</a>
                              </li>
                           </ul>
                           <ul class="nav flex-column">
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.html">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="customer-choice.html">Customer Choice</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="our-chef.html">Our Chef</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="our-meal-list.html">Our Meal</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="footerSecondaryCol">
                     <div class="footerColGroup footerColGroup3">
                        <div class="footerHeading">
                           <h5>Social</h5>
                        </div>
                        <div class="socialMedia">
                           <ul class="nav">
                              <li class="nav-item">
                                 <a class="nav-link" href="javascript:void(0);">
                                    <i class="fa-brands fa-whatsapp"></i>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="javascript:void(0);">
                                    <i class="fa-brands fa-instagram"></i>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="javascript:void(0);">
                                    <i class="fa-brands fa-facebook-f"></i>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="javascript:void(0);">
                                    <i class="fa-brands fa-x-twitter"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footerSecondaryCopyright">
            <div class="container">
               <div class="footerCopyright">
                  <div class="copyrightCenter">
                     <p class="mb-0">Copyright © 2024-2025 <a href="javascript:void(0);">Lunch Box</a>. All Rights
                        Reserved.</p>
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
   <script src="js/custom.js"></script>

</body>


<!-- Mirrored from webstrot.com/html/lunchbox/lunchbox/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 17:46:49 GMT -->
</html>