/*
======================================
[ owlCarousel ]
======================================
*/
$('.owl-slider').owlCarousel({
    autoplay: true,
    loop: true,
    dots: false,
    margin: 5,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 4
        },
        1000: {
            items: 5
        }
    }
})
$('.owl-banner').owlCarousel({
    loop: true,
    autoplay: true,
    dots: false,
    autoplayTimeout: 3000,
    animateOut: 'fadeOut',
    animateIn: 'pulse',
    nav: true,
    navText: [
        "<i class='fa fa-angle-left' aria-hidden='true'></i>",
        "<i class='fa fa-angle-right' aria-hidden='true'></i>"
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
$('.owl-galley').owlCarousel({
    items: 5,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: true,
    margin: 10,
    dots: true,
    navText: [
        "<i class='fa fa-angle-left' aria-hidden='true'></i>",
        "<i class='fa fa-angle-right' aria-hidden='true'></i>"
    ],
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        }
    }
});

/*
======================================
[ Menu Mobile ]
======================================
*/
jQuery(document).ready(function($) {
    $(".bg-wrap").hide();
    $("header.header .item-menu span.category").click(function(e) {
        e.stopPropagation();
        $(".bg-wrap").not(".menu-category").slideUp();
        $(".menu-category").slideToggle();
    });

    $("header.header .item-menu span.province").click(function(e) {
        e.stopPropagation();
        $(".bg-wrap").not(".menu-province").slideUp();
        $(".menu-province").slideToggle();
    });
    $('.bg-wrap').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('.bg-wrap').slideUp();
    });
});
// $(document).ready(function($) {
//     $('#accordion').dcAccordion({
//         eventType: 'click',
//         autoClose: true,
//         saveState: true,
//         disableLink: true,
//         speed: 'slow',
//         showCount: false,
//         autoExpand: true,
//         classExpand: 'dcjq-current-parent'
//     });

// });

/*
======================================
[ Menu Mobile ]
======================================
*/
jQuery(document).ready(function($) {
    $(".menu-mobile").click(function(e) {
        e.stopPropagation();
        $(".bg-wrap").not(".menu-responsive").slideUp();
        $(".menu-responsive").slideToggle();
    });
    $('.bg-wrap').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('.bg-wrap').slideUp();
    });
});


/*
======================================
[ STICK ]
======================================
*/

// (function($) {
//     $.lockfixed(".stick", {
//         offset: {
//             top: 50,
//             bottom: 1170,
//         }
//     });
// })(jQuery);

/*
======================================
[ FIXED TOP MENU ]
======================================
*/

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 450) {
        $(".nav-fixed").addClass("fixed");
        $(".nav-fixed").removeClass("relative");
    } else {
        $(".nav-fixed").addClass("relative");
        $(".nav-fixed").removeClass("fixed");
    }
});

/*
======================================
[ Load more ]
======================================
*/
$(document).ready(function() {

    var sync1 = $("#gallery-full");
    var sync2 = $("#gallery-thumbnail");
    var slidesPerPage = 5;
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: true,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
        navText: [
            "<i class='fa fa-angle-left' aria-hidden='true'></i>",
            "<i class='fa fa-angle-right' aria-hidden='true'></i>"
        ],

    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: false,
            nav: true,
            margin: 10,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage,
            responsiveRefreshRate: 100,
            navText: [
                "<i class='fa fa-angle-left' aria-hidden='true'></i>",
                "<i class='fa fa-angle-right' aria-hidden='true'></i>"
            ],
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }
        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
});

// $(document).ready(function($) {
//     $('#accordion-taxonomy').dcAccordion({
//         eventType: 'click',
//         autoClose: true,
//         saveState: false,
//         disableLink: false,
//         speed: 'slow',
//         showCount: false,
//         autoExpand: true,
//     });
// });


// $('.entry-readmore').readmore({
//     speed: 75,
//     lessLink: '<div class="text-center mt-2"><a class="view-all"><span class="text-white">Thu gá»n</span></a></div>',
//     moreLink: '<div class="text-center mt-2"><a class="view-all"><span class="text-white">Xem thĂªm</span></a></div>',
//     collapsedHeight: 500,
//     heightMargin: 16,
//     blockCSS: false,
// });
// $(document).ready(function() {
//     $(document).on("scroll", onScroll);

//     $('.table-of-contents ul li a[href^="#"]').on('click', function(e) {
//         e.preventDefault();
//         $(document).off("scroll");

//         $('a').each(function() {
//             $(this).removeClass('active');
//         })
//         $(this).addClass('active');

//         var target = this.hash,
//             menu = target;
//         $target = $(target);
//         $('html, body').stop().animate({
//             'scrollTop': $target.offset().top + 2
//         }, 500, 'swing', function() {
//             window.location.hash = target;
//             $(document).on("scroll", onScroll);
//         });
//     });
// });

// function onScroll(event) {
//     var scrollPos = $(document).scrollTop();
//     $('.table-of-contents ul li  a').each(function() {
//         var currLink = $(this);
//         var refElement = $(currLink.attr("href"));
//         if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
//             $('.nav-list li a').removeClass("active");
//             currLink.addClass("active");
//         } else {
//             currLink.removeClass("active");
//         }
//     });
// }