<?php
require plugin_dir_path( __FILE__ ) . '/config.php';


/**
 * Display recipes from Recipe CPT, filtered by chosen meta (e.g. is gluten)
 * @param string - $key - Meta_key/Custom field key.
 * @param string - $value - Custom field value we want to compare
 * @param string - $compare - Operator to test. Default: '='
 */
function display_recipe_by_meta( $key, $value, $compare = '=') {
    
    $recipes_query_args = array(
        'post_type' => 'recipe',
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => $key,
                'value' => $value,
                'compare' => $compare,
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
    <?php else : ?>
        <p>Sorry, but we currently don`t have such recipes.</p>
    <?php endif; ?>
    <?php
}


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

    //TODO:  add custom logic to prevent a user who already liked a recipe to vote again.
    
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