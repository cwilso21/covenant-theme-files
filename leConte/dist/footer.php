    </div> <!-- /content-wrapper -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 brand-section pull-right">
            <p>
              <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/leconte-logo.png" alt="LeConte Medical Center logo" title="LeConte Medical Center logo"></a><br>
              &copy; <?php echo date('Y'); ?> LeConte Medical Center<br>
              742 Middle Creek Road<br>
              Sevierville, TN 37862<br>
              (865) 453-WELL
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