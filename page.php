<?php get_header(); ?>


        <div class="main">
            <div class="main_container container"><h1><?php the_title(); ?></h1>

                <div class="text--styled">
                    <?php get_template_part('/includes/section','content') ?>
                </div>           
             </div>
        </div>



<?php get_footer(); ?>