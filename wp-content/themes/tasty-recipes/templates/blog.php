<?php /* Template Name: Blog Template */ ?>
<!-- TODO: Style blog page
[] Style pagination div 
-->
<?php get_header() ?>

<?php
$blog_query_args = array(
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page' => 4,
    'paged'         => get_query_var('paged')
);

$blog_query = new WP_Query($blog_query_args);

?>

<section class="about_section layout_padding ">

    <?php if ( $blog_query->have_posts() ) : ?>

        <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
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
        <?php
        $GLOBALS['wp_query'] = $blog_query;
        the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => __('Previous', 'softuni'),
            'next_text' => __('Next', 'softuni'),
        ));
        ?>
    </div>
</section>

<?php get_footer() ?>