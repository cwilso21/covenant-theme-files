<?php
/*
 * Template Name: Landing Page with Hero Image
 * Version    : 1.1.4
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : November 9, 2015
 * Updated    : December 21, 2015
 * @package WordPress
 * @subpackage Covenant_Health
*/
get_header('landing-page'); ?>

      <div class="jumbotron callout">
        <?php the_field('hero_image') ?>
      </div> <!-- /jumbotron -->
      <div class="container content-container">
        <div class="row headline-row landing-page-headline-row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
            <h1><?php the_title(); ?></h1>
          </div> <!-- /col-xs-12 -->
        </div> <!-- /row headline-row -->
        <div class="row content-row">
          <main class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 main-content" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class($post->post_name); ?>>
              <?php edit_post_link('<i class="fa fa-pencil"></i> Edit This Page'); ?>
              <?php the_content(); ?>
            </article>
          </main> <!-- /main-content -->
        </div> <!-- /row.content-row -->
      </div> <!-- /container content-container -->

<?php get_footer(); ?>