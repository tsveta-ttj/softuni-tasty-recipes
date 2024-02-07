<?php get_header(); ?>

<section class="about_section layout_padding ">
<h1>Hello from single.php</h1>
<?php if (have_posts()) : ?>
    <div class="container">
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
        <?php 
        // $featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' );
        // var_dump(TASTY_RECIPES_ASSETS_URL . '/images/tastyfood.jpg'); die();
        ?> 
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                        <?php the_title(); ?>
                        </h2>
                    </div>
                    <p><?php the_content(); ?></p>
                    
                </div>
            </div>

            <div class="col-md-6">
                <?php if ( ! empty( $featured_img_url ) ) : ?> 
                    <div class="img-box">
                        <img src=<?php echo $featured_img_url ?>" alt="">
                    </div>
                    <?php else : ?>
                        <div class="img-box">
                        <img src=<?php echo TASTY_RECIPES_ASSETS_URL . '/images/chokocake.jpg' ?>" alt="">
                    </div>
                <?php endif; ?>


            </div>
        </div>
    <?php endwhile; ?>
    </div>

<?php endif; ?>
</section>


<?php get_footer(); ?>