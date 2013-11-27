<?php

add_action('init', 'register_custom_menu');

function carolyn_theme_scripts_method() {

	// Remove Unnecessary Code
	// http://www.themelab.com/2010/07/11/remove-code-wordpress-header/
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link');

	wp_enqueue_script( 'jquery');

	// Theme JS
	$themejs = get_template_directory_uri() . '/js/theme.js';
	wp_register_script('themejs',$themejs);
	wp_enqueue_script( 'themejs',array('jquery'));
	
	// Theme CSS
    $defaultstyle = get_bloginfo('stylesheet_url'); 
    wp_register_style('defaultstyle',$defaultstyle);
    wp_enqueue_style( 'defaultstyle');

}

add_action('wp_enqueue_scripts', 'carolyn_theme_scripts_method');



function register_custom_menu() {
	register_nav_menu('navigation', __('Portfolio Menu'));
}



// Featured Images / Post Thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
} 


function twryan_is_project( $post_id ) {
	if( is_page() && !is_page('portfolio') ) { 
		$parents = get_post_ancestors( $post_id );
		$id = ($parents) ? $parents[count($parents)-1]: $post_id;
		$parent = get_page( $id );
		$parentslug = $parent->post_name;

		if ( $parentslug == "portfolio" ) return true;

	}
}

// Columns


function office_shortcode(){
	if ( !is_feed() ) :
		return '<ul class="abouttoggle"><li class="peoplelink"><a href="#people">Profile</a></li><li class="officelink"><a href="#office">Practice</a></li></ul><div id="people">';
	endif;
}
add_shortcode( 'profile', 'office_shortcode' );

function people_shortcode(){
	if ( !is_feed() ) :
		return '</div><div id="office">';
	endif;
}
add_shortcode( 'practice', 'people_shortcode' );

function end_shortcode(){
	if ( !is_feed() ) :
		return '</div>';
	endif;
}
add_shortcode( 'end', 'end_shortcode' );


?>
