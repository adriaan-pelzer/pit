<?php get_header (); ?>
	<div id="container" class="body">
<?php get_sidebar (); ?>
		<div id="content">
<?php if (have_posts ()) : ?>
<?php while (have_posts ()) : the_post (); ?>
<?php the_title(); ?>
<?php the_content (); ?>
<?php $postid = get_the_ID(); ?>
<?php $custom = get_post_meta($postid, 'artist'); print_r($custom); ?>
<?php endwhile; ?>
<?php else: ?>
            <h2>Nothing Found</h2>
    <p>There is no content to display on this page</p>
<?php endif; ?>
		</div><!-- #content .hfeed -->
	</div><!-- #container -->
<?php get_footer (); ?>
