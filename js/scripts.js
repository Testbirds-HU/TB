$( document ).ready(function() {
   $("#arrow").click(function() {
    $('html, body').animate({
     scrollTop: $("#top").offset().top-90
    }, 1000);
   });
})