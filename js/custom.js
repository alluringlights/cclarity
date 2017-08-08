$( document ).ready(function() {

	// $('.grid').masonry({
 //    itemSelector: '.grid-item',
 //    columnWidth: '.grid-sizer',
 //    percentPosition: true,
 //    gutter: '.gutter-sizer'
 //  });

  // init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    gutter: '.gutter-sizer'
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});



     $(".header").waypoint(function() {
        $(this.element).toggleClass("header-scrolled");
        $("body").toggleClass("body-scrolled");
        $(".page").toggleClass("page-scrolled");
    });


$(window).scroll(function() {
    $(".site-title").css({
    'opacity' : 1-(($(this).scrollTop())/150)
    });          
});


$(".current-year").text((new Date()).getFullYear());

$("#search-toggle").click(function() {
  $(".clarity-search-form").addClass("overlay-visible");
  $("body").addClass("overflow-hidden");
  $(".clarity-search-form input#s").focus();
});

$("#nav-toggle").click(function(){
  $(".responsive-nav").toggleClass("overlay-visible");
  $("body").addClass("overflow-hidden");
});

$(".search-x").click(function() {
  $(".clarity-search-form").removeClass("overlay-visible");
  if (!$(".responsive-nav").hasClass('overlay-visible')) {
    $("body").removeClass("overflow-hidden");
  }
});

$(".rnav-close").click(function(){
  $(".responsive-nav").removeClass("overlay-visible");
  if (!$(".clarity-search-form").hasClass('overlay-visible')) {
    $("body").removeClass("overflow-hidden");
  }
});

$(".sidebar-toggle").click(function(){
  $(".flyout-sidebar").toggleClass("sidebar-expanded");
  $("body").toggleClass("overflow-hidden");
});

$(document).keyup(function(e) {
  if (e.keyCode === 27) {
    $(".overlay-visible").removeClass("overlay-visible");
    $("body").removeClass("overflow-hidden");
  }
});


// smooth scroll
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });




// auto runt control
// jQuery(function($) {
//     $('h1,h2,h3,li,p').not(".wpcf7 p").each(function() {
//         $(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,'&nbsp;$1'));
//     });
// });

});