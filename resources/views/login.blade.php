<!DOCTYPE html>

<html>



<head>
   <meta charset="utf-8">
   <title>Lunch Box - Login</title>
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

      <!--Login Start-->
      <section class="w-100 clearfix loginSec" id="loginSec">
         <div class="loginSecContainer">
            <div class="loginSecInner">
               <div class="loginSecDotsNav">
                  <a href="home1.html" class="backBtn d-block text-center">
                     <svg xmlns="http://www.w3.org/2000/svg" width="35" height="16" viewBox="0 0 35 16" fill="none">
                        <path d="M34 8L1 8L8.07143 15M8.07143 1L1 8" stroke="#999999" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </a>
                  <div class="loginDotsNavInner">
                     <a href="/Login" class="active"></a>
                     <a href="/SignUp"></a>
                  </div>
               </div>
               <div class="loginForm">
                  <div class="loginFormOuter">
                     <div class="loginFormInner">
                        <div class="signinLogo">
                           <a href="home1.html">
                              <img src="images/footer-logo.png" alt="footer-logo" class="img-fluid">
                           </a>
                        </div>
                        <div class="loginSignupHeading">
                           <h2>Login</h2>
                        </div>
                        <form action="login.php" method="POST">
                           <div class="loginGroup">
                              <label for="emailAddress" class="form-label">Email Address</label>
                              <input type="email" class="form-control" id="emailAddress" placeholder="Email Address"
                                 name="emailAddress" required>
                           </div>
                           <div class="loginGroup">
                              <label for="password" class="form-label">Password</label>
                              <div class="input-group">
                                 <input type="password" class="form-control" id="passwordField"
                                    placeholder="Password" name="password">
                                 <span class="inputGroupText passwordShow">
                                    <i class="fa-regular fa-eye field-icon togglePassword"
                                       toggle="#passwordField"></i>
                                 </span>
                              </div>
                              <div class="formRememberGroup">
                                 <div class="form-check">
                                    <label class="form-check-label">
                                       <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                    </label>
                                 </div>
                                 <div class="forgotPasswordLink">
                                    <a href="javascript:void(0);" class="forgotPassword">Forgot Password</a>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn loginSignupBtn" name="login">Login</button>

                        </form>

                        <p>Don't have an account? <a href="/SignUp">Sign Up</a></p>
                     </div>
                     <div class="loginFormImg">
                        <img src="images/login.png" alt="login" class="img-fluid">
                     </div>
                  </div>
               </div>
               <div class="loginTab">
                  <a href="/SignUp">
                     <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                        <path
                           d="M8.28655 50.4999C12.1437 41.7142 20.7151 35.4999 31.0008 35.4999C41.2866 35.4999 50.0723 41.7142 53.7151 50.4999M61 31C61 47.5685 47.5685 61 31 61C14.4315 61 1 47.5685 1 31C1 14.4315 14.4315 1 31 1C47.5685 1 61 14.4315 61 31ZM41.7143 24.5714C41.7143 30.4888 36.9173 35.2857 31 35.2857C25.0827 35.2857 20.2857 30.4888 20.2857 24.5714C20.2857 18.6541 25.0827 13.8571 31 13.8571C36.9173 13.8571 41.7143 18.6541 41.7143 24.5714Z"
                           stroke="#999999" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                           stroke-linejoin="round" />
                     </svg>
                     <span>Sign Up</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!--Login End-->

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

</html>