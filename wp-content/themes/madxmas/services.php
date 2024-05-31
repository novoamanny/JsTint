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
        <h2 class="hero-subtitle americane white-copy">Crafting Your Dream Ride, One Upgrade at a Time!</h2>
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">Free Quote!</a>
        </div>
    </div>
    <img class="christmas-break" src="<?php echo get_template_directory_uri();?>/src/images/curve-bg-white.png" />
</div>


<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom">
    <!-- Left -->
    <div class="half-width flex wrap center">
        <!-- Need to update copy -->
    <!-- <p class="copy mark text-left auto-margin copy-width-intro">
        Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.
        At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.
        Whether you're looking to upgrade your sound system, add some privacy with tinted windows, or simply want to give your car a new look, our experienced team is here to help. With years of industry experience, we have the knowledge and expertise to recommend the perfect accessories for your vehicle.
        Browse our selection online or visit our showroom to see our products up close. Let J's Tint help you take your driving experience to the next level!
    </p> -->
    <div class="full-width flex wrap justify-left">
            <h2 class="title veneer text-left">
                Revitalize Your Ride, Protect Your Investment!
            </h2>
        </div>
        <div class="copy">
            <h2><?php echo $section1['title']; ?></h2>
            <h5><?php echo $section1['subtitle']; ?></h5>
            <?php echo $section1['editor']; ?>
            <div class="full-width flex wrap center text-left">
                <p class="americane copy black-copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align youtube-container">
        <!-- Video -->
        <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/h3uo4z0znmg?si=WftDFHLTeEHiX9tq?controls=0&autoplay=1&mute=1&loop=1&playlist=h3uo4z0znmg&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>






<div class="flex wrap center reverse-row">
    <div class="left half-width carousel-opacity">
    
            
            <div class="owl-carousel">
                

                <img src="<?php echo get_template_directory_uri();?>/src/images/Tesla-Rear.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Front-shot.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Tesla.jpg" />
            </div>
    
    </div>
<!-- SECTION ONE -->
    <div class="right half-width bg-linear-red-fade white-copy padding-top-bottom-alt">
        <div class="full-width flex wrap justify-left">
            <h2 class="title veneer text-left">Protect Your Paint, Preserve Your Shine with Paint Protection Film!</h2>
        </div>
        <div class="copy">
            <h2><?php echo $section1['title']; ?></h2>
            <h5><?php echo $section1['subtitle']; ?></h5>
            <?php echo $section1['editor']; ?>
            <div class="full-width flex wrap center text-left">
            <p class="americane copy white-copy square-copy">Paint Protection Film offers a multitude of benefits. It acts as a barrier against road debris, preventing chips and scratches that can diminish the appearance of your vehicle. By investing in PPF, you'll not only maintain its showroom shine but also protect its resale value, saving you money in the long run.</p>
            </div>
            <div class="flex quote-button-margin wrap justify-right">
                <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
                <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a>
            </div>
        </div>
    </div>
</div>




<!-- S E R V I C E S -->
<!-- <div class="space padding-top-bottom">

</div> -->

<div class="services full-width flex wrap center padding-top-bottom">
    <div class="services-tab bg-linear-dark-fade white-copy">
    <div class="full-width">
        <h2 class="title veneer text-left">Paint Protection Film</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/tint-tesla.png"  />
    </div>
    
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin black-copy">Learn More</a>
        </div>

    </div>
    <div class="services-tab bg-linear-red-fade">
    <div class="full-width">
        <h2 class="title veneer text-left white-copy">Ceramic Film</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro white-copy">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/tesla-cars.png"  />
    </div>
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a>
        </div>
    </div>
</div>



<div id="about" class="flex wrap center">
    <img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
    <div class="left half-width carousel-opacity">
<!-- ARCH IMAGE CAROUSEL -->
    
            
            <div class="owl-carousel">
                

                <img src="<?php echo get_template_directory_uri();?>/src/images/Tesla-Rear.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Front-shot.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Tesla.jpg" />
            </div>
    
    </div>
<!-- SECTION ONE -->
    <div class="right half-width bg-linear-red-fade white-copy padding-top-bottom-alt">
        <div class="full-width flex wrap justify-left">
            <h2 class="title veneer text-left">Protect Your Paint, Preserve Your Shine with Paint Protection Film!</h2>
        </div>
        <div class="copy">
            <h2><?php echo $section1['title']; ?></h2>
            <h5><?php echo $section1['subtitle']; ?></h5>
            <?php echo $section1['editor']; ?>
            <div class="full-width flex wrap center text-left">
            <p class="americane copy white-copy square-copy">Paint Protection Film offers a multitude of benefits. It acts as a barrier against road debris, preventing chips and scratches that can diminish the appearance of your vehicle. By investing in PPF, you'll not only maintain its showroom shine but also protect its resale value, saving you money in the long run.</p>
            </div>
            <div class="flex quote-button-margin wrap justify-right">
                <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
                <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a>
            </div>
        </div>
    </div>
</div>



<!-- S E R V I C E S -->

<div class="services full-width flex wrap center padding-top-bottom reverse-row">
    <div class="services-tab bg-linear-dark-fade white-copy">
    <div class="full-width">
        <h2 class="title veneer text-left white-copy">Window Tint</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/tint-tesla.png"  />
    </div>
    
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin black-copy">Learn More</a>
        </div>

    </div>
    <div class="services-tab bg-linear-red-fade">
    <div class="full-width">
        <h2 class="title veneer text-left white-copy">Vynil Wrap</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro white-copy">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/tesla-cars.png"  />
    </div>
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a>
        </div>
    </div>
</div>


<div id="about" class="flex wrap center reverse-row">
    <img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
    <div class="left half-width carousel-opacity">
<!-- ARCH IMAGE CAROUSEL -->
    
            
            <div class="owl-carousel">
                

                <img src="<?php echo get_template_directory_uri();?>/src/images/Tesla-Rear.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Front-shot.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />

                <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Tesla.jpg" />
            </div>
    
    </div>
<!-- SECTION ONE -->
    <div class="right half-width bg-linear-red-fade white-copy padding-top-bottom-alt">
        <div class="full-width flex wrap justify-left">
            <h2 class="title veneer text-left">Protect Your Paint, Preserve Your Shine with Paint Protection Film!</h2>
        </div>
        <div class="copy">
            <h2><?php echo $section1['title']; ?></h2>
            <h5><?php echo $section1['subtitle']; ?></h5>
            <?php echo $section1['editor']; ?>
            <div class="full-width flex wrap center text-left">
            <p class="americane copy white-copy square-copy">Paint Protection Film offers a multitude of benefits. It acts as a barrier against road debris, preventing chips and scratches that can diminish the appearance of your vehicle. By investing in PPF, you'll not only maintain its showroom shine but also protect its resale value, saving you money in the long run.</p>
            </div>
            <div class="flex quote-button-margin wrap justify-right">
                <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
                <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a>
            </div>
        </div>
    </div>
</div>


<!-- S E R V I C E S -->

<div class="services full-width flex wrap center padding-top-bottom">
    <div class="services-tab bg-linear-dark-fade white-copy">
    <div class="full-width">
        <h2 class="title veneer text-left">Elevate Your Drive: Experience Excellence with Our Ceramic Tint Solutions!"</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/tint-tesla.png"  />
    </div>
    
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin black-copy">Learn More</a>
        </div>

    </div>
    <div class="services-tab bg-linear-red-fade">
    <div class="full-width">
        <h2 class="title veneer text-right">Elevate Your Drive: Experience Excellence with Our Ceramic Tint Solutions!"</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro white-copy">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/tesla-cars.png"  />
    </div>
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a>
        </div>
    </div>
</div>




<div class="full-width flex wrap center carousel-opacity relative">
<!-- <iframe width="100%" height="1200px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <div class="owl-carousel">
        
            <!-- <img src="<?php echo get_template_directory_uri();?>/src/images/tesla.jpeg" /> -->
       
            <img src="<?php echo get_template_directory_uri();?>/src/images/Tesla-Rear.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/Front-shot.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Tesla.jpg" />
          
    </div>
    <div class="absolute title-position">
        <!-- Hero Title -->
        <h2 class="hero-title veneer">
        Defend Your Drive, Elevate Your Style: The Pinnacle of Paint Protection Film
        </h2>
        <!-- Hero Subtitle -->
        <h2 class="hero-subtitle americane white-copy">
            <?php echo $hero_subtitle; ?>
        </h2>
        <p class="copy americane white-copy">
        Our Paint Protection Film (PPF) offers unmatched protection for your vehicle's paint. Engineered to withstand the rigors of daily driving, our nearly invisible film provides a durable barrier against rock chips, scratches, and stains, ensuring your car looks its best for years to come.  
        </p>
        <h2 class="hero-subtitle veneer white-copy uppercase">
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
        <div class="flex hero-cta-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">
                Free Quote!
            </a>
        </div>
    </div>
</div>





<!-- S E R V I C E S -->

<div class="services full-width flex wrap center padding-top-bottom">
    <div class="services-tab bg-linear-dark-fade white-copy">
    <div class="full-width">
        <h2 class="title veneer text-left">Elevate Your Drive: Experience Excellence with Our Ceramic Tint Solutions!"</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/tint-tesla.png"  />
    </div>
    
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin black-copy">Learn More</a>
        </div>

    </div>
    <div class="services-tab bg-linear-red-fade">
    <div class="full-width">
        <h2 class="title veneer text-right">Elevate Your Drive: Experience Excellence with Our Ceramic Tint Solutions!"</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro white-copy">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/tesla-cars.png"  />
    </div>
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a>
        </div>
    </div>
</div>











<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-2ac4892a-75d2-49b5-b752-73ffc35efb91" data-elfsight-app-lazy></div>


<?php
get_footer();