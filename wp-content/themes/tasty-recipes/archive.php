<?php get_header() ?>

<?php
$archive_query_args = array(
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page' => 5,
    'paged'         => get_query_var('paged')
);

$archive_query = new WP_Query($archive_query_args);

?>

<section class="about_section layout_padding ">
    <?php if ( $archive_query->have_posts() ) : ?>

        <?php while ( $archive_query->have_posts() ) : $archive_query->the_post(); ?>
            <div class="container" style="margin-bottom: 6rem;">
                <div class="row">
                    <?php get_template_part('partials/content', 'blog'); ?>
                </div>
            </div>
        <?php endwhile; ?>
        
        <?php else : ?>

        Sorry, there is nothing I can show you.


        <?php wp_reset_postdata(); ?>
    <?php endif; ?>



    <div style="text-align:center;">
            <?php posts_nav_link( ' · ', 'previous page', 'next page' ); ?>
        </div>
</section>

<?php get_footer() ?>