<?php

// enqueue css file
add_action( 'wp_enqueue_scripts', 'unite_child_enqueue_styles' );
function unite_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


function create_film_post_type() {
    register_post_type( 'films',
      array(
        'labels' => array(
          'name' => __( 'Films' ),
          'singular_name' => __( 'Film' )
        ),
        'public' => true,
        'has_archive' => true,
      )
    );
  }
  add_action( 'init', 'create_film_post_type' );