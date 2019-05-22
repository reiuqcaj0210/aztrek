jQuery(document).ready(function($) {
    jQuery('.stellarnav').stellarNav(

        {
            theme: 'dark',
            position: 'right'
        }
    ) 
});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:15,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },

          560: {
            items:2,
            nav:true
          },

          768:{
              items:3,
              nav:true
          },
          1110:{
              items: 4,
              nav: true
          }
      }
    });
  });