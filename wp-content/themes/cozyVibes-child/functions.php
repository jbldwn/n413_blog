<?php
function enqueue_parent_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-styles', get_stylesheet_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

add_shortcode( 'site_url', 'site_url' );
add_filter('excerpt_length', function(){return 30;}, 998);

/* Ajax functions go here */
/* Custom Post Types, Sidebars, widgets, and menus */