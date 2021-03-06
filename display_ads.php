<?php
/*
Template Name: Display_Ads 
*/
?>
<?php get_header() ?>

<?php
 $page_name = '';
$num_posts = (wp_count_posts());
$fav_cat = get_cat_ID('show case');
if (is_page('Home')) {
    $cat = 'cat='.$fav_cat;
    $order_by = 'modified';
    $page_name = 'home';
} else {
    $cat = "cat=-".$fav_cat;
    $order_by = 'date';
    $page_name = '';
}
?>
<section class="body" id="body_post_<?php echo $post->ID; ?>">
<?php if (have_posts ()) {
    while (have_posts ()){ 
        the_post (); 
        the_content ();
    }
}
?>
</section>
<div id="cat_container">

<?php /*get_sidebar ();*/ ?>
    <div id="cat_content" style="width:<?php echo (41.625*($num_posts->publish)); ?>em">
        <h2 class="page-title"><span><?php single_cat_title() ?></span></h2>
<?php $categorydesc = category_description();
if ( !empty($categorydesc)) 
    echo ('<div class="category_description">' . $categorydesc . '</div>'); ?>
<?php
/*$cat_id = get_right_cat();*/
$myposts = query_posts('posts_per_page=-1&' . $cat . '&orderby=' . $order_by . '');
$i = 0;

foreach($myposts as $post) {
    setup_postdata($post);
    if ($i++ < 0) {
        include('carousel.php');
    } else {
        include('carousel_empty.php');
    }
}
wp_reset_query();
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
