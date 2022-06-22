$('.owl-carousel.vip').owlCarousel({
  loop:true,
  margin:25,
  nav:false,
  autoplay: true,
  responsive:{
      0:{
          items:1,
          dots:false
      },
      550:{
          items:2,
          dots:false
      },
      800:{
        items:3,
        dots:true
    },
      1200:{
          items:4,
          dots:true
      }
  }
})

$('.owl-carousel.random').owlCarousel({
    loop:true,
    margin:25,
    autoplay: true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:false,
    responsive:{
        0:{
            items:1,
            dots:false
        },
        550:{
            items:2,
            dots:false
        },
        800:{
          items:3,
          dots:true
      },
        1200:{
            items:4,
            dots:true
        }
    }
  })

  $('.owl-carousel.actu').owlCarousel({
    loop:true,
    margin:50,
    autoplay: true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:false,
    responsive:{
        0:{
            items:1,
            dots:false,
            margin: 0
        },
        550:{
            items:1,
            dots:false,
            margin: 0
        },
        800:{
          items:2,
          dots:true
      },
        1300:{
            items:3,
            dots:true
        }
    }
  })

  $('.owl-carousel.header').owlCarousel({
    loop:true,
    margin:50,
    autoplay: true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:true,
    dots: false,
    items: 1
  })

function reveal() {
    var reveals = document.querySelectorAll(".reveal");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
        } else {
        reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();


$('.open-popup-link').magnificPopup({
    type:'inline',
    closeBtnInside:true,
    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  });

  $('.open-video-link').magnificPopup({
    type:'inline',
    closeBtnInside:true,
    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  });

  $('.absolute.giro').magnificPopup({
    type:'inline',
    closeBtnInside:true,
    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  });

let menu = document.getElementById('menu');

menu.addEventListener("click", function (e){
  document.getElementById('navHeader').classList.toggle("active");
})