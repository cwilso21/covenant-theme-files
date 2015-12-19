// Initiate smoothScrolling
smoothScroll.init({
  selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
  selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
  speed: 666, // Integer. How fast to complete the scroll in milliseconds
  easing: 'easeInOutCubic', // Easing pattern to use
  updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
  offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
});

$(document).ready(function () {

  // Modernizr polyfills
  if (!Modernizr.svg) {
    var imgs = document.getElementsByTagName('img');
    var svgExtension = /.*\.svg$/
    var l = imgs.length;
    for(var i = 0; i < l; i++) {
      if(imgs[i].src.match(svgExtension)) {
          imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
          console.log(imgs[i].src);
      }
    }
  }

  //fade in/out for scroll to top button
  //Check to see if the window is top if not then display button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      // if the window's position is greater than 100 pixels away from the top
      // of the page, fade the scroll button in
      $('.scrollToTop').fadeIn();
    } else {
      // if not, fade the button so it's out of the way
      $('.scrollToTop').fadeOut();
    }
  });

  if ($('.nav-sidebar')) {
    if ($('.sidenav-menu').length === 0) {
      $('.nav-sidebar ul').addClass('nav sidenav-menu');
    }
  }

  var mqxs = window.matchMedia('screen and (max-width: 767px)');
  var mqsm = window.matchMedia('screen and (min-width: 768px) and (max-width: 991px)');
  var mqmd = window.matchMedia('screen and (min-width: 992px) and (max-width: 1199px)');
  var mqlg = window.matchMedia('screen and (min-width: 1200px)');

  // fix weird column wrapping by adding a
  // container div after a certain number
  // have been output at a given display width
  if ((mqlg.matches || mqmd.matches) && $('.post-wrapper').length) {
    $('.post-wrapper:nth-of-type(4)').after('<div class="clearfix visible-lg-block visible-md-block"></div>');
  } else if ((mqsm.matches) && $('.post-wrapper').length){
    $('.post-wrapper:nth-of-type(2n)').after('<div class="clearfix visible-sm-block"></div>');
  } else {
    $('.row .col-xs-6.col-sm-3:nth-of-type(2n)').after('<div class="clearfix visible-xs-block"></div>');
  }

  // if the screen width is less than 767px and
  // the sidebar has a child div with a classname
  // of "sidenav-menu" convert the sidenav menu
  // to a dropdown menu
  if ((mqsm.matches || mqxs.matches) && $('.sidenav-menu').length) {

    // capture the text contained in the h3 tag as html
    // to be inserted later
    var headerText = $('.sidebar h3').html();

    // inject a div into the sidebar and wrap all
    // children inside it
    $('.sidebar').wrapInner('<div class="dropdown"></div>');

    // convert the h3 tag in the sidebar to a button
    $('.dropdown > h3').replaceWith('<button class="btn btn-primary dropdown-toggle btn-lg" type="button" id="sidebar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' + headerText + '&nbsp;<i class="fa fa-caret-down"></i></button>');

    // add dropdown functionality to the sidenav-menu
    // and add some stuff for screen readers
    $('.sidenav-menu').addClass('dropdown-menu').removeClass('nav');
    $('.sidenav-menu').attr('role','menu');
    $('.sidenav-menu').attr('aria-labelledby','sidebar-navigation');
  }

  // remove the style attribute from wordpress captions altogether
  // so that css can do it's job
  $('.wp-caption').removeAttr('style');

  // remove the automatically generated paragraph tags from hero images
  $('.jumbotron.callout p a').unwrap();

  // remove empty paragraph tags
  $('p:empty').remove();

  // remove last hr from blog archive pages
  $('.text-center').prev('hr').css('display','none');

  // add 'data scroll' selector to anchor links
  $('a[href^="#"]').each(function() {
    $(this).attr('data-scroll', '');
  });

  // collect everything that might contain embedded content
  var $allIframes = $("iframe[src^='//player.vimeo.com'], iframe[src*='//www.youtube.com'], iframe[src*='//www.google.com/maps'], object, embed");

  $allIframes.each(function() {

    // clean up the iframe element and add a
    // responsive class to key on later for adding wrappers
    $(this).removeAttr('height width').addClass('embed-responsive-item');

    // add a wrapper around the iframe
    $(this).wrap('<div class="embed-responsive embed-responsive-16by9"></div>');
  });

  // facebook feed styling fixes
  $('.header-text').removeAttr('style');

  // fix silliness with the account page content widths
  $('.widecolumn').wrap('<div class="container signup-container><div class="row signup-row"><main class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-content" role="main"></main></div></div>');

  $('.tribe-events-ical.tribe-events-button').removeClass('tribe-events-ical tribe-events-button').addClass('btn btn-primary btn-sm');
  $('.tribe-events-gcal.tribe-events-button').removeClass('tribe-events-gcal tribe-events-button').addClass('btn btn-primary btn-sm');
  $('.tribe-bar-views-inner select').addClass('form-control');
  $('.tribe-bar-date-filter, .tribe-bar-search-filter').wrapInner('<div class="form-group"></div>');
  $('#tribe-bar-date, #tribe-bar-search').addClass('form-control');
  $('#tribe-events-content h2').removeAttr('class');
  $('.tribe-icon-month').html('<i class="fa fa-calendar"></i>Month');
  $('.tribe-icon-list').html('<i class="fa fa-list-alt"></i>List');
  $('.tribe-icon-day').html('<i class="fa fa-calendar-check-o"></i>Day');

  // make the footer sticky. Ewww.
  $(window).resize(function () {
    // assign a whole mess of variables
    var windowHeight = $(window).height();
    var contentHeight = $('.content-wrapper').height();
    var surroundHeight = $('header').outerHeight() + $('footer').outerHeight();

    if (contentHeight < windowHeight - (surroundHeight)) {

      // if the content-wrapper height is less than the
      // combined heights of the footer and the header
      // subtracted from the height of the container window,
      // set the bottom margin of the content-wrapper element
      $('.content-wrapper').css('margin-bottom', windowHeight - surroundHeight - contentHeight);
    }
  }).resize();
});