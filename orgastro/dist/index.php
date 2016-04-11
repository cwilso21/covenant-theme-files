<?php
/*
 * Index Master Template
 * Version    : 1.1.2
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
          </div> <!-- /breadcrumbs -->
        </div> <!-- /breadcrumbs-row -->
        <div class="row content-row">
          <main class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-content column-left">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <h2 id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
              <small class="posted-on">Posted on <?php echo get_the_date( get_option('date_format') ); ?></small>
              <?php the_excerpt(); ?> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read more</a>
              <hr>

              <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
              <?php endif; ?>

              <?php
                if (function_exists("wp_bs_pagination")) {
                  //wp_bs_pagination($the_query->max_num_pages);
                  wp_bs_pagination();
                }
              ?>
          </main> <!-- /main -->
          <?php get_sidebar(); ?>

<?php get_footer(); ?>