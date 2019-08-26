$(function() {
  $(".header_nav .fa-bars").on("click",function() {
    $(".header_right_sp").slideToggle();
  });
});

$(function() {
  $(".header_right_sp nav ul li a").on("click",function() {
    $(".header_right_sp").slideToggle();
  });
});

$(function() {
  $("#close").on("click",function() {
    $(".header_right_sp").slideToggle();
  });
});
