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
    <!-- <img class="christmas-break" src="<?php echo get_template_directory_uri();?>/src/images/curve-bg-white.png" /> -->
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

    <div class="full-width flex wrap center">
        <!-- <div class="flex wrap center full-width">
            <a class="quote-button quote-button-margin white-copy bg-nova-dark-purple americane" href="/services">Services</a>
        </div> -->
        <div class="flex wrap center full-width">
            <a class="quote-button quote-button-margin white-copy bg-nova-dark-purple americane" href="https://app.tintwiz.com/web/cs/hl0x1sjdljqoodkrbrfgsubsq05l26vw">Get A Quote!</a>
        </div>
        <!-- <div class="flex wrap center full-width">
            <a class="quote-button quote-button-margin white-copy bg-nova-dark-purple americane" href="tel:+14698410200">Call Now!</a>
        </div> -->
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



<?php if($service_name == 'Paint Protection Film') : ?>


<!-- PPF Slides -->

<div class="services full-width flex wrap center padding-top-bottom overflow-x">
    <!-- TAB -->
    <div data-aos="fade-right" data-aos-duration="3000" class="services-tab bg-linear-dark-fade white-copy flex wrap center">
        <div class="full-width">
            <h2 class="title veneer text-left">Preserve Your Ride, Unleash Its Potential: The Power of Paint Protection Film</h2>
        </div>
        <p class="copy mark text-left auto-margin copy-width-intro">
            Transform the way you protect your vehicle with our industry-leading Paint Protection Film (PPF). 
            Engineered to shield your car's paint from the rigors of daily driving, our PPF offers unparalleled protection without compromising on style. 
            Crafted from high-quality materials, our nearly invisible film is designed to keep your car looking newer for longer.
        </p>
        <div class="full-width">
            <h2 class="title veneer text-left uppercase">Benefits of PPF:</h2>
        </div>
        <div class="full-width list">
            <ul>
                <li class="americane"><strong class="veneer uppercase">Shield Your Vehicle from the Elements:</strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
            </ul>
        </div>
        <div class="flex wrap center padding-top-bottom">
            <img src="<?php echo get_template_directory_uri();?>/src/images/tint-tesla.png"  />
        </div>
    </div>
    <!-- TAB -->
    <div data-aos="fade-left" data-aos-duration="3000" class="services-tab bg-linear-red-fade white-copy flex wrap center">
        <div class="full-width flex wrap align-items">
            <h2 class="title veneer text-left uppercase">More Benefits of PPF:</h2>
        </div>
        <div class="full-width list">
            <ul class="flex wrap align-items">
                <li class="americane"><strong class="veneer uppercase">Preserves Resale Value:</strong></br> Protecting your car's paint with PPF can significantly increase its resale value by maintaining a flawless exterior. Potential buyers will appreciate the care taken to protect the vehicle.</li>
                <li class="americane"><strong class="veneer uppercase">Unobtrusive Protection:</strong></br> Our high-quality PPF is virtually invisible once applied, maintaining the original aesthetics of your vehicle. Enjoy peace of mind knowing your car is protected without altering its appearance.</li>
                <li class="americane"><strong class="veneer uppercase">Durable and Reliable:</strong></br> Engineered with cutting-edge technology, our PPF is designed to withstand daily driving and harsh conditions. It provides long-lasting protection, ensuring your vehicle stays looking newer for longer.</li>
                <li class="americane"><strong class="veneer uppercase">Easy Maintenance:</strong></br> PPF makes cleaning easier by repelling dirt, water, and contaminants. Say goodbye to frequent waxing and polishing—maintaining your car's shine is effortless with our protective film.</li>
                <li class="americane"><strong class="veneer uppercase">Tailored Solutions: </strong></br> We offer custom-fit PPF solutions for a wide range of vehicles, ensuring precise coverage and optimal protection. Whether you drive a sedan, SUV, or sports car, we have the right solution for you.</li>
            </ul>
        </div>
        <div class="padding-top-bottom">
            <img src="<?php echo get_template_directory_uri();?>/src/images/tesla-cars.png"  />
        </div>
    </div>
</div>



<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-linear-dark-fade white-copy padding-top-bottom align-items intro-video mobile-section-video">
    <!-- Left -->
    <div class="half-width flex wrap center mobile-full mobile-section-copy">
        <div class="full-width flex wrap justify-left mobile-section-title">
            <h2 class="title veneer text-left uppercase">
            <?php echo $service_tab_title; ?>
            </h2>
        </div>
 
        <div class="full-width flex wrap justify-left text-left align-items">
            <!-- <div class="copy mark text-center">
                <?php echo $service_tab_copy; ?>
            </div> -->
            <p class="americane copy white-copy square-copy square-copy-width mobile-copy">Paint Protection Film (PPF) shields your vehicle from chips, scratches, and environmental hazards without compromising its appearance. Our high-quality PPF offers transparent, durable protection that preserves your car's pristine finish, ensuring it looks newer for longer and maintains its resale value.</p>
        </div>
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align youtube-container mobile-video">
        <!-- Video -->
    <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/F6yT6VvXjvg?controls=0&autoplay=1&mute=1&loop=1&playlist=F6yT6VvXjvg&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
<?php endif; ?>


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




<!-- Custom Car Audio -->

<?php if($service_name == 'Custom Car Audio') : ?>


<!-- TAB -->
<div class="service-tab service-tab-long bg-linear-red-fade white-copy flex wrap align-items parralex parralex-reverse" >
    <div class="third-width padding-top-bottom-alt parallex-copy">
        <div class="full-width">
            <h2 class="title veneer text-left">Option 1</h2>
        </div>
        <p class="copy mark text-left auto-margin copy-width-intro">
        Protect your vehicle's pristine finish with our advanced Paint Protection Film (PPF), shielding against scratches, road debris, and environmental elements while maintaining its showroom shine.
        </p>
        <div class="full-width flex wrap justify-left">
            <a class="quote-button quote-button-margin-left white-copy bg-nova-purple americane" href="/services/ppf">Learn More</a>
        </div>
    </div>
    <div class="relative seventy-width image-effect image-height-regular parallex-image" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/Car-Headlight-on.jpg);">

    </div>
        <div class="owl-carousel">
            <img src="<?php echo get_template_directory_uri();?>/src/images/Car-Headlight-on.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Tesla-Rear.jpg" />
        </div>
</div>


<!-- TAB -->
<div class="service-tab service-tab-long bg-linear-dark-fade white-copy flex wrap align-items reverse-row parralex parralex-no-reverse" >
    <div class="third-width padding-top-bottom-alt parallex-copy">
        <div class="full-width">
            <h2 class="title veneer text-left">Option 2</h2>
        </div>
        <p class="copy mark text-left auto-margin copy-width-intro">
        Upgrade to our Ceramic window tint for unparalleled heat rejection, ensuring a cooler and more comfortable interior.
        </p>
        <div class="full-width flex wrap justify-left">
            <a class="quote-button quote-button-margin-left white-copy bg-nova-purple americane" href="/services/window-tint">Learn More</a>
        </div>
    </div>
    <div class="relative seventy-width image-effect image-height-regular parallex-image" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/Cybertruck-cleo.jpg);">

    </div>
        <div class="owl-carousel">
            <img src="<?php echo get_template_directory_uri();?>/src/images/Windshield-window-tint.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Cybertruck-cleo.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Roman-1920x1080.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Kris-Roman3.jpg" />
        </div>
</div>


<!-- TAB -->
<div class="service-tab service-tab-long bg-linear-red-fade white-copy flex wrap align-items parralex parralex-reverse" >
    <div class="third-width padding-top-bottom-alt parallex-copy">
        <div class="full-width">
            <h2 class="title veneer text-left">Option 3</h2>
        </div>
        <p class="copy mark text-left auto-margin copy-width-intro">
        Transform your driving experience with personalized custom car audio solutions that deliver superior sound quality and seamless integration, tailored to reflect your unique style and preferences.
        </p>
        <div class="full-width flex wrap justify-left">
            <a class="quote-button quote-button-margin-left white-copy bg-nova-purple americane" href="/services/car-audio">Learn More</a>
        </div>
    </div>
    <div class="relative seventy-width image-effect image-height-regular parallex-image" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/tint-orange-car.jpg);">

    </div>
        <div class="owl-carousel">
            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />
        </div>
</div>

<?php endif; ?>




<!-- Social -->

<div class="flex wrap center info-tab-margin mobile-section">
    <div class="left half-width carousel-opacity mobile-full">
    
            
            <div class="owl-carousel">
                

                <img src="<?php echo get_template_directory_uri();?>/src/images/Tesla-Rear.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Front-shot.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Tesla.jpg" />
            </div>
    
    </div>
   
<!-- SECTION ONE -->
    <div class="right half-width bg-linear-red-fade white-copy padding-top-bottom-alt flex wrap center align-items mobile-full mobile-section-copy">
        <div class="full-width flex wrap justify-left mobile-section-title">
            <h2 class="title veneer text-left">Stay Connected!</h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
            <p class="americane copy white-copy square-copy mobile-copy">Follow us on social media to stay connected with our latest projects, special offers, and tips to keep your vehicle looking its best. Join our community and discover how we can enhance your ride with top-notch window tinting, ceramic coating, car wraps, and more!</p>
            </div>
   
                <div class="full-width flex wrap center align-items">
                    <a target="_blank" href="https://www.instagram.com/js_tint/?hl=en"><img class="icon-logo" src="<?php echo get_template_directory_uri();?>/src/images/insta.png" /></a>
                    <a target="_blank" href="https://www.facebook.com/jstint2012/"><img class="icon-logo" src="<?php echo get_template_directory_uri();?>/src/images/facebook.png" /></a>
                </div>
        </div>
    </div>
</div>




<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-2ac4892a-75d2-49b5-b752-73ffc35efb91" data-elfsight-app-lazy></div>



<?php
get_footer();