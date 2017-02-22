
var menuFlag = 0;
$(document).ready(function(){

  //set intro height

  var w = $(window).width();
  //menubtn functions
  $("#menubtn").on('click', function(e){
    if ( menuFlag == 0 ){
      e.preventDefault();
      $("#menublack").fadeIn("fast");
      $("#menu-side").removeClass("menu-slideOut");
      $("#menu-side").addClass("menu-slideIn");
      $("#menu-side").css("left", 0);
      menuFlag = 1;
    }
    else {
      e.preventDefault();
      $("#menublack").fadeOut("fast");
      $("#menu-side").removeClass("menu-slideIn");
      $("#menu-side").addClass("menu-slideOut");
      $("#menu-side").css("left", -800);
      menuFlag = 0;
    }

  });
  $("#menublack").on('click', function(e){
    e.preventDefault();
    $("#menublack").fadeOut("fast");
    $("#menu-side").removeClass("menu-slideIn");
    $("#menu-side").addClass("menu-slideOut");
    $("#menu-side").css("left", -800);
    menuFlag = 0;

  });


});


$(window).resize(function(){
  var w = $(window).width();


});

