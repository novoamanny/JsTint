<?php
/**
 * Template Name: Services
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
$sign_off = get_field("sign_off");
$intro = get_field("intro_content");
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
$location = $footer['location'];
$hours = $footer['hours'];

$address = $location['address'];
$city = $location['city'];
$state = $location['state'];
$zipcode = $location['zipcode'];

$weekday = $hours['weekday'];
$weekend = $hours['weekend'];

?>


<!-- H e r o   S e c t i o n -->
<div class="hero-container full-width flex wrap center relative image-effect image-height-hero-big" style="background-image: url('<?php echo get_template_directory_uri();?>/src/images/about-hero-parallex2.jpeg');">      
<div class="opacity-screen"></div>
    <div class="absolute title-position-hero">
        <h2 class="hero-title veneer">Customize Your Ride, Unleash Your Style!</h2>
        <h2 class="hero-subtitle americane white-copy">Crafting Your Dream Ride,</br>One Upgrade at a Time!</h2>
    </div>
    <img class="christmas-break" src="<?php echo get_template_directory_uri();?>/src/images/curve-bg-white.png" />
</div>


<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom align-items intro-video mobile-section-video">
    <!-- Left -->
    <div class="half-width flex wrap center mobile-full mobile-section-copy">
        <!-- Need to update copy -->
    <!-- <p class="copy mark text-left auto-margin copy-width-intro">
        Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.
        At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.
        Whether you're looking to upgrade your sound system, add some privacy with tinted windows, or simply want to give your car a new look, our experienced team is here to help. With years of industry experience, we have the knowledge and expertise to recommend the perfect accessories for your vehicle.
        Browse our selection online or visit our showroom to see our products up close. Let J's Tint help you take your driving experience to the next level!
    </p> -->
    <div class="full-width flex wrap justify-left align-items mobile-section-title">
            <h2 class="title veneer text-left">
                Revitalize Your Ride, Protect Your Investment!
            </h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy black-copy square-copy square-copy-width mobile-copy">
                    Driven by a passion for automotive excellence, we are committed to enhancing your driving experience through precision craftsmanship, innovative solutions, and personalized service.
                </p>
            </div>
        </div>
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align youtube-container mobile-video">
        <!-- Video -->
        <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/h3uo4z0znmg?si=WftDFHLTeEHiX9tq?controls=0&autoplay=1&mute=1&loop=1&playlist=h3uo4z0znmg&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>



<!-- TAB -->
<div class="service-tab service-tab-long bg-linear-red-fade white-copy flex wrap align-items parralex parralex-reverse" >
    <div class="third-width padding-top-bottom-alt parallex-copy">
        <div class="full-width">
            <h2 class="title veneer text-left">PPF</h2>
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
            <h2 class="title veneer text-left">Window Tint</h2>
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
            <h2 class="title veneer text-left">Custom Car Audio</h2>
        </div>
        <p class="copy mark text-left auto-margin copy-width-intro">
            Transform your online presence with our bespoke web development solutions. From intuitive interfaces to seamless functionality, we create websites that captivate your audience and drive results.
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

<!-- TAB -->
<div class="service-tab service-tab-long bg-linear-dark-fade white-copy flex wrap align-items reverse-row parralex parralex-no-reverse" >
    <div class="third-width padding-top-bottom-alt parallex-copy">
        <div class="full-width">
            <h2 class="title veneer text-left">Full Body Wrap</h2>
        </div>
        <p class="copy mark text-left auto-margin copy-width-intro">
            Transform your online presence with our bespoke web development solutions. From intuitive interfaces to seamless functionality, we create websites that captivate your audience and drive results.
        </p>
        <div class="full-width flex wrap center">
            <a class="quote-button quote-button-margin white-copy bg-nova-purple americane" href="/services/car-wrap">Learn More</a>
        </div>
    </div>
    <div class="relative seventy-width image-effect image-height-regular parallex-image" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/chevy-parallex.jpeg);">

    </div>
        <div class="owl-carousel">
            <img src="<?php echo get_template_directory_uri();?>/src/images/Windshield-window-tint.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Cybertruck-cleo.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />
            <img src="<?php echo get_template_directory_uri();?>/src/images/Kris-Roman3.jpg" />
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




<!-- Info TAB -->
<div class="info-tab info-tab-long white-copy flex wrap center relative image-effect image-height-service align-items" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/Cybertruck-hero-5.jpg);">
    <div class="seventy-width padding-top-bottom bg-dark-opacity info-white-border">
        <div class="full-width">
            <h2 class="title veneer full-width text-center uppercase">Car Alarms</h2>
        </div>
        <p class="copy mark text-center">
        In today's fast-paced world, technology is not just an advantage but a necessity for success. Our premier IT/Software Consulting services offer strategic partnerships tailored to unlock your business's digital potential.
        </p>
        <div class="full-width flex wrap center">
            <a class="quote-button quote-button-margin white-copy bg-nova-dark-purple americane uppercase" href="/services/car-alarms">Learn More</a>
        </div>
    </div>
</div>

<!-- Info TAB -->
<div class="info-tab info-tab-long white-copy flex wrap center relative image-effect image-height-service align-items info-tab-margin" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/about-hero-parallex2.jpeg);">
    <div class="seventy-width padding-top-bottom bg-dark-opacity info-white-border">
        <div class="full-width">
            <h2 class="title veneer full-width text-center uppercase">Ceramic Coating</h2>
        </div>
        <p class="copy mark text-center">
        In today's fast-paced world, technology is not just an advantage but a necessity for success. Our premier IT/Software Consulting services offer strategic partnerships tailored to unlock your business's digital potential.
        </p>
        <div class="full-width flex wrap center">
            <a class="quote-button quote-button-margin white-copy bg-nova-dark-purple americane uppercase" href="/services/ceramic-coating">Learn More</a>
        </div>
    </div>
</div>

<!-- Info TAB -->
<div class="info-tab info-tab-long white-copy flex wrap center relative image-effect image-height-service align-items info-tab-margin" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/Car-Headlight-on.jpg);">
    <div class="seventy-width padding-top-bottom bg-dark-opacity info-white-border">
        <div class="full-width">
            <h2 class="title veneer full-width text-center uppercase">Lighting & Accesories</h2>
        </div>
        <p class="copy mark text-center">
        In today's fast-paced world, technology is not just an advantage but a necessity for success. Our premier IT/Software Consulting services offer strategic partnerships tailored to unlock your business's digital potential.
        </p>
        <div class="full-width flex wrap center">
            <a class="quote-button quote-button-margin white-copy bg-nova-dark-purple americane uppercase" href="/services/lighting">Learn More</a>
        </div>
    </div>
</div>





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

<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom align-items intro-video mobile-section-video">
    <!-- Left -->
    <div class="half-width flex wrap center mobile-full mobile-section-copy">
        <!-- Need to update copy -->
    <!-- <p class="copy mark text-left auto-margin copy-width-intro">
        Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.
        At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.
        Whether you're looking to upgrade your sound system, add some privacy with tinted windows, or simply want to give your car a new look, our experienced team is here to help. With years of industry experience, we have the knowledge and expertise to recommend the perfect accessories for your vehicle.
        Browse our selection online or visit our showroom to see our products up close. Let J's Tint help you take your driving experience to the next level!
    </p> -->
    <div class="full-width flex wrap justify-left mobile-section-title">
            <h2 class="title veneer text-left">
                Video
            </h2>
        </div>
        <div class="copy">
     
            <div class="full-width flex wrap center text-left">
                <p class="americane copy black-copy square-copy square-copy-width mobile-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align youtube-container mobile-video">
        <!-- Video -->
        <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/h3uo4z0znmg?si=WftDFHLTeEHiX9tq?controls=0&autoplay=1&mute=1&loop=1&playlist=h3uo4z0znmg&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>



<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-2ac4892a-75d2-49b5-b752-73ffc35efb91" data-elfsight-app-lazy></div>


<?php
get_footer();