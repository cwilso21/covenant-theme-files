<?php
/**
 * Version    : 1.2.0
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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- initialize Modernizr so that we can track feature adoption on client browsers -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-covenant.js"></script>

    <?php wp_head(); ?>
  </head>
  <body>
    <a href="#top" data-scroll class="scrollToTop"><i class="fa fa-chevron-up"><span class="sr-only">scroll to top of page</span></i></a>
    <header role="banner" id="top" class="header">
      <div class="container top-links-container">
        <div class="row">
          <div class="col-xs-12">
            <?php
              $defaults = array(
                'theme_location'  => 'top-links',
                'menu'            => 'top-links',
                'container'       => false,
                'menu_class'      => 'top-links',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'depth'           => 0,
              );

              wp_nav_menu( $defaults );
            ?>
          </div> <!-- /col-xs-12 -->
        </div> <!-- /row -->
      </div> <!-- /top-links-container -->

      <nav class="navbar navbar-default">
        <div class="container">
          <!-- brand and toggle information -->
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target="#ch-navbar" data-toggle="collapse" type="button">
              <span class="toggle-text">menu</span>
            </button> <!-- /navbar-toggle -->
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logos/covenant-health.svg" title="Covenant Health logo" alt="Covenant Health">
              <span class="sr-only"><?php bloginfo( 'name' ); ?></span>
            </a>
          </div> <!-- /navbar-header -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="ch-navbar">
            <ul class="nav navbar-nav navbar-right">
              <?php
              $defaults = array(
                  'theme_location'  => 'main-links',
                  'menu'            => 'main-links',
                  'container'       => false,
                  'menu_class'      => '',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'depth'           => 0,
                  'items_wrap'      => '%3$s'
                );

                wp_nav_menu( $defaults );
              ?>
              <li class="hidden-sm hidden-md hidden-lg">
                <form class="navbar-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                  <div class="input-group">
                    <input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search',''); ?>">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Go</button>
                    </span>
                  </div>
                </form>
              </li>
              <li class="hidden-xs dropdown">
                <a href="#" title="Search" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-search"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <form class="navbar-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                      <div class="input-group">
                        <input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search',''); ?>">
                        <span class="input-group-btn">
                          <button class="btn btn-primary" type="submit">Go</button>
                        </span>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul> <!-- /navbar-nav -->
          </div> <!--/navbar-collapse -->
        </div> <!-- /container-fluid -->
      </nav> <!-- /nav -->
    </header> <!-- /header -->

    <div class="content-wrapper">