$(function(){
  var headerHeight = 65;
  $('a[href^="#"]').click(function(){
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top-headerHeight;
    $('body,html').animate({scrollTop:position},speed,'swing');
    return false;
  });
});

$(document).ready(function(){
  $(".gototop").hide();
  $(window).scroll(function(){
    if($(this).scrollTop() > 100){
      $(".gototop").fadeIn();
    }
    else{
      $(".gototop").fadeOut();
    }
  });
  $(".gototop a").click(function(){
    $("body,html").animate({
      scrollTop: 0
    },900);
    return false;
  });
});
