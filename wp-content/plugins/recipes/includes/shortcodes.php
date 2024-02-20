<?php

/**
 * Custom Shortcode to show the recent posts. 
 * @param array $atts - The shortcode attributes.
 * @param sring $content - The editor enclosed content. Default: null
 * @return string - Shortcode output.
 */
function recent_posts_function( $atts, $content = null ) {
    $shortcode_atts = shortcode_atts( array(
        'posts' => 1,
    ), $atts);

    $posts = $shortcode_atts['posts'];

    $return_string = '<h4>'.$content.'</h4>';
    
    $return_string .= '<ul>';

    $args = array(
        'orderby' => 'date',
        'order' => 'DESC' ,
        'posts_per_page' => absint($posts),
    );

    $post_query = new WP_Query( $args );

    
    if ( $post_query->have_posts() ) : ?>
        <?php
        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

            <?php 
            $return_string .= '<li style="list-style: none;"><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
            ?>
        
        <?php endwhile; ?> 
    <?php endif; ?>
    <?php
    $return_string .= '</ul>';

    wp_reset_query();
    return $return_string;
        
 }