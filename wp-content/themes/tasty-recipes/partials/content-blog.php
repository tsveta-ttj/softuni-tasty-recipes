<div class="col-md-10">
    <div class="detail-box">
        <div class="heading_container">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php echo get_the_permalink(); ?>">
            <span>
                Read More
            </span>
            <img src="<?php echo TASTY_RECIPES_ASSETS_URL . '/images/color-arrow.png' ?>" alt="">
        </a>
    </div>
</div>