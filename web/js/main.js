function detectUnix(){
    if(navigator.platform.match(/linux/i)){
        return true;
    }
    return false;
}

function detectmob() {
    if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
        ){
        return true;
    }
    else {
        return false;
    }
}

function checkCurrentMenuElement() {
    path = document.location.pathname;

    $('.header-menu-list-element a').each(function () {
        if ($(this).attr('href') == path)
            $(this).parent().css({'border-bottom': '1px dashed #fff'});
    });

    if(path.indexOf('news') != -1)
        $('.header-menu-list-element a:contains("news")').parent().css({'border-bottom': '1px dashed #fff'});

    if(path.indexOf('projects') != -1)
        $('.header-menu-list-element a:contains("projects")').parent().css({'border-bottom': '1px dashed #fff'});
}

function autoResizer()
{
    if($('.container').height() < 600)
        $('.wrap').css({'height' : $(window).height()});
    if(detectmob())
    {
        $('body').css({
            'zoom' : '78%',
            'background-image': 'url("/images/jelvix_texture.jpg")',
            'background-size' : '40% 40%'
        });
    }
}

function checkCurrentProjectFilterElement() {
    var search = window.location.search;
    var filters = ['', '?category=Applications', '?category=Design', '?category=Featured']

    $('.button').each(function (index, element) {
        if (window.location.pathname == '/projects') {
            if (search == filters[index])
                $(this).addClass('active');
        }
    });
}

function resetActive() {
    $('.services-filter-button').each(function () {
        $(this).removeClass('active');
    });
}

function initServicesEntity() {
    $('.sevices-entity').on('click', function () {

        if ($(this).find('.fulltext').is(':hidden')) {
            $(this).find('.fulltext').show()
            $(this).find('.small-text').hide();
        }
        else {
            $(this).find('.fulltext').hide()
            $(this).find('.small-text').show();
        }
    });

    $('.sevices-entity').on('mouseenter', function () {
        $(this).find('div').each(function () {
            $(this).addClass("hover");
        });
    });

    $('.sevices-entity').on('mouseleave', function () {
        $(this).find('div').each(function () {
            $(this).removeClass("hover");
        });
    });
}

$(document).ready(function () {
    if(detectUnix() || detectmob())
    {
        $('head').append('<link rel="stylesheet" type="text/css" media="screen" href="/css/unix.css">');
    }

    checkCurrentMenuElement();
    initServicesEntity();

    $('.services-filter-button').bind('mousedown', function () {
        $(this).addClass('active');
    });

    $('.services-filter-button').bind('mouseup', function () {
        $(this).removeClass('active');
    });

    $('.services-category-filter-buttons .architect').bind('click', function () {
        $('.load-data-container').load('services/filter-by-categoty?name=architect', initServicesEntity);
        resetActive();
        $(this).addClass('active');
    });

    $('.services-category-filter-buttons .design').bind('click', function () {
        $('.load-data-container').load('services/filter-by-categoty?name=design', initServicesEntity);
        resetActive();
        $(this).addClass('active');
    });

    $('.services-category-filter-buttons .development').bind('click', function () {
        $('.load-data-container').load('services/filter-by-categoty?name=development', initServicesEntity);
        resetActive();
        $(this).addClass('active');
    });

    $('.services-category-filter-buttons .grow').bind('click', function () {
        $('.load-data-container').load('services/filter-by-categoty?name=grow', initServicesEntity);
        resetActive();
        $(this).addClass('active');
    });

    $('.footer').bind('mouseenter mouseleave', function () {
        $('.footer-item').toggleClass('active');
    });


    $('.footer-item').bind('mouseenter mouseleave', function () {
        $(this).toggleClass('active');
    });

    $('.main-slider').bxSlider({
        slideWidth: 980,
        adaptiveHeight: true,
        speed: 2000,
        auto: true,
        pause: 8000
    });

    $('.review-text-container').bind('mouseenter mouseleave', function () {
        $(this).siblings('.review-decorator').toggleClass("hover");
    });
    $('.review-text-container').bind('click', function () {
        $(location).attr('href', '/stories');
    });

    function currentSlide(current) {
        if (current <= 1)
            $('.slidesPrevious').addClass('sliderButtonPrevious').removeAttr('href');
        else
            $('.slidesPrevious').removeClass('sliderButtonPrevious').attr('href', '#');

        if (current == $("#slides").slides("status", "total"))
            $('.slidesNext').addClass('sliderButtonNext').removeAttr('href');
        else
            $('.slidesNext').removeClass('sliderButtonNext').attr('href', '#');
    }

    $(function () {
        $("#slides").slides({
            width: 990,
            height: 900
        });

        $("#slides").slides({
            navigateEnd: function (current) {
                currentSlide(current);
            },
            loaded: function () {
                currentSlide(1);
            }
        });

        $('.slidesNext, .slidesPrevious').bind('mousedown mouseup', function(){
            $(this).toggleClass('clicked');
        });

        currentSlide(1);
        autoResizer();
    });

    $('.sevices-entity').on('mouseenter', function () {
        $(this).find('div').each(function () {
            $(this).addClass("hover");
        });
    });

    $('.sevices-entity').on('mouseleave', function () {
        $(this).find('div').each(function () {
            $(this).removeClass("hover");
        });
    });

    checkCurrentProjectFilterElement();

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    $('.stories-slider').bxSlider({
        adaptiveHeight: true,
        mode: 'fade',
        speed: 1500,
        auto: true,
        pause: 8000,
        onSliderLoad: function () {
            $('.bx-viewport').css({'overflow': 'visible'});
        }

    });
//    $('.bx-viewport').css({'height' : '330px'});
    $('.author-photo').each(function () {

        randomNumber = getRandomInt(-5, 5);
        value = 'scale(1) rotate(' + randomNumber + 'deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg)'
        $(this).css({
            '-moz-transform': value,
            '-webkit-transform': value,
            '-o-transform': value,
            '-ms-transform': value,
            'transform': value
        });
    });

});