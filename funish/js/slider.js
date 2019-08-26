$(function(){
  $(".slider").slick({
    infinite: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 300,
    responsive: [{
      breakpoint: 960,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
    },{
      breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
    },{
      breakpoint: 736,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
    },{
      breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
    }]
  });
});
