<?php
	
	/*
	*
	*	Trego Functions - Child Theme
	*	------------------------------------------------
	*	These functions will override the parent theme
	*	functions. We have provided some examples below.
	*
	*
	*/

add_action('wp_enqueue_scripts', 'trego_child_css', 100);
 
// Load CSS
function trego_child_css() {
    // trego child theme styles
    wp_deregister_style( 'styles-child' );
    wp_register_style( 'styles-child', get_bloginfo('stylesheet_directory') . '/style.css' );
    wp_enqueue_style( 'styles-child' );
}
