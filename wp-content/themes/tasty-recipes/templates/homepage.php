<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>



    <div class="main_body_content">
        <div class="hero_area">
            <section class="slider_section ">
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h1>
                                        Tasty & Healthy <br>
                                        <span>
                                            Recipes
                                        </span>
                                    </h1>

                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="img-box">
                                    <img src="<?php echo TASTY_RECIPES_ASSETS_URL . '/images/slider-img.png' ?>" alt="Chocolates in bawl">
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- end slider section -->
        </div>

        <section class="chocolate_section ">
            <div class="container">
                <div class="heading_container">
                    <h2>
                    Gluten free recipes
                    </h2>
                    <p>
                        Below you can view our gluten-free recipes:
                    </p>
                </div>
            </div>

            <div class="container">

                <div class="chocolate_container">
                <?php
                    if ( function_exists( 'recipes_display_gluten_free_posts' ) ) {
                        recipes_display_gluten_free_posts();
                    }
                    ?>
                </div>

            </div>
        </section>

    </div>



<?php get_footer(); ?>