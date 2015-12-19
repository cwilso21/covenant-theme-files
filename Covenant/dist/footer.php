<?php
/**
 * Covenant Health Theme Footer File
 * Version    : 1.0.0
 * Author     : John Galyon | @galyon_j
 * Author URI : http://www.covenanthealth.com
 * Created    : December 12, 2015
 * Updated    : December 18, 2015
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
              <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/covenant-health.svg" alt="Covenant Health logo" title="Covenant Health logo"></a><br>
              &copy; <?php echo date('Y'); ?> Covenant Health<br>
              100 Fort Sanders West Blvd.<br>
              Knoxville, TN 37922<br>
              (865) 374-1000
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