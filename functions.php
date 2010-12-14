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

function detect_browser() {
    $user_agent =  strtolower($_SERVER['HTTP_USER_AGENT']);
    $ff = strpos($user_agent, 'firefox');
    $safari = strpos($user_agent, 'safari');
    $chrome = strpos($user_agent, 'chrome');
    $opera = strpos($user_agent, 'opera');
    $msie = strpos($user_agent, 'msie');
    if ($ff) {
        $browser = preg_replace('/[^[:alnum:]]/', '', (substr($user_agent, $ff)));
        $browser = substr($browser, 0, 9);
    }

    if ($safari) {
        $browser = preg_replace('/[^[:alnum:]]/', '', (substr($user_agent, $safari)));
        $browser = substr($browser, 0, 7);
    }

    if ($chrome) {
        $browser = preg_replace('/[^[:alnum:]]/', '', (substr($user_agent, $chrome)));
        $browser = substr($browser, 0, 7);
    }

    if ($opera) {
        $browser = preg_replace('/[^[:alnum:]]/', '', (substr($user_agent, $opera)));
        $browser = substr($browser, 0, 7);
    }

    if ($msie) {
        $browser = preg_replace('/[^[:alnum:]]/', '', (substr($user_agent, $msie)));
        $browser = substr($browser, 0, 5);
    }

    return $browser;
}
?>
