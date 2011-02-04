<section class="post_container" id="post_container_<?php echo $post->ID; ?>">
        
    <h3 class="post-title"><?php echo $post->post_title; ?></h3>
<?php
    the_content ();
?>
    <span class="post_date"><?php if (!(is_page('Home'))) {echo date('j F Y', (strtotime($post->post_date)));} ?></span>
</section>

