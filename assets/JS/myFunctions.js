$(document).ready(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop()>300){
            $('nav').addClass('blue-grey lighten-3');
        }else{
            $('nav').removeClass('blue-grey lighten-3');
        }
    });
    
    $('.modal').modal();
    $('#modal').modal('open'); 

    $('.sidenav').sidenav();
    $('.parallax').parallax();

    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true,
    });
    
});