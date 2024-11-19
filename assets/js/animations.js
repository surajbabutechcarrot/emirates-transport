// const lenis = new Lenis({
//     duration: 1.2,
//     easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
//     smooth: true,
//     smoothTouch: false,
//     touchMultiplier: 2,
//   });

//   function raf(time) {
//     lenis.raf(time);
//     requestAnimationFrame(raf);
//   }

//   requestAnimationFrame(raf);

// Animation for "header .round-logo"
// Initial movement and fade-in
gsap.fromTo("header .round-logo", 
    { x: 0, opacity: 0 },
    { x: 0, opacity: 1, duration: 0.5, delay: 0.2, onComplete: rotateLogo }
);

// Function to perform a single rotation
function rotateLogo() {
    gsap.to("header .round-logo", {  
        rotation: 360,
        duration: 1,  // Set the duration for the rotation
        ease: "power1.inOut" // Smoother easing for a single rotation
    });
}



// Animation for "header .logo-text"
gsap.from("header .logo-text", {
    x: 0,            // Start from an offset position
    opacity: 0,        // Start with opacity 0 to fade in
    duration: 0.5,     // Increased duration for smoother animation
    delay: 1,        // Delayed start to begin after .round-logo animation
    width: 0,          // Start with width 0 for expansion effect
    onComplete: function () {
        gsap.to("header .logo-text", {  
            opacity: 1,
            duration: 0.5,  // Duration for the complete animation
            width: 120,     // Expand to width of 120
            x: 0
        });
    }
});
 




gsap.from("header .main-nav ul", {
    y: -5,
    opacity: 0,
    duration: 0.6,
    delay: 1.6,
    stagger: 0.2,
    onComplete: function () {
        gsap.to(".home-header .main-nav", {
            opacity: 1,
            duration: 0.2,
            y: 0
        });
    }
});
gsap.from(".banner", {
    y: -5,
    opacity: 0,
    duration: 0.2,
    delay: 2,
    stagger: 0.2,
    onComplete: function () {
        gsap.to(".banner", {
            opacity: 1,
            duration: 0.2,
            y: 0
        });
    }
});
gsap.from(".banner h6", {
    y: 20,
    opacity: 0,
    duration: 0.6,
    delay: 2,
    stagger: 0.2,
    onComplete: function () {
        gsap.to(".banner", {
            opacity: 1,
            duration: 0.2,
            y: 0
        });
    }
});
gsap.from(".banner h1", {
    y: 20,
    opacity: 0,
    duration: 0.6,
    delay: 1,
    stagger: 0.2,
    onComplete: function () {
        gsap.to(".banner", {
            opacity: 1,
            duration: 0.2,
            y: 0
        });
    }
});
gsap.from(".banner .play", {
    y: 20,
    opacity: 0,
    duration: 0.6,
    delay: 1.2,
    stagger: 0.2,
    onComplete: function () {
        gsap.to(".banner", {
            opacity: 1,
            duration: 0.2,
            y: 0
        });
    }
});
gsap.from(".banner .round", {
    y: 20,
    opacity: 0,
    duration: 1,
    scale: 0.1,
    rotate: 160, // Add rotation (360 degrees)
    delay: 2,
    stagger: 0.2,
    onComplete: function () {
      gsap.to(".banner", {
        opacity: 1,
        scale: 1,
        duration: 1,
        y: 0,
        rotate: 0 // Rotate back to 0 if needed
      });
    }
  });

  gsap.from(".about *", {
    y: 20,
    opacity: 0,
    duration: 0.2, // Faster duration for .box elements
    delay: 0,
    stagger: 0.05, // Increased speed for .box elements
    scrollTrigger: {
        trigger: ".about",
        start: "top 50%", // Ensure it triggers at the same time
        toggleActions: "play none none none",
    },
    onComplete: function () {
        // Fade in and reset position for .box elements
        gsap.to(".about *", {
            opacity: 1,
            duration: 0.1,
            delay: 0.6,
            y: 0
        });
    }
});

gsap.fromTo(".about picture img", 
    { opacity: 1, scale:1.1 }, // Initial state
    { 
        opacity: 1, 
        scale: 0.9, // Final scale value
        duration: 0.4,
        scrollTrigger: {
            trigger: ".about",
            start: "top 99%",   // Trigger the animation when .about is halfway in view
            end: "bottom top",  // End the animation when .about scrolls out of view
            scrub: true,        // Allows the scale effect to be tied to scroll
            toggleActions: "play none none none",
        },
        ease: "power1.inOut"
    }
);
gsap.registerPlugin(ScrollTrigger);

// Select the picture tag
const pictureElement = document.querySelector(".about picture");

// Create a ScrollTrigger
ScrollTrigger.create({
    trigger: pictureElement, // Element that triggers the animation
    start: "top 64%", // Start the trigger when the top of the element hits the center of the viewport
    onEnter: () => {
        pictureElement.classList.add("active"); // Add the active class
    }
    // onLeaveBack: () => {
    //     pictureElement.classList.remove("active"); // Remove the active class when scrolling back up
    // },
});



gsap.from(".services *", {
    y: 20,
    opacity: 0,
    duration: 0.2, // Faster duration for .box elements
    delay: 0,
    stagger: 0.03, // Increased speed for .box elements
    scrollTrigger: {
        trigger: ".services",
        start: "top 50%", // Ensure it triggers at the same time
        toggleActions: "play none none none",
    },
    onComplete: function () {
        // Fade in and reset position for .box elements
        gsap.to(".services *", {
            opacity: 1,
            duration: 0.1,
            delay: 0.6,
            y: 0
        });
    }
});
gsap.fromTo(".services .right img", 
    { opacity: 1, scale:1.25 }, // Initial state
    { 
        opacity: 1, 
        scale: 1, // Final scale value
        duration: 0.4,
        scrollTrigger: {
            trigger: ".services .right img",
            start: "top 99%",   // Trigger the animation when .about is halfway in view
            end: "bottom top",  // End the animation when .about scrolls out of view
            scrub: true,        // Allows the scale effect to be tied to scroll
            toggleActions: "play none none none",
        },
        ease: "power1.inOut"
    }
);

gsap.from(".news *", {
    y: 20,
    opacity: 0,
    duration: 0.2, // Faster duration for .box elements
    delay: 0,
    stagger: 0.03, // Increased speed for .box elements
    scrollTrigger: {
        trigger: ".news",
        start: "top 50%", // Ensure it triggers at the same time
        toggleActions: "play none none none",
    },
    onComplete: function () {
        // Fade in and reset position for .box elements
        gsap.to(".news *", {
            opacity: 1,
            duration: 0.1,
            delay: 0.6,
            y: 0
        });
    }
});

gsap.fromTo(".news .left img", 
    { opacity: 1, scale:1.34 }, // Initial state
    { 
        opacity: 1, 
        scale: 1, // Final scale value
        duration: 0.4,
        scrollTrigger: {
            trigger: ".news .left img",
            start: "top 99%",   // Trigger the animation when .about is halfway in view
            end: "bottom top",  // End the animation when .about scrolls out of view
            scrub: true,        // Allows the scale effect to be tied to scroll
            toggleActions: "play none none none",
        },
        ease: "power1.inOut"
    }
);

gsap.from(".feet *", {
    y: 20,
    opacity: 0,
    duration: 0.2, // Faster duration for .box elements
    delay: 0,
    stagger: 0.05, // Increased speed for .box elements
    scrollTrigger: {
        trigger: ".feet",
        start: "top 50%", // Ensure it triggers at the same time
        toggleActions: "play none none none",
    },
    onComplete: function () {
        // Fade in and reset position for .box elements
        gsap.to(".feet *", {
            opacity: 1,
            duration: 0.1,
            delay: 0.6,
            y: 0
        });
    }
});
// GSAP counter animation
// GSAP counter animation
// gsap.fromTo(
//     { count: 0 }, // Starting point of the counter
//     { 
//         count: 100, // End value of the counter
//         duration: 3, // Duration of the count-up animation
//         ease: "power1.out",
//         onUpdate: function () {
//             // Access the current value and update the h2 element
//             document.querySelector(".feet h2").innerText = Math.round(this.progress() * 100);
//         }
//     }
// );

gsap.registerPlugin(ScrollTrigger);

function initCounters() {
  // Function to animate counters with GSAP and ScrollTrigger
  function animateCounters(selector, decimalPlaces, duration) {
    gsap.utils.toArray(selector).forEach(function (el) {
      const dataNumber = el.getAttribute('data-number');
      console.log(`${selector} data-number:`, dataNumber); // Log data-number to confirm

      // Only proceed if data-number is valid
      if (dataNumber !== null) {
        var target = { val: 0 };
        gsap.to(target, {
          scrollTrigger: {
            trigger: el,
            start: 'top bottom', // Trigger earlier on scroll
            markers: true,
            toggleActions: 'restart pause resume pause',
          },
          val: dataNumber,
          duration: duration,
          onUpdate: function () {
            el.innerText = target.val.toFixed(decimalPlaces);
          },
        });
      }
    });
  }

  // Animate each counter with specified decimal places and duration
  animateCounters('.counterOne', 1, 3);  // Cars counter
  animateCounters('.counterTwo', 0, 3);  // Buses counter
  animateCounters('.counterThree', 0, 3); // Trucks counter
}

// Run initCounters on DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
  setTimeout(() => {
    initCounters();
    ScrollTrigger.refresh();
  }, 100); // Delay slightly if needed
});









// gsap.from(".inner-page *", {
//     y: 20,
//     opacity: 0,
//     duration: 0.2, // Faster duration for .box elements
//     delay: 0,
//     stagger: 0.05, // Increased speed for .box elements
//     scrollTrigger: {
//         trigger: ".inner-page",
//         start: "top 50%", // Ensure it triggers at the same time
//         toggleActions: "play none none none",
//     },
//     onComplete: function () {
//         // Fade in and reset position for .box elements
//         gsap.to(".inner-page *", {
//             opacity: 1,
//             duration: 0.1,
//             delay: 0.6,
//             y: 0
//         });
//     }
// });

