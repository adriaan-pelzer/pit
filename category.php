<?php
/*
Template Name: Home - WTF? There are 2 homes - there shouldn't be two that's an accident, must have fogotten to rename the old one.
*/
?>

<?php get_header() ?>

<?php $num_posts = (wp_count_posts()); ?>

<div id="cat_container" class="body">
<?php /*get_sidebar ();*/ ?>
<?php /* Could you fix the indentation here (and throughout the code - many issues elsewhere too), and remove this inline style the inline style is dynamic, it's there so that the size of the container changes according to the amount of posts */ ?>
    <div id="cat_content" style="width:<?php echo (41.625*($num_posts->publish)); ?>em">
        <h2 class="page-title"><span><?php single_cat_title() ?></span></h2>
<?php $categorydesc = category_description();
if ( !empty($categorydesc)) 
    echo ('<div class="category_description">' . $categorydesc . '</div>'); ?>
<?php
get_right_posts();
?>
    </div><!-- #content .hfeed -->
</div><!-- #container -->
<nav id="paging">
    <span id="page_left"><a>&laquo;</a></span><span id="page_right"><a>&raquo;</a></span>
</nav>

<?php get_footer() ?>

