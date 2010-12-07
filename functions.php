<?php 
function get_right_cat() {
    $category= (get_the_category());
    foreach ($category as $cat) {
        $catid = ($cat->category_nicename);
        $cat_id = ($catid==NULL)?0:$catid;
        if ($cat_id) {
            return get_cat_ID($cat_id);
        }


    }
}
?>
