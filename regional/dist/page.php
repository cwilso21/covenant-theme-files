<?php
/*
 * Template Name: Two Column Page with Wordpress Dynamic Sidebar
 * Version    : 1.1.1
 * Author     : John Galyon | @galyon_j
 * Author URI : http://www.covenanthealth.com
 * Created    : November 9, 2015
 * Updated    : December 1, 2015
 * @package WordPress
 * @subpackage Covenant_Health
*/
get_header(); ?>

      <div class="container content-container">
        <div class="row breadcrumb-row">
          <div class="col-xs-12 breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
          </div>
        </div>
        <div class="row headline-row">
          <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
          </div>
        </div> <!-- /row headline-row -->
        <div class="row content-row">
          <main class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-content column-left" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class($post->post_name); ?>>
              <?php edit_post_link('<i class="fa fa-pencil"></i> Edit This Page'); ?>
              <?php the_content(); ?>
            </article>
          </main> <!-- /main -->

          <?php get_sidebar(); ?>

<?php get_footer(); ?>