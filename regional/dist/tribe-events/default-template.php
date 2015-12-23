<?php
/*
 * Default Events Template
 * Version    : 1.0.0
 * Author     : John Galyon | @galyon_j
 * Author URI : http://www.covenanthealth.com
 * Created    : December 2, 2015
 * @package WordPress
 * @subpackage Covenant_Health
*/

if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

get_header(); ?>

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