<?php function get_right_cat() {
    $category= (get_the_category());
    print_r ($category);


    echo($catid==NULL)?"":"category=".$catid);
}
?>
