<?php get_header(); ?>



        <div class="main">
            <div class="main_container container">
                <div class="text--styled">
                    this is the     CATEGORY BLOG template
                    <?php get_template_part('/includes/section','archive') ?>

                    <?php previous_posts_link();?>
                    <?php next_posts_link(); ?>
                </div>            
            </div>
        </div>




<?php get_footer(); ?>