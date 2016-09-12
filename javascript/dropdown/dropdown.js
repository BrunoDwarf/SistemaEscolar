$(document).ready(function() {
  //Faz o dropdown do navbar
  $('.nav-dropdown-btn').click(function() {
    $(this).children('.nav-dropdown').slideToggle();
  });
});
