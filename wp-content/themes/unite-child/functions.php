<?php

// enqueue css file
add_action( 'wp_enqueue_scripts', 'unite_child_enqueue_styles' );
function unite_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
/* Add custom fields to Film post type*/
add_action( 'init', 'create_film_post_type' );
add_action( 'init', 'create_films_taxonomies' );
add_theme_support('post-thumbnails');
// add short code
add_shortcode('recent-films', 'recent_films');



// Add Films Post Type
function create_film_post_type() {
    register_post_type( 'films',
      array(
        'labels' => array(
          'name' => __( 'Films' ),
          'singular_name' => __( 'Film' ),
          'add_new_item'               => __( 'Add New Film', 'Unite-child' ),
          'new_item_name'              => __( 'New Film Name', 'Unite-child' ),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title','editor','thumbnail' )

      )
    );
  }



  function create_films_taxonomies() {
      register_taxonomy(
          'genre',
          'films',
          array(
              'label' => __( 'Genre' ),
              'labels' => array(
                'name'                       => _x( 'Genres', 'taxonomy general name', 'Unite-child' ),
                'singular_name'              => _x( 'Genre', 'taxonomy singular name', 'Unite-child' ),
                'search_items'               => __( 'Search Genres', 'Unite-child' ),
                'popular_items'              => __( 'Popular Genres', 'Unite-child' ),
                'all_items'                  => __( 'All Genres', 'Unite-child' ),
                'parent_item'                => null,
                'parent_item_colon'          => null,
                'edit_item'                  => __( 'Edit Genre', 'Unite-child' ),
                'update_item'                => __( 'Update Genre', 'Unite-child' ),
                'add_new_item'               => __( 'Add New Genre', 'Unite-child' ),
                'new_item_name'              => __( 'New Genre Name', 'Unite-child' ),
                'separate_items_with_commas' => __( 'Separate Genres with commas', 'Unite-child' ),
                'add_or_remove_items'        => __( 'Add or remove Genres', 'Unite-child' ),
                'choose_from_most_used'      => __( 'Choose from the most used Genres', 'Unite-child' ),
                'not_found'                  => __( 'No Genres found.', 'Unite-child' ),
                'menu_name'                  => __( 'Genres', 'Unite-child' )
             ),
              'rewrite' => array( 'slug' => 'genre' ),
              'hierarchical' => false,
          )
      );
  

    register_taxonomy(
        'year',
        'films',
        array(
            'label' => __( 'Year' ),
            'labels' => array(
                'name'                       => _x( 'Years', 'taxonomy general name', 'Unite-child' ),
                'singular_name'              => _x( 'Year', 'taxonomy singular name', 'Unite-child' ),
                'search_items'               => __( 'Search Years', 'Unite-child' ),
                'popular_items'              => __( 'Popular Years', 'Unite-child' ),
                'all_items'                  => __( 'All Years', 'Unite-child' ),
                'parent_item'                => null,
                'parent_item_colon'          => null,
                'edit_item'                  => __( 'Edit Year', 'Unite-child' ),
                'update_item'                => __( 'Update Year', 'Unite-child' ),
                'add_new_item'               => __( 'Add New Year', 'Unite-child' ),
                'new_item_name'              => __( 'New Year', 'Unite-child' ),
                'separate_items_with_commas' => __( 'Separate actors with commas', 'Unite-child' ),
                'add_or_remove_items'        => __( 'Add or remove Years', 'Unite-child' ),
                'choose_from_most_used'      => __( 'Choose from the most used Years', 'Unite-child' ),
                'not_found'                  => __( 'No Years found.', 'Unite-child' ),
                'menu_name'                  => __( 'Years', 'Unite-child' )
             ),
            'rewrite' => array( 'slug' => 'year' ),
            'hierarchical' => false,
        )
    );

    register_taxonomy(
        'actors',
        'films',
        array(
            'label' => __( 'Actors' ),
            'labels' => array(
                'name'                       => _x( 'Actors', 'taxonomy general name', 'Unite-child' ),
                'singular_name'              => _x( 'Actor', 'taxonomy singular name', 'Unite-child' ),
                'search_items'               => __( 'Search Actors', 'Unite-child' ),
                'popular_items'              => __( 'Popular Actors', 'Unite-child' ),
                'all_items'                  => __( 'All Actors', 'Unite-child' ),
                'parent_item'                => null,
                'parent_item_colon'          => null,
                'edit_item'                  => __( 'Edit Actor', 'Unite-child' ),
                'update_item'                => __( 'Update Actor', 'Unite-child' ),
                'add_new_item'               => __( 'Add New Actor', 'Unite-child' ),
                'new_item_name'              => __( 'New Actor Name', 'Unite-child' ),
                'separate_items_with_commas' => __( 'Separate actors with commas', 'Unite-child' ),
                'add_or_remove_items'        => __( 'Add or remove actors', 'Unite-child' ),
                'choose_from_most_used'      => __( 'Choose from the most used actors', 'Unite-child' ),
                'not_found'                  => __( 'No actors found.', 'Unite-child' ),
                'menu_name'                  => __( 'Actors', 'Unite-child' )
             ),
            'rewrite' => array( 'slug' => 'actor' ),
            'hierarchical' => false,
        )
    );

     register_taxonomy(
        'country',
        'films',
        array(
            'label' => __( 'Country' ),
             'labels' => array(
                'name'                       => _x( 'Countries', 'taxonomy general name', 'Unite-child' ),
                'singular_name'              => _x( 'Country', 'taxonomy singular name', 'Unite-child' ),
                'search_items'               => __( 'Search Countries', 'Unite-child' ),
                'popular_items'              => __( 'Popular Countries', 'Unite-child' ),
                'all_items'                  => __( 'All Countries', 'Unite-child' ),
                'parent_item'                => null,
                'parent_item_colon'          => null,
                'edit_item'                  => __( 'Edit Country', 'Unite-child' ),
                'update_item'                => __( 'Update Country', 'Unite-child' ),
                'add_new_item'               => __( 'Add New Country', 'Unite-child' ),
                'new_item_name'              => __( 'New Country Name', 'Unite-child' ),
                'separate_items_with_commas' => __( 'Separate countries with commas', 'Unite-child' ),
                'add_or_remove_items'        => __( 'Add or remove countries', 'Unite-child' ),
                'choose_from_most_used'      => __( 'Choose from the most used countries', 'Unite-child' ),
                'not_found'                  => __( 'No Countries found.', 'Unite-child' ),
                'menu_name'                  => __( 'Countries', 'Unite-child' )
             ),
            'rewrite' => array( 'slug' => 'country' ),
            'hierarchical' => false,
        )
    );
}

function recent_films() {
    ?>
    <h3>Recent Films</h3>

    <ul>
    <?php
       
        $args = array(
            'post_type'=>'films',
            'posts_per_page' => 5,
            'order' => 'DESC');
            $recent_posts = new WP_Query( $args );
if ( $recent_posts->have_posts() ) {
    while ( $recent_posts->have_posts() ) {
        $recent = $recent_posts->the_post();
        // do stuff
        ?>
	<li><a  href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
    
     <?php
    }
    wp_reset_postdata();
} else {
    // none were found
}

    ?>
    </ul>
    <?php
}


