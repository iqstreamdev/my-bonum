<?php

/*************** Register Custom Posts Type Therapy ******************/
function create_post_type_therapy() {
	$labels = array(
        'name'               => __('Therapies'),
        'singular_name'      => __('Therapy'),
        'add_new'            => __('New Insight'),
        'add_new_item'       => __('New Therapy'),
        'edit_item'          => __('Edit Therapy'),
        'new_item'           => __('New Therapy'),
        'all_items'          => __('All Therapies'),
        'view_item'          => __('View Therapies on site'),
        'search_items'       => __('Search Insights'),
        'not_found'          => __('No items found'),
        'not_found_in_trash' => __('Trash is empty'),
        'menu_name'          => __('Therapies'),
    );

    register_post_type('therapy', array(
        'labels'              => $labels,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => false,
        'publicly_queryable'  => false,
        'has_archive'         => false, 
        'exclude_from_search' => true,
        'rewrite'             => false,
        'query_var'           => false,
        'menu_icon'           => 'dashicons-heart',
        'menu_position'       => 4,
        'supports'            => array('title', 'thumbnail', 'author', 'excerpt'),
        'show_in_rest'        => true,
        'rest_base'           => 'therapy',
    ));
}
add_action('init', 'create_post_type_therapy', 0);

/*************** Register Custom Posts Type Testimonials ******************/
function create_post_type_testimonials() {
	$labels = array(
        'name'               => __('Testimonials'),
        'singular_name'      => __('Testimonial'),
        'add_new'            => __('New Testimonial'),
        'add_new_item'       => __('New Testimonial'),
        'edit_item'          => __('Edit Testimonial'),
        'new_item'           => __('New Testimonial'),
        'all_items'          => __('All Testimonials'),
        'view_item'          => __('View Testimonials on site'),
        'search_items'       => __('Search Testimonials'),
        'not_found'          => __('No items found'),
        'not_found_in_trash' => __('Trash is empty'),
        'menu_name'          => __('Testimonials'),
    );

    register_post_type('testimonials', array(
        'labels'              => $labels,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => false,
        'publicly_queryable'  => false,
        'has_archive'         => false, 
        'exclude_from_search' => true,
        'rewrite'             => false,
        'query_var'           => false,
        'menu_icon'           => 'dashicons-testimonial',
        'menu_position'       => 4,
        'supports'            => array('title', 'thumbnail', 'author', 'excerpt'),
        'show_in_rest'        => true,
        'rest_base'           => 'testimonials',
    ));
}
add_action('init', 'create_post_type_testimonials', 0);

