// for menu toggle
jQuery(document).ready(function () {
    $('.menu-toggle').click(function () {
        $('nav').toggleClass('active')
    })
    $('ul li').click(function(){
        $(this).siblings().removeClass('active')
        $(this).toggleClass('active')
    })
});


// for counter
jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
});