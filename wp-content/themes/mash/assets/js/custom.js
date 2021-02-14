//menu top fixed

(function ($){
var fixed_top = $(".main-menu");
$(window).on('scroll', function () {
    if ($(this).scrollTop() > 80) {
        $('body').addClass("body-padding");
        fixed_top.addClass("menu-fixed animated fadeInDown");
    } else {
        $('body').removeClass("body-padding");
        fixed_top.removeClass("menu-fixed animated fadeInDown");
    }

});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$('ul.nav').each(function (i, liList) {
    var $liList = $(liList);
    $liList.on('click', 'li a', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

//Js code for search box

$(".first-click").on("click",function () {
    $(".first-click").hide();
    $(".second-click").css('display', 'block');
    $(".main-menu").addClass("search-box");
});
$(".second-click").on("click",function () {
    $(".second-click").hide();
    $(".first-click").css('display', 'block');
    $(".main-menu").removeClass("search-box");
});


//Counter Up
$('.counter').counterUp({
    delay: 10,
    time: 1000
});

//Js code for Lightcase
$('a[data-rel^=lightcase]').lightcase();

//testimonial Swipper
var swiper = new Swiper('.testimonial-container', {
    nextButton: '.swiper-button-next',
    nextButton: '.testimonial-next-btn',
    prevButton: '.testimonial-prev-btn',
    paginationType: 'fraction',
    loop: true
});

//Check to see if the window is top if not then display button
$(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});

//Click event to scroll to top
$('.scrollToTop').on("click", function () {
    $('html, body').animate({
        scrollTop: 0
    }, 800);
    return false;
});

})(jQuery);
