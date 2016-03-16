<?php
/*
 * Functions.php file for
 * the Covenant Health family
 * of Wordpress themes
 */

if ( ! function_exists('custom_theme_features') ) {
  // Register Theme Features
  function custom_theme_features()
  {

    // Add theme support for HTML5 Semantic Markup
     add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );

    // add support for post thumbnails
    add_theme_support( 'post-thumbnails' );
  }
  add_action( 'after_setup_theme', 'custom_theme_features' );
}

// enqueue style and script for covenant health theme
function add_covenant_scripts() {

  // deregister the version of jquery that gets loaded with Wordpress
  wp_deregister_script('jquery');

  // register the script that need to be loaded with the theme
  // jquery is included here, along with bootstrap.js, parallax.js
  // and smoothscroll.js
  wp_register_script('master-script', get_template_directory_uri() . '/js/ch-main.js', false, false, true);

  // register the master stylesheet for the theme
  wp_register_style('master-stylesheet', get_stylesheet_uri());

  // enqueue the master scripts
  wp_enqueue_script('master-script');

  // enqeue the master stylesheet for the theme
  wp_enqueue_style('master-stylesheet');

}

add_action( 'wp_enqueue_scripts', 'add_covenant_scripts' );

// registration for menus that exist outside of the main page navigation
if ( ! function_exists( 'covenant_nav_menus' ) ) {
  // Register Navigation Menus
  function covenant_nav_menus()
  {

    $locations = array(
      'top-links'    => 'Top Links',
      'main-links'   => 'Main Links',
      'social-links' => 'Social Links',
      'footer-links' => 'Footer Links',
    );
    register_nav_menus( $locations );

  }
  add_action( 'init', 'covenant_nav_menus' );
}

if ( ! function_exists( 'covenant_sidebar' ) ) {

// Register Sidebars
function covenant_sidebar()
{

  $args = array(
    'id'            => 'covenant-sidebar',
    'class'         => 'covenant-sidebar',
    'name'          => 'Covenant Health Sidebar',
    'description'   => 'Blog/News post sidebar',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
  );
  register_sidebar( $args );

}
add_action( 'widgets_init', 'covenant_sidebar' );

}

//Add class to edit button
function custom_edit_post_link($output) {
  $output = str_replace('class="post-edit-link"', 'class="post-edit-link btn btn-primary btn-sm btn-edit-page" role="button"', $output);
  return $output;
}

add_filter('edit_post_link', 'custom_edit_post_link');

// remove the height and width attributes to images
function remove_width_attribute( $html )
{
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function wp_trim_all_excerpt($text) {
// Creates an excerpt if needed; and shortens the manual excerpt as well
global $post;
  $raw_excerpt = $text;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
  }

$text = strip_tags($text);
$excerpt_length = apply_filters('excerpt_length', 55);
$excerpt_more = apply_filters('excerpt_more', '...');
$text = wp_trim_words( $text, $excerpt_length, $excerpt_more ); //since wp3.3
/*$words = explode(' ', $text, $excerpt_length + 1);
  if (count($words)> $excerpt_length) {
    array_pop($words);
    $text = implode(' ', $words);
    $text = $text . $excerpt_more;
  } else {
    $text = implode(' ', $words);
  }
return $text;*/
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt); //since wp3.3
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_trim_all_excerpt');

// set the custom excerpt length
function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Bootstrap pagination function

function wp_bs_pagination($pages = '', $range = 4)

{

     $showitems = ($range * 2) + 1;

     global $paged;

     if(empty($paged)) $paged = 1;


     if($pages == '')

     {

         global $wp_query;

     $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }



     if(1 != $pages)

     {

        echo '<div class="text-center">';
        echo '<nav><ul class="pagination"><li class="disabled hidden-xs"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>';

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";

         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";



         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>

    </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";

             }

         }



         if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";

         echo "</ul></nav>";
         echo "</div>";
     }

}

function my_theme_add_editor_styles() {
    add_editor_style('editor-style.css');
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

function add_page_excerpts() {
  add_post_type_support('page', 'excerpt');
}
add_action('init', 'add_page_excerpts');