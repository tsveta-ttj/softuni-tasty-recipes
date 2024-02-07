<?php get_header(); ?>

<section class="about_section layout_padding ">
    <div class="container">
        <div class="col-md-8">
            <div class="detail-box">
                <div class="heading_container">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                </div>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>