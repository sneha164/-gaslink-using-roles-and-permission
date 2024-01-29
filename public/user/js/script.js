
$('.type').teletype({
  text: ['Just A Tap!']
});



	

$(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    margin: 10,
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 1000,
    responsive:{
      0:{
      items:1
    },
      600:{
        items:2
    },
      1000:{
        items:4
      }
    }
  });
});





