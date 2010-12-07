<?php
/*
Template Name: Post Display
*/
?>
<?php get_header() ?>

<?php $num_posts = (wp_count_posts()); ?>

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
foreach($myposts as $posts) {
    setup_postdata($posts);
    include('carousel.php');
}
?>
    </div><!-- #content .hfeed -->
    <div id="gradient_left"></div>
    <div id="gradient_right"></div>
</div><!-- #container -->
<nav id="paging">
    <span id="page_left"><a>&laquo;</a></span><span id="page_right"><a>&raquo;</a></span>
</nav>

<?php get_footer() ?>

