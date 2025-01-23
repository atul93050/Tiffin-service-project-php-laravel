// Template Name: Logistic
// Version: 1.0.0
// Author: Webstrot 

// Preloader js
$(window).on('load', function () {
    $("#status").fadeOut();
    $("#preloader").delay(450).fadeOut("slow");
});

$(document).ready(function () {
  const header = $(".logisticHeader");
  const toggleClass = "headerActive";

  // Check if there's a saved scroll position in localStorage
  const savedScrollPosition = localStorage.getItem("scrollPosition");

  if (savedScrollPosition && parseInt(savedScrollPosition) > 150) {
      header.addClass(toggleClass);
  }

  $(window).scroll(function () {
      const currentScroll = $(window).scrollTop();
      if (currentScroll > 150) {
          header.addClass(toggleClass);
      } else {
          header.removeClass(toggleClass);
      }

      // Save the current scroll position in localStorage
      localStorage.setItem("scrollPosition", currentScroll.toString());
  });
});

$(document).ready(function($) {
  // When the window resizes
    var headerHeight = $('.logisticHeader').outerHeight();
    var newHeight = headerHeight + 100;
    $('.logisticBannerSliderSec').css('padding-top', headerHeight); 
    $('.logisticBannerShipInner').css('padding-top', newHeight + 'px');
});



// Outer height js
$(document).ready(function ($) {
    // Function to be executed on document ready and window resize
    function adjustOnResize() {
      var windowWidth = $(window).width();
  
      if (windowWidth <= 1199) {
        var topHeaderHeight = $('.header').outerHeight();
        $('.header #collapsibleNavbar').css('top', topHeaderHeight);
        var newHeight = 'calc(100vh - ' + topHeaderHeight + 'px)';
        $('.header #collapsibleNavbar').css('height', newHeight);
        $('.lunchboxSidebar').css('top', topHeaderHeight);
        var newHeight = 'calc(100vh - ' + topHeaderHeight + 'px)';
        $('.lunchboxSidebar').css('height', newHeight);
      } else {
        // Reset styles if window width is greater than 1199 pixels
        $('.header #collapsibleNavbar').css('top', '');
        $('.header #collapsibleNavbar').css('height', '');
        $('.lunchboxSidebar').css('top', '');
        $('.lunchboxSidebar').css('height', '');
      }
    }
  
    // Initial adjustment on document ready
    adjustOnResize();
  
    // Bind adjustOnResize function to the window resize event
    $(window).resize(function () {
      adjustOnResize();
    });
  });


  // Header Scroll js
$(document).ready(function () {
    const header = $(".header");
    const toggleClass = "headerActive";
  
    // Check if there's a saved scroll position in localStorage
    const savedScrollPosition = localStorage.getItem("scrollPosition");
  
    if (savedScrollPosition && parseInt(savedScrollPosition) > 150) {
      header.addClass(toggleClass);
    }
  
    $(window).scroll(function () {
      const currentScroll = $(window).scrollTop();
      if (currentScroll > 150) {
        header.addClass(toggleClass);
      } else {
        header.removeClass(toggleClass);
      }
  
      // Save the current scroll position in localStorage
      localStorage.setItem("scrollPosition", currentScroll.toString());
    });
  });


  // Mouse Animation 
document.addEventListener("mousemove", parallax);
function parallax(e) {
  document.querySelectorAll(".movingjs").forEach(function (move) {
    var moving_value = move.getAttribute("data-value");

    var x = (e.clientX * moving_value) / 250;
    var y = (e.clientY * moving_value) / 250;

    move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
  });
}

