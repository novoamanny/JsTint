<?php
/**
 * Template Name: Single-Services
 */
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();

$service_name = get_the_title();

if($service_name == 'PPF') : {
    $service_name = 'Paint Protection Film';
}
endif;




$hero = get_field('hero_options');
$hero_images = get_field('hero_image');
$hero_title = $hero['title'];
$hero_subtitle = $hero['subtitle'];
$hero_image = $hero_images['image'];

$service = get_field('single_service');
$service_tab = $service['service_tab'];
$copy_top = $service['copy_top'];
$copy_bottom = $service['copy_bottom'];

$service_tab_title = $service_tab['title'];
$service_tab_copy = $service_tab['copy'];
$service_tab_image = $service_tab['image'];
?>


<!-- H e r o   S e c t i o n -->
<div class="hero-container full-width flex wrap center relative image-effect image-height-hero-big" style="background-image: url('<?php echo $hero_image;?>');">      
    <div class="opacity-screen relative">
        <div data-aos="fade-right" data-aos-duration="3000" class="absolute title-position-hero">
            <!-- Hero Title -->
            <h2 class="hero-title veneer">
                <?php echo $hero_title ?>
            </h2>
            <!-- Hero Subtitle -->
            <!-- <h2 class="hero-subtitle americane white-copy">
                Ceramic Tint
            </h2> -->
        </div>
    </div>
    <img class="christmas-break" src="<?php echo get_template_directory_uri();?>/src/images/curve-bg-white.png" />
</div>


<div class="single-copy full-width">
    <div class="full-width flex wrap center align-items padding-top-bottom-alt">
        <div class="full-width flex wrap center">
            <div class="full-width padding-top-bottom-alt">
                <h2 class="text-center uppercase veneer title full-width"><?php echo $service_name ?></h2>
            </div>
            <p class="americane copy">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        
    </div>

</div>





<!-- Info TAB -->
<div class="info-tab info-tab-long white-copy flex wrap center reverse-row relative image-effect image-height-big align-items" style="background-image: url('<?php echo $hero_image;?>');">
    <div class="seventy-width padding-top-bottom bg-dark-opacity info-white-border">
        <div class="full-width">
            <h2 class="title veneer full-width text-center uppercase">Service Description</h2>
        </div>
        <p class="copy mark text-center">
        In today's fast-paced world, technology is not just an advantage but a necessity for success. Our premier IT/Software Consulting services offer strategic partnerships tailored to unlock your business's digital potential. Leveraging our deep industry expertise and cutting-edge insights, we collaborate closely with you to craft customized solutions that precisely align with your unique goals and challenges. Whether you're navigating complex software integrations, optimizing IT infrastructure, or embarking on a digital transformation journey, our consultants are dedicated to empowering you to thrive amidst the evolving digital landscape. From startups to enterprises, we stand as your trusted advisors, delivering tangible results and driving sustainable growth through innovative technology solutions.
        </p>
    </div>
</div>





<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-linear-dark-fade white-copy padding-top-bottom align-items intro-video mobile-section-video">
    <!-- Left -->
    <div class="half-width flex wrap center mobile-full mobile-section-copy">
        <div class="full-width flex wrap justify-left mobile-section-title">
            <h2 class="title veneer text-left">
                Service Statement
            </h2>
        </div>
 
        <div class="full-width flex wrap justify-left text-left align-items">
            <p class="americane copy white-copy square-copy square-copy-width mobile-copy">
                At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                Trust the experts at [Shop Name] to turn your car into a masterpiece.
            </p>
        </div>
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align youtube-container mobile-video">
        <!-- Video -->
        <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/GFplWZMHd08?controls=0&autoplay=1&mute=1&loop=1&playlist=GFplWZMHd08&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>







<div class="single-copy full-width">
    <div class="full-width flex wrap center align-items padding-top-bottom-alt reverse-row">
        <div class="full-width flex wrap center">
            <!-- <div class="full-width padding-top-bottom-alt">
                <h2 class="text-center uppercase veneer title full-width">Window Tint</h2>
            </div> -->
            <p class="americane copy">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        
    </div>

</div>




<?php
get_footer();