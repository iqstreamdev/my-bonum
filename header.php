<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0 minimum-scale=1.0">
    
<!--  
    <link rel="apple-touch-icon" sizes="128x128" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.avif">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.webp">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico"> -->

    <!-- <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest"> -->
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="rgba(255,255,255,255)">

    <?php 
        echo wp_head(); 
        $customPageClass = (is_page() && get_page_uri()) ? get_page_uri() : '';
    ?>

</head>

<body <?php body_class($customPageClass); ?>>
    <header></header>
    <main>