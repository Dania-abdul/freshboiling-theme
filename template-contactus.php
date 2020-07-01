<?php

/*
Template Name: contact us 

*/ 

?>

<?php get_header(); ?>


    <div id="hero">
        <div class="container">
            <h1 class="hero_title"><?php the_title(); ?></h1>

            <div class="text--styled">
                <?php get_template_part('/includes/section','content') ?>
            </div>
        </div>
    </div>

    <div class="content">
    </div>

<?php get_footer(); ?>