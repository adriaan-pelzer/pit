<?php get_header (); ?>
<section class="body" id="body_post_<?php echo $post->ID; ?>">
<?php if (have_posts ()) : ?>
<?php while (have_posts ()) : the_post (); ?>
<?php the_content (); ?>
<?php endwhile; ?>
<?php else: ?>
    <h2>Nothing Found</h2>
    <p>There is no content to display on this page</p>
<?php endif; ?>
</section>
<?php get_footer (); ?>
