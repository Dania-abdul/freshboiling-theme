<?php get_header(); ?>


        <div class="main">
            <div class="main_container container"><h1><?php the_title(); ?></h1>

                <div class="text--styled">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
                    <?php endif; ?>
                    <?php get_template_part('/includes/section','blog-content') ?>
                </div>            
            </div>
        </div>



<?php get_footer(); ?>