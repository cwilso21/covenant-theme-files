<?php
/**
 * Version    : 1.2.0
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : January 13, 2016
 * Modified   : January 14, 2016
 * @package WordPress
 * @subpackage Covenant_Health
*/
?>
    </div> <!-- /content-wrapper -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 brand-section pull-right">
            <p>
              <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/pnrc.svg" title="<?php get_bloginfo('name'); ?> logo" alt="<?php $blog_title = get_bloginfo('name'); ?> logo"></a><br>
              &copy; <?php echo date('Y'); ?> Patricia Neal Rehabilitation Center<br>
              1901 Clinch Ave.<br>
              Knoxville, TN 37916<br>
              (865) 541-3600
            </p>
          </div> <!-- /.brand-section -->
          <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 link-section pull-left">
            <div class="row">
              <div class="col-xs-12 social-links-col">
                <?php
                  $defaults = array(
                    'theme_location'  => 'social-links',
                    'menu'            => 'social-links',
                    'container'       => false,
                    'menu_class'      => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'depth'           => 0,
                  );

                  wp_nav_menu( $defaults );
                ?>
                <hr>
              </div> <!-- /.social-links-col -->
              <div class="col-xs-12 footer-links-col">
                <?php
                  $defaults = array(
                    'theme_location'  => 'footer-links',
                    'menu'            => 'footer-links',
                    'container'       => false,
                    'menu_class'      => 'footer-links',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'depth'           => 0,
                  );

                  wp_nav_menu( $defaults );
                ?>
              </div> <!-- /.footer-links-col -->
            </div> <!-- /.row -->
          </div> <!-- /.link-section -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </footer> <!-- /.footer -->
    <?php wp_footer(); ?>
  </body>
</html>