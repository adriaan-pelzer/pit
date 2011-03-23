<?php
/*
Template Name: Voices 
*/
global $voices_number;
?>
<?php get_header() ?>
<img src="<?php bloginfo('template_url'); ?>/images/drop_down_list_top.png" class="hidden" />
<img src="<?php bloginfo('template_url'); ?>/images/drop_down_list_bottom.png" class="hidden" />
<img src="<?php bloginfo('template_url'); ?>/images/drop_down_list_bg.png" class="hidden" />
<?php
$num_posts = (wp_count_posts());
$cat_to_exclude = get_cat_ID('show case');
if ($_GET['voice_name']) {
    $name_place_holder = $_GET['voice_name'];
    $cat_obj = get_category_by_slug($name_place_holder);
    $name_id = $cat_obj->term_id;
} else {
    $name_id = '-' . $cat_to_exclude;
    $name_place_holder = 'Please Choose A Voice Artist';
}
?>
<section id="voices_drop_down">
<?php $top_cat = get_cat_ID('Artist Name');
$voices = get_categories('child_of='. $top_cat .''); 
$voices_number = count($voices);
?>
    <span id="drop_down_button" onClick="toggle_list_display()">
        <a>
        <?php echo ucfirst($name_place_holder); ?>
        </a>
            <ul id="drop_down_list">
            <li id="drop_down_top" class="pngfix"></li>
<?php
foreach ($voices as $voice) {
    echo '<li><a href="' . get_permalink() . '?voice_name=' . $voice->slug . '">'. $voice->name . '</a></li>';
}
?>
            <li id="drop_down_bottom" class="pngfix"></li>
        </ul>
    </span>
<?php 
?>
</section>
<div id="cat_container" class="body">
<?php /*get_sidebar ();*/
?>
    <div id="cat_content" style="width:<?php echo (41.625*($num_posts->publish)); ?>em">
        <h2 class="page-title"><span><?php single_cat_title() ?></span></h2>
<?php $categorydesc = category_description();
if ( !empty($categorydesc)) 
    echo ('<div class="category_description">' . $categorydesc . '</div>'); ?>
<?php
/*$cat_id = get_right_cat();*/
$myposts = get_posts('numberposts=-1&category='. $name_id .'');
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
