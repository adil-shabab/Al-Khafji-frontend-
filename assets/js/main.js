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


//   clientCarousel

$(document).ready(function(){
    $('.clientCarousel').owlCarousel({
        loop:true,
        center: true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        responsiveClass:true,
        autoplayHoverPause: true,
        navText: ["<i class='fa-solid fa-chevron-left'></i>","<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
                autoplay:true
            }
        }
    })
  })
  
  // testimonial carousel


$('.testimonialCarousel').on('initialized.owl.carousel changed.owl.carousel', function(e) {
    if (!e.namespace)  {
      return;
    }
    var carousel = e.relatedTarget;
    $('.slider-counter').text(carousel.relative(carousel.current()) + 1);
  }).owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    responsiveClass:true,
    navText: ["<i class='fa-solid fa-chevron-left'></i>","<i class='fa-solid fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
        }
    }
})
