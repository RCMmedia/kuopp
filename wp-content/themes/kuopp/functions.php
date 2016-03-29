<?php
add_theme_support( 'post-thumbnails' ); 


require_once('wp-advanced-search/wpas.php');




function wp_ajax_search() {
    $args = array();
    $args['wp_query'] = array('post_type' => 'project', 'posts_per_page' => 6);


    $args['form'] = array( 'auto_submit' => true );

    $args['form']['ajax'] = array( 'enabled' => true,
                                   'show_default_results' => false,
                                   'results_template' => 'template-ajax-results.php', // This file must exist in your theme root
                                   'button_text' => 'Load More Results');

    $args['fields'][] = array( 'type' => 'search', 
                               'placeholder' => 'Enter search terms' );
                               
    $args['fields'][] = array('type' => 'taxonomy',
                              'taxonomy' => 'projecttype',
                              'format' => 'radio');
                              
    $args['fields'][] = array( 'type' => 'submit',
                               'class' => 'button',
                               'value' => 'Search' );
                              


    register_wpas_form('my-form', $args);
}
add_action('init', 'wp_ajax_search');