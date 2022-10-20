<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="logo">
                    Logo
                    <?php echo get_stylesheet_directory_uri() . '/styles/logo.css'; ?>
                </div>
                <div class="searchbox">
                    Search1
                </div>
            </section>
            <section class="menu-area">
                <nav class="main-menu">
                    Menu
                </nav>
            </section>
        </header>