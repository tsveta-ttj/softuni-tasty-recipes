<?php /* Template Name: Blog Template */ ?>

<?php get_header() ?>

<section class="about_section layout_padding ">
    <h1>Hello from template blog.php</h1>
    <div class="container  ">
        <div class="row">
        <?php get_template_part('partials/content', 'blog'); ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php get_footer() ?>