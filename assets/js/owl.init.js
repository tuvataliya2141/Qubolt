//Owl Carousel
$('#customer-testi').owlCarousel({
  loop:true,
  nav: false,
  dots: true,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});

$('#customer-testis').owlCarousel({
  loop:true,
  nav: false,
  dots: true,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      }
  }
});

$('#owl-fade').owlCarousel({
  loop:true,
  nav: false,
  dots: true,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  animateOut: 'fadeOut',
  items: 1,
})