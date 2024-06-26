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
            <div class="americane copy">
                <?php echo $copy_top; ?>
            </div>
        </div>
        
    </div>

</div>





<!-- Info TAB -->
<div class="info-tab info-tab-long white-copy flex wrap center reverse-row relative image-effect image-height-big align-items" style="background-image: url('<?php echo $hero_image;?>');">
    <div class="seventy-width padding-top-bottom bg-dark-opacity info-white-border">
        <div class="full-width">
            <h2 class="title veneer full-width text-center uppercase"><?php echo $service_tab_title; ?></h2>
        </div>
        <div class="copy mark text-center">
            <?php echo $service_tab_copy; ?>
        </div>
    </div>
</div>





<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<!-- <div class="full-width flex wrap center bg-linear-dark-fade white-copy padding-top-bottom align-items intro-video mobile-section-video"> -->
    <!-- Left -->
    <!-- <div class="half-width flex wrap center mobile-full mobile-section-copy">
        <div class="full-width flex wrap justify-left mobile-section-title">
            <h2 class="title veneer text-left">
            <?php echo $service_tab_title; ?>
            </h2>
        </div>
  -->
        <!-- <div class="full-width flex wrap justify-left text-left align-items">
            <div class="copy mark text-center">
                <?php echo $service_tab_copy; ?>
            </div>
        </div>
    </div> -->
    <!-- Right -->
    <!-- <div class="half-width flex wrap center align youtube-container mobile-video"> -->
        <!-- Video -->
        <!-- <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/GFplWZMHd08?controls=0&autoplay=1&mute=1&loop=1&playlist=GFplWZMHd08&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div> -->







<div class="single-copy full-width">
    <div class="full-width flex wrap center align-items padding-top-bottom-alt reverse-row">
        <div class="full-width flex wrap center">
            <div class="americane copy">
                <?php echo $copy_bottom; ?>
            </div>
        </div>
        
    </div>

</div>

<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-2ac4892a-75d2-49b5-b752-73ffc35efb91" data-elfsight-app-lazy></div>



<?php
get_footer();