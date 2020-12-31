<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

$dominatecode_path_theme = get_template_directory();

require($dominatecode_path_theme.'/inc/front-functions.php');
require($dominatecode_path_theme.'/inc/panel-options.php');
require($dominatecode_path_theme.'/inc/parts/widgets/footer-sidebars.php');
require($dominatecode_path_theme.'/inc/parts/post/functions-post.php');
require($dominatecode_path_theme.'/inc/custom.php');
require($dominatecode_path_theme.'/inc/custom-default.php');

function dominatecode_setup() {
    // Ready for i18n
    load_theme_textdomain( "dominatecode", TEMPLATEPATH . "/languages");

    // Use thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    //añadir menu de navegacion

    register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' )
         )
       );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'dominatecode_setup' );

function dominatecode_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'dominatecode_custom_logo_setup' );

//clases del menu de navegacion

    add_filter('nav_menu_css_class' , 'dominatecode_nav_class' , 10 , 2);
 
    function dominatecode_nav_class($classes, $item){
        $classes[] = 'nav-link';
        return $classes;
    }

//////////// registrar sidebars - widgets  /////////////////////

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="my-5">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


?>