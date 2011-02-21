<?php

require_once 'Browser_php4_compat.php';

function browser_specific_stylesheet(){
    $browser = new Browser ();

    switch ($browser->getBrowser()) {
    case Browser::BROWSER_OPERA():
        if ($browser->getVersion() >= 11) {
            $stylesheet = 'style_op11.css';
        } else if ($browser->getVersion() >= 10) {
            $stylesheet = 'style_op10.css';
        } 
        break;
    case Browser::BROWSER_FIREFOX():
        if ($browser->getVersion() >= 4) {
            $stylesheet = 'style_ff4.css';
        } else if ($browser->getVersion() >= 3.6) {
            $stylesheet = 'style_ff36.css';
        } else if ($browser->getVersion() >= 3.5) {
            $stylesheet = 'style_ff35.css';
        } else if ($browser->getVersion() >= 3.0) {
            $stylesheet = 'style_ff30.css';
        } else if ($browser->getVersion() >= 3) {
            $stylesheet = 'style_ff2.css';
        } else {
            $found = FALSE;
        }
        break;
    case Browser::BROWSER_IE():
        if ($browser->getVersion() >= 9) {
            $stylesheet = 'style_ie9.css';
        } else if ($browser->getVersion() >= 8) {
            $stylesheet = 'style_ie8.css';
        } else if ($browser->getVersion() >= 7) {
            $stylesheet = 'style_ie7.css';
        } else if ($browser->getVersion() >= 6) {
            $stylesheet = 'style_ie6.css';
        } else {
            $found = FALSE;
        }
        break;
    case Browser::BROWSER_SAFARI():
        if ($browser->getVersion() >= 5) {
            $stylesheet = 'style_sf5.css';
        } else {
            $found = FALSE;
        }
        break;
    case Browser::BROWSER_CHROME():
        if ($browser->getVersion() >= 8) {
            $stylesheet = 'style_ch8.css';
        } else if ($browser->getVersion() >= 7) {
            $stylesheet = 'style_ch7.css';
        } else if ($browser->getVersion() >= 6) {
            $stylesheet = 'style_ch6.css';
        } else {
            $found = FALSE;
        }
        break;
    default:
        $found = FALSE;
        break;
    }

    if ($stylesheet) {
        return '<link rel="stylesheet" href="'.get_bloginfo ('template_url').'/'.$stylesheet.'" />';
    } else {
        return '<!-- '.$browser->getUserAgent().' -->';
    }
}
/* $browser = detect_browser(); */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8" />
<title><?php wp_title ('&laquo;', true, 'right'); ?><?php bloginfo ('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" />
<!--link rel="stylesheet" href="<?php bloginfo ('template_directory'); ?>/style_<?php echo $browser; ?>.css" /-->
<?php echo browser_specific_stylesheet (); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.base64.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/scripts.js"></script>
<!--[if lt IE 7]>
<script src="<?php bloginfo ('template_url'); ?>/js/pngfix.js"></script>
<script>
<!--
    DD_belatedPNG.fix('.pngfix');
//-->
</script>
<![endif]--> 

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php bloginfo ('template_url'); ?>/images/favicon.ico" />
<?php wp_head(); ?>
</head>

    <body id="<?php echo $post->post_name; ?>">
    <header>
        <hgroup>
        </hgroup>
        <nav>
            <ul>
<?php wp_list_pages ('depth=1&title_li='); ?>
            </ul>
        </nav>
        <!--h1><?php bloginfo ('name'); ?></h1>
        <h2><?php bloginfo ('description'); ?></h2-->
        <section id="title">
        <h1><span id="pit"><a href="<?php bloginfo ('url'); ?>">P<span id="i">i</span>t</a></span><span id="title_right"><a href="<?php bloginfo ('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/PIT_logo.png" /></a><span id="prods"><span id="productions">productions</span><hr /><span id="produksies">produksies</span></span></span></h1>
            <span id="number">+2712 651 2432</span>
        </section>
    </header>
