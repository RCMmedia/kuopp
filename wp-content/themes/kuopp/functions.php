<?php
add_theme_support( 'post-thumbnails' ); 


require_once('wp-advanced-search/wpas.php');


function my_search_form() {
    $args = array();
    $args['wp_query'] = array('post_type' => 'project',
                              'posts_per_page' => 5);
    $args['fields'][] = array('type' => 'search',
                              'title' => 'Search',
                              'placeholder' => 'Enter search terms...');
    $args['fields'][] = array('type' => 'taxonomy',
                              'taxonomy' => 'category',
                              'format' => 'select');
    register_wpas_form('my-form', $args);    
}
add_action('init', 'my_search_form');