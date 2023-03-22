
$('.type').teletype({
  text: ['Just A Tap!']
});



		var cards = document.querySelectorAll('.card');
		cards.forEach(function(card) {
			card.addEventListener('mouseenter', function() {
				card.querySelector('.btn').classList.remove('d-none');
			});
			card.addEventListener('mouseleave', function() {
				card.querySelector('.btn').classList.add('d-none');
			});
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





