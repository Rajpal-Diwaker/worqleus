var scrollheight = ''
$(document).on('ready', function () {
    scrollfunction();
    $(window).resize(function () {
        scrollfunction();
        //$('')
       // console.log('resizeaagya');
    }); 
});

function scrollfunction(){
  //  console.log('aagya');
    if ($(window).width() > 767) {
        if ($('.banner').is(':visible')) {
            scrollheight = $('.banner').height();
        }
        else {
            scrollheight = 40
        }
        $(window).scroll(function () {
            var sticky = $('header'),
                scroll = $(window).scrollTop();
            if (scroll >= scrollheight) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
        });
    } else {
        var sticky = $('.navbar-header');
        var previous = $('header');
        sticky.removeClass('fixed');
        if ($('.banner').is(':visible')) {
            scrollheight = $('.banner').height();
        }
        else {
            scrollheight = 40
        }
        $(window).scroll(function () {
            scroll = $(window).scrollTop();
            if (scroll >= scrollheight) {
                sticky.addClass('fixed');
                previous.removeClass('header');
            }
            else {
                sticky.removeClass('fixed');
            }
        });
    }
}

$(function () {
    windowheight();
});
$(function () {
    $('.slidearrow').on('click', '.leftarrow', function () {
        $('.owl-nav .owl-prev').click();
    })
    $('.slidearrow').on('click', '.rightarrow', function () {
        $('.owl-nav .owl-next').click();
    })
    $('#clientlogo_slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 5
            },
            1024: {
                items: 7
            }
        }
    });
    $('#testimonial_slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });
    $('#expert_slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });
    $('#trending_slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1024: {
                items: 4
            }
        }
    });
});
function windowheight() {
    $('.banner').css({ 'height': $(window).height() - 76 + 'px' });
    $(window).resize(function () {
        $('.banner').css({ 'height': $(window).height() - 76 + 'px' });
    });
}




