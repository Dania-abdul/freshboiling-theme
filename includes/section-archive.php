<!-- //if we have post for the spicific page we are on whilw we have the post there show us the post  -->
<?php if( have_posts() ): while (have_posts() ): the_post(); ?>


<div class="card mb-3">
    <div class="card-body">
        <h3><?php the_title(); ?></h3>
        <!-- the_content() > show all content
        the_excerpt() > shows part of content -->
        <?php the_excerpt(); ?>
        
        <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
    </div>


</div>





<?php endwhile; else: endif; ?>