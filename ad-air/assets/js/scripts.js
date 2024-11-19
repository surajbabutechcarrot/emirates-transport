jQuery(document).ready(function () {  

    //animation
    AOS.init({
      disable: function () {
        var maxWidth = 1200;
        return window.innerWidth < maxWidth;
      },
      delay: 100,
      duration: 1200
    });
  
    setTimeout(() => {AOS.refresh();}, 100);

    // Calculate the max date for 18 years old
  const today = new Date();
  const maxDate = new Date(today.getFullYear() - 16, today.getMonth(), today.getDate())
                  .toISOString().split("T")[0];
  
  // Set the max attribute to the input field
  document.getElementById("00NUE000001L16z").setAttribute("max", maxDate);

    //scroll header
    jQuery(window).scroll(function () {
      if (jQuery(window).scrollTop() > 50) {
        jQuery('#header').addClass('header-scrolled');
      } else {
        jQuery('#header').removeClass('header-scrolled');
      }
      if (jQuery(window).scrollTop() > 500) {
        jQuery(".scroll-to-top").addClass('scroll-to-top-active');
      } else {
        jQuery(".scroll-to-top").removeClass('scroll-to-top-active');
      }
      
    });

    
    jQuery(".scroll-to-top").click(function (event) {
      event.preventDefault();
      jQuery('html, body').animate({ scrollTop: 0 }, 'fast');
    }); 
  
  
  
    if(window.location.hash) {
      var loc = window.location.hash;
      jQuery('html, body').animate({
        scrollTop: jQuery(loc).offset().top-130
      }, 100);
    }
  
  
  
    //Telephone number validation
      jQuery('input#phone').on("keypress keyup blur", function (event) {
        jQuery(this).val(jQuery(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
        event.preventDefault();
        }
    });

    jQuery('input#phone').keyup(validateMaxLength);
    function validateMaxLength(){
        var text = jQuery(this).val();
        if(12 > 0) {
          jQuery(this).val(text.substr(0, 12)); 
        }
    }
  
    //Telephone number disable first zero input
    /* jQuery('.wpcf7 input[type="tel"]').on("keypress keyup blur", function (event) {
      if(jQuery(this).val().match(/^0/)){
        jQuery(this).val('');
        return false;
      }
    });  */
    var poly_current_language = "en";
    if(poly_current_language == "ar"){
      jQuery('.marquee').marquee({
        allowCss3Support: true,
        css3easing: 'linear',
        easing: 'linear',
        delayBeforeStart: 0,
        direction: 'right',
        duplicated: true,
        duration: 10000,
        gap: 50,
        pauseOnCycle: false,
        pauseOnHover: false,
        startVisible: true
      });
    }else{
      jQuery('.marquee').marquee({
        allowCss3Support: true,
        css3easing: 'linear',
        easing: 'linear',
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true,
        duration: 10000,
        gap: 50,
        pauseOnCycle: false,
        pauseOnHover: false,
        startVisible: true
      });
    }
    

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
    var lead = getUrlParameter('lead');
    if (lead === "success") {
      var loc = ".contact-section-outer";
      
      // Scroll to the location
      jQuery('html, body').animate({
        scrollTop: jQuery(loc).offset().top - 130
      }, 1000);
      
      // Add the 'active' class to .contact-section-outer
      jQuery(loc).addClass('active');
    }

  
  });
  
  
  jQuery(window).bind("load", function () {
   
  });
  


  window.addEventListener("DOMContentLoaded", () => {
    const banner = document.querySelector(".banner");
    const bg = document.querySelector(".banner .bg");
  
    // Ensure elements are present
    if (banner && bg) {
      // Add event listener to detect when animation is complete
      bg.addEventListener("animationend", () => {
        banner.classList.add("active");
      });
    } else {
      console.error("Elements .banner or .banner .bg not found");
    }
  });
  
  