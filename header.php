<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>\animate.css">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<div id="wrapper" class="hfeed">
    <header id="header">
        <div class="nav-wrapper">
            <nav id="menu">
                <div class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
                <a class="logo logolink" href="<?php echo get_home_url()?>">
                <img class="logo" src="<?php echo get_template_directory_uri()?>\img\logokisebb_png.png";>
                </a>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav>
        </div>
    </header>
    <body <?php body_class(); ?>>
    <div id="container">
