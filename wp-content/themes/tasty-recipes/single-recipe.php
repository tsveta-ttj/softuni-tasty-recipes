<?php get_header(); ?>

<section class="about_section layout_padding ">
    <div class="container">
        <div class="row">

            <?php
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail');
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
                <?php if (!empty($featured_img_url)) : ?>
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
    </div>
</section>

<?php get_footer(); ?>