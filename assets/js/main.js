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
    $('.awards-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 5, // Number of items to show at once
        slidesToScroll: 1,
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