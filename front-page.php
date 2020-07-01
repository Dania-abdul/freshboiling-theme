<?php get_header(); ?>


    <main id="hero">
        <div class="container">
            <h1 class="hero_title">Keep it boiling</h1>
            <div class="text--styled">
                <?php get_template_part('/includes/section','content') ?>
            </div>
        </div>
        <div class="hero_visual">
            <img class="hero_img" src="<?php echo get_template_directory_uri(); ?>/src/images/fresh-green.JPG" alt="">
        </div>
    </main>

    <div class="content">
    </div>

<?php get_footer(); ?>
