<?php
/*
Template Name: Post Display
*/
?>
<?php get_header() ?>

<?php $num_posts = (wp_count_posts()); ?>
<section id="voices_drop_down">
<?php $top_cat = get_cat_ID('Artist Name');
$voices = wp_list_categories('title_li=&child_of='. $top_cat .'&echo=0'); 
$voices = str_replace('li', 'option', $voices); ?>
    <select id="voices_select">
        <option selected="selected">Please Choose a Voice Artist</option>
<?php
print_r ($voices);
?>
    </select>
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
$myposts = get_posts('numberposts=0');
foreach($myposts as $post) {
    setup_postdata($post);
    include('carousel.php');
}
?>
    </div><!-- #content .hfeed -->
    <nav id="paging">
        <div id="gradient_left"><span id="page_left"><a><img class="pngfix" src="<?php bloginfo('template_url'); ?>/images/post_container_gradient_left_arrows_sprite.png" width="125" height="334" /></a></span></div>
        <div id="gradient_right"><span id="page_right"><a><img class="pngfix" src="<?php bloginfo('template_url'); ?>/images/post_container_gradient_right_arrows_sprite.png" width="125" height="334" /></a></span></div>
    </nav>
</div><!-- #container -->
<!--nav id="paging">
    <span id="page_left"><a>&laquo;</a></span><span id="page_right"><a>&raquo;</a></span>
</nav-->

<?php get_footer() ?>
