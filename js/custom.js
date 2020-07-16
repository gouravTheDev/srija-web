jQuery(document).ready(function ($) {



    //SLIDER REVOLUTION
    
        //Content Sliders
    
        $('#slider').revolution({
            delay:6000,                                             
            startheight: 480,
            startwidth: 1008,
    
            hideThumbs: 1000,
    
            navigationType: 'none', //bullet, thumb, none, both     (No Thumbs In FullWidth Version !)
            navigationArrows: 'nexttobullets', //nexttobullets, verticalcentered, none                          
    
            touchenabled: 'on', // Enable Swipe Function : on/off
            onHoverStop: 'on', // Stop Banner Timet at Hover on Slide on/off
    
            navOffsetHorizontal: 0,
            navOffsetVertical: 0,
    
            dottedOverlay: 'none',
            shadow: 0, //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
            fullWidth: 'on' // Turns On or Off the Fullwidth Image Centering in FullWidth Modus
    
        });
    
        //Big Image Slider
    
        $('#slider-block').revolution({
            delay:6000,                                             
            startheight: 640,
            startwidth: 1008,
    
            hideThumbs: 1000,
    
            navigationType: 'none', //bullet, thumb, none, both     (No Thumbs In FullWidth Version !)
            navigationArrows: 'nexttobullets', //nexttobullets, verticalcentered, none                          
    
            touchenabled: 'on', // Enable Swipe Function : on/off
            onHoverStop: 'on', // Stop Banner Timet at Hover on Slide on/off
    
            navOffsetHorizontal: 0,
            navOffsetVertical: 0,
    
            dottedOverlay: 'none',
            shadow: 0, //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
            fullWidth: 'on' // Turns On or Off the Fullwidth Image Centering in FullWidth Modus
    
        });
    
    
    
    
    
    
    
    // BLOG IMAGE HOVER
    
        $('.img-link img').hover(function () {
                $(this).stop().animate({
                    opacity: '.7'
                }, 200);
            },
            function () {
                $(this).stop().animate({
                    opacity: '1'
                }, 200);
            });
    
    
    
    
    
    //PRELOADER
    
    
        $(window).on('load', function() {
            $('#status').fadeOut('fast'); // will first fade out the loading animation
            $('#preloader').delay(250).fadeOut('slow', function() {
                $(this).addClass('none');
            }); // will fade out the white DIV that covers the website.
            $('body').delay(1000).css({'overflow':'visible', 'height': 'auto'});
        });      
    
    
    
    }); //END of jQuery