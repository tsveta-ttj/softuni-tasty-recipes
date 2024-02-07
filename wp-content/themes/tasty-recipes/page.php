<?php get_header(); ?>

<section class="about_section layout_padding ">

    <section class="layout_padding ">
        <h1>Hellp from page.php</h1>
        <div class="container">
            <div class="row">

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
                    <div class="img-box">
                        <img src="<?php echo TASTY_RECIPES_ASSETS_URL . '/images/chococake2.jpg' ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>