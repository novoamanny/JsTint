<?php
/**
 * The header for the theme.
 *
 * This is the template that displays all of the <head> section and before the main content area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="max-image-preview:large">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"> <!-- WordPress Stylesheet for Theme Reference -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/js/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/js/assets/owl.theme.default.min.css">   
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/src/owl-aos/aos.css">   

        <link rel="stylesheet" href="https://use.typekit.net/yeh6lyc.css">

        <?php wp_head(); ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-xxxxxxx');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body <?php body_class('sub'); ?>>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-xxxxxxx"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <header>
            <div class="top">
                <div class="container flex">
                    <div class="navwrap">
                        <?php 
                            $uri = $_SERVER['REQUEST_URI'];
                            $path = parse_url($uri, PHP_URL_PATH); // gives "/pwsdedtech"
                            $pathWithoutSlash = substr($path, 1);
                            // echo $pathWithoutSlash;
                            // if(!$pathWithoutSlash) :
                        ?>
<!--DESKTOP MENU-->
                        <nav id="desktopmenu" class="desktopmenu">
                            <!-- Desktop In-line Menu -->
                            <!-- Phone -->
                          
                            <!-- Left Menu -->
                            <!-- <div class="menu flex">
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'navigation')); ?>
                            </div> -->
                            <!-- Logo -->
                            <div class="brand">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="J's Tint & Car Audio" /></a>
                            </div>

                            <!-- Right Menu -->
                            <div class="flex wrap center align">
                                <div class="menu flex">
                                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'navigation')); ?>
                                </div>
                                <div class="full-width flex wrap center align-items">
                                    <a target="_blank" href="https://www.instagram.com/js_tint/?hl=en"><img class="icon-logo-nav" src="<?php echo get_template_directory_uri();?>/src/images/red-instagram.png" /></a>
                                    <a target="_blank" href="https://www.facebook.com/jstint2012/"><img class="icon-logo-nav" src="<?php echo get_template_directory_uri();?>/src/images/red-facebook.png" /></a>
                                </div>
                                <div class="flex">
                                    <a href="https://app.tintwiz.com/web/cs/hl0x1sjdljqoodkrbrfgsubsq05l26vw" class="quote-button quote-button-nav americane uppercase">Free Quote!</a>
                                </div>
                            </div>
<!--MOBILE MENU-->
                            
                            <div id="menu-toggle" class="hamburger-menu" onclick="toggleMenu()">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </nav>
                        <div class="white-bar"></div>

                        <nav class="side-menu" id="sideMenu">
                            <div class="flex wrap center" style="margin-top: 20px;">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img style="max-width: 200px;" src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="J's Tint logo" /></a>
                            </div>
                            <ul>
                                <?php wp_nav_menu(array('theme_location' => 'mobile', 'menu_class' => 'mobile', 'depth' => 1)); ?>
                            </ul>
                            <div class="flex wrap center full-width">
                                <a class="info-white-border quote-button quote-button-margin white-copy bg-nova-dark-purple americane" href="https://app.tintwiz.com/web/cs/hl0x1sjdljqoodkrbrfgsubsq05l26vw">Get A Quote!</a>
                            </div>
                            <div class="full-width flex wrap center align-items">
                                <a target="_blank" href="https://www.instagram.com/js_tint/?hl=en"><img class="icon-logo-nav" src="<?php echo get_template_directory_uri();?>/src/images/red-instagram.png" /></a>
                                <a target="_blank" href="https://www.facebook.com/jstint2012/"><img class="icon-logo-nav" src="<?php echo get_template_directory_uri();?>/src/images/red-facebook.png" /></a>
                            </div>
                        </nav>
                        <!-- <nav id="menu" class="mobilemenu">
                            <div class="inner">
                            <div class="brand">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img style="max-width: 200px;" src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="J's Tint logo" /></a>
                            </div>
                            <div class="flex wrap center full-width">
                                <a class="info-white-border quote-button quote-button-margin white-copy bg-nova-dark-purple americane" href="https://app.tintwiz.com/web/cs/hl0x1sjdljqoodkrbrfgsubsq05l26vw">Get A Quote!</a>
                            </div>
                                <?php wp_nav_menu(array('theme_location' => 'mobile', 'menu_class' => 'mobile', 'depth' => 1)); ?>
                                <a href="#" class="close">Close</a>
                            </div>
                        </nav> -->
                    </div>
                </div>
            </div>
        </header>

<script>
    const nav = document.getElementById('desktopmenu');
    window.onscroll = function () { 
        if (document.body.scrollTop >= 20 || document.documentElement.scrollTop >= 20 ) {
        nav.classList.add("nav-colored");
    } 
    else {
        nav.classList.remove("nav-colored");
    }
    };

    function toggleMenu() {
        const sideMenu = document.getElementById("sideMenu");
        const hamburger = document.querySelector(".hamburger-menu");

        sideMenu.classList.toggle("open");
        hamburger.classList.toggle("active");
    }
</script>