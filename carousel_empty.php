<section class="post_container" id="post_container_<?php echo $post->ID; ?>">
    <script type="text/javascript">
    $("#post_container_<?php echo $post->ID; ?>").data ('content', '<?php the_content (); ?>');
    </script>        
    <h3 class="post-title"><?php echo $post->post_title; ?></h3>
    <section class="inner_container">
<?php
    //the_content ();
?>
    </section>
    <span class="post_date"><?php if (!($page_name == 'home')) {echo date('j F Y', (strtotime($post->post_date)));} ?></span>
</section>

