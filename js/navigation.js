jQuery(document).ready(function($) {
  $(".nav-home").click(function() {
    $('html,body').animate(
      { scrollTop: 0 }, "slow");
  });
  $(".nav-services").click(function() {
    $('html,body').animate({
        scrollTop: $(".services-header").offset().top},
        'slow');
  });
  $(".nav-bio").click(function() {
    $('html,body').animate({
        scrollTop: $(".bio-header").offset().top},
        'slow');
  });
  $(".nav-contact").click(function() {
    $('html,body').animate({
        scrollTop: $(".contact-header").offset().top},
        'slow');
  });
});