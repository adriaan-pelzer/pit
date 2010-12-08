<?php get_header() ?>

<?php $num_posts = (wp_count_posts()); ?>
<div id="cat_container" class="body">
    <div id="cat_content" style="width:<?php echo (41.625*($num_posts->publish)); ?>em">
        <h2 class="page-title"><span><?php single_cat_title() ?></span></h2>
<?php $categorydesc = category_description();
if ( !empty($categorydesc)) 
    echo ('<div class="category_description">' . $categorydesc . '</div>'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    include('carousel.php');
endwhile; else: ?>
<p><?php echo 'Sorry, no posts matched your criteria.'; ?></p>
<?php endif; ?>

    </div><!-- #content .hfeed -->
    <div id="gradient_left"><img src="<?php bloginfo('template_url'); ?>/images/post_container_gradient_left.png" /></div>
    <div id="gradient_right"><img src="<?php bloginfo('template_url'); ?>/images/post_container_gradient_right.png" /></div>
</div><!-- #container -->
<nav id="paging">
    <span id="page_left"><a>&laquo;</a></span><span id="page_right"><a>&raquo;</a></span>
</nav>

<?php get_footer() ?>

