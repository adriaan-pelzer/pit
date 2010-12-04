<?php
/*
Template Name: Home - WTF? There are 2 homes.
*/
?>

<?php get_header() ?>

<?php $num_posts = (wp_count_posts()); ?>

	<div id="cat_container" class="body">
<?php /*get_sidebar ();*/ ?>
<?php /* Could you fix the indentation here (and throughout the code - many issues elsewhere too), and remove this inline style */ ?>
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

