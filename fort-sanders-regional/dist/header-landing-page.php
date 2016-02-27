<?php
/**
 * Version    : 1.0.0
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : November 9, 2015
 * Updated    : December 21, 2015
 * @package WordPress
 * @subpackage Covenant_Health
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

    <!-- Apple touch icons -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-precomposed.png">

    <!-- stylesheets -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

    <!-- initialize Modernizr so that we can track feature adoption on client browsers -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.cov.js"></script>

    <?php wp_head(); ?>
  </head>
  <body>
    <a href="#top" data-scroll class="scrollToTop"><i class="fa fa-chevron-up"><span class="sr-only">scroll to top of page</span></i></a>

    <div class="content-wrapper" id="top">