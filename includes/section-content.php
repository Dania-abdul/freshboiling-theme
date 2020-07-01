
<!-- //if we have post for the spicific page we are on whilw we have the post there show us the post  -->
<?php if( have_posts() ): while (have_posts() ): the_post(); ?>




<?php the_content(); ?>




<?php endwhile; else: endif; ?>
