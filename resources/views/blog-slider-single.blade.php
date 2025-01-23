<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Lunch Box - Blog Single</title>
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
                  <h1>Blog <span>Single</span></h1>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="home1.html">Home</a></li>
                     <li class="breadcrumb-item active">Blog Single</li>
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
      <section class="w-100 clearfix lbBlogSingle" id="lbBlogSingle">
         <div class="container">
            <div class="blogFilter d-block d-lg-none">
               <a href="javascript:void(0)" class="blogFilterIcon">
                  <i class="fa-solid fa-filter"></i>
               </a>
            </div>
            <div class="lbBlogSingleInner">
               <div class="row">
                  <div class="col-md-12 col-lg-8">
                     <div class="lbBlogSingleContent">
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
                                       <a href="blog-single.html">
                                          <img src="images/img50.png" alt="our-blog" class="img-fluid">
                                       </a>
                                    </div>
                                    <div class="carousel-item">
                                       <a href="blog-single.html">
                                          <img src="images/img46.png" alt="our-blog" class="img-fluid">
                                       </a>
                                    </div>
                                    <div class="carousel-item">
                                       <a href="blog-single.html">
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
                                 <h5>25</h5>
                                 <p class="mb-0">May</p>
                              </div>
                           </div>
                           <div class="ourBlogTxt">
                              <h4>Our inspired solutions have helped shape modern acoustic design.</h4>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                 suffered alteration in some form, by injected humour, or randomised words which don't
                                 look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                 need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                                 Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                 making this the first true generator on the Internet. It uses a dictionary of over 200
                                 Latin words, combined with a handful of model sentence structures, to generate Lorem
                                 Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                 repetition, injected humour, or non-characteristic words etc.</p>

                              <p>Vegetarian and Non-Vegetarian meal options. dolor sit amet, consectetur Nulla fringilla
                                 purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor.</p>

                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                 suffered alteration in some form, by injected humour, or randomised words which don't
                                 look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                 need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                                 Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                 making this the first true generator on the Internet. It uses a dictionary of over 200
                                 Latin words, combined with a handful of model sentence structures, to generate Lorem
                                 Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                 repetition, injected humour, or non-characteristic words etc.</p>

                              <p>Vegetarian and Non-Vegetarian meal options. dolor sit amet, consectetur Nulla fringilla
                                 purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. There are many
                                 variations of passages of Lorem Ipsum available, but the majority have suffered
                                 alteration in some form, by injected humour, or randomised words which don't look even
                                 slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                 sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                                 Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                           </div>
                           <div class="lbBlogTag">
                              <h6>Tags:</h6>
                              <div class="lbBlogTagItemGroup">
                                 <a href="javascript:void(0);" class="lbBlogTagLink">TastyTotes</a>
                                 <a href="javascript:void(0);" class="lbBlogTagLink">LunchCrafters</a>
                                 <a href="javascript:void(0);" class="lbBlogTagLink">BoxedBites</a>
                                 <a href="javascript:void(0);" class="lbBlogTagLink">PackedPalate</a>
                                 <a href="javascript:void(0);" class="lbBlogTagLink">LunchboxChronicles</a>
                              </div>
                           </div>
                        </div>
                        <hr class="lbBlogHorizLine">
                        <div class="lbBlogComment">
                           <div class="lbBlogCommentRow">
                              <div class="lbBlogCommentCol">
                                 <div class="lbBlogCommentProfile">
                                    <img src="images/chef1.png" alt="img" class="img-fluid">
                                 </div>
                              </div>
                              <div class="lbBlogCommentCol">
                                 <div class="lbBlogCommentContent">
                                    <h4>John Deo <small><span></span>About admin</small></h4>
                                    <p>Phosfluorescently unleash highly efficient experiences for team driven scenarios.
                                       Conveniently enhance cross-unit communities with testing procedures. Dynamically
                                       embrace team building expertise.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="lbBlogCommentGroup">
                           <div class="lbBlogCommentHeading">
                              <h6>Comments (03)</h6>
                           </div>
                           <div class="lbBlogCommentItemGroup">
                              <div class="lbBlogComment">
                                 <div class="lbBlogCommentRow">
                                    <div class="lbBlogCommentRowInner">
                                       <div class="lbBlogCommentCol">
                                          <div class="lbBlogCommentProfile">
                                             <img src="images/chef1.png" alt="img" class="img-fluid">
                                          </div>
                                       </div>
                                       <div class="lbBlogCommentCol">
                                          <div class="lbBlogCommentContent">
                                             <h4>Henny Calvin <small><span></span>Jan 6, 2024 - <a
                                                      href="javascript:void(0);" class="replyBtn">reply</a></small></h4>
                                             <p class="mb-0">Phosfluorescently unleash highly efficient experiences for
                                                team driven scenarios. Conveniently enhance cross-unit communities with
                                                testing procedures. Dynamically embrace team building expertise.</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="lbBlogNestedCommentRow">
                                       <div class="lbBlogCommentRow">
                                          <div class="lbBlogCommentRowInner">
                                             <div class="lbBlogCommentCol">
                                                <div class="lbBlogCommentProfile">
                                                   <img src="images/chef9.png" alt="img" class="img-fluid">
                                                </div>
                                             </div>
                                             <div class="lbBlogCommentCol">
                                                <div class="lbBlogCommentContent">
                                                   <h4>Patricia Johnson <small><span></span>Jan 10, 2024 - <a
                                                            href="javascript:void(0);"
                                                            class="replyBtn">reply</a></small></h4>
                                                   <p class="mb-0">Convenience becomes a cornerstone as cross-unit
                                                      communities are strategically fortified through rigorous testing
                                                      procedures. This meticulous approach not only ensures the
                                                      reliability of processes but also cultivates a culture of
                                                      continuous improvement, where lessons learned contribute to the
                                                      collective knowledge of the entire organization.</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="lbBlogCommentRow">
                                    <div class="lbBlogCommentRowInner">
                                       <div class="lbBlogCommentCol">
                                          <div class="lbBlogCommentProfile">
                                             <img src="images/chef2.png" alt="img" class="img-fluid">
                                          </div>
                                       </div>
                                       <div class="lbBlogCommentCol">
                                          <div class="lbBlogCommentContent">
                                             <h4>Robert Lucas <small><span></span>Jan 15, 2024 - <a
                                                      href="javascript:void(0);" class="replyBtn">reply</a></small></h4>
                                             <p class="mb-0">The dynamism embedded in this framework goes beyond mere
                                                procedural efficiency. It extends into the realm of team building, where
                                                expertise is not just acknowledged but actively embraced. By recognizing
                                                and capitalizing on the unique strengths of each team member, the
                                                collective potential of the team is maximized.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="lbBlogCommentRow">
                                    <div class="lbBlogCommentRowInner">
                                       <div class="lbBlogCommentCol">
                                          <div class="lbBlogCommentProfile">
                                             <img src="images/chef3.png" alt="img" class="img-fluid">
                                          </div>
                                       </div>
                                       <div class="lbBlogCommentCol">
                                          <div class="lbBlogCommentContent">
                                             <h4>Kevin Widagdo <small><span></span>Jan 10, 2024 - <a
                                                      href="javascript:void(0);" class="replyBtn">reply</a></small></h4>
                                             <p class="mb-0">Team building expertise takes center stage, acknowledging
                                                that effective collaboration is not a given but a skill that can be
                                                honed and refined. The emphasis on expertise underscores the importance
                                                of investing in the development of interpersonal skills alongside
                                                technical competencies.</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="lbBlogNestedCommentRow">
                                       <div class="lbBlogCommentRow">
                                          <div class="lbBlogCommentRowInner">
                                             <div class="lbBlogCommentCol">
                                                <div class="lbBlogCommentProfile">
                                                   <img src="images/chef11.png" alt="img" class="img-fluid">
                                                </div>
                                             </div>
                                             <div class="lbBlogCommentCol">
                                                <div class="lbBlogCommentContent">
                                                   <h4>Jerry D. Edmonds <small><span></span>Jan 12, 2024 - <a
                                                            href="javascript:void(0);"
                                                            class="replyBtn">reply</a></small></h4>
                                                   <p class="mb-0">Convenience and efficiency are not sacrificed at the
                                                      altar of complexity. Instead, they are elevated through a
                                                      thoughtful integration of testing procedures and dynamic
                                                      team-building strategies, creating an ecosystem where each
                                                      component enhances the other.</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="lbBlogCommentRow">
                                          <div class="lbBlogCommentRowInner">
                                             <div class="lbBlogCommentCol">
                                                <div class="lbBlogCommentProfile">
                                                   <img src="images/chef12.png" alt="img" class="img-fluid">
                                                </div>
                                             </div>
                                             <div class="lbBlogCommentCol">
                                                <div class="lbBlogCommentContent">
                                                   <h4>Dora T. Guerrero <small><span></span>Jan 13, 2024 - <a
                                                            href="javascript:void(0);"
                                                            class="replyBtn">reply</a></small></h4>
                                                   <p class="mb-0">In conclusion, the phosfluorescent paradigm offers a
                                                      comprehensive framework for navigating team-driven scenarios. By
                                                      combining efficiency, community enhancement, and team building,
                                                      organizations can foster an environment where success is not just
                                                      achieved but continually redefined and optimized.</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="leaveReplyBox">
                           <div class="sendMessageInner">
                              <div class="lbBlogCommentHeading">
                                 <h6>Leave A Reply</h6>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="sendMessageFrom">
                                       <form class="sendMessageFromBox">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="formGroup">
                                                   <textarea class="form-control" rows="6" id="message"
                                                      placeholder="Enter Comment" name="message"></textarea>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="formGroup">
                                                   <input type="text" class="form-control" id="name"
                                                      placeholder="Enter Name" name="name">
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="formGroup">
                                                   <input type="text" class="form-control" id="email"
                                                      placeholder="Enter Email" name="email">
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="formGroup mb-0">
                                                   <button type="submit" class="btn btnPrimary">Post Comment</button>
                                                </div>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
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
                              <h5 class="mb-0">Share This Post</h5>
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
   <script src="js/fancybox.min.js"></script>
   <script src="js/anime.min.js"></script>
   <script src="js/grt-youtube-popup.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>


<!-- Mirrored from webstrot.com/html/lunchbox/lunchbox/blog-slider-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 17:47:22 GMT -->
</html>