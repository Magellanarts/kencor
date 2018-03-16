<?php

require_once "mobileDetect.php";


/**
* Enqueue scripts and styles for the front end.
*
*/
function twentyfourteen_scripts() {

// Load our main stylesheet.
    wp_enqueue_style( 'them-style', get_stylesheet_uri() );

 wp_enqueue_style( 'g-fonts', '//fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700,800|Six+Caps' );

     wp_enqueue_style( 'icon-font', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );


    //add Headroom for sticky header
    wp_enqueue_script( 'headroom', get_template_directory_uri() . '/js/lib/headroom.js', array( ), 1, true );

		wp_enqueue_script( 'scroll-Animate', get_template_directory_uri() . '/js/lib/scroll-animate.js', array( ), 1, true );

	if(is_front_page()){
		wp_enqueue_script( 'countUp', get_template_directory_uri() . '/js/lib/countUp.js', array( ), 1, true );

	}

  wp_enqueue_script( 'fullpage-parallax', get_template_directory_uri() . '/js/lib/scroll/_fullpage.exension.parallax.js', array('jquery' ), 1, true );


wp_enqueue_script( 'underscore', get_template_directory_uri() . '/js/lib/_.js', array( ), 1, true );
    //add google map to contact
    if(is_page('contact')){
      wp_enqueue_script( 'gmap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDk9Vdl27VeDu-iU0ZHQilOF9jErMwkmto&callback=initMap', array(  ), 1, true );
      wp_enqueue_script( 'mapping', get_template_directory_uri() . '/js/mapping.js', array( ), 1, false );
      wp_enqueue_script( 'contactForm', get_template_directory_uri() . '/js/contactForm.js', array( ), 1, true );
    }

    if(is_page('how-it-works') || is_page('how-sami-works')){
      wp_enqueue_script( 'hiw-animations', get_template_directory_uri() . '/js/howitworks.js', array( ), 1, true );
    }

  //if ( !is_admin() ) wp_deregister_script('jquery');

     $site_variables_array = array(
    'site_url' => site_url(),
'theme_url' => get_template_directory_uri().'/',
'ajax_url' => admin_url('admin-ajax.php'),
'cur_page' => get_the_title()
);

wp_enqueue_script( 'site_variables', get_template_directory_uri() . '/js/site.js', array( ), 1, true );

wp_localize_script( 'site_variables', 'site_vars', $site_variables_array );

// Enqueued script with localized data.
wp_enqueue_script( 'site_variables' );
}
add_action( 'wp_enqueue_scripts', 'twentyfourteen_scripts' );


//Create Custom Post Types

//add_action( 'init', 'create_post_type' );
function create_post_type() {

$args = array(
    	'label' => __('Speakers'),
'singular_label' => __('Speaker'),
'public' => true,
'show_ui' => true,
'capability_type' => 'page',
'hierarchical' => true,
'rewrite' => true,
'taxonomies' => array('post_tag', 'category'),
'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields', 'menu-order')
);
register_post_type( 'speaker' , $args );




}


// Set up our menus
register_nav_menus( array(
'primary' => 'Primary Navigation',
) );



