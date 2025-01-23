<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Lunch Box - Blog Without Sidebar</title>
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
                              <a href="javascript:void(0);" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
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
                  <h1>Blog <span>Categories</span></h1>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="home1.html">Home</a></li>
                     <li class="breadcrumb-item active">Blog Categories</li>
                  </ul>
               </div>
               <div class="innerPageBannerImgRight">
                  <img src="images/img23.png" alt="banner-img" class="img-fluid">
               </div>
            </div>
         </div>
      </section>
      <!--Banner End-->

      <!-- Our Blog Start -->
      <section class="w-100 clearfix ourBlogCard" id="ourBlogCard">
         <div class="container">
            <div class="blogFilter d-block d-lg-none">
               <a href="javascript:void(0)" class="blogFilterIcon">
                  <i class="fa-solid fa-filter"></i>
               </a>
            </div>
            <div class="ourBlogCardInner">
               <div class="row">
                  <div class="col-md-12 col-lg-8">
                     <div class="row">
                        <div class="col-md-12 col-lg-6">
                           <div class="ourBlogItem">
                              <div class="ourBlogBanner">
                                 <a href="blog-single.html">
                                    <img src="images/img7.png" alt="our-blog" class="img-fluid">
                                 </a>
                                 <div class="ourBlogNav">
                                    <ul class="nav">
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/user.png" alt="user" class="img-fluid">
                                             <span>By Aliana</span>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/message.png" alt="user" class="img-fluid">
                                             <span>02</span>
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
                                 <h4><a href="blog-single.html">Our inspired solutions have helped shape modern acoustic design.</a></h4>
                                 <a href="blog-single.html" class="ourBlogLink">
                                    <span>More Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                       fill="none">
                                       <path
                                          d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                          fill="#999999"></path>
                                    </svg>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="ourBlogItem">
                              <div class="ourBlogBanner">
                                 <!-- Carousel -->
                                 <div id="demo" class="carousel slide" data-bs-ride="carousel">

                                    <!-- Indicators/dots -->
                                    <div class="carousel-indicators">
                                       <button type="button" data-bs-target="#demo" data-bs-slide-to="0"
                                          class="active"></button>
                                       <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                       <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                       <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                                    </div>

                                    <!-- The slideshow/carousel -->
                                    <div class="carousel-inner">
                                       <div class="carousel-item active">
                                          <a href="blog-slider-single.html">
                                             <img src="images/img8.png" alt="our-blog" class="img-fluid">
                                          </a>
                                       </div>
                                       <div class="carousel-item">
                                          <a href="blog-slider-single.html">
                                             <img src="images/img46.png" alt="our-blog" class="img-fluid">
                                          </a>
                                       </div>
                                       <div class="carousel-item">
                                          <a href="blog-slider-single.html">
                                             <img src="images/img44.png" alt="our-blog" class="img-fluid">
                                          </a>
                                       </div>
                                       <div class="carousel-item">
                                          <a href="blog-slider-single.html">
                                             <img src="images/img45.png" alt="our-blog" class="img-fluid">
                                          </a>
                                       </div>
                                    </div>

                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                                       data-bs-slide="prev">
                                       <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#demo"
                                       data-bs-slide="next">
                                       <span class="carousel-control-next-icon"></span>
                                    </button>
                                 </div>
                                 <div class="ourBlogNav">
                                    <ul class="nav">
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/user.png" alt="user" class="img-fluid">
                                             <span>By Aliana</span>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/message.png" alt="user" class="img-fluid">
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
                                 <h4><a href="blog-single.html">24Seven Convenience Stores can be found illuminating
                                       dark streets at over.
                                       acoustic
                                       design.</a></h4>
                                 <a href="blog-single.html" class="ourBlogLink">
                                    <span>More Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                       fill="none">
                                       <path
                                          d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                          fill="#999999"></path>
                                    </svg>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="ourBlogItem">
                              <div class="ourBlogBanner">
                                 <div class="ourVideoBlog">
                                    <a href="blog-video-single.html">
                                       <img src="images/img43.png" alt="our-blog" class="img-fluid">
                                       <div class="blogVideoPlayIcon">
                                          <svg version="1.0" viewBox="0 0 259 214">
                                             <path
                                                d="M113.3 22.9c-30.4 4.9-54.5 24.9-64.4 53.7-3.2 9.6-3.3 10.4-3.3 25.4 0 15 .1 15.8 3.3 25.4 8.8 25.3 27.9 43.6 53.5 51 33.8 9.8 69.2-3.5 88.7-33.2 8.8-13.4 12.3-25.7 12.3-43.2 0-17.5-3.5-29.8-12.3-43.2-8.3-12.7-21-23.8-33.9-29.5-12.5-5.5-31.7-8.3-43.9-6.4zm26.1 5.6c22.6 4.7 42 19.5 52 39.8 5.9 12 7.9 20.5 7.9 33.7 0 13.2-2 21.7-7.9 33.7-13.1 26.6-41.1 42.7-70.9 41-16.8-1-29.9-5.8-42.9-15.8C42.6 133.8 39.5 80.6 71 49c17.7-17.7 43.9-25.5 68.4-20.5z" />
                                             <path
                                                d="M102.6 69.1l-2.6 2v61.8l2.7 2.1c1.9 1.4 3.5 1.9 5.1 1.5 2.9-.7 44.1-25.7 48.3-29.3 3.4-2.8 3.8-6.9 1.2-10-1-1-5.4-4.1-9.8-6.7-4.4-2.7-14.9-9-23.4-14.2C115.7 71.2 108 67 107 67c-.9 0-2.9.9-4.4 2.1zm27.7 16.5c25.4 15.5 25.8 15.8 23.7 17.8-3.3 3.2-46.3 28.7-47.8 28.4-1.5-.3-1.7-3.2-2-28.8-.1-15.7 0-29 .3-29.7.2-.7 1.1-1.3 2-1.3.8 0 11.5 6.1 23.8 13.6z" />
                                          </svg>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="ourBlogNav">
                                    <ul class="nav">
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/user.png" alt="user" class="img-fluid">
                                             <span>By Aliana</span>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/message.png" alt="user" class="img-fluid">
                                             <span>02</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="ourBlogDate">
                                    <h5>29</h5>
                                    <p class="mb-0">May</p>
                                 </div>
                              </div>
                              <div class="ourBlogTxt">
                                 <h4><a href="blog-single.html">Our inspired solutions have helped shape modern
                                       acoustic
                                       design.</a></h4>
                                 <a href="blog-single.html" class="ourBlogLink">
                                    <span>More Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                       fill="none">
                                       <path
                                          d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                          fill="#999999"></path>
                                    </svg>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="ourBlogItem">
                              <div class="ourBlogBanner">
                                 <a href="blog-single.html">
                                    <img src="images/img44.png" alt="our-blog" class="img-fluid">
                                 </a>
                                 <div class="ourBlogNav">
                                    <ul class="nav">
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/user.png" alt="user" class="img-fluid">
                                             <span>By Aliana</span>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/message.png" alt="user" class="img-fluid">
                                             <span>02</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="ourBlogDate">
                                    <h5>12</h5>
                                    <p class="mb-0">Jun</p>
                                 </div>
                              </div>
                              <div class="ourBlogTxt">
                                 <h4><a href="blog-single.html">The ready-to-eat food counters feature the best
                                       quality.</a></h4>
                                 <a href="blog-single.html" class="ourBlogLink">
                                    <span>More Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                       fill="none">
                                       <path
                                          d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                          fill="#999999"></path>
                                    </svg>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="ourBlogItem">
                              <div class="ourBlogBanner">
                                 <a href="blog-single.html">
                                    <img src="images/img46.png" alt="our-blog" class="img-fluid">
                                 </a>
                                 <div class="ourBlogNav">
                                    <ul class="nav">
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/user.png" alt="user" class="img-fluid">
                                             <span>By Aliana</span>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/message.png" alt="user" class="img-fluid">
                                             <span>02</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="ourBlogDate">
                                    <h5>16</h5>
                                    <p class="mb-0">Jun</p>
                                 </div>
                              </div>
                              <div class="ourBlogTxt">
                                 <h4><a href="blog-single.html">Showcase high-quality, delectable desserts and sweet
                                       treats that can be conveniently purchased from ready-to-eat counters</a></h4>
                                 <a href="blog-single.html" class="ourBlogLink">
                                    <span>More Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                       fill="none">
                                       <path
                                          d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                          fill="#999999"></path>
                                    </svg>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="ourBlogItem">
                              <div class="ourBlogBanner">
                                 <!-- Carousel -->
                                 <div id="demo1" class="carousel slide" data-bs-ride="carousel">

                                    <!-- Indicators/dots -->
                                    <div class="carousel-indicators">
                                       <button type="button" data-bs-target="#demo1" data-bs-slide-to="0"
                                          class="active"></button>
                                       <button type="button" data-bs-target="#demo1" data-bs-slide-to="1"></button>
                                       <button type="button" data-bs-target="#demo1" data-bs-slide-to="2"></button>
                                       <button type="button" data-bs-target="#demo1" data-bs-slide-to="3"></button>
                                    </div>

                                    <!-- The slideshow/carousel -->
                                    <div class="carousel-inner">
                                       <div class="carousel-item active">
                                          <a href="blog-slider-single.html">
                                             <img src="images/img7.png" alt="our-blog" class="img-fluid">
                                          </a>
                                       </div>
                                       <div class="carousel-item">
                                          <a href="blog-slider-single.html">
                                             <img src="images/img46.png" alt="our-blog" class="img-fluid">
                                          </a>
                                       </div>
                                       <div class="carousel-item">
                                          <a href="blog-slider-single.html">
                                             <img src="images/img48.png" alt="our-blog" class="img-fluid">
                                          </a>
                                       </div>
                                       <div class="carousel-item">
                                          <a href="blog-single.html">
                                             <img src="images/img45.png" alt="our-blog" class="img-fluid">
                                          </a>
                                       </div>
                                    </div>

                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#demo1"
                                       data-bs-slide="prev">
                                       <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#demo1"
                                       data-bs-slide="next">
                                       <span class="carousel-control-next-icon"></span>
                                    </button>
                                 </div>
                                 <div class="ourBlogNav">
                                    <ul class="nav">
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/user.png" alt="user" class="img-fluid">
                                             <span>By Aliana</span>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/message.png" alt="user" class="img-fluid">
                                             <span>02</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="ourBlogDate">
                                    <h5>15</h5>
                                    <p class="mb-0">Jun</p>
                                 </div>
                              </div>
                              <div class="ourBlogTxt">
                                 <h4><a href="blog-single.html">Curate a list of breakfast options available at
                                       ready-to-eat counters, ensuring a nutritious and delicious start to the day</a>
                                 </h4>
                                 <a href="blog-single.html" class="ourBlogLink">
                                    <span>More Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                       fill="none">
                                       <path
                                          d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                          fill="#999999"></path>
                                    </svg>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="ourBlogItem">
                              <div class="ourBlogBanner">
                                 <div class="ourVideoBlog">
                                    <a href="blog-video-single.html">
                                       <img src="images/img47.png" alt="our-blog" class="img-fluid">
                                       <div class="blogVideoPlayIcon">
                                          <svg version="1.0" viewBox="0 0 259 214">
                                             <path
                                                d="M113.3 22.9c-30.4 4.9-54.5 24.9-64.4 53.7-3.2 9.6-3.3 10.4-3.3 25.4 0 15 .1 15.8 3.3 25.4 8.8 25.3 27.9 43.6 53.5 51 33.8 9.8 69.2-3.5 88.7-33.2 8.8-13.4 12.3-25.7 12.3-43.2 0-17.5-3.5-29.8-12.3-43.2-8.3-12.7-21-23.8-33.9-29.5-12.5-5.5-31.7-8.3-43.9-6.4zm26.1 5.6c22.6 4.7 42 19.5 52 39.8 5.9 12 7.9 20.5 7.9 33.7 0 13.2-2 21.7-7.9 33.7-13.1 26.6-41.1 42.7-70.9 41-16.8-1-29.9-5.8-42.9-15.8C42.6 133.8 39.5 80.6 71 49c17.7-17.7 43.9-25.5 68.4-20.5z" />
                                             <path
                                                d="M102.6 69.1l-2.6 2v61.8l2.7 2.1c1.9 1.4 3.5 1.9 5.1 1.5 2.9-.7 44.1-25.7 48.3-29.3 3.4-2.8 3.8-6.9 1.2-10-1-1-5.4-4.1-9.8-6.7-4.4-2.7-14.9-9-23.4-14.2C115.7 71.2 108 67 107 67c-.9 0-2.9.9-4.4 2.1zm27.7 16.5c25.4 15.5 25.8 15.8 23.7 17.8-3.3 3.2-46.3 28.7-47.8 28.4-1.5-.3-1.7-3.2-2-28.8-.1-15.7 0-29 .3-29.7.2-.7 1.1-1.3 2-1.3.8 0 11.5 6.1 23.8 13.6z" />
                                          </svg>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="ourBlogNav">
                                    <ul class="nav">
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/user.png" alt="user" class="img-fluid">
                                             <span>By Aliana</span>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/message.png" alt="user" class="img-fluid">
                                             <span>02</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="ourBlogDate">
                                    <h5>18</h5>
                                    <p class="mb-0">Jun</p>
                                 </div>
                              </div>
                              <div class="ourBlogTxt">
                                 <h4><a href="blog-single.html">Create a comprehensive guide for consumers on how to
                                       identify and choose the best-quality items at ready-to-eat counters.</a></h4>
                                 <a href="blog-single.html" class="ourBlogLink">
                                    <span>More Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                       fill="none">
                                       <path
                                          d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                          fill="#999999"></path>
                                    </svg>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="ourBlogItem">
                              <div class="ourBlogBanner">
                                 <a href="blog-single.html">
                                    <img src="images/img48.png" alt="our-blog" class="img-fluid">
                                 </a>
                                 <div class="ourBlogNav">
                                    <ul class="nav">
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/user.png" alt="user" class="img-fluid">
                                             <span>By Aliana</span>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="javascript:void(0);">
                                             <img src="images/icon/message.png" alt="user" class="img-fluid">
                                             <span>02</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="ourBlogDate">
                                    <h5>25</h5>
                                    <p class="mb-0">Jun</p>
                                 </div>
                              </div>
                              <div class="ourBlogTxt">
                                 <h4><a href="blog-single.html">Highlight convenient and high-quality meals suitable for
                                       individuals with hectic schedules.</a></h4>
                                 <a href="blog-single.html" class="ourBlogLink">
                                    <span>More Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                       fill="none">
                                       <path
                                          d="M8.35954 9.73094C8.17977 9.55157 8.09348 9.33483 8.10067 9.08072C8.10786 8.82661 8.20164 8.60987 8.38202 8.43049L10.9213 5.89686H0.898878C0.644197 5.89686 0.430565 5.81076 0.25798 5.63856C0.0853964 5.46637 -0.00059614 5.25351 3.11029e-06 5C3.11029e-06 4.74589 0.0862952 4.53273 0.258879 4.36054C0.431463 4.18834 0.644796 4.10254 0.898878 4.10314H10.9213L8.35954 1.54708C8.17977 1.36771 8.08988 1.15456 8.08988 0.907623C8.08988 0.660687 8.17977 0.447832 8.35954 0.269058C8.53932 0.0896858 8.75295 0 9.00044 0C9.24793 0 9.46126 0.0896858 9.64044 0.269058L13.7528 4.3722C13.8427 4.46188 13.9065 4.55904 13.9443 4.66368C13.982 4.76831 14.0006 4.88042 14 5C14 5.11958 13.9811 5.23169 13.9434 5.33632C13.9056 5.44096 13.8421 5.53812 13.7528 5.6278L9.61797 9.75336C9.45317 9.91779 9.24733 10 9.00044 10C8.75355 10 8.53992 9.91031 8.35954 9.73094Z"
                                          fill="#999999"></path>
                                    </svg>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Pagination Start -->
                     <div class="paginationContainer">
                        <ul class="pagination">
                           <li class="page-item"><a class="page-link prevBtn" href="#"><i
                                    class="fa-solid fa-angle-left"></i></a></li>
                           <li class="page-item"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link active" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">...</a></li>
                           <li class="page-item"><a class="page-link" href="#">4</a></li>
                           <li class="page-item"><a class="page-link nextBtn active" href="#"><i
                                    class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                     </div>
                     <!-- Pagination End -->
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="lunchboxSidebar">
                        <div class="lunchboxFilterClose d-block d-lg-none">
                           <a href="javascript:void(0)" class="blogFilterCloseIcon">
                              <i class="fa-solid fa-filter-circle-xmark"></i>
                           </a>
                        </div>
                        <div class="searchGroup">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search...">
                              <button type="submit" class="input-group-text"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                           </div>
                        </div>
                        <div class="blogSidebarCategories">
                           <div class="sidebarHeading">
                              <h5 class="mb-0">Blog Categories</h5>
                           </div>
                           <div class="blogCardSidebarGroup">
                              <a href="javascript:void(0);" class="blogCategLink">Recipe Corner</a>
                              <a href="javascript:void(0);" class="blogCategLink">Nutrition Insights</a>
                              <a href="javascript:void(0);" class="blogCategLink">Meal Prep Tips</a>
                              <a href="javascript:void(0);" class="blogCategLink">Workplace Wellness</a>
                              <a href="javascript:void(0);" class="blogCategLink">Product Reviews</a>
                           </div>
                        </div>
                        <div class="blogSidebar">
                           <div class="sidebarHeading">
                              <h5 class="mb-0">Latest Blog</h5>
                           </div>
                           <div class="blogCardSidebarGroup">
                              <div class="blogCardSidebar">
                                 <div class="blogImgSidebar">
                                    <a href="blog-single.html">
                                       <img src="images/img28.png" alt="blog" class="img-fluid">
                                    </a>
                                 </div>
                                 <div class="blogContentSidebar">
                                    <h4><a href="blog-single.html">The ready-to-eat food counters feature the best
                                          quality.</a></h4>
                                    <div class="ourBlogNav">
                                       <ul class="nav">
                                          <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);">
                                                <img src="images/icon/user.png" alt="user" class="img-fluid">
                                                <span>By Aliana</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);">
                                                <img src="images/icon/message.png" alt="user" class="img-fluid">
                                                <span>02</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="blogCardSidebar">
                                 <div class="blogImgSidebar">
                                    <a href="blog-single.html">
                                       <img src="images/img29.png" alt="blog" class="img-fluid">
                                    </a>
                                 </div>
                                 <div class="blogContentSidebar">
                                    <h4><a href="blog-single.html">Offering a delectable array, the ready-to-eat
                                          counters.</a></h4>
                                    <div class="ourBlogNav">
                                       <ul class="nav">
                                          <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);">
                                                <img src="images/icon/user.png" alt="user" class="img-fluid">
                                                <span>By Aliana</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);">
                                                <img src="images/icon/message.png" alt="user" class="img-fluid">
                                                <span>02</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="blogCardSidebar">
                                 <div class="blogImgSidebar">
                                    <a href="blog-single.html">
                                       <img src="images/img30.png" alt="blog" class="img-fluid">
                                    </a>
                                 </div>
                                 <div class="blogContentSidebar">
                                    <h4><a href="blog-single.html">Elevate your dining experience with our ready-to-eat
                                          selections.</a></h4>
                                    <div class="ourBlogNav">
                                       <ul class="nav">
                                          <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);">
                                                <img src="images/icon/user.png" alt="user" class="img-fluid">
                                                <span>By Aliana</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);">
                                                <img src="images/icon/message.png" alt="user" class="img-fluid">
                                                <span>02</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="blogCardSidebar">
                                 <div class="blogImgSidebar">
                                    <a href="blog-single.html">
                                       <img src="images/img31.png" alt="blog" class="img-fluid">
                                    </a>
                                 </div>
                                 <div class="blogContentSidebar">
                                    <h4><a href="blog-single.html">From gourmet delights to everyday favorites, our
                                          ready-to-eat.</a></h4>
                                    <div class="ourBlogNav">
                                       <ul class="nav">
                                          <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);">
                                                <img src="images/icon/user.png" alt="user" class="img-fluid">
                                                <span>By Aliana</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);">
                                                <img src="images/icon/message.png" alt="user" class="img-fluid">
                                                <span>02</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="ourPhotosSidebar">
                           <div class="sidebarHeading">
                              <h5 class="mb-0">Our Photos</h5>
                           </div>
                           <div class="ourPhotoSidebarRow">
                              <div class="ourPhotoSidebarCol">
                                 <div class="ourPhotoItemSidebar">
                                    <a href="images/gallery/gallery1.png" class="galleryLink" data-fancybox="images"
                                       data-caption="">
                                       <img src="images/gallery/gallery1.png" alt="gallery" class="img-fluid w-100">
                                    </a>
                                 </div>
                              </div>
                              <div class="ourPhotoSidebarCol">
                                 <div class="ourPhotoItemSidebar">
                                    <a href="images/gallery/gallery2.png" class="galleryLink" data-fancybox="images"
                                       data-caption="">
                                       <img src="images/gallery/gallery2.png" alt="gallery" class="img-fluid w-100">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="ourPhotoSidebarRow">
                              <div class="ourPhotoSidebarCol w-100">
                                 <div class="ourPhotoItemSidebar">
                                    <a href="images/gallery/gallery3.png" class="galleryLink" data-fancybox="images"
                                       data-caption="">
                                       <img src="images/gallery/gallery3.png" alt="gallery" class="img-fluid w-100">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="ourPhotoSidebarRow">
                              <div class="ourPhotoSidebarCol">
                                 <div class="ourPhotoItemSidebar">
                                    <a href="images/gallery/gallery4.png" class="galleryLink" data-fancybox="images"
                                       data-caption="">
                                       <img src="images/gallery/gallery4.png" alt="gallery" class="img-fluid w-100">
                                    </a>
                                 </div>
                              </div>
                              <div class="ourPhotoSidebarCol">
                                 <div class="ourPhotoItemSidebar">
                                    <a href="images/gallery/gallery5.png" class="galleryLink" data-fancybox="images"
                                       data-caption="">
                                       <img src="images/gallery/gallery5.png" alt="gallery" class="img-fluid w-100">
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="socialMediaSidebar">
                           <div class="sidebarHeading">
                              <h5 class="mb-0">Share</h5>
                           </div>
                           <div class="socialMediaInnerSidebar">
                              <a href="javascript:void(0);">
                                 <i class="fa-brands fa-whatsapp"></i>
                              </a>
                              <a href="javascript:void(0);">
                                 <i class="fa-brands fa-instagram"></i>
                              </a>
                              <a href="javascript:void(0);">
                                 <i class="fa-brands fa-facebook-f"></i>
                              </a>
                              <a href="javascript:void(0);">
                                 <i class="fa-brands fa-x-twitter"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Our Blog End -->

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
                     <p class="mb-0">Copyright © 2024-2025 <a href="javascript:void(0);">Lunch Box</a>. All Rights
                        Reserved.
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
   <script src="js/fancybox.min.js"></script>
   <script src="js/grt-youtube-popup.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>


<!-- Mirrored from webstrot.com/html/lunchbox/lunchbox/blog-categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 17:46:53 GMT -->
</html>