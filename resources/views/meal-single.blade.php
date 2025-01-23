<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<head>
   <meta charset="utf-8">
   <title>Lunch Box - Meal Single</title>
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
                              <a href="javascript:void(0);" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
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
                  <h1>Meal <span>Single</span></h1>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">Meal Single</li>
                  </ul>
               </div>
               <div class="innerPageBannerImgRight">
                  <img src="images/img23.png" alt="banner-img" class="img-fluid">
               </div>
            </div>
         </div>
      </section>
      <!--Banner End-->

      <!-- Thali Detail Start -->
      <section class="w-100 clearfix thaliDetail" id="thaliDetail">
         <div class="container">
            <div class="thaliDetailInner">
               <div class="thaliDetailRow">
                  <div class="thaliDetailCol">
                     <div class="thaliDetailImg">
                        <div class="thaliDetailImgInner">
                           <img src="images/img42.png" alt="img" class="img-fluid thaliImg">
                        </div>
                     </div>
                  </div>
                  <div class="howItWorkCol">
                     <div class="howItWorkContent">
                        <div class="commonHeading headingLeft">
                           <h4>Regular <span>Thali</span></h4>
                           <p>In addition to a wide variety of products, customers can utilize a plethora of in-house
                              services, from instant photo development, bill payments, mobile phone recharges to even
                              purchasing exclusive event tickets & passes and other offerings. </p>

                              <p>For those seeking entertainment, our platform also opens doors to exclusive event tickets and passes, offering a one-stop destination for a diverse range of experiences. Our dedication to providing comprehensive solutions ensures that customers not only find a diverse selection of products but also have access to a suite of services that cater to their varied needs. From essential tasks to indulgent extras, we pride ourselves on being more than just a shopping destination - we are a hub of convenience and innovation.</p>
                        </div>
                        <div class="thaliList">
                           <ul class="list-group list-group-horizontal">
                              <li class="list-group-item">Dalfry</li>
                              <li class="list-group-item">Paneer</li>
                              <li class="list-group-item">Aloo Mutter</li>
                              <li class="list-group-item">5 Roti</li>
                              <li class="list-group-item">Rice</li>
                              <li class="list-group-item">Salad</li>
                              <li class="list-group-item">Papad</li>
                           </ul>
                        </div>
                        <div class="thaliDetailGroup">
                           <div class="quantityThaliContainer">
                              <span class="quantityLabel">Quantity:</span>
                              <div class="quantity-container">
                                 <button class="decrease" title="Decrease"><i
                                       class="fa-solid fa-angle-left"></i></button>
                                 <input type="text" class="quantity" value="1" readonly>
                                 <button class="increase" title="Increase"><i
                                       class="fa-solid fa-angle-right"></i></button>
                              </div>
                           </div>
                           <div class="specialDishBtnGroup">
                              <div class="specialDishGetStartedBtn">
                                 <a href="check-out.html" class="btn btnPrimary">Buy Now</a>
                              </div>
                              <div class="specialDishGetStartedBtn">
                                 <a href="customer-choice.html" class="btn btnSecondary">Customer Choice</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Thali Detail End -->

          <!-- Customer Review Start -->
          <section class="w-100 clearfix customerReview" id="customerReview">
            <div class="container">
               <h2 class="d-none">Customer Review</h2>
               <div class="customerReviewInner">
                  <!-- Nav pills -->
                  <ul class="nav nav-pills">
                     <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#description">Description</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#review">Review</a>
                     </li>
                  </ul>
   
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div class="tab-pane active" id="description">
                        <div class="descriptionInner">
                           <p>Serving North-Indian, South-Indian and desi-Chinese cuisines, choose from Vegetarian and
                              Non-Vegetarian meal options. dolor sit amet, consectetur Nulla fringilla purus at leo
                              dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam.
                              Aliquam et elit eu nunc rhoncus viverra quis at felis Vegetarian and Non-Vegetarian meal
                              options. dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris
                              elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. Aliquam et elit eu nunc
                              rhoncus viverra quis at felis.</p>
   
                           <p>Vegetarian and Non-Vegetarian meal options. dolor sit amet, consectetur Nulla fringilla purus
                              at leo dignissim congue. Mauris elementum accumsan leo vel tempor.</p>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="review">
                        <div class="reviewInner">
                           <div class="row">
                              <div class="col-md-5 col-lg-4">
                                 <div class="reviewStar">
                                    <div class="reviewStarInner">
                                       <div class="reviewStarHead">
                                          <div class="reviewStarPoint">
                                             <span>5.0</span>
                                          </div>
                                          <div class="review5Star">
                                             <div class="review5StarInner">
                                                <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                             </div>
                                             <div class="rating">
                                                <p class="mb-0">2 Product Ratings</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="reviewStarProg">
                                          <div class="reviewStarProgItm">
                                             <div class="reviewStarPoint">
                                                <span>5</span> <i class="fa-solid fa-star"></i>
                                             </div>
                                             <div class="reviewProgBar">
                                                <div class="progress" style="height:8px">
                                                   <div class="progress-bar" style="width:100%;"></div>
                                                </div>
                                             </div>
                                             <div class="reviewProgPoint">
                                                <span>2</span>
                                             </div>
                                          </div>
                                          <div class="reviewStarProgItm">
                                             <div class="reviewStarPoint">
                                                <span>4</span> <i class="fa-solid fa-star"></i>
                                             </div>
                                             <div class="reviewProgBar">
                                                <div class="progress" style="height:8px">
                                                   <div class="progress-bar" style="width:75%;"></div>
                                                </div>
                                             </div>
                                             <div class="reviewProgPoint">
                                                <span>1</span>
                                             </div>
                                          </div>
                                          <div class="reviewStarProgItm">
                                             <div class="reviewStarPoint">
                                                <span>3</span> <i class="fa-solid fa-star"></i>
                                             </div>
                                             <div class="reviewProgBar">
                                                <div class="progress" style="height:8px">
                                                   <div class="progress-bar" style="width:50%;"></div>
                                                </div>
                                             </div>
                                             <div class="reviewProgPoint">
                                                <span>2</span>
                                             </div>
                                          </div>
                                          <div class="reviewStarProgItm">
                                             <div class="reviewStarPoint">
                                                <span>2</span> <i class="fa-solid fa-star"></i>
                                             </div>
                                             <div class="reviewProgBar">
                                                <div class="progress" style="height:8px">
                                                   <div class="progress-bar" style="width:25%;"></div>
                                                </div>
                                             </div>
                                             <div class="reviewProgPoint">
                                                <span>0</span>
                                             </div>
                                          </div>
                                          <div class="reviewStarProgItm">
                                             <div class="reviewStarPoint">
                                                <span>1</span> <i class="fa-solid fa-star"></i>
                                             </div>
                                             <div class="reviewProgBar">
                                                <div class="progress" style="height:8px">
                                                   <div class="progress-bar" style="width:0%;"></div>
                                                </div>
                                             </div>
                                             <div class="reviewProgPoint">
                                                <span>0</span>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="reviewStarContent">
                                          <h5>Review this product</h5>
                                          <p>Share your thoughts with other customers</p>
                                       </div>
                                       <div class="writeReviewBtn">
                                          <a href="javascript:void(0);" class="btn btnPrimary">Write a review</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-7 col-lg-8">
                                 <div class="reviewComment">
                                    <div class="reviewCommentInner">
                                       <div class="reviewCommenHeading">
                                          <h5>Customer Reviews (5)</h5>
                                       </div>
                                       <div class="reviewCommentItemGroup">
                                          <div class="reviewCommentItem">
                                             <div class="reviewCommentItemInner">
                                                <div class="reviewCommentHead">
                                                   <div class="reviewCommentInnerProfile">
                                                      <div class="reviewCommentProfile">
                                                         <span>   
                                                            <img src="images/chef7.png" alt="profile" class="img-fluid">
                                                         </span>
                                                      </div>
                                                      <div class="reviewCommentProfNam">
                                                         <h6>Liam</h6>
                                                         <span>March 8, 2024</span>
                                                      </div>
                                                   </div>
                                                   <div class="review5Star">
                                                      <div class="review5StarInner">
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="reviewCommentTxt">
                                                   <p>Life is a tapestry woven from the threads of our experiences, each moment a brushstroke on the canvas of our existence. It is a journey filled with ups and downs, twists and turns, yet it is also one imbued with beauty and wonder. For it is through our struggles that we learn the value of resilience, the power of perseverance in the face of adversity. And though the road may be long and winding, it is ultimately our ability to embrace the challenges that lie ahead that defines us, shaping us into the individuals we are meant to become.</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="reviewCommentItem">
                                             <div class="reviewCommentItemInner">
                                                <div class="reviewCommentHead">
                                                   <div class="reviewCommentInnerProfile">
                                                      <div class="reviewCommentProfile">
                                                         <span>   
                                                            <img src="images/chef8.png" alt="profile" class="img-fluid">
                                                         </span>
                                                      </div>
                                                      <div class="reviewCommentProfNam">
                                                         <h6>Isabella</h6>
                                                         <span>March 9, 2024</span>
                                                      </div>
                                                   </div>
                                                   <div class="review5Star">
                                                      <div class="review5StarInner">
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="reviewCommentTxt">
                                                   <p>In the quest for meaning and purpose, we are often confronted with moments of profound introspection. It is during these times of reflection that we come to understand the complexities of our existence, the interconnectedness of all things. Yet, amidst the chaos and uncertainty, there exists a sense of clarity, a deep-seated knowing that transcends the limitations of our understanding. For it is through the exploration of our innermost selves that we discover the true essence of our being, the inherent wisdom that lies dormant within us.</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="reviewCommentItem">
                                             <div class="reviewCommentItemInner">
                                                <div class="reviewCommentHead">
                                                   <div class="reviewCommentInnerProfile">
                                                      <div class="reviewCommentProfile">
                                                         <span>   
                                                            <img src="images/chef5.png" alt="profile" class="img-fluid">
                                                         </span>
                                                      </div>
                                                      <div class="reviewCommentProfNam">
                                                         <h6>Ethan</h6>
                                                         <span>March 10, 2024</span>
                                                      </div>
                                                   </div>
                                                   <div class="review5Star">
                                                      <div class="review5StarInner">
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);" class="inactive"><i class="fa-solid fa-star"></i></a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="reviewCommentTxt">
                                                   <p>The pursuit of excellence often entails confronting our deepest fears and overcoming the obstacles that stand in our way. It is a journey fraught with uncertainty and doubt, yet it is also one filled with endless possibilities and opportunities for growth. For it is through our struggles that we learn the true meaning of resilience, the power of perseverance in the face of adversity. And though the road may be long and arduous, it is ultimately our unwavering determination that propels us forward, guiding us towards the realization of our fullest potential.</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="reviewCommentItem">
                                             <div class="reviewCommentItemInner">
                                                <div class="reviewCommentHead">
                                                   <div class="reviewCommentInnerProfile">
                                                      <div class="reviewCommentProfile">
                                                         <span>   
                                                            <img src="images/chef9.png" alt="profile" class="img-fluid">
                                                         </span>
                                                      </div>
                                                      <div class="reviewCommentProfNam">
                                                         <h6>Sophia</h6>
                                                         <span>March 20, 2024</span>
                                                      </div>
                                                   </div>
                                                   <div class="review5Star">
                                                      <div class="review5StarInner">
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);" class="inactive"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);" class="inactive"><i class="fa-solid fa-star"></i></a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="reviewCommentTxt">
                                                   <p>Life is a journey filled with twists and turns, trials and tribulations. At times, it may seem as though we are navigating through a maze of challenges, each obstacle testing our resolve and pushing us to our limits. Yet, it is in these moments of uncertainty that we discover our true strength, our ability to persevere in the face of adversity. For it is not our successes that define us, but rather our ability to rise after each fall, to dust ourselves off and continue on the path towards our dreams.</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="reviewCommentItem">
                                             <div class="reviewCommentItemInner">
                                                <div class="reviewCommentHead">
                                                   <div class="reviewCommentInnerProfile">
                                                      <div class="reviewCommentProfile">
                                                         <span>   
                                                            <img src="images/chef4.png" alt="profile" class="img-fluid">
                                                         </span>
                                                      </div>
                                                      <div class="reviewCommentProfNam">
                                                         <h6>Alexander</h6>
                                                         <span>March 26, 2024</span>
                                                      </div>
                                                   </div>
                                                   <div class="review5Star">
                                                      <div class="review5StarInner">
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);" class="inactive"><i class="fa-solid fa-star"></i></a>
                                                         <a href="javascript:void(0);" class="inactive"><i class="fa-solid fa-star"></i></a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="reviewCommentTxt">
                                                   <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Customer Review End -->

      <!--Our Meal List Start-->
      <section class="w-100 clearfix ourMealList" id="ourMealList">
         <div class="container">
            <div class="commonHeading headingCenter">
               <h4>Related <span>Meals</span></h4>
               <p class="mb-0">The state-of-the art facility has automated machinery, is installed with rust-free
                  pipelines and faucets and uses only RO treated water.</p>
            </div>
            <div class="ourMealListInner">
               <!-- Our Meal List Card Start -->
               <div class="row">
                  <div class="col-md-6">
                     <div class="ourMealListItem">
                        <div class="ourMealListImg">
                           <a href="meal-single.html">
                              <img src="images/img36.png" alt="our-meal-list" class="img-fluid w-100">
                           </a>
                        </div>
                        <div class="ourMealListContent">
                           <div class="ourMealListHeading">
                              <h4><a href="meal-single.html">Hearty Vegetarian Thali</a></h4> <span>$ 3</span>
                           </div>
                           <div class="ourMealListPara">
                              <p>Paneer Chatpata / Dalfry / 5 Roti / Jeera Rice / Raita
                                 / 1 Sweet / Salad / Papad</p>
                           </div>
                           <div class="ourMealListButton">
                              <a href="check-out.html" class="btn btnPrimary addToCard">Add To Card</a>
                              <a href="javascript:void(0);" class="addToWishList"><i
                                    class="fa-regular fa-heart"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="ourMealListItem">
                        <div class="ourMealListImg">
                           <a href="meal-single.html">
                           <img src="images/img37.png" alt="our-meal-list" class="img-fluid w-100">
                           </a>
                        </div>
                        <div class="ourMealListContent">
                           <div class="ourMealListHeading">
                              <h4><a href="meal-single.html">Maharashtrian Food Thali</a></h4> <span>$ 6</span>
                           </div>
                           <div class="ourMealListPara">
                              <p>Paneer Chatpata / Dalfry / 5 Roti / Jeera Rice / Raita
                                 / 1 Sweet / Salad / Papad</p>
                           </div>
                           <div class="ourMealListButton">
                              <a href="check-out.html" class="btn btnPrimary addToCard">Add To Card</a>
                              <a href="javascript:void(0);" class="addToWishList"><i
                                    class="fa-regular fa-heart"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="ourMealListItem">
                        <div class="ourMealListImg">
                           <a href="meal-single.html">
                           <img src="images/img38.png" alt="our-meal-list" class="img-fluid w-100">
                           </a>
                        </div>
                        <div class="ourMealListContent">
                           <div class="ourMealListHeading">
                              <h4><a href="meal-single.html">Baahubali Thali</a></h4> <span>$ 5</span>
                           </div>
                           <div class="ourMealListPara">
                              <p>Paneer Chatpata / Dalfry / 5 Roti / Jeera Rice / Raita
                                 / 1 Sweet / Salad / Papad</p>
                           </div>
                           <div class="ourMealListButton">
                              <a href="check-out.html" class="btn btnPrimary addToCard">Add To Card</a>
                              <a href="javascript:void(0);" class="addToWishList"><i
                                    class="fa-regular fa-heart"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="ourMealListItem">
                        <div class="ourMealListImg">
                           <a href="meal-single.html">
                           <img src="images/img39.png" alt="our-meal-list" class="img-fluid w-100">
                           </a>
                        </div>
                        <div class="ourMealListContent">
                           <div class="ourMealListHeading">
                              <h4><a href="meal-single.html">Simple Veg Thali Recipe</a></h4> <span>$ 15</span>
                           </div>
                           <div class="ourMealListPara">
                              <p>Paneer Chatpata / Dalfry / 5 Roti / Jeera Rice / Raita
                                 / 1 Sweet / Salad / Papad</p>
                           </div>
                           <div class="ourMealListButton">
                              <a href="check-out.html" class="btn btnPrimary addToCard">Add To Card</a>
                              <a href="javascript:void(0);" class="addToWishList"><i
                                    class="fa-regular fa-heart"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="ourMealListItem">
                        <div class="ourMealListImg">
                           <a href="meal-single.html">
                           <img src="images/img40.png" alt="our-meal-list" class="img-fluid w-100">
                           </a>
                        </div>
                        <div class="ourMealListContent">
                           <div class="ourMealListHeading">
                              <h4><a href="meal-single.html">North Indian Veg Thali</a></h4> <span>$ 50</span>
                           </div>
                           <div class="ourMealListPara">
                              <p>Paneer Chatpata / Dalfry / 5 Roti / Jeera Rice / Raita
                                 / 1 Sweet / Salad / Papad</p>
                           </div>
                           <div class="ourMealListButton">
                              <a href="check-out.html" class="btn btnPrimary addToCard">Add To Card</a>
                              <a href="javascript:void(0);" class="addToWishList"><i
                                    class="fa-regular fa-heart"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="ourMealListItem">
                        <div class="ourMealListImg">
                           <a href="meal-single.html">
                           <img src="images/img41.png" alt="our-meal-list" class="img-fluid w-100">
                           </a>
                        </div>
                        <div class="ourMealListContent">
                           <div class="ourMealListHeading">
                              <h4><a href="meal-single.html">Unique Thali</a></h4> <span>$ 25</span>
                           </div>
                           <div class="ourMealListPara">
                              <p>Paneer Chatpata / Dalfry / 5 Roti / Jeera Rice / Raita
                                 / 1 Sweet / Salad / Papad</p>
                           </div>
                           <div class="ourMealListButton">
                              <a href="check-out.html" class="btn btnPrimary addToCard">Add To Card</a>
                              <a href="javascript:void(0);" class="addToWishList"><i
                                    class="fa-regular fa-heart"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Our Meal List Card End -->
               <!-- Pagination Start -->
               <div class="btnContainer">
                  <a href="our-meal-list.html" class="btn btnSecondary">View All</a>
               </div>
               <!-- Pagination End -->
            </div>
         </div>
      </section>
      <!--Our Meal List End-->

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
   <script src="js/grt-youtube-popup.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>


<!-- Mirrored from webstrot.com/html/lunchbox/lunchbox/meal-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 17:47:21 GMT -->
</html>