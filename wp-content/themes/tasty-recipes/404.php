<?php get_header(); ?>

<section class="layout_padding ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?php _e( '404, sorry, not found!', 'softuni' ); ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo TASTY_RECIPES_ASSETS_URL . '/images/404.jpg' ?>" alt="404 image">
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>