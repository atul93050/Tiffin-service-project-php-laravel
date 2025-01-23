<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Lunch Box - Check Out</title>
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

      <!--Our Chef Start-->
      <section class="w-100 clearfix lbCheckOut" id="lbCheckOut">
         <div class="container">
            <div class="lbCheckOutInner">
               <form>
                  <div class="lbCheckOutHeading">
                     <h5>Your Order</h5>
                  </div>
                  <div class="lbCheckOutBox">
                     <div class="row">
                        <div class="col-md-12 col-xl-6">
                           <div class="lbCheckOutTbl">
                              <div class="lbCheckOutTblInner">
                                 <div class="lbCheckOutDetail">
                                    <div class="lbCheckOutImg">
                                       <img src="images/cart-img1.png" alt="card-img" class="img-fluid">
                                    </div>
                                    <div class="lbCheckOutTxt">
                                       <h5>Regular Thali</h5>
                                       <p class="mb-0">Paneer Chatpata / Dalfry / 5 Roti / Jeera Rice / Raita / 1 Sweet
                                          /
                                          Salad / Papad ets.</p>
                                       <a href="javascrit:void(0);" class="lbProductRemove">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21"
                                             viewBox="0 0 19 21" fill="none">
                                             <path
                                                d="M17.7274 3.24084H13.9029V0.711752C13.9029 0.522983 13.8279 0.341946 13.6944 0.208467C13.5609 0.0749878 13.3799 0 13.1911 0H5.24798C5.05921 0 4.87818 0.0749878 4.7447 0.208467C4.61122 0.341946 4.53623 0.522983 4.53623 0.711752V3.24084H0.711752C0.522983 3.24084 0.341947 3.31583 0.208468 3.44931C0.0749883 3.58279 0 3.76383 0 3.95259C0 4.14136 0.0749883 4.3224 0.208468 4.45588C0.341947 4.58936 0.522983 4.66435 0.711752 4.66435H1.62754V17.7938C1.6288 18.4839 1.90381 19.1452 2.3922 19.6327C2.8806 20.1203 3.54248 20.3941 4.23255 20.3941H14.2445C14.928 20.3841 15.5802 20.1059 16.0604 19.6195C16.5406 19.133 16.8104 18.4773 16.8116 17.7938V4.66435H17.7084C17.8972 4.66686 18.0792 4.59429 18.2144 4.46259C18.3497 4.33089 18.4271 4.15085 18.4296 3.96208C18.4321 3.77332 18.3596 3.59128 18.2279 3.45602C18.0962 3.32076 17.9161 3.24336 17.7274 3.24084ZM5.95973 1.4235H12.4794V3.24084H5.95973V1.4235ZM15.3881 17.7938C15.3868 18.1063 15.2618 18.4056 15.0403 18.6262C14.8189 18.8467 14.5191 18.9706 14.2066 18.9706H4.21357C3.90434 18.9656 3.60938 18.8396 3.39202 18.6196C3.17467 18.3995 3.05224 18.1031 3.05104 17.7938V4.66435H15.3881V17.7938Z"
                                                fill="#FFA31E" />
                                             <path
                                                d="M7.32113 7.29309C7.13236 7.29309 6.95132 7.36808 6.81784 7.50156C6.68436 7.63504 6.60938 7.81607 6.60938 8.00484V15.6396C6.60937 15.8283 6.68436 16.0094 6.81784 16.1428C6.95132 16.2763 7.13236 16.3513 7.32113 16.3513C7.50989 16.3513 7.69093 16.2763 7.82441 16.1428C7.95789 16.0094 8.03288 15.8283 8.03288 15.6396V8.00484C8.03288 7.81607 7.95789 7.63504 7.82441 7.50156C7.69093 7.36808 7.50989 7.29309 7.32113 7.29309Z"
                                                fill="#FFA31E" />
                                             <path
                                                d="M11.117 7.29309C10.9283 7.29309 10.7472 7.36808 10.6137 7.50156C10.4803 7.63504 10.4053 7.81607 10.4053 8.00484V15.6396C10.4053 15.8283 10.4803 16.0094 10.6137 16.1428C10.7472 16.2763 10.9283 16.3513 11.117 16.3513C11.3058 16.3513 11.4868 16.2763 11.6203 16.1428C11.7538 16.0094 11.8288 15.8283 11.8288 15.6396V8.00484C11.8288 7.81607 11.7538 7.63504 11.6203 7.50156C11.4868 7.36808 11.3058 7.29309 11.117 7.29309Z"
                                                fill="#FFA31E" />
                                          </svg>
                                          <span>Remove Product</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="lbCheckOutQuantity">
                                    <span>2 Item</span>
                                 </div>
                                 <div class="lbCheckOutPrice">
                                    <span>$ 5.49</span>
                                 </div>
                              </div>
                              <div class="lbCheckOutTblInner">
                                 <div class="lbCheckOutDetail">
                                    <div class="lbCheckOutImg">
                                       <img src="images/cart-img1.png" alt="card-img" class="img-fluid">
                                    </div>
                                    <div class="lbCheckOutTxt">
                                       <h5>Customer Choice</h5>
                                       <p class="mb-0">Paneer Chatpata / Dalfry / 5 Roti / Jeera Rice / Raita / 1 Sweet
                                          /
                                          Salad / Papad ets.</p>
                                       <a href="javascrit:void(0);" class="lbProductRemove">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21"
                                             viewBox="0 0 19 21" fill="none">
                                             <path
                                                d="M17.7274 3.24084H13.9029V0.711752C13.9029 0.522983 13.8279 0.341946 13.6944 0.208467C13.5609 0.0749878 13.3799 0 13.1911 0H5.24798C5.05921 0 4.87818 0.0749878 4.7447 0.208467C4.61122 0.341946 4.53623 0.522983 4.53623 0.711752V3.24084H0.711752C0.522983 3.24084 0.341947 3.31583 0.208468 3.44931C0.0749883 3.58279 0 3.76383 0 3.95259C0 4.14136 0.0749883 4.3224 0.208468 4.45588C0.341947 4.58936 0.522983 4.66435 0.711752 4.66435H1.62754V17.7938C1.6288 18.4839 1.90381 19.1452 2.3922 19.6327C2.8806 20.1203 3.54248 20.3941 4.23255 20.3941H14.2445C14.928 20.3841 15.5802 20.1059 16.0604 19.6195C16.5406 19.133 16.8104 18.4773 16.8116 17.7938V4.66435H17.7084C17.8972 4.66686 18.0792 4.59429 18.2144 4.46259C18.3497 4.33089 18.4271 4.15085 18.4296 3.96208C18.4321 3.77332 18.3596 3.59128 18.2279 3.45602C18.0962 3.32076 17.9161 3.24336 17.7274 3.24084ZM5.95973 1.4235H12.4794V3.24084H5.95973V1.4235ZM15.3881 17.7938C15.3868 18.1063 15.2618 18.4056 15.0403 18.6262C14.8189 18.8467 14.5191 18.9706 14.2066 18.9706H4.21357C3.90434 18.9656 3.60938 18.8396 3.39202 18.6196C3.17467 18.3995 3.05224 18.1031 3.05104 17.7938V4.66435H15.3881V17.7938Z"
                                                fill="#FFA31E" />
                                             <path
                                                d="M7.32113 7.29309C7.13236 7.29309 6.95132 7.36808 6.81784 7.50156C6.68436 7.63504 6.60938 7.81607 6.60938 8.00484V15.6396C6.60937 15.8283 6.68436 16.0094 6.81784 16.1428C6.95132 16.2763 7.13236 16.3513 7.32113 16.3513C7.50989 16.3513 7.69093 16.2763 7.82441 16.1428C7.95789 16.0094 8.03288 15.8283 8.03288 15.6396V8.00484C8.03288 7.81607 7.95789 7.63504 7.82441 7.50156C7.69093 7.36808 7.50989 7.29309 7.32113 7.29309Z"
                                                fill="#FFA31E" />
                                             <path
                                                d="M11.117 7.29309C10.9283 7.29309 10.7472 7.36808 10.6137 7.50156C10.4803 7.63504 10.4053 7.81607 10.4053 8.00484V15.6396C10.4053 15.8283 10.4803 16.0094 10.6137 16.1428C10.7472 16.2763 10.9283 16.3513 11.117 16.3513C11.3058 16.3513 11.4868 16.2763 11.6203 16.1428C11.7538 16.0094 11.8288 15.8283 11.8288 15.6396V8.00484C11.8288 7.81607 11.7538 7.63504 11.6203 7.50156C11.4868 7.36808 11.3058 7.29309 11.117 7.29309Z"
                                                fill="#FFA31E" />
                                          </svg>
                                          <span>Remove Product</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="lbCheckOutQuantity">
                                    <span>2 Item</span>
                                 </div>
                                 <div class="lbCheckOutPrice">
                                    <span>$ 4.89</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-xl-6">
                           <div class="lbCheckOutDetail">
                              <div class="pormoCode">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pormo Code">
                                    <button type="submit" class="input-group-text">Check Code</button>
                                 </div>
                              </div>
                              <div class="lbProductsPriceTbl">
                                 <table class="table">
                                    <tbody>
                                       <tr>
                                          <td>Cart Total</td>
                                          <td><strong>$5.49</strong></td>
                                       </tr>
                                       <tr>
                                          <td>Delivery</td>
                                          <td><strong>Free</strong></td>
                                       </tr>
                                       <tr>
                                          <td><span>Total</span></td>
                                          <td><strong>$5.49</strong></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="lbCheckOutFormDetail">
                     <div class="row">
                        <div class="col-md-12 col-lg-8">
                           <div class="lbCheckOutHeading">
                              <h5>Your Info.</h5>
                           </div>
                           <div class="lbCheckOutForm">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="FirstName" placeholder="First Name"
                                          name="FirstName">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="LastName" placeholder="Last Name"
                                          name="LastName">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="EmailAddress"
                                          placeholder="Email Address" name="EmailAddress">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="Phone" placeholder="Phone"
                                          name="Phone">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="Country" placeholder="Country"
                                          name="Country">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="ZipCode" placeholder="Zip Code"
                                          name="Zip Code">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="City" placeholder="City" name="City">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="Street" placeholder="Street"
                                          name="Street">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="HouseNumber"
                                          placeholder="House Number" name="House Number">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="lbFormGroup">
                                       <input type="text" class="form-control" id="FlatNumber" placeholder="Flat Number"
                                          name="Flat Number">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="lbFormGroup">
                                       <textarea class="form-control" rows="5" id="Message" placeholder="Message"
                                          name="Message"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                              <div class="lbCheckOutHeading">
                                 <h5>Payment Info.</h5>
                              </div>
                              <div class="lbPaymentInfo">
                              <div class="lbCheckOutPayment mb-0">
                                 <div class="custom_radio">
                                    <label class="form-label">Payment Method:</label>
                                    <div class="formLabel">
                                       <input type="radio" id="featured-1" name="payment" checked><label for="featured-1">
                                          <span class="ratioIcon">
                                             <img src="images/icon/credit.png" alt="icon" class="img-fluid">
                                          </span>
                                          Credit Card</label>
                                    </div>
                                    <div class="formLabel">
                                       <input type="radio" id="featured-2" name="payment"><label for="featured-2">
                                          <span class="ratioIcon">
                                             <img src="images/icon/paypal.png" alt="icon" class="img-fluid">
                                          </span>
                                          Paypal</label>
                                    </div>
                                    <div class="formLabel">
                                       <input type="radio" id="featured-2" name="payment"><label for="featured-2">
                                          <span class="ratioIcon">
                                             <img src="images/icon/paytm.png" alt="icon" class="img-fluid">
                                          </span>
                                          Paytm UPI</label>
                                    </div>
                                    <div class="formLabel">
                                       <input type="radio" id="featured-2" name="payment"><label for="featured-2">
                                          <span class="ratioIcon">
                                             <img src="images/icon/phonepe.png" alt="icon" class="img-fluid">
                                          </span>
                                          PhonePe UPI</label>
                                    </div>
                                    <div class="formLabel">
                                       <input type="radio" id="featured-2" name="payment"><label for="featured-2">
                                          <span class="ratioIcon">
                                             <img src="images/icon/paypal.png" alt="icon" class="img-fluid">
                                          </span>
                                          UPI</label>
                                    </div>
                                    <div class="yourInfoBtn">
                                       <div class="yourInfoBtnGroup">
                                          <button type="submit" class="btn btnPrimary">Pay Now</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--Our Chef End-->


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


<!-- Mirrored from webstrot.com/html/lunchbox/lunchbox/check-out.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 17:47:22 GMT -->
</html>