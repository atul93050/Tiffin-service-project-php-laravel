<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Lunch Box - Signup</title>
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

      <!--Signup Start-->
      <section class="w-100 clearfix signupSec" id="signupSec">
         <div class="signupSecContainer">
            <div class="signupSecInner">
               <div class="signupSecDotsNav">
                  <a href="home1.html" class="backBtn d-block text-center">
                     <svg xmlns="http://www.w3.org/2000/svg" width="35" height="16" viewBox="0 0 35 16" fill="none">
                        <path d="M34 8L1 8L8.07143 15M8.07143 1L1 8" stroke="#999999" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </a>
                  <div class="signupDotsNavInner">
                     <a href="/Login"></a>
                     <a href="/SignUp" class="active"></a>
                  </div>
               </div>
               <div class="signupTab">
                  <a href="/Login">
                     <svg xmlns="http://www.w3.org/2000/svg" width="68" height="62" viewBox="0 0 68 62" fill="none">
                        <path
                           d="M8.28655 50.4999C12.1437 41.7142 20.7151 35.4999 31.0008 35.4999C41.2866 35.4999 50.0723 41.7142 53.7151 50.4999M61 31C61 47.5685 47.5685 61 31 61C14.4315 61 1 47.5685 1 31C1 14.4315 14.4315 1 31 1C47.5685 1 61 14.4315 61 31ZM41.7143 24.5714C41.7143 30.4888 36.9173 35.2857 31 35.2857C25.0827 35.2857 20.2857 30.4888 20.2857 24.5714C20.2857 18.6541 25.0827 13.8571 31 13.8571C36.9173 13.8571 41.7143 18.6541 41.7143 24.5714Z"
                           stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M56.5 40C58.9 26.4 57.1667 22 52 19H62.5C70.9 25 65.6667 31.1667 65.5 40H56.5Z"
                           fill="#FFA31E" />
                        <path
                           d="M52.5 29.5C52.5 29.3159 52.6492 29.1667 52.8333 29.1667H58.1667V29.8333H52.8333C52.6492 29.8333 52.5 29.6841 52.5 29.5ZM59.1667 29.8333V29.1667H59.8333V29.8333H59.1667ZM59.8333 28.1667H59.1667V22.8333C59.1667 22.6492 59.3159 22.5 59.5 22.5C59.6841 22.5 59.8333 22.6492 59.8333 22.8333V28.1667ZM60.8333 29.8333V29.1667H66.1667C66.3508 29.1667 66.5 29.3159 66.5 29.5C66.5 29.6841 66.3508 29.8333 66.1667 29.8333H60.8333ZM59.1667 30.8333H59.8333V36.1667C59.8333 36.3508 59.6841 36.5 59.5 36.5C59.3159 36.5 59.1667 36.3508 59.1667 36.1667V30.8333Z"
                           fill="#999999" stroke="white" />
                     </svg>
                     <span>Login</span>
                  </a>
               </div>
               <div class="signupForm">
                  <div class="signupFormOuter">
                     <div class="signupFormInner">
                        <div class="signupLogo">
                           <a href="home1.html">
                              <img src="images/footer-logo.png" alt="footer-logo" class="img-fluid">
                           </a>
                        </div>
                        <div class="signupSignupHeading">
                           <h2>Sign Up</h2>
                        </div>

                        <form method="post" action="sign-up.php">
                           <div class="groupField">
                              <div class="signupGroup">
                                 <label for="firstName" class="form-label">First Name</label>
                                 <input type="text" class="form-control" id="firstName" placeholder="First Name"
                                    name="firstName" required>
                              </div>
                              <div class="signupGroup">
                                 <label for="lastName" class="form-label">Last Name</label>
                                 <input type="text" class="form-control" id="lastName" placeholder="Last Name"
                                    name="lastName" required>
                              </div>
                           </div>
                           <div class="signupGroup">
                              <label for="emailAddress" class="form-label">Email Address</label>
                              <input type="email" class="form-control" id="emailAddress" placeholder="Email Address"
                                 name="emailAddress" required>
                           </div>
                           <div class="signupGroup">
                              <label for="Phone" class="form-label">Phone No.</label>
                              <input type="tel" class="form-control" id="phone" placeholder="Phone No..."
                                 name="phone" required>
                           </div>
                           <div class="signupGroup">
                              <label for="password" class="form-label">Password</label>
                              <div class="input-group">
                                 <input type="password" class="form-control" id="passwordField" placeholder="Password"
                                    name="password">
                                 <span class="inputGroupText passwordShow">
                                    <i class="fa-regular fa-eye field-icon togglePassword" toggle="#passwordField"></i>
                                 </span>
                              </div>
                           </div>
                           <div class="signupGroup">
                              <label for="Cpassword" class="form-label">Confirm Password</label>
                              <div class="input-group">
                                 <input type="password" class="form-control" id="passwordField" placeholder="Confirm Password"
                                    name="Cpassword">
                                 <span class="inputGroupText passwordShow">
                                    <i class="fa-regular fa-eye field-icon togglePassword" toggle="#passwordField"></i>
                                 </span>
                              </div>
                           </div>
                           <button type="submit" class="btn signupSignupBtn">Sign Up</button>
                        </form>

                        <p>Already have an account? <a href="/Login">Login</a></p>
                     </div>
                     <div class="signupFormImg">
                        <img src="images/signup.png" alt="signup" class="img-fluid">
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!--Signup End-->
   </main>
   <script src="js/jquery-3.6.4.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/fancybox.min.js"></script>
   <script src="js/anime.min.js"></script>
   <script src="js/grt-youtube-popup.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>

   <script>
      $(".togglePassword").click(function() {

         $(this).toggleClass("fa-eye-slash fa-eye");
         var input = $($(this).attr("toggle"));
         if (input.attr("type") == "password") {
            input.attr("type", "text");
         } else {
            input.attr("type", "password");
         }
      });
   </script>
</body>


<!-- Mirrored from webstrot.com/html/lunchbox/lunchbox/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 17:47:03 GMT -->

</html>