<?php /* Template Name: Recipe Template */ ?>

<!-- TODO: Style Recipe
[] Style recipe_container class 
[] Style pagination div 
[] Format Image in content-recipe.php
-->

<?php
$recipe_query_args = array(
    'post_type'     => 'recipe',
    'post_status'   => 'publish',
    'posts_per_page'=> 3,
    'paged'         => get_query_var( 'paged' )
);

$recipe_query = new WP_Query( $recipe_query_args );
?>

<?php get_header() ?>

<section class="chocolate_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                <?php the_title() ?>
            </h2>
            <p>
                <?php the_content() ?>
            </p>
        </div>
    </div>

    <?php if ( $recipe_query->have_posts() ) : ?>

        <div class="recipe_container">
            <?php while ( $recipe_query->have_posts() ) : $recipe_query->the_post(); ?>

                <?php get_template_part( 'partials/content', 'recipe' ); ?>

            <?php endwhile; ?>
        </div>

        <div  style="text-align:center;">
            <?php
                $GLOBALS['wp_query'] = $recipe_query;
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __('Previous', 'softuni'),
                    'next_text' => __('Next', 'softuni'),
                ));
            ?>
        </div>
      
    <?php endif; ?>
    
    <?php wp_reset_postdata(); ?>

</section>

<?php get_footer() ?>