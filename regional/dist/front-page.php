<?php
/*
 * Template Name: Front-Page Template
 * Version    : 1.0.0
 * Author     : John Galyon | @galyon_j
 * Author URI : http://www.covenanthealth.com
 * Created    : November 9, 2015
 * Updated    : December 13, 2015
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
              <?php the_content(); ?>
            </main>
          </div>
        </div>
        <hr>
      </div> <!-- /welcome-container -->
      <div class="container resources-container clearfix">
        <div class="row resources-row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col services-col">
            <div class="well">
              <h2>Services Quick Links</h2>
              <p>Bacon ipsum dolor amet velit ut ut cow voluptate ham hock cupim ut eiusmod ribeye fatback lorem. Et leberkas enim fatback ham hock. Irure proident magna beef ribs, flank deserunt short ribs picanha.</p>
              <ul class="list--block-display">
                <li><a href="#">Bariatrics</a></li>
                <li><a href="#">Cancer</a></li>
                <li><a href="#">Cardiology</a></li>
                <li><a href="#">Neuroscience &amp; Stroke</a></li>
                <li><a href="#">Orthopedics</a></li>
                <li><a href="#">Rehabilitation</a></li>
                <li><a href="#">Women's Services</a></li>
              </ul>
              <p>For a full listing of our services, please visit our <a href="<?php echo get_page_link(14); ?>">services page</a>.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col account-col">
            <div class="well">
              <h2>Patient Resources</h2>
              <p>Bacon ipsum dolor amet velit ut ut cow voluptate ham hock cupim ut eiusmod ribeye fatback lorem. Et leberkas enim fatback ham hock. Irure proident magna beef ribs, flank deserunt short ribs picanha leberkas cupim dolor ea.</p>
              <ul class="front-page-subnav fa-ul">
                <li>
                  <a href="<?php echo get_page_link(16); ?>"><i class="fa-li fa fa-user-md"></i> Physician Directory</a>
                  <select class="form-control">
                    <option>Select from the list below</option>
                    <option value="#">Show all facilities</option>
                    <option value="#">Claiborne Medical Center</option>
                    <option value="#">Cumberland Medical Center</option>
                    <option value="#">Fort Sanders Regional Medical Center</option>
                    <option value="#">Fort Loudoun Medical Center</option>
                    <option value="#">LeConte Medical Center</option>
                    <option value="#">Methodist Medical Center of Oak Ridge</option>
                    <option value="#">Morristown-Hamblen Health System</option>
                    <option value="#">Parkwest Medical Center</option>
                    <option value="#">Roane Medical Center</option>
                    <option value="#">Thompson Cancer Survival Center</option>
                  </select>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/events"><i class="fa-li fa fa-calendar"></i> Classes and Events</a><br>
                  Register for a class or event.
                </li>
                <li>
                  <a href="<?php echo get_page_link(32); ?>"><i class="fa-li fa fa-sign-in"></i> Your Account</a><br>
                  Register for a new account or log into an existing account.
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 intro-col twitter-feed-col">
            <div class="well">
              <?php echo do_shortcode('[twitter-widget username="fsregional" title="Twitter Feed" before_title="<h2>" after_title="</h2>" items="3" errmsg="The twitter service doesn\'t appear to be responding. Please check back later." hiderss="true" showintents="false" hidefrom="true" showfollow="false"]') ?>
            </div>
          </div>
        </div> <!-- /resources-row -->
      </div> <!-- /resources-container -->
      <div class="jumbotron parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/front-page-assets/regional-mob-bkg.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="well translucent-well">
                <h2>Our Services</h2>
                <p>Visit our <a href="<?php echo get_page_link(189); ?>">services page</a> for more information about each of the services offered at Fort Sanders Regional Medical Center.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- parallax-window -->
      <div class="container system-news">
        <div class="row news-intro-text">
          <div class="col-xs-12">
            <h2>System News</h2>
            <p>Bacon ipsum dolor amet ullamco exercitation shank in chicken ad occaecat capicola elit doner. Fugiat quis fatback culpa dolor ball tip pork beef. Spare ribs velit commodo nisi picanha pork loin consectetur. Kielbasa occaecat pork loin corned beef cillum, aliqua tongue turkey eiusmod irure cow ullamco beef ribs. Bresaola frankfurter proident, ullamco ea bacon laborum et. Leberkas hamburger ribeye velit. Laborum ham sed tempor shank ground round.</p>
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