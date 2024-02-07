<?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail');
?>

<div class="box">
    
    <?php if ( ! empty( $featured_img_url ) ) : ?>
        <div class="img-box">
            <img src="<?php echo $featured_img_url ?>" alt="thumbnails image">
        </div>
    <?php else : ?>
        <div class="img-box">
            <img src="<?php echo TASTY_RECIPES_ASSETS_URL . '/images/tastyfood.jpg' ?>" alt="tastyfood image">
        </div>
    <?php endif; ?>

    <div class="detail-box">
        <h6>
            <?php the_title(); ?><span> recipe</span>
        </h6>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php echo get_the_permalink(); ?>">
            More Details
        </a>
    </div>
</div>