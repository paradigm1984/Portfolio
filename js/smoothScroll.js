$(document).ready(() => {

  $('.anchor-link').click(function(){
      $('html, body').animate({
          scrollTop: $( $(this).attr('href') ).offset().top
      }, 600, "swing");
      return false;
  });
}); // END $(document).ready
