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

<?php
$service_name = get_the_title();

if($service_name == 'PPF') : {
    $service_name = 'Paint Protection Film';
}
endif;
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
                            <div class="logo-section">
                            <div class="full-width side-menu-logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="J's Tint logo" /></a>
                            </div>
                            <div class="full-width align-items side-menu-logo" >
                                <a target="_blank" href="https://www.instagram.com/js_tint/?hl=en"><img class="icon-logo" src="<?php echo get_template_directory_uri();?>/src/images/red-instagram.png" /></a>
                                <a target="_blank" href="https://www.facebook.com/jstint2012/"><img class="icon-logo" src="<?php echo get_template_directory_uri();?>/src/images/red-facebook.png" /></a>
                            </div>
                            </div>
                            <ul>
                                <?php wp_nav_menu(array('theme_location' => 'mobile', 'menu_class' => 'mobile', 'depth' => 1)); ?>
                            </ul>
                            <div class="full-width side-menu-logo" >
                                <a class="info-white-border quote-button quote-button-margin white-copy bg-nova-dark-purple americane" href="https://app.tintwiz.com/web/cs/hl0x1sjdljqoodkrbrfgsubsq05l26vw">Get A Quote!</a>
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
<div class="sticky-cta">
  <a href="tel:+14698410200" class="call-button">
  <i class="fas fa-phone"></i>
  </a>
</div>
<div class="splash-screen <?php if(is_front_page()) : echo 'video'; endif; ?>">
<?php if(is_front_page()) : ?>
<!-- Video Background -->
    <video class="video-bg" autoplay muted loop playsinline>
        <?php if(is_front_page()) : ?>
            <source src="<?php echo get_template_directory_uri();?>/assets/images/splash-video.mp4" type="video/mp4">
        <?php elseif($service_name == 'Paint Protection Film' || $service_name == 'Services') : ?>
            <source src="<?php echo get_template_directory_uri();?>/assets/images/ppf-splash-video.mp4" type="video/mp4">
        <?php endif; ?>
        Your browser does not support the video tag.
    </video>
<?php endif; ?>

    <div class="logo">
        <div class="full-width flex wrap center align-items">
            <img class="third-width" src="<?php echo get_template_directory_uri();?>/img/main-logo.png" />
        </div>
        <!-- <div class="full-width flex wrap center align-items">
            <img style="width: 85%" src="<?php echo get_template_directory_uri();?>/src/images/holiday2.png" />
        </div> -->
    </div>
  </div>
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


    
    // Wait for the DOM to load completely
    window.addEventListener('load', () => {
      // Remove the splash screen after the animation
      document.body.classList.add('loaded');
    });

    document.addEventListener('DOMContentLoaded', function () {
    const video = document.querySelector('.video-bg');
    if (video) {
        video.play().catch(error => {
            console.error('Autoplay failed:', error);
        });
    }
});
</script>


<style>
    /* Splash Screen Styles */
   /* Splash Screen Styles */

    /* Video Background Styles */
    .video-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1; /* Send video to the background */
      filter: brightness(45%);
    }
   .splash-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient( rgb(229, 27, 27), #B62025);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      animation: fadeOut 1.5s ease forwards 2.5s; /* Slide up after 3s */
    }
    .splash-screen.video{
        animation: fadeOut 2.5s ease forwards 3.5s; /* Slide up after 3s */
        background: #000;
    }

    .splash-screen .logo {
      color: white;
      font-size: 3rem;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 3px;
      text-align: center;
      animation: zoomIn 1.5s ease;
    }

    /* Zoom-In Effect for Logo */
    @keyframes zoomIn {
      0% {
        transform: scale(0.5);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    /* Slide-Up Animation */
    @keyframes slideUp {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(-100%);
      }
    }


    /* Fade-out Animation */
    @keyframes fadeOut {
      0% {
        opacity: 1;
      }
      100% {
        opacity: 0;
        visibility: hidden;
      }
    }

    /* Fade-in Animation */
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    /* Show main content after splash screen */
    body.loaded  {
      display: block;
    }
  </style>