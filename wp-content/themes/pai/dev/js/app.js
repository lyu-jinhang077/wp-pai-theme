;
window.$ = jQuery;
var _app = {
  init: function() {

  },

  initNavbar: function() {
    function openMobNav() {
      $('.mobnav.sidebar').addClass('show');
      $('.mobnav-backdrop').fadeIn();
      $('body').css('overflow', 'hidden');
    }

    function closeMobNav() {
      $('.mobnav.sidebar').removeClass('show');
      $('.mobnav-backdrop').fadeOut();
      $('body').css('overflow', 'auto');
    }
    $('.btn-mobnav').click(openMobNav);
    $('.mobnav-backdrop, .btn-close-mobnav').click(closeMobNav);
  },

  onScroll: function() {
    if (window.scrollY > 100) {
      $('body').addClass('sticky-header');
    } else {
      $('body').removeClass('sticky-header');
    }
  }
};

$(document).ready(function() {
  _app.initNavbar();
  $(window).on('scroll', _app.onScroll);
  $(window).on('resize', _app.onResize);
});