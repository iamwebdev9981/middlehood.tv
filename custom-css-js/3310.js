/******* Do not edit this file *******
Simple Custom CSS and JS - by Silkypress.com
Saved: Oct 19 2022 | 10:53:36 */
jQuery(document).ready(function( $ ){
    $(window).scroll(function(){
  var sticky = $('#sticky-header'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
});


jQuery(document).ready(function( $ ){

let mybutton = document.getElementById("bottom-top-scroll");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
});
