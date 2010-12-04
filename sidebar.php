<section id="sidebar">
<?php
$clips_id = get_cat_ID('clips');
wp_list_categories('exclude=' . $clips_id . '');
?>
</section>
