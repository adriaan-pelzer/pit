<section class="post_container" id="post_container_<?php echo $posts->ID; ?>">
        
    <h3 class="post-title"><?php echo $posts->post_title; ?></h3>
<?php
    the_content ();
?>
    <span class="post_date"><?php echo date('j F Y', (strtotime($posts->post_date))); ?></span>
</section>

