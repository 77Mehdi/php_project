// (function ($) {
//     "use strict";

//     // Spinner
//     var spinner = function () {
//         setTimeout(function () {
//             if ($('#spinner').length > 0) {
//                 $('#spinner').removeClass('show');
//             }
//         }, 1);
//     };
//     spinner();
    
    
//     // Initiate the wowjs
//     new WOW().init();


//     // Sticky Navbar
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 300) {
//             $('.sticky-top').css('top', '0px');
//         } else {
//             $('.sticky-top').css('top', '-100px');
//         }
//     });
    
    
//     // Dropdown on mouse hover
//     const $dropdown = $(".dropdown");
//     const $dropdownToggle = $(".dropdown-toggle");
//     const $dropdownMenu = $(".dropdown-menu");
//     const showClass = "show";
    
//     $(window).on("load resize", function() {
//         if (this.matchMedia("(min-width: 992px)").matches) {
//             $dropdown.hover(
//             function() {
//                 const $this = $(this);
//                 $this.addClass(showClass);
//                 $this.find($dropdownToggle).attr("aria-expanded", "true");
//                 $this.find($dropdownMenu).addClass(showClass);
//             },
//             function() {
//                 const $this = $(this);
//                 $this.removeClass(showClass);
//                 $this.find($dropdownToggle).attr("aria-expanded", "false");
//                 $this.find($dropdownMenu).removeClass(showClass);
//             }
//             );
//         } else {
//             $dropdown.off("mouseenter mouseleave");
//         }
//     });
    
    
//     // Back to top button
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 300) {
//             $('.back-to-top').fadeIn('slow');
//         } else {
//             $('.back-to-top').fadeOut('slow');
//         }
//     });
//     $('.back-to-top').click(function () {
//         $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
//         return false;
//     });


//     // Header carousel
//     $(".header-carousel").owlCarousel({
//         autoplay: true,
//         smartSpeed: 1500,
//         items: 1,
//         dots: false,
//         loop: true,
//         nav : true,
//         navText : [
//             '<i class="bi bi-chevron-left"></i>',
//             '<i class="bi bi-chevron-right"></i>'
//         ]
//     });


//     // Testimonials carousel
//     $(".testimonial-carousel").owlCarousel({
//         autoplay: true,
//         smartSpeed: 1000,
//         center: true,
//         margin: 24,
//         dots: true,
//         loop: true,
//         nav : false,
//         responsive: {
//             0:{
//                 items:1
//             },
//             768:{
//                 items:2
//             },
//             992:{
//                 items:3
//             }
//         }
//     });
    
// })(jQuery);





window.addEventListener('DOMContentLoaded', function () {
    "use strict";

    // Spinner
    var spin = function () {
        setTimeout(function () {
            var spinnerElement = document.getElementById('spinner');
            if (spinnerElement) {
                spinnerElement.classList.remove('show');
            }
        }, 1);
    };
    spin();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    window.addEventListener('scroll', function () {
        var stickyNav = document.querySelector('.sticky-top');
        if (window.pageYOffset > 300) {
            stickyNav.style.top = '0px';
        } else {
            stickyNav.style.top = '-100px';
        }
    });

    // Dropdown on mouse hover
    var dropdown = document.querySelectorAll('.dropdown');
    var dropdownToggle = document.querySelectorAll('.dropdown-toggle');
    var dropdownMenu = document.querySelectorAll('.dropdown-menu');
    var showClass = "show";

    function handleDropdown() {
        var thisDropdown = this;
        thisDropdown.classList.add(showClass);
        thisDropdown.querySelector('.dropdown-toggle').setAttribute("aria-expanded", "true");
        thisDropdown.querySelector('.dropdown-menu').classList.add(showClass);
    }

    function removeDropdown() {
        var thisDropdown = this;
        thisDropdown.classList.remove(showClass);
        thisDropdown.querySelector('.dropdown-toggle').setAttribute("aria-expanded", "false");
        thisDropdown.querySelector('.dropdown-menu').classList.remove(showClass);
    }

    function toggleDropdown(event) {
        if (window.matchMedia("(min-width: 992px)").matches) {
            handleDropdown.bind(this)(event);
        } else {
            removeDropdown.bind(this)(event);
        }
    }

    for (var i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener('mouseenter', toggleDropdown);
        dropdown[i].addEventListener('mouseleave', toggleDropdown);
    }

    // Back to top button
    window.addEventListener('scroll', function () {
        var backToTop = document.querySelector('.back-to-top');
        if (window.pageYOffset > 300) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    });

    var backToTop = document.querySelector('.back-to-top');
    backToTop.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Header carousel
    var headerCarousel = document.querySelector(".header-carousel");
    if (headerCarousel) {
        var owl = $('.header-carousel');
        owl.owlCarousel({
            autoplay: true,
            smartSpeed: 1500,
            items: 1,
            dots: false,
            loop: true,
            nav: true,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ]
        });
    }

    // Testimonials carousel
    var testimonialCarousel = document.querySelector(".testimonial-carousel");
    if (testimonialCarousel) {
        var owl = $('.testimonial-carousel');
        owl.owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            center: true,
            margin: 24,
            dots: true,
            loop: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    }

});
