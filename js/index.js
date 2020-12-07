$(document).ready(function(){
  var $default2 = $("#default2");
  $(window).scroll(function(){
    if ( $(this).scrollTop() > 100 && $default2.hasClass("navbar-light bg-light default2") ){
      $default2.removeClass("navbar-light bg-light default2").addClass("navbar-dark bg-dark fixed-top");
    } else if($(this).scrollTop() <= 100 && $default2.hasClass("navbar-dark bg-dark fixed-top")) {
      $default2.removeClass("navbar-dark bg-dark fixed-top").addClass("navbar-light bg-light default2");
    }
  });//scroll
});



    jQuery(window).scroll(function(){
      if(jQuery(window).scrollTop()>100){          
          jQuery('#logo-small').css('display','block');
       }else{         
          jQuery('#logo-small').css('display','none');
       }
 });





//  Listado movil desplegar y viceversa
$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");

});

// Scroll menu
$(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
