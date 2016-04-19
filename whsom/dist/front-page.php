<?php
/*
 * Template Name: Front-Page Template
 * Version    : 1.0.2
 * Author     : John Galyon
 * Author URI : http://www.covenanthealth.com
 * Created    : December 7, 2015
 * Updated    : April 18, 2015
 * @package WordPress
 * @subpackage Covenant_Health
*/
get_header(); ?>

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
        <div class="container masthead-container">
          <div class="row masthead-row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 masthead-quick-links">
              <?php the_field('masthead_quick_links') ?>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-5 hidden-xs pull-right masthead-copy-area">
              <?php the_field('masthead_ad_text') ?>
            </div>
          </div>
        </div>
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
      <div class="container resources-container clearfix">
        <div class="row resources-row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col services-col">
            <div class="well">
              <h3>Services Quick Links</h3>
              <p>Our expert gynecologists are board certified and offer the latest in women’s health care services, including but not limited to:</p>
              <ul class="list--block-display">
                <li><a href="<?php echo site_url(); ?>/gynecology/">Gynecology</a></li>
                <li><a href="<?php echo site_url(); ?>/bioidenticalhormones/">Hormone Replacement Therapy</a></li>
                <li><a href="<?php echo site_url(); ?>/obstetrics/">Obstetrics</a></li>
                <li><a href="<?php echo site_url(); ?>/robotics/">Robotics/Minimally Invasive Surgery</a></li>
                <li><a href="<?php echo site_url(); ?>/vaginal-rejuvenation/">Vaginal Rejuvenation</a></li>
              </ul>
              <p>For a complete list of our services and procedures, click <a href="<?php echo site_url(); ?>/services-procedures/">here</a>.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col account-col">
            <div class="well">
              <h3>Patient Resources</h3>
              <p>We believe you deserve exceptional care. That's why we commit to excellence – every patient, every time.</p>
              <ul class="list--block-display">
                <li><a href="<?php echo site_url(); ?>/accepted-insurances/">Accepted Insurances</a></li>
                <li><a href="<?php echo site_url(); ?>/patient-registration-forms/">Patient Forms</a></li>
                <li><a href="<?php echo site_url(); ?>/patient-portal/">Patient Portal</a></li>
                <li><a href="<?php echo site_url(); ?>/locations/">Office Locations</a></li>
                <li><a href="<?php echo site_url(); ?>/frequently-asked-questions/">Frequently Asked Questions</a></li>
              </ul>
              <p>Call (865) 541-1975 Monday-Friday from 9 am – 4 pm or fill out our <a href="<?php echo site_url(); ?>//contact-us/">contact form</a> at least 24 hours in advance to request an appointment.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col feed-col">
            <div class="well">
              <h3>Facebook Feed</h3>
              <?php echo do_shortcode('[custom-facebook-feed]') ?>
            </div>
          </div>
        </div> <!-- /resources-row -->
      </div> <!-- /resources-container -->
      <div class="jumbotron parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/front-page-assets/baby-womensservices-masthead.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="well translucent-well">
                <?php the_field('call_to_action') ?>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- parallax-window -->
      <div class="container system-news">
        <div class="row news-intro-text">
          <div class="col-xs-12 news-col">
            <h2><?php echo bloginfo('name'); ?> News</h2>
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
              <p><?php echo excerpt(20); ?></p>
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