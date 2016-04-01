<?php
/*
 * Template Name: Landing Page with Hero Image
 * Version    : 1.2.0
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : November 9, 2015
 * Updated    : March 31, 2016
 * @package WordPress
 * @subpackage Covenant_Health
*/
get_header('landing-page'); ?>

      <?php if (has_post_thumbnail($post->ID)): ?>
      <?php
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full-size' );
        $image = $image[0];
      ?>
      <?php else :
        $image = get_bloginfo('stylesheet_directory') . '/img/front-page-assets/default-masthead.jpg';
      ?>
      <?php endif; ?>
      <div class="jumbotron masthead" data-parallax="scroll" data-image-src="<?php echo $image; ?>">
        <div class="container headline-container">
          <div class="row headline-row landing-page-headline-row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
              <h1><?php the_title(); ?></h1>
            </div> <!-- /col-xs-12 -->
          </div> <!-- /row headline-row -->
        </div> <!-- /container headline-container -->
      </div>
      <div class="container content-container">
        <div class="row content-row">
          <main class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 main-content" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class($post->post_name); ?>>
              <?php the_content(); ?>
            </article>
          </main> <!-- /main-content -->
        </div> <!-- /row.content-row -->
      </div> <!-- /container content-container -->

<?php get_footer(); ?>