<?php 

function knportStyleResources(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,900');
	if( is_page('front') ){
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	}
}

function knport_load_scripts(){
	wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery'), null, true );
	if( is_page('about') ){
		wp_enqueue_script( 'about-script', get_stylesheet_directory_uri() . '/assets/js/about.js', array( 'jquery'), null, true );
	}
	elseif( is_page('front') ){
		wp_enqueue_script( 'front-page-script', get_stylesheet_directory_uri() . '/assets/js/front-page.js', array( 'jquery'), null, true );
	}
}

add_action('wp_enqueue_scripts', 'knport_load_scripts');
add_action('wp_enqueue_scripts', 'knportStyleResources');



//Theme setup
function knportSetup(){


	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
	));
}

add_action('after_setup_theme', 'knportSetup');

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


 ?>