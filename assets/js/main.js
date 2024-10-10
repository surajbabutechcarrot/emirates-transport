// document.body.innerHTML += "<a href='#' id='back-to-top' title=''></a>";
// const getBTTElm = document.getElementById('back-to-top');
// document.addEventListener('scroll', ev => {
//     if (window.scrollY > 150) {
//         getBTTElm.classList.add('visible');
//     } else {
//         getBTTElm.classList.remove('visible');
//     }
// });
// getBTTElm.addEventListener('click', e => {
//     e.preventDefault();
//     window.scrollTo({
//         top: 0,
//         behavior: 'smooth'
//     });
// })










$(document).ready(function () {

    // menu function

    // Toggle the 'show-menu' class on body when the mobile button is clicked
    const getBtn = document.querySelector('.mob-btn');
    getBtn.addEventListener('click', e => {
        document.querySelector('body').classList.toggle('show-menu');
    });

    // Loop through main-nav dropdowns
    const getDropDown = document.getElementsByClassName('main-nav');
    for (let i = 0; i < getDropDown.length; i++) {
        const div = getDropDown[i];
        const selectLi = div.getElementsByTagName('li');

        // Loop through each <li> inside the main-nav
        for (let j = 0; j < selectLi.length; j++) {
            const li = selectLi[j];

            // Check if the <li> contains a <ul> (sub-menu)
            if (li.querySelector('ul')) {
                li.classList.add('submenu');

                // Create <i> element and append it to the <li>
                const icon = document.createElement('i');
                li.appendChild(icon);
            }
        }
    }

    // Add click event listener to each <i> inside .main-nav
    const getDropDownClick = document.querySelectorAll('.main-nav i');
    getDropDownClick.forEach((item) => {
        item.addEventListener('click', e => {
            e.target.parentNode.classList.toggle('open');
        });
    });

    $('.slider-app').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1000,
        // rtl: true  // Enable RTL mode
    });
    $('.slider-app-ar').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1000,
        rtl: true  // Enable RTL mode
    });
    $('.mission-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1000,
        // rtl: true  // Enable RTL mode
    });
    $('.mission-slider-ar').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1000,
        rtl: true  // Enable RTL mode
    });
    $('.awards-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 5, // Number of items to show at once
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200, // For large screens
                settings: {
                    slidesToShow: 4, // Show 4 slides on large screens
                }
            },
            {
                breakpoint: 992, // For medium screens
                settings: {
                    slidesToShow: 3, // Show 3 slides on medium screens
                }
            },
            {
                breakpoint: 768, // For tablets
                settings: {
                    slidesToShow: 2, // Show 2 slides on tablets
                }
            },
            {
                breakpoint: 576, // For mobile devices
                settings: {
                    slidesToShow: 1.7, // Show 1 slide on mobile devices
                }
            }
        ]
    });
    $('.awards-slider-ar').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 5, // Number of items to show at once
        slidesToScroll: 1,
        rtl: true,
        responsive: [
            {
                breakpoint: 1200, // For large screens
                settings: {
                    slidesToShow: 4, // Show 4 slides on large screens
                }
            },
            {
                breakpoint: 992, // For medium screens
                settings: {
                    slidesToShow: 3, // Show 3 slides on medium screens
                }
            },
            {
                breakpoint: 768, // For tablets
                settings: {
                    slidesToShow: 2, // Show 2 slides on tablets
                }
            },
            {
                breakpoint: 576, // For mobile devices
                settings: {
                    slidesToShow: 1.7, // Show 1 slide on mobile devices
                }
            }
        ]
    });
    
});
jQuery(document).ready(function ($) {
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 175) {
            $('header').addClass('slim-header');
        } else {
            $('header').removeClass('slim-header');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    function setEqualTabHeights() {
        var maxHeight = 0;
        var tabPanes = document.querySelectorAll('.tab-pane');

        // Find the maximum height
        tabPanes.forEach(function (pane) {
            pane.style.height = 'auto'; // Reset height
            if (pane.scrollHeight > maxHeight) {
                maxHeight = pane.scrollHeight;
            }
        });

        // Set all tab panes to the maximum height
        tabPanes.forEach(function (pane) {
            pane.style.height = maxHeight + 'px';
        });
    }

    setEqualTabHeights(); // Set equal heights on page load

    // Adjust on tab change and window resize
    window.addEventListener('resize', setEqualTabHeights);
});