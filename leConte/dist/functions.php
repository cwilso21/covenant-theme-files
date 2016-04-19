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
function covenant_scripts() {
    // deregister the version of jquery that gets loaded with Wordpress
    wp_deregister_script('jquery');

    // register the scrips that need to be loaded with the theme
    wp_register_script('main', get_template_directory_uri() . '/js/ch-main.js');

    // enqeue the master stylesheet
    wp_enqueue_style('covenant-main', get_stylesheet_uri());

    // enqueue the master scripts
    wp_enqueue_script('main', get_template_directory_uri() . '/js/ch-main.js', false, false, true);
    // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
}
add_action( 'wp_enqueue_scripts', 'covenant_scripts' );

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


// function to automatically trim the excerpt length
// to acceptable limits on the front page
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


// set the custom excerpt length
function custom_excerpt_length( $length ) {
  return 55;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Bootstrap pagination function

function wp_bs_pagination($pages = '', $range = 4) {

 $showitems = ($range * 2) + 1;
 global $paged;

 if(empty($paged)) $paged = 1;

 if($pages == '') {

  global $wp_query;

  $pages = $wp_query->max_num_pages;

  if(!$pages) {

    $pages = 1;
  }

}

 if(1 != $pages) {

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

// fix editor styles so that they match the
// appearance of content styles on the live page
function my_theme_add_editor_styles() {
    add_editor_style('editor-style.css');
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

function add_page_excerpts() {
  add_post_type_support('page', 'excerpt');
}
add_action('init', 'add_page_excerpts');

// remove certain page templates that,
// while necessary for the site to function
// may be confusing for some users
function my_remove_page_template() {
  global $pagenow;
  if ( in_array( $pagenow, array( 'post-new.php', 'post.php') ) && get_post_type() == 'page' ) { ?>
    <script type="text/javascript">
      (function($){
        $(document).ready(function(){
          $('#page_template option[value="default"]').remove();
        })
      })(jQuery)
    </script>
  <?php
  }
}
add_action('admin_footer', 'my_remove_page_template', 10);

// function to prevent certain html tags
// from being stripped out of the editor
// on save in a multisite installation
function allowed_multisite_tags($multisite_tags) {
  $multisite_tags['audio'] = array(
    'autoplay'  => true,
    'controls'  => true,
    'loop'      => true,
    'muted'     => true,
    'preload'   => true,
    'src'       => true
  );
  $multisite_tags['button'] = array(
    'autofocus'       => true,
    'class'           => true,
    'disabled'        => true,
    'form'            => true,
    'formaction'      => true,
    'formenctype'     => true,
    'formmethod'      => true,
    'formnovalidate'  => true,
    'formtarget'      => true,
    'name'            => true,
    'type'            => true,
    'value'           => true
  );
  $multisite_tags['embed'] = array(
    'class'   => true,
    'height'  => true,
    'src'     => true,
    'style'   => true,
    'type'    => true,
    'width'   => true
  );
  $multisite_tags['form'] = array(
    'accept'      => true,
    'action'      => true,
    'autcomplete' => true,
    'method'      => true,
    'name'        => true,
    'target'      => true
  );
  $multisite_tags['fieldset'] = array(
    'disabled'  => true,
    'form'      => true,
    'name'      => true
  );
  $multisite_tags['iframe'] = array(
    'allowfullscreen' => true,
    'frameborder'     => true,
    'height'          => true,
    'name'            => true,
    'src'             => true,
    'style'           => true,
    'width'           => true
  );
  $multisite_tags['input'] = array(
    'accept'          => true,
    'autocomplete'    => true,
    'autofocus'       => true,
    'class'           => true,
    'disabled'        => true,
    'form'            => true,
    'formaction'      => true,
    'formenctype'     => true,
    'formmethod'      => true,
    'formnovalidate'  => true,
    'formtarget'      => true,
    'height'          => true,
    'id'              => true,
    'list'            => true,
    'max'             => true,
    'maxlength'       => true,
    'min'             => true,
    'multiple'        => true,
    'name'            => true,
    'pattern'         => true,
    'placeholder'     => true,
    'readonly'        => true,
    'required'        => true,
    'size'            => true,
    'src'             => true,
    'step'            => true,
    'type'            => true,
    'value'           => true,
    'width'           => true
  );
  $multisite_tags['label'] = array(
    'for'   => true,
    'form'  => true
  );
  $multisite_tags['legend'] = array(
    'align' => true
  );
  $multisite_tags['object'] = array(
    'data'    => true,
    'form'    => true,
    'height'  => true,
    'name'    => true,
    'type'    => true,
    'width'   => true,
  );
  $multisite_tags['optgroup'] = array(
    'disabled'  => true,
    'label'     => true
  );
  $multisite_tags['option'] = array(
    'disabled'  => true,
    'label'     => true,
    'selected'  => true,
    'value'     => true
  );
  $multisite_tags['param'] = array(
    'name'      => true,
    'type'      => true,
    'value'     => true,
    'valuetype' => true
  );
  $multisite_tags['select'] = array(
    'autofocus' => true,
    'disabled'  => true,
    'form'      => true,
    'multiple'  => true,
    'name'      => true,
    'required'  => true,
    'size'      => true
  );
  $multisite_tags['script'] = array(
    'async'   => true,
    'charset' => true,
    'defer'   => true,
    'src'     => true,
    'type'    => true
  );
  $multisite_tags['textarea'] = array(
    'autofocus'   => true,
    'cols'        => true,
    'dirname'     => true,
    'disabled'    => true,
    'form'        => true,
    'maxlength'   => true,
    'name'        => true,
    'placeholder' => true,
    'readonly'    => true,
    'required'    => true,
    'rows'        => true,
    'wrap'        => true
  );
  $multisite_tags['video'] = array(
    'autoplay'  => true,
    'controls'  => true,
    'height'    => true,
    'loop'      => true,
    'muted'     => true,
    'poster'    => true,
    'preload'   => true,
    'src'       => true,
    'width'     => true
  );

  return $multisite_tags;
}
add_filter('wp_kses_allowed_html', 'allowed_multisite_tags', 1);