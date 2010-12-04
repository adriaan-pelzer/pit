<?php 
function get_right_cat() {
    $category= (get_the_category());

    foreach ($category as $cat) {
        $catid = ($cat->category_nicename);
        $cat_id = (($catid==NULL) || ($catid=='clips'))?0:$catid;
        if ($cat_id) {
            return $cat_id;
        }


    }
}

/* Don't ever let functions produce output. Let them return something, and add proper error checking. Use a return code */
function get_right_posts() {
    global $post;
    $tmp_post = $post;
    $cat_id = get_right_cat();
    $myposts = get_posts('numberposts=0&category_name=' . $cat_id . '');
    foreach($myposts as $post) {
        setup_postdata($post);
?>
<section class="post_container" id="post_container_<?php echo $post->ID; ?>">
        
    <h3 class="post-title"><?php the_title(); ?></h3>
<?php
        the_content ();
?>
    <span class="post_date"><?php echo date('j F Y', (strtotime($post->post_date))); ?></span>
</section>
<?php
    }
    $post = $tmp_post;
}
?>
