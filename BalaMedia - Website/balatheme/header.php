<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package BalaTheme
 */
?><!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bauhaus - OnePage Architecture & Interior HTML Template">
    <meta name="author" content="Paul">

    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Be+Vietnam+Pro" rel="stylesheet">
    <link href="https://freefontsfamily.com/helvetica-font-family/" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/dark.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <?php wp_head(); ?>
</head>
<body <?php body_class('body-fullpage'); ?>>

<!-- Loader -->
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!-- Content Click Capture-->
<div class="click-capture"></div>

<!-- Sidebar Menu-->
<div class="menu">
    <span class="close-menu icon-cross right-boxed"></span>
    <div class="menu-lang right-boxed">
        <!-- Language links can be added here -->
    </div>
    <nav class="nav mobile-menu menu-pagepiling">
        <ul class="menu-list right-boxed">
            <li><a data-menuanchor="main" href="#main">Home</a></li>
            <li><a data-menuanchor="about" href="#about">About</a></li>
            <li><a data-menuanchor="projects" href="#projects">Mission</a></li>
            <li><a data-menuanchor="partners" href="#partners">Services</a></li>
            <li><a data-menuanchor="testimonials" href="#testimonials">Previous Clients</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </nav>
    <div class="menu-footer right-boxed">
        <div class="copy">© Ahaz Software and Website<br></div>
    </div>
</div>

<!-- Navbar -->
<header class="navbar navbar-2 navbar-white boxed">
    <div class="navbar-bg"></div>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="brand" href="#">
        <img class="brand-img-white" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/assets/logo.png">
        <div class="brand-info">
            <div class="brand-name"></div>
            <div class="brand-text"></div>
        </div>
    </a>
    <address class="navbar-address visible-lg"><span class="text-white"></span></address>
    <div class="social-list-bala">
        <a href="linkedin"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-icons/BM LinkedIn SVG.svg" alt="LinkedIn"></a>
        <a href="behance"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-icons/BM Behance SVG.svg" alt="Behance"></a>
        <a href="instagram"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-icons/BM Instagram SVG.svg" alt="Instagram"></a>
        <a href="facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-icons/BM Facebook SVG.svg" alt="Facebook"></a>
        <a href="twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-icons/BM X SVG.svg" alt="Twitter"></a>
    </div>
</header>