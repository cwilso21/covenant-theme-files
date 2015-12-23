<?php
/*
 * Template Name: Two Column Page With Navigation
 * Version    : 1.0.1
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : November 9, 2015
 * Updated    : December 21, 2015
 * @package WordPress
 * @subpackage Covenant_Health
 */

get_header(); ?>
    <div class="container content-container">
      <div class="row breadcrumb-row">
        <div class="col-xs-12 breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
          <?php if ( function_exists('yoast_breadcrumb') ) {
            $breadcrumbs = yoast_breadcrumb( '<ul class="breadcrumb"><li>', '</li></ul>', false );
            echo str_replace( '|', ' <span class="divider">/</span></li><li>', $breadcrumbs );
          } ?>
        </div> <!-- /.col-xs-12.breadcrumbs -->
      </div> <!-- /.breadcrumb-row -->
      <div class="row headline-row">
          <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
          </div>
        </div> <!-- /row headline-row -->
        <div class="row content-row">
          <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-content column-right pull-right" role="complementary">
            <div class="sidebar nav-sidebar">
              <?php the_field('sidebar_content') ?>
            </div> <!-- /sidebar -->
          </aside> <!-- /aside -->
          <main class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-content column-left" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class($post->post_name); ?>>
              <?php edit_post_link('<i class="fa fa-pencil"></i> Edit This Page'); ?>
              <?php the_content(); ?>
            </article>
          </main> <!-- /main -->
        </div> <!-- /row content-row -->
      </div> <!-- /container content-container -->

<?php get_footer(); ?>