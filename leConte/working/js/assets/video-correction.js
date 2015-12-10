/*
 * Quick and dirty Jquery-based video
 * collection and responsive cleanup tool
 * for bootstrap
 *
 * John Galyon | @galyon_j
 * h/t to @chriscoyier, @mdo, @fat, and @thierrykoblentz
 */

$(document).ready(function() {
  // collect everything that might contain embedded content
  var $allIframes = $("iframe[src*='//player.vimeo.com'], iframe[src*='//www.youtube.com'], iframe[src*='//www.google.com/maps'], object, embed");

  $allIframes.each(function() {

    // clean up the iframe element and add a
    // responsive class to key on later for adding wrappers
    $(this).removeAttr('height width').addClass('embed-responsive-item');
  });
});
