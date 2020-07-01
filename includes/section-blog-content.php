
<!-- //if we have post for the spicific page we are on whilw we have the post there show us the post  -->
<?php if( have_posts() ): while (have_posts() ): the_post(); ?>


[section-blog-content]

    <?php the_content(); ?>
<!-- get the author of this post -->

    <?php the_author(); ?>

<?php endwhile; else: endif; ?>                                                    