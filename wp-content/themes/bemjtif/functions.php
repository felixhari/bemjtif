<?php

//load script
function load_file(){
	wp_enqueue_style('style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts','load_file');

//the excerpt
function get_excerpt_length(){
	return 140;
}

function return_excerpt_text(){
	return'';
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length','get_excerpt_length');

function init_setup(){
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'bemjtif' ),
    'footer_menu' => __( 'Footer Menu', 'bemjtif' ),
));

	//add featured image
	add_theme_support('post-thumbnails');
	add_image_size('small_thumb', 150,150,true);
	add_image_size('big_thumb', 450,250,true);

	add_theme_support('post_formats', array('aside','gallery','video','link','image','quote'));
}

add_action('after_setup_theme','init_setup');

function widget_setup(){
	register_sidebar(array(
		'name' => "Sidebar pertama",
		'id'   => "sidebar1"
	));

	register_sidebar(array(
		'name' => "Sidebar kedua",
		'id'   => "sidebar2"
	));
}

add_action('widgets_init','widget_setup');

function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.5.2', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

//Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php')

 ?>
