<div class="row">
    <div class="col-md-6">
        <div class="detail-box">
            <div class="heading_container">
            <h1>Hello from template blog.php</h1>

                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>
            <p>
            <?php the_content(); ?>
            </p>
            <a href="#">
                <span>
                    Read More
                </span>
                <img src="<?php echo TASTY_RECIPES_ASSETS_URL . '/images/color-arrow.png' ?>" alt="">
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="img-box">
            <img src="<?php echo TASTY_RECIPES_ASSETS_URL . '/images/about-img.png' ?>" alt="">
        </div>
    </div>
</div>