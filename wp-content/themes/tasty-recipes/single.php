<?php get_header(); ?>

<section class="about_section layout_padding ">

<?php if (have_posts()) : ?>
    <div class="container">
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                        <?php the_title(); ?>
                        </h2>
                    </div>
                    <p><?php the_content(); ?></p>
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
    <?php endwhile; ?>
    </div>

<?php endif; ?>
</section>


<?php get_footer(); ?>