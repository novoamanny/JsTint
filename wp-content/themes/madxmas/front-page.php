<?php
/**
 * The blog template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();
// E x t r a   V a r i a b l e s
$introSection = get_field("intro_section");
$sectionCopy = $section1['section_1'];
$sectionTitle = $sectionCopy['title'];
$section2 = get_field("section_2", "option");
$section3 = get_field("section_3", "option");
$squares = get_field("square_sections", "option");
$square_one = $squares['one'];
$square_two = $squares['two'];
$square_three = $squares['three'];
$footer = get_field("footer", "option");

// H e r o   O p t i o n s   G r o u p
$hero_options = get_field("hero_options");
// H e r o   O p t i o n s
$hero_title = $hero_options['title'];
$hero_subtitle = $hero_options['subtitle'];

?>


<!-- H e r o   S e c t i o n -->
<div class="hero-container full-width flex wrap center relative">
    <div data-aos="fade-right" data-aos-duration="3000" class="absolute title-position-hero">
        <!-- Hero Title -->
        <h2 class="hero-title veneer uppercase">
            <?php echo $hero_title; ?>
        </h2>
        <!-- Hero Subtitle -->
        <h2 class="hero-subtitle americane white-copy">
            <?php echo $hero_subtitle; ?>
        </h2>
        <!-- Free Quote CTA -->
        <!-- <div class="flex hero-cta-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">
                Free Quote!
            </a>
        </div> -->
    </div>
    <!-- Owl Carousel -->
    <!-- Need to update this to a Repeater Group -->
    <div class="owl-carousel">
            <img src="<?php echo get_template_directory_uri();?>/src/images/Car-Headlight-on.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Kris-Roman3.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Tesla.jpg" />
    </div>
</div>


<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom align-items intro-video mobile-section-video">
    <!-- Left -->
    <div class="half-width flex wrap center mobile-full mobile-section-copy">
        <div class="full-width flex wrap justify-left mobile-section-title">
            <h2 class="title veneer text-left uppercase">
                Revolutionizing Your Ride,</br>One Detail at a Time!
            </h2>
        </div>
 
        <div class="full-width flex wrap justify-left text-left align-items">
            <p class="americane copy black-copy square-copy square-copy-width mobile-copy">
                Driven by a passion for automotive excellence, we are committed to enhancing your driving experience through precision craftsmanship, innovative solutions, and personalized service. Our mission is to inspire confidence and satisfaction in every customer, ensuring that your journey with us is nothing short of exceptional.
            </p>
        </div>
        
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align youtube-container mobile-video">
        <!-- Video -->
        <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/GFplWZMHd08?controls=0&autoplay=1&mute=1&loop=1&playlist=GFplWZMHd08&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>


<!-- W i n d o w   T i n t -->
<div class="flex wrap center square-section mobile-section">
<!-- Left -->
    <div class="left half-width carousel-opacity mobile-full">  
    <!-- Owl Carousel -->
    <!-- Need to update this to a Repeater Group -->
        <div class="owl-carousel">
            <img src="<?php echo get_template_directory_uri();?>/src/images/Windshield-window-tint.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Roman-1920x1080.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Kris-Roman3.jpg" />
        </div>
    </div>
<!-- Right -->
    <div class="right half-width bg-linear-dark-fade3 white-copy padding-top-bottom-alt flex wrap center align-items mobile-full mobile-section-copy">
        <div class="flex wrap center align-items">
            <div class="full-width flex wrap justify-left mobile-section-title">
                <h2 class="title veneer text-left uppercase">
                    Ceramic Window Tint
                </h2>
            </div>
            <div class="full-width flex wrap center text-left">
                <p class="americane copy white-copy square-copy mobile-copy">
                    Ceramic Window Tint offers superior heat rejection, glare reduction, and UV protection, ensuring a cooler and more comfortable driving experience. Discover the ultimate combination of style and functionality for your vehicle today.
                </p>
            </div>
            <div class="flex full-width wrap justify-right mobile-section-cta">
                <a href="/servies/window-tint" class="nav-phone americane uppercase text-right quote-button quote-button-margin-right">Learn More!</a>
                <!-- <a href="/services/window-tint" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a> -->
            </div>
        </div>
    </div>
</div>



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
                <li class="americane"><strong class="veneer uppercase">Ultimate Paint Protection:</strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
                <li class="americane"><strong class="veneer uppercase">Preserves Resale Value:</strong></br> Protecting your car's paint with PPF can significantly increase its resale value by maintaining a flawless exterior. Potential buyers will appreciate the care taken to protect the vehicle.</li>
                <li class="americane"><strong class="veneer uppercase">Maintains Aesthetics:</strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
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
                <li class="americane"><strong class="veneer uppercase">Self-Healing Technology:</strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
                <li class="americane"><strong class="veneer uppercase">Easy Maintenance:</strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
                <li class="americane"><strong class="veneer uppercase">Longevity: </strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
                <li class="americane"><strong class="veneer uppercase">Custom Fit:</strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
                <li class="americane"><strong class="veneer uppercase">Enhanced Driving Experience:</strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
                <li class="americane"><strong class="veneer uppercase">Professional Installation: </strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
            </ul>
        </div>
        <div class="padding-top-bottom">
            <img src="<?php echo get_template_directory_uri();?>/src/images/tesla-cars.png"  />
        </div>
    </div>
</div>




<div class="full-width flex wrap center carousel-opacity relative full-carousel">
    <div data-aos="fade-right" data-aos-duration="3000" class="absolute title-position">
        <!-- Hero Title -->
        <h2 class="hero-title veneer uppercase">
        Defend Your Drive: </br>Paint Protection Film
        </h2>
        <!-- Hero Subtitle -->
        <h2 class="hero-subtitle americane white-copy">
            <?php echo $hero_subtitle; ?>
        </h2>
        <p class="copy americane white-copy">
        Our Paint Protection Film (PPF) offers unmatched protection for your vehicle's paint. Engineered to withstand the rigors of daily driving, our nearly invisible film provides a durable barrier against rock chips, scratches, and stains, ensuring your car looks its best for years to come.  
        </p>
        <h2 class="hero-subtitle veneer white-copy uppercase bold-title">
            Protect Against
        </h2>
        <div class="full-width flex">
            <div class="hero-icon flex wrap center text-center">
                <img style="filter: invert();" src="<?php echo get_template_directory_uri();?>/src/images/rock-icon.svg" />
                <p class="copy americane full-width white-copy">Rocks</p>
            </div>
            <div class="hero-icon flex wrap center text-center">
                <img style="filter: invert();" src="<?php echo get_template_directory_uri();?>/src/images/scratches.svg" />
                <p class="copy americane full-width white-copy">Scratches</p>
            </div>
            <div class="hero-icon flex wrap center text-center">
                <img style="filter: invert();" src="<?php echo get_template_directory_uri();?>/src/images/sun.svg" />
                <p class="copy americane full-width white-copy">Sun</p>
            </div>
            <div class="hero-icon flex wrap center text-center">
                <img style="filter: invert();" src="<?php echo get_template_directory_uri();?>/src/images/rain.svg" />
                <p class="copy americane full-width white-copy">Rain</p>
            </div>
        </div>
        <!-- Free Quote CTA -->
        <!-- <div class="flex hero-cta-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">
                Free Quote!
            </a>
        </div> -->
    </div>
<!-- <iframe width="100%" height="1200px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <div class="owl-carousel">
        
            <!-- <img src="<?php echo get_template_directory_uri();?>/src/images/tesla.jpeg" /> -->
       
            <img src="<?php echo get_template_directory_uri();?>/src/images/Tesla-Rear.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-car.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/PPF.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Tesla.jpg" />
          
    </div>
</div>



<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom align-items intro-video mobile-section-video">
    <!-- Left -->
    <div class="half-width flex wrap center mobile-full mobile-section-copy">
        <div class="full-width flex wrap justify-left mobile-section-title">
            <h2 class="title veneer text-left uppercase">
                Let Us Prep your</br>vehicle for PPF?
            </h2>
        </div>
 
        <div class="full-width flex wrap justify-left text-left align-items">
            <p class="americane copy black-copy square-copy square-copy-width mobile-copy">
                Paint Protection Film offers a multitude of benefits. It acts as a barrier against road debris, preventing chips and scratches that can diminish the appearance of your vehicle. By investing in PPF, you'll not only maintain its showroom shine but also protect its resale value, saving you money in the long run.
            </p>
        </div>
        
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align youtube-container mobile-video">
        <!-- Video -->
        <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/GFplWZMHd08?controls=0&autoplay=1&mute=1&loop=1&playlist=GFplWZMHd08&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>





<script>
var boxes = document.querySelectorAll('.box');
var slides = document.querySelectorAll('.slide');
var boxesArray = [...boxes];
var slidesArray = [...slides];
    slidesArray.forEach((q,index) => {
        q.addEventListener("mouseover", () => {
            if (!slidesArray[index].classList.contains('expand')) {
                slidesArray[index].classList.add('expand')
            }
        });
    })
</script>


<?php
get_footer();