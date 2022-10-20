<?php 

function abc_load_scripts(){
    //Styles - Start
    wp_enqueue_style('abc-style-logo', get_stylesheet_directory_uri() . '/styles/logo.css', array(), filemtime(get_template_directory() . '/styles/logo.css'), 'all');
    wp_enqueue_style('abc-style-search', get_stylesheet_directory_uri() . '/styles/search.css', array(), filemtime(get_template_directory() . '/styles/search.css'), 'all');
    //Styles - End
}

add_action('wp_enqueue_scripts', 'abc_load_scripts');