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


<div class="single-copy full-width <?php if($service_name == 'Window Film') : echo 'mobile-section'; endif; ?>">
    <div class="full-width flex wrap center align-items padding-top-bottom-alt">
        <div class="full-width <?php if($service_name == 'Window Film' || 'Window Tint') : echo 'half-width mobile-full'; endif; ?> flex wrap center">
            <div class="full-width padding-top-bottom-alt">
                <h2 class="text-center uppercase veneer title full-width"><?php echo $service_name ?></h2>
            </div>
            <div class="americane copy">
                <?php echo $copy_top; ?>
            </div>
        </div>
        <?php if($service_name == 'Window Film') : ?>
        <div class="half-width flex wrap center <?php if($service_name == 'Window Film') : echo 'mobile-full mobile-section-copy'; endif; ?>">
            <img src="<?php echo get_template_directory_uri();?>/src/images/Commercial-film.jpg"/>
        </div>
        <?php endif; ?>
        
    </div>

</div>



<!-- Info TAB -->
<div class="info-tab info-tab-long white-copy flex wrap center reverse-row relative image-effect image-height-service align-items" style="background-image: url('<?php echo $hero_image;?>');">
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

<div class="full-width quote-button-margin-top">
    <img src="<?php echo get_template_directory_uri();?>/src/images/PPF-Diagram.jpg"  />
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
                <li class="americane"><strong class="veneer uppercase">Shield Your Vehicle from the Elements:</strong></br> Our PPF provides a durable, high-gloss barrier against rocks, road debris, bug splatter, and other environmental hazards, ensuring your paint stays pristine.</li>
                <li class="americane"><strong class="veneer uppercase">Preserves Resale Value:</strong></br> Protecting your car's paint with PPF can significantly increase its resale value by maintaining a flawless exterior. Potential buyers will appreciate the care taken to protect the vehicle.</li>
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





<?php if($service_name == 'Ceramic Coating') : ?>


<!-- PPF Slides -->

<div class="services full-width flex wrap center padding-top-bottom overflow-x">
    <!-- TAB -->
    <div data-aos="fade-right" data-aos-duration="3000" class="services-tab bg-linear-dark-fade white-copy flex wrap center">
        <div class="full-width">
            <h2 class="title veneer text-left">Our Process:</h2>
        </div>
        <div class="full-width list">
            <ul>
                <li class="americane"><strong class="veneer uppercase">Step 1: Preparation:</strong></br> Thoroughly clean and decontaminate the vehicle's exterior to ensure a pristine surface for coating.</li>
                <li class="americane"><strong class="veneer uppercase">Step 2: Application:</strong></br> Apply multiple layers of Ceramic Coating using advanced techniques to achieve uniform coverage and maximum protection.</li>
            </ul>
        </div>
    </div>
    <!-- TAB -->
    <div data-aos="fade-left" data-aos-duration="3000" class="services-tab bg-linear-red-fade white-copy flex wrap center">
        <div class="full-width">
            <h2 class="title veneer text-left">Our Process:</h2>
        </div>
        <div class="full-width list">
            <ul class="flex wrap align-items">
                <li class="americane"><strong class="veneer uppercase">Step 3: Curing:</strong></br> Allow the coating to cure properly to bond with the paint, forming a resilient protective layer.</li>
                <li class="americane"><strong class="veneer uppercase">Step 4: Inspection and Quality Assurance:</strong></br> Conduct meticulous inspections to ensure the coating meets our high standards of quality and durability.</li>
            </ul>
        </div>
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


<?php if($service_name == 'Paint Protection Film') : ?>
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

<?php endif; ?>


<!-- Custom Car Audio -->

<?php if($service_name == 'Custom Car Audio') : ?>

<div class="about-section full-width flex wrap space-even white-copy bg-linear-dark-fade4">
        <div class="main-title full-width flex wrap center">
            <h2 class="title veneer text-center uppercase">
               Custom Car Audio
            </h2>
        </div>
    <div class="staff third-width flex wrap center align-items">
        <div class="image full-width flex wrap center">
            <img class="info-white-border" src="<?php echo get_template_directory_uri();?>/src/images/audio1.jpeg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Level 1
            </h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-center">
                <p class="americane copy square-copy">
                Enhance your listening experience by upgrading your current audio system beyond factory standards.
                </p>
            </div>
        </div>
    </div>



    <div class="staff third-width flex wrap center align-items">
        <div class="image full-width flex wrap center">
            <img class="info-white-border" src="<?php echo get_template_directory_uri();?>/src/images/audio2.jpeg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Level 2
            </h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-center">
                <p class="americane copy square-copy">
                Imaging adds character, creating a unique listening experience for those who desire more than just an upgrade.
                </p>
            </div>
        </div>
    </div>




    <div class="staff third-width flex wrap center align-items">
        <div class="image full-width flex wrap center">
            <img class="info-white-border" src="<?php echo get_template_directory_uri();?>/src/images/audio3.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Level 3
            </h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-center">
                <p class="americane copy square-copy">
                Are you looking for specific nuances in music? Identity rewards discerning listeners. Experience your favorite songs like never before.
                </p>
            </div>
        </div>
    </div>


</div>




<div class="about-section full-width flex wrap space-even white-copy bg-linear-dark-fade4">
        <!-- <div class="main-title full-width flex wrap center">
            <h2 class="title veneer text-center uppercase">
                Meet The Team
            </h2>
        </div> -->
    <div class="staff third-width flex wrap center align-items">
        <div class="image full-width flex wrap center">
            <img class="info-white-border" src="<?php echo get_template_directory_uri();?>/src/images/audio5-1.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Level 4
            </h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-center">
                <p class="americane copy square-copy">
                Experience world-class audio fidelity with customized aesthetics that perfectly complement your car’s unique style.
                </p>
            </div>
        </div>
    </div>



    <div class="staff third-width flex wrap center align-items">
        <div class="image full-width flex wrap center">
            <img class="info-white-border" src="<?php echo get_template_directory_uri();?>/src/images/audio4-1.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Level 5
            </h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-center">
                <p class="americane copy square-copy">
                Incomparable. Unique. Your Automotive Masterpiece.
                </p>
            </div>
        </div>
    </div>


</div>




<?php endif; ?>




<!-- Social -->

<div class="flex wrap center mobile-section">
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