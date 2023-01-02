// industry we serve
$(document).ready(function(){
    $('.industry-we-surve-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay:true,
        // navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1300:{
                items:4
            },
            1500:{
                items:4
            }
        }
      })
});


