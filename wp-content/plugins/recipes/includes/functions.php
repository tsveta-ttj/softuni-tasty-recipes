<?php
require plugin_dir_path( __FILE__ ) . '/shortcodes.php';

/**
 * Function that changes the default excerpt length 
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function new_excerpt_length($length) {

    return 10;
}

add_filter('excerpt_length', 'new_excerpt_length', 999);


/**
 * Show the gluten free posts from Recipe CPT
 *
 * @param [type] $posts_per_page
 * @return void
 */
function recipes_display_gluten_free_posts() {
    
    $recipes_query_args = array(
        'post_type' => 'recipe',
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'is_gluten_free',
                'value' => '1',
                'compare' => '=',
            )
        ),
    );

    $recipes_query = new WP_Query( $recipes_query_args );

    ?>

    <?php if ( $recipes_query->have_posts() ) : ?>
    
        <?php while ( $recipes_query->have_posts() ) : $recipes_query->the_post(); ?>
            <?php get_template_part( 'partials/content', 'recipe' ); ?>       
        <?php endwhile; ?>
                        
        <?php wp_reset_postdata(); ?>
            
    <?php endif; ?>
    <?php
}



/**
 * Wrapper for add_shortcode() functions. Initialized after 'init' hook. 
 *
 * @return void
 */
function shortcodes_init(){
    add_shortcode( 'recent-posts', 'recent_posts_function' );
    
   }

   add_action('init', 'shortcodes_init');


/**
 * Function that handles the AJAX call and add/update likes to the recipe
 *
 * @return void
 */
function recipe_likes(){
    if ( empty( $_POST['action'] ) ) {
        return;
    }

    $nonce = $_POST['nonce'];
    

	if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) ) {
		wp_send_json_error( 'Nonce is invalid' );
	}

    $recipe_id = esc_attr( $_POST['recipe_id'] );
    $likes_number = get_post_meta( $recipe_id, 'likes', true );

    if (empty($likes_number)) {
        $likes_number = 0;
    }

    //TODO:  add custom logic to prevent a user who already liked a recepi to vote again.
    
    update_post_meta( $recipe_id, 'likes', $likes_number + 1 );
    $updated_likes = get_post_meta( $recipe_id, 'likes', true );
    
    wp_send_json_success(
		array(
			'count' => $updated_likes
		),
	);

}
add_action('wp_ajax_nopriv_recipe_likes', 'recipe_likes');
add_action('wp_ajax_recipe_likes', 'recipe_likes');