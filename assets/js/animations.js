const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smooth: true,
    smoothTouch: false,
    touchMultiplier: 2,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);

gsap.from("header .logo", {
    y: -5,
    opacity: 0,
    duration: 0.2,
    delay: 0.2,
    stagger: 0.2,
    onComplete: function () {
        gsap.to(".home-header .logo", {
            opacity: 1,
            duration: 0.2,
            y: 0
        });
    }
});
gsap.from("header .main-nav ul", {
    y: -5,
    opacity: 0,
    duration: 0.2,
    delay: 0.4,
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
    delay: 0.6,
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
    delay: 0.8,
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

gsap.from(".services *", {
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
gsap.from(".news *", {
    y: 20,
    opacity: 0,
    duration: 0.2, // Faster duration for .box elements
    delay: 0,
    stagger: 0.05, // Increased speed for .box elements
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