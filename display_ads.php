<?php
/*
Template Name: Display_Ads 
*/
?>
<?php get_header() ?>

<?php
$num_posts = (wp_count_posts());
$fav_cat = get_cat_ID('show case');
if (is_page('Home')) {
    $cat = 'cat='.$fav_cat;
    $order_by = 'modified';
} else {
    $cat = "cat=-".$fav_cat;
    $order_by = 'date';
}
?>
<section class="caption">
<?php if (have_posts ()) {
    while (have_posts ()){ 
        the_post (); 
        the_content ();
    }
}
?>
</section>
<div id="cat_container" class="body">

<?php /*get_sidebar ();*/ ?>
    <div id="cat_content" style="width:<?php echo (41.625*($num_posts->publish)); ?>em">
        <h2 class="page-title"><span><?php single_cat_title() ?></span></h2>
<?php $categorydesc = category_description();
if ( !empty($categorydesc)) 
    echo ('<div class="category_description">' . $categorydesc . '</div>'); ?>
<?php
/*$cat_id = get_right_cat();*/
$myposts = query_posts('numberposts=-1&' . $cat . '&orderby=' . $order_by . '');
foreach($myposts as $post) {
    setup_postdata($post);
    include('carousel.php');
}
?>
    </div><!-- #content .hfeed -->
    <nav id="paging">
        <div id="gradient_left"><span id="page_left"><a><img class="pngfix" src="<?php bloginfo('template_url'); ?>/images/post_container_gradient_left_arrows_sprite.png" width="125" height="501" /></a></span></div>
        <div id="gradient_right"><span id="page_right"><a><img class="pngfix" src="<?php bloginfo('template_url'); ?>/images/post_container_gradient_right_arrows_sprite.png" width="125" height="501" /></a></span></div>
    </nav>
</div><!-- #container -->
<!--nav id="paging">
    <span id="page_left"><a>&laquo;</a></span><span id="page_right"><a>&raquo;</a></span>
</nav-->

<?php get_footer() ?>
