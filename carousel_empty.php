<section class="post_container" id="post_container_<?php echo $post->ID; ?>">
    <script type="text/javascript">
    $("#post_container_<?php echo $post->ID; ?>").data ('content', '<?php echo base64_encode (get_the_content()); ?>');
    //alert ($.base64Decode ($('#post_container_<?php echo $post->ID; ?>').data ('content')));
    </script>        
    <h3 class="post-title"><?php echo $post->post_title; ?></h3>
    <section class="inner_container">
        <noscript>
<?php
    the_content ();
?>
        </noscript>
    </section>
    <span class="post_date"><?php if (!($page_name == 'home')) {echo date('j F Y', (strtotime($post->post_date)));} ?></span>
</section>

