<?php get_header(); ?>

<section class="about_section layout_padding ">
    <div class="container">
        <div class="row">

            <?php
            $featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' );
            
            $recipe_id = get_the_ID();
            
            $recipe_likes = get_post_meta( $recipe_id, 'likes', true );
            
            if ( empty( $recipe_likes ) ) {
                $recipe_likes = 0;
            }

            ?>

            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        
                        <p class="p-like">
                            <a href="javascript:void(0)" title="Love it" class="btn-like btn-counter" data-count="<?php echo $recipe_likes ?>" data-recipe-id="<?php echo get_the_ID(); ?>"><span>&#x2764;</span>Love it</a>
                        </p>
                        
                    </div>
                    <p><?php the_content(); ?></p>
                </div>
            </div>

            <div class="col-md-6">
                <?php if ( !empty( $featured_img_url ) ) : ?>
                    <div class="img-box">
                        <img src="<?php echo $featured_img_url ?>" alt="thumbnails image">
                    </div>
                <?php else : ?>
                    <div class="img-box">
                        <img src="<?php echo TASTY_RECIPES_ASSETS_URL . '/images/tastyfood.jpg' ?>" alt="tastyfood image">
                    </div>
                <?php endif; ?>
            </div>

        </div>
        <div>
            <h4>Related posts:</h4>
            <?php 
                if ( function_exists( 'display_related_posts' ) ) {
                    display_related_posts( get_the_ID() );
                }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>