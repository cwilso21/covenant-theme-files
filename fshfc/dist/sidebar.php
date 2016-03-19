          <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4" role="complementary">
            <div class="sidebar well">
              <?php if ( is_active_sidebar( 'covenant-sidebar' ) ) : ?>

                <?php dynamic_sidebar( 'covenant-sidebar' ); ?>

              <?php else : ?>

                <!-- This content shows up if there are no widgets defined in the backend. -->

                <div class="alert alert-message">

                  <p><?php _e("Please activate some Widgets"); ?>.</p>

                </div>

              <?php endif; ?>
            </div> <!-- /sidebar -->
          </aside> <!-- /aside -->
        </div> <!-- /row content-row -->
        </div> <!-- /container content-container -->