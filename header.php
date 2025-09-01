<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   <!-- xHTML -->
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0"> <!-- HTML 5-->
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <!--<link rel="stylesheet" href="stylemob.css" media="screen and (max-width:480px)">-->
    <?php wp_head(); ?>
</head>
<body class="body">
    <header class="mainheader">
        <h1 id="blog-title"><?php bloginfo('name') ?></h1>
        <h2 id="blog-desc"><?php bloginfo('Description') ?></h2>
        <img src="<?php echo get_bloginfo('template_directory') ?>/img/header.jpg" alt="">
        <nav>
            <!--<ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">PORTFOLIO</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>-->
            <?php wp_nav_menu(); ?>
        </nav>
    </header>

    <div class="mainContent">