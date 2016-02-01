<?php
/*
 * Covenant Health Events Template
 * Version    : 1.0.1
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : December 2, 2015
 * Updated    : December 21, 2015
 * @package WordPress
 * @subpackage Covenant_Health
*/

if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

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
          <main class="col-xs-12 main-content" role="main">
            <article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
              <?php tribe_events_before_html(); ?>
              <?php tribe_get_view(); ?>
              <?php tribe_events_after_html(); ?>
            </article>
          </main> <!-- /main-content -->
        </div> <!-- /row.content-row -->
      </div> <!-- /container content-container -->

<?php get_footer(); ?>