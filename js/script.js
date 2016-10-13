$(document).ready(
  function(){

    $('.jump').click(function() {
   	window.scroll(0,5000); // horizontal and vertical scroll targets
});
});

$(document).ready(function(){

  $('.fa-envelope').mouseover(function(){
   $('.drop').slideDown("fast");
 });
 $('.header').mouseover(function(){
   $('.drop').slideUp("fast");
 });

});
