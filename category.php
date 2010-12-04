<?php
/*
Template Name: Home 
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
get_right_posts();
?>
		</div><!-- #content .hfeed -->
	</div><!-- #container -->

<?php get_footer() ?>

