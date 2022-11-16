<?php

/**
 * SGCS functions and definitions
 *
 *
 * @package WordPress
 * @subpackage voya
 * @since voya 1.0
 */

/**
 * SGCS only works in WordPress 4.7 or later.
 */


function my_theme_enqueue_styles() {
	wp_enqueue_style( 'fontawsome',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' );
	wp_enqueue_style( 'bootstrap-css',  'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'slick-css',  'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
    wp_enqueue_style( 'slick-theme',  'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css' );
	wp_enqueue_style( 'style',   get_stylesheet_directory_uri(). '/style.css' );
	wp_enqueue_style( 'custom',   get_stylesheet_directory_uri(). '/assets/css/custom.css' );
    wp_enqueue_style( 'custom1',   get_stylesheet_directory_uri(). '/assets/css/style1.css' );
	wp_enqueue_script( 'jQuery',  'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
	wp_enqueue_script( 'slim',  'https://code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script( 'slick',  'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
	wp_enqueue_script( 'popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
	wp_enqueue_script( 'bootsrap-jQuery',  'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), 3.4 );
	wp_enqueue_script( 'custom-jQuery', get_stylesheet_directory_uri(). '/assets/js/custom.js', array(), 3.4 );
	
	wp_localize_script( 'custom-jQuery', 'frontend_ajax_object',
      array( 
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
          'data_var_1' => 'value 1',
          'data_var_2' => 'value 2',
      )
  );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

register_nav_menus(array(
    'primary' => __('Primary Menu', 'voya'),
    // 'primary1' => __('Primary Menu1', 'My_First_WordPress_Theme'),
    'secondary' => __('Secondary Menu',       'voya'),
    'My_custome_menu' => __('finally Menu', 'voya')
));
/****************Custom Logo ************************** */

function themename_custom_logo_setup(){

    $defaults = array(

    'height'      => 100,

    'width'       => 400,

    'flex-height' => true,

    'flex-width'  => true,

    'header-text' => array( 'site-title', 'site-description' ),

   'unlink-homepage-logo' => true, 

    );

     //add_theme_support( 'title-tag' );

    add_theme_support( 'custom-logo' );

    add_theme_support( 'post-thumbnails');

    add_theme_support( 'html5',array('search-form'));

    add_theme_support( 'title-tag' );

}

   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



   add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');
function prefix_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_class_to_all_menu_anchors( $atts ) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// Product Custom Post Type
function Service_init() {
    // set up product labels
    $labels = array(
        'name' => 'Services',
        'singular_name' => 'Service',
        'add_new' => 'Add New Service',
        'add_new_item' => 'Add New Service',
        'edit_item' => 'Edit Service',
        'new_item' => 'New Service',
        'all_items' => 'All Services',
        'view_item' => 'View Service',
        'search_items' => 'Search Services',
        'not_found' =>  'No Services Found',
        'not_found_in_trash' => 'No Services found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Services',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'service'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'Service', $args );
    
    // register taxonomy
    register_taxonomy('Service_category', 'Service', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Service-category' )));
}
add_action( 'init', 'Service_init' );

 register_post_type( $post_type, $args ); 
register_taxonomy( $taxonomy, $object_type, $args ); 


function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'service' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function na_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'service', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );
?>