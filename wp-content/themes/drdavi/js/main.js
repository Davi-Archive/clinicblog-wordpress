(function($) {
    "use strict";

    function preloader() {
        jQuery('.smart-page-loader').delay(0).fadeOut();
        jQuery('body:not(".elementor-editor-active")').removeClass('wp-smart-body');
    };
    $(window).on('load', function() {
        preloader();
    });
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });

    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    if ($('.menu-area li.menu-item-has-children ul').length) {
        $('.menu-area .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
    }
    if ($('.mobile-menu').length) {
        var mobileMenuContent = $('.menu-area .main-menu').html();
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
        $('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
            $(this).toggleClass('open');
            $(this).prev('ul').slideToggle(500);
        });
        $('.mobile-nav-toggler').on('click', function() {
            $('body').addClass('mobile-menu-visible');
        });
        $('.menu-backdrop, .mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });
    }
    $('.socialclick').on('click', function() {
        $('.header-top-right').toggle(1000);
    });
    $('.click-two-header').on('click', function() {
        $('.show-two-header').toggle(1000);
    });
    $('.close-two').on('click', function() {
        $('.show-two-header').hide(1000);
    });
    $('.click-three-header').on('click', function() {
        $('.show-three-header').toggle(1000);
    });
    $('.close-three').on('click', function() {
        $('.show-three-header').hide(1000);
    });
    $('.click-four-header').on('click', function() {
        $('.show-four-header').toggle(1000);
    });
    $('.close-four').on('click', function() {
        $('.show-four-header').hide(1000);
    });
    var list = document.querySelectorAll("div[data-image]");
    for (var i = 0; i < list.length; i++) {
        var url = list[i].getAttribute('data-image');
        list[i].style.backgroundImage = "url('" + url + "')";
    }
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $("#sticky-header").removeClass("sticky-menu");
            $('.scroll-to-target').removeClass('open');
        } else {
            $("#sticky-header").addClass("sticky-menu");
            $('.scroll-to-target').addClass('open');
        }
    });
    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function() {
            var target = $(this).attr('data-target');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);
        });
    }
    var swiper = new Swiper(".mySwiper", {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 0,
        parallax: true,
        autoplay: 400,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })
    $('.btn').on('mouseenter', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    }).on('mouseout', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    });
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("actives");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    $('.popup-youtube').magnificPopup({
        type: 'iframe'
    });
    $('#demoslide3').owlCarousel({
        loop: true,
        autoplay: false,
        autoPlaySpeed: 5000,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        margin: 25,
        responsiveClass: true,
        navText: ["<div class='button-left-arrow'></div>", "<div class='button-right-arrow'></div>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                autoplay: true,
                autoplayHoverPause: false,
                nav: true,
                dots: false,
                loop: true
            }
        }
    })
    $('#demoslide4').owlCarousel({
        loop: true,
        autoplay: false,
        autoPlaySpeed: 5000,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        margin: 25,
        responsiveClass: true,
        navText: ["<div class='button-left-arrow'></div>", "<div class='button-right-arrow'></div>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 4,
                autoplay: false,
                autoplayHoverPause: false,
                nav: true,
                dots: false,
                loop: true
            }
        }
    })
    $('#demoslide2').owlCarousel({
        loop: true,
        autoplay: false,
        autoPlaySpeed: 5000,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        margin: 25,
        responsiveClass: true,
        navText: ["<div class='button-left-arrow'></div>", "<div class='button-right-arrow'></div>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 3,
                autoplay: false,
                autoplayHoverPause: false,
                nav: true,
                dots: false,
                loop: true
            }
        }
    })
    $('#demoslide1').owlCarousel({
        loop: true,
        autoplay: false,
        autoPlaySpeed: 5000,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        margin: 25,
        responsiveClass: true,
        navText: ["<div class='button-left-arrow'></div>", "<div class='button-right-arrow'></div>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 3,
                autoplay: false,
                autoplayHoverPause: true,
                nav: true,
                dots: false,
                loop: true
            }
        }
    })
    $('.owl-demo5').owlCarousel({
        loop: true,
        autoplay: false,
        autoPlaySpeed: 5000,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        margin: 25,
        responsiveClass: true,
        navText: ["<div class='button-left-arrow'></div>", "<div class='button-right-arrow'></div>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                autoplay: true,
                autoplayHoverPause: false,
                nav: true,
                dots: false,
                loop: true
            }
        }
    })
    $('.owl-demo2').owlCarousel({
        loop: true,
        autoplay: false,
        autoPlaySpeed: 5000,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        margin: 25,
        responsiveClass: true,
        navText: ["<div class='button-left-arrow'></div>", "<div class='button-right-arrow'></div>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                autoplay: true,
                autoplayHoverPause: false,
                nav: true,
                dots: false,
                loop: true
            }
        }
    })
    $(".set > a").on("click", function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".content").slideUp(200);
            $(".set > a i").removeClass("fa-minus").addClass("fa-plus");
        } else {
            $(".set > a i").removeClass("fa-minus").addClass("fa-plus");
            $(this).find("i").removeClass("fa-plus").addClass("fa-minus");
            $(".set > a").removeClass("active");
            $(this).addClass("active");
            $(".content").slideUp(200);
            $(this).siblings(".content").slideDown(200);
        }
    })


    // why choose us resize on responsive
    $(window).on('resize', function() {
                if ($(window).width() > 980) {
                    $('.why-choose-container').addClass('col-sm-6');
                    $('.why-choose-container').removeClass('col-lg-12');
                    $('.why-chose-container-img').removeClass('hide-element');
                } else {
                    $('.why-choose-container').removeClass('col-sm-6');
                    $('.why-choose-container').addClass('col-lg-12');
                    $('.why-chose-container-img').addClass('hide-element');
                }
            })
})(jQuery);