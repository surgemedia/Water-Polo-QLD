/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */




(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired


      }
      
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },

    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

    /*=============================================
  = Enabling multi-level navigation =
  ===============================================*/
  $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      $(this).parent().siblings().removeClass('open');
      $(this).parent().toggleClass('open');
  });
  $('#sponsors .owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:3
          }
      }
  });

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
  $('.homepage-heading.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      autoHeight:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });

$('.oembed .placeholder.video').on('click', function(event) {
      $(this).addClass('playing');
});

$('.close-tab').on('click',function(event){
  event.preventDefault();
  $(this).parent().removeClass('active');
  $(".nav-tabs li").removeClass('active');
});

$("[data-toggle='reveal']").on('click',function(event){
    event.preventDefault();
    var id = $(this).attr("href");
    var show= $(this).parents(".card").siblings(".show-reveal");
    $(this).remove();
    $(id).clone().appendTo(show);

});

})(jQuery); // Fully reference jQuery after this point.

(function($) {
  $(document).ready(function(){
   
function popGallery(id){
          $('#'+id+' button').on('click', function (event) {
            event.preventDefault();
            var options = {
              container: '#'+id+' .blueimp-gallery'
            };
            blueimp.Gallery($('#'+id+' .links a'), options);
          })
        };


var windowObjectReference;
function openRequestedPopup(button) {
  windowObjectReference = window.open(
     button.dataset.target,
    "DescriptiveWindowName",
    "resizable,scrollbars,status,navigator"
  );
}

 });




}(jQuery));

