$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.datepicker').datepicker();
    $('select').formSelect();
    $('.collapsible').collapsible();
    $('.materialboxed').materialbox();

    $('.modal').modal();

    $('#owl-carousel').owlCarousel({
        loop:false,
        margin:10,
        center: true,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1.5
            },
            500:{
                items:1.8
            },
            1000:{
                items:3
            }
        }
    })

    $('#owl-carousel-datos').owlCarousel({
        loop:false,
        margin:10,
        center: true,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1.3
            },
            600:{
                items:1.5
            },
            1000:{
                items:3
            }
        }
    })

    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
      });

});