<?php
/*
 * The template file for displaying 404 Page
 * Version    : 1.1.4
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : November 9, 2015
 * Updated    : December 21, 2015
 * @package WordPress
 * @subpackage Covenant_Health
*/
get_header(); ?>

      <div class="container content-container">
          <div class="row headline-row">
            <div class="col-xs-12">
              <h1 class="error-headline">404 error</h1>
            </div> <!-- /col-xs-12 -->
          </div> <!-- /row headline-row -->
          <main>
            <div class="row content-row">
              <div class="col-xs-12">
                <article>
                  <p class="lead">The page you were trying to reach doesn't seem to exist. This is usually the result of a bad or outdated link. We apologize for any inconvenience.</p>
                  <h2>What can I do now?</h2>
                  <p>If this is your first time visiting LeConte Medical Center, welcome! We apologize for the circumstances under which we’re meeting. Here’s where you can go from here:</p>
                  <ul>
                    <li>View our complete list of medical and community-based efforts at our <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>">services</a> page.</li>
                    <li>Browse our roster of affiliated physicians, or search for a specific provider at our <a href="<?php echo get_permalink( get_page_by_path( 'physicians' ) ) ?>">physicians</a> page.</li>
                    <li>Learn more about the amenities provided to our <a href="<?php echo get_permalink( get_page_by_path( 'patients-visitors' ) ) ?>">patients and visitors</a>.</li>
                    <li>Search for and learn more about specific health-related topics in our <a href="<?php echo get_permalink( get_page_by_path( 'health-library' ) ) ?>">health library</a>.</li>
                    <li>Learn about Covenant Health, our community, and search for employment at our <a href="<?php echo get_permalink( get_page_by_path( 'careers' ) ) ?>">careers</a> site.</li>
                  </ul>

                  <hr>

                  <h2>Here are our most recent news items</h2>

                  <div class="row posts-row">
                    <?php
                    // The Query
                    query_posts('posts_per_page=8');?>

                    <?php // The Loop
                    while ( have_posts() ) : the_post(); ?>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 post-wrapper">
                          <div class="well">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive post-thumbnail-img")); ?></a>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read more</a>
                          </div>
                        </div>
                    <?php endwhile;

                    // Reset Query
                    wp_reset_query();
                    ?>
                  </div> <!-- /posts-row -->
                </article>
              </div> <!-- /col-xs-12 -->
            </div> <!-- /row content-row -->
          </main> <!-- /main -->
        </div> <!-- /container content-container -->

<?php get_footer(); ?>