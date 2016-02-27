<?php
/*
 * Template Name: Front Page Template
 * Version    : 1.0.0
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : November 9, 2015
 * Updated    : December 21, 2015
 * @package WordPress
 * @subpackage Covenant_Health
*/
get_header(); ?>

      <div class="jumbotron callout">
        <?php the_field('hero_image') ?>
      </div> <!-- /jumbotron -->
      <div class="container welcome-container">
        <div class="row introduction-row">
          <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
            <main id="post-<?php the_ID(); ?>" <?php post_class($post->post_name); ?>>
              <?php edit_post_link('<i class="fa fa-pencil"></i> Edit This Page'); ?>
              <?php the_content(); ?>
            </main>
          </div>
        </div>
      </div> <!-- /welcome-container -->
      <div class="container resources-container">
        <div class="row resources-row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col services-col">
            <div class="well">
              <h3>Fitness &amp; Sports</h3>
              <p>Bacon ipsum dolor amet velit ut ut cow voluptate ham hock cupim ut eiusmod ribeye fatback lorem. Et leberkas enim fatback ham hock. Irure proident magna beef ribs, flank deserunt short ribs picanha.</p>
              <ul class="list--block-display">
                <li><a href="#">Aquatics</a></li>
                <li><a href="#">Group Fitness</a></li>
                <li><a href="#">Weight Management</a></li>
                <li><a href="#">Performance Training</a></li>
                <li><a href="#">Personal Training</a></li>
                <li><a href="#">Racquet Sports</a></li>
                <li><a href="#">Youth Programs</a></li>
              </ul>
              <p>For a full listing of our services, please visit our <a href="<?php echo get_page_link(14); ?>">services page</a>.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col account-col">
            <div class="well">
              <h3>Member Resources</h3>
              <p>Bacon ipsum dolor amet velit ut ut cow voluptate ham hock cupim ut eiusmod ribeye fatback lorem. Et leberkas enim fatback ham hock. Irure proident magna beef ribs, flank deserunt short ribs picanha.</p>
              <ul class="front-page-subnav fa-ul">
                <li>
                  <a href="https://clients.mindbodyonline.com/classic/home?studioid=28506"><i class="fa-li fa fa-user-md"></i> Class Schedule</a><br>
                  Browse our group fitness classes.
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/events"><i class="fa-li fa fa-calendar"></i> Events Calendar</a><br>
                  Programming and special events.
                </li>
                <li>
                  <a href="<?php echo get_page_link(32); ?>"><i class="fa-li fa fa-sign-in"></i> Member Rewards</a><br>
                  Benefits for loyal members.
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col feed-col">
            <div class="well">
              <?php echo do_shortcode('[custom-facebook-feed]') ?>
            </div>
          </div>
        </div> <!-- /resources-row -->
      </div> <!-- /resources-container -->
      <div class="jumbotron parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/front-page-assets/boy-swimming.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="well translucent-well">
                <h2>Aquatic Fitness Classes</h2>
                <p>Visit our <a href="<<?php echo get_permalink( get_page_by_path( 'fitness-sports' ) ) ?>">Fitness &amp; Sports</a> page to learn more.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- parallax-window -->
      <div class="container system-news">
        <div class="row news-intro-text">
          <div class="col-xs-12 news-col">
            <div class="col-xs-12 news-col">
              <?php the_field('news_content') ?>
            </div>
          </div>
        </div> <!-- /news-intro-text -->
        <div class="row posts-row">
          <?php
          // The Query
          query_posts('posts_per_page=8');?>

          <?php // The Loop
            while ( have_posts() ) : the_post(); ?>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 post-wrapper">
            <article class="well">
              <h2 class="sr-only"><?php the_title_attribute(); ?></h2>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive post-thumbnail-img")); ?></a>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read more</a>
            </article>
          </div>
            <?php endwhile;

            // Reset Query
            wp_reset_query();
            ?>
          </div> <!-- /post-container -->
        </div> <!-- /news-post-row -->
      </div> <!-- /system-news -->

<?php get_footer(); ?>