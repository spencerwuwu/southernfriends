
var menuFlag = 0;
var menuCount = [0,0,0, 0];
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

  $.each([ 1, 2, 3], function( index, i ){
    var control = "#menu-main" + i;
    var target = "#menu-content" + i;
        console.log(control);

    $( control ).click(function(){
        console.log(control);
      if ( menuCount[i] == 0 ){
        console.log(control);
        $( target ).slideDown();
        menuCount[i] = 1;
      }
      else{
        console.log(control);
        $( target ).slideUp();
        menuCount[i] = 0;
      }
    if (menuCount[1]==0 && menuCount[2]==0 && menuCount[3]==0){
      $("#menu-side").css("height","auto");
    }
    else{
      $("#menu-side").css("height","100%");
    }
    });


  });


});


$(window).resize(function(){
  var w = $(window).width();


});

