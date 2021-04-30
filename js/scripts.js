jQuery(document).ready(function ($) {
  // Make the menu responsive
  $("#menu-main-navigation").slicknav({
    appendTo: ".site-header",
  });

  // bxSlider on testimonials
  $(".testimonials-list").bxSlider({
    controls: false,
    mode: "fade",
  });
});
