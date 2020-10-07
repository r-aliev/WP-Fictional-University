<?php 
function university_post_types(){
    // Event Post Type
    register_post_type('event', array(
        'capability_type' => 'event', // 'post' by default
        'map_meta_cap' => true, // it's going to automatically map and require the right capabilities at the right time 
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

//Program Post Type

    register_post_type('program', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
    ));
    
//Professor Post Type
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor','thumbnail'),        
        'public' => true, 
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

//like Post Type
register_post_type('like', array(
    'supports' => array('title'),        
    'public' => false,  //will also hide in admin dashboard
    'show_ui' => true, // will show in the admin dashboard
    'labels' => array(
        'name' => 'Likes',
        'add_new_item' => 'Add New Like ',
        'edit_item' => 'Edit Like ',
        'all_items' => 'All Likes',
        'singular_name' => 'Like '
    ),
    'menu_icon' => 'dashicons-heart'
));

}

add_action('init', 'university_post_types');
