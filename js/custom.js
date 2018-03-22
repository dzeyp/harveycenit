jQuery(window).on('load', function() { // makes sure the whole site is loaded 
    jQuery('#status').fadeOut(); // will first fade out the loading animation 
    jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    jQuery('body').delay(350).css({'overflow':'visible'});

    /*jQuery(".slick-slider").slick({
        autoplay: true,
        autoplaySpeed: 999000,
        arrows: false,
        dots: true,
        speed: 1000,
    });*/


    var Shuffle = window.Shuffle;

    var myShuffle = new Shuffle(document.querySelector('.my-shuffle'), {
      itemSelector: '.js-item',
      sizer: '.my-sizer-element',
      buffer: 1,
    });

    myShuffle.filter('nature');
    
    jQuery('.nature').click(function() {
        myShuffle.filter('nature');
    });

    jQuery('.city').click(function() {
        myShuffle.filter('city');
    });




    window.sr = ScrollReveal();
    sr.reveal('.reveal1');


    jQuery('.navbar-toggler').click(function() {
        if (jQuery(this).hasClass('collapsed')) {
            if (jQuery(window).scrollTop() < 1) {
                jQuery('header').css('background-color', '#ffffff').css('border-bottom', 'none');
                jQuery('.navbar-brand').css('font-size', '35px');
            }
        } else {
            if (jQuery(window).scrollTop() < 1) {
                jQuery('header').css('background-color', 'transparent').css('border-bottom', '1px solid rgba(0,0,0,0.2)');
                jQuery('.navbar-brand').css('font-size', '50px');
            }
        }
    });
})

jQuery(document).ready(function() {
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 1) {
            if (jQuery('.navbar-toggler').hasClass('collapsed')) {
                jQuery('header').css('background-color', '#ffffff').css('border-bottom', 'none');
                jQuery('.navbar-brand').css('font-size', '35px');
            }
        }

        if (jQuery(this).scrollTop() < 1) {
            if (jQuery('.navbar-toggler').hasClass('collapsed')) {
                jQuery('header').css('background-color', 'transparent').css('border-bottom', '1px solid rgba(0,0,0,0.2)');
                jQuery('.navbar-brand').css('font-size', '50px');
            }
        }
    });
});