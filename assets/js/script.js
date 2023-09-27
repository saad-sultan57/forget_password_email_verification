
$(document).ready(function() {

   //Javascript code for stricky Haider----------------------------------

  // Get the navbar element
  var navbar = $("#myheader");

  // Get the initial offset position of the navbar
  var stickyOffset = navbar.offset().top;
  

  // Add the 'sticky' class to the navbar when scrolling past its initial position
  $(window).scroll(function() {
    if ($(window).scrollTop() > 200) {
      
      navbar.slideDown('slow');
      navbar.css("visibility", "visible");
      
      
    } else {
     
      navbar.hide();
    }
  });
  //Javascript code for stricky Haider End--------------------------------

  $("#scrollToTopBtn").on("click", function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });

  // Show the button when the user scrolls down 20px from the top of the document
  $(window).on("scroll load", function() {
    if ($(this).scrollTop() > 100) {
      $("#scrollToTopBtn").fadeIn();
    } else {
      $("#scrollToTopBtn").fadeOut();
    }
  });




  



});
