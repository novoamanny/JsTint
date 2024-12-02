<?php
/**
 * Template Name: About
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
$MV = get_field("mission_values");
$about = get_field("about_description");

$origin = $about['origin'];
$team = $about['team'];



// H e r o   O p t i o n s   G r o u p
$hero_options = get_field("hero_options");
// H e r o   O p t i o n s
$hero_title = $hero_options['title'];
$hero_subtitle = $hero_options['subtitle'];
?>



<!-- H e r o   S e c t i o n -->
<div class="hero-container full-width flex wrap center relative image-effect image-height-hero-big" style="background-image: url('<?php echo get_template_directory_uri();?>/src/images/tesla-parallex.jpeg');">      
    <div class="opacity-screen relative">
        <div data-aos="fade-right" data-aos-duration="3000" class="absolute title-position-hero">
            <!-- Hero Title -->
            <h2 class="hero-title veneer">
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
    </div>
    <!-- <img class="christmas-break" src="<?php echo get_template_directory_uri();?>/src/images/curve-bg-white.png" /> -->
</div>



<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom align-items intro-video mobile-section-video">
    <!-- Left -->
    <div class="half-width flex wrap center mobile-full mobile-section-copy">
        <div class="full-width flex wrap center align-items">
            <img class="third-width" src="<?php echo get_template_directory_uri();?>/img/main-logo.png" />
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left align-items">
                <p class="americane copy black-copy square-copy square-copy-width mobile-copy">
                    At J's Tint, we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at J's Tint to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align youtube-container mobile-video">
        <!-- Video -->
        <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/kIIUSrGHjDg?si=WftDFHLTeEHiX9tq?controls=0&autoplay=1&mute=1&loop=1&playlist=kIIUSrGHjDg&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <!-- <iframe class="video-wrap" width="100%" height="600px" src="https://www.youtube.com/embed/h3uo4z0znmg?si=WftDFHLTeEHiX9tq?controls=0&autoplay=1&mute=1&loop=1&playlist=h3uo4z0znmg&color=white&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    </div>
</div>



<!-- About Section -->
<!-- <div class="about-section full-width flex wrap center white-copy bg-linear-dark-fade4">
        <div class="main-title full-width flex wrap center">
            <h2 class="title veneer text-center uppercase">
                Meet The Team
            </h2>
        </div>
    <div class="staff third-width flex wrap center">
        <div class="image full-width flex wrap center">
            <img src="<?php echo get_template_directory_uri();?>/src/images/man-about.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Juan
            </h2>
        </div>
        <div class="full-width flex wrap center">
            <h4 class="subtitle veneer text-center">
                CEO
            </h4>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>



    <div class="staff third-width flex wrap center">
        <div class="image full-width flex wrap center">
            <img src="<?php echo get_template_directory_uri();?>/src/images/lady-about.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Clemente
            </h2>
        </div>
        <div class="full-width flex wrap center">
            <h4 class="subtitle veneer text-center">
                ...
            </h4>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>




    <div class="staff third-width flex wrap center">
        <div class="image full-width flex wrap center">
            <img src="<?php echo get_template_directory_uri();?>/src/images/man-about2.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Mariela
            </h2>
        </div>
        <div class="full-width flex wrap center">
            <h4 class="subtitle veneer text-center">
                ...
            </h4>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>



    <div class="staff third-width flex wrap center">
        <div class="image full-width flex wrap center">
            <img src="<?php echo get_template_directory_uri();?>/src/images/man-about2.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Staff
            </h2>
        </div>
        <div class="full-width flex wrap center">
            <h4 class="subtitle veneer text-center">
                ...
            </h4>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>



    <div class="staff third-width flex wrap center">
        <div class="image full-width flex wrap center">
            <img src="<?php echo get_template_directory_uri();?>/src/images/man-about.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Staff
            </h2>
        </div>
        <div class="full-width flex wrap center">
            <h4 class="subtitle veneer text-center">
                ...
            </h4>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>




    <div class="staff third-width flex wrap center">
        <div class="image full-width flex wrap center">
            <img src="<?php echo get_template_directory_uri();?>/src/images/lady-about.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Staff
            </h2>
        </div>
        <div class="full-width flex wrap center">
            <h4 class="subtitle veneer text-center">
                ...
            </h4>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>
    


    <div class="staff third-width flex wrap center">
        <div class="image full-width flex wrap center">
            <img src="<?php echo get_template_directory_uri();?>/src/images/lady-about.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Staff
            </h2>
        </div>
        <div class="full-width flex wrap center">
            <h4 class="subtitle veneer text-center">
                ...
            </h4>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>



    <div class="staff third-width flex wrap center">
        <div class="image full-width flex wrap center">
            <img src="<?php echo get_template_directory_uri();?>/src/images/man-about.jpg" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Staff
            </h2>
        </div>
        <div class="full-width flex wrap center">
            <h4 class="subtitle veneer text-center">
                ...
            </h4>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy square-copy">
                    At [Shop Name], we're more than just a car shop – we're your partners in automotive perfection. 
                    Specializing in Paint Protection Film (PPF) and Car Tint, we offer a suite of services to customize and safeguard your vehicle. 
                    From flawless car wraps to cutting-edge lighting and accessories installation, we're here to elevate your driving experience. 
                    Trust the experts at [Shop Name] to turn your car into a masterpiece.
                </p>
            </div>
        </div>
    </div>
</div> -->




<!-- Info TAB -->
<div class="info-tab info-tab-long white-copy flex wrap center reverse-row relative image-effect image-height-service align-items" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/chevy-parallex.jpeg);">
    <div class="seventy-width padding-top-bottom bg-dark-opacity info-white-border">
        <div class="full-width">
            <h2 class="title veneer full-width text-center ">Revolutionizing Your Ride, </br> One Detail at a Time!</h2>
        </div>
        <p class="copy mark text-center">
            Driven by a passion for automotive excellence, we are committed to enhancing your driving experience through precision craftsmanship, innovative solutions, and personalized service. Our mission is to inspire confidence and satisfaction in every customer, ensuring that your journey with us is nothing short of exceptional.
        </p>
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
</div>


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
                    <a target="_blank" href="https://www.instagram.com/js_tint/?hl=en"><img class="icon-logo" src="<?php echo get_template_directory_uri();?>/src/images/red-instagram.png" /></a>
                    <a target="_blank" href="https://www.facebook.com/jstint2012/"><img class="icon-logo" src="<?php echo get_template_directory_uri();?>/src/images/red-facebook.png" /></a>
                </div>
        </div>
    </div>
</div>




<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-2ac4892a-75d2-49b5-b752-73ffc35efb91" data-elfsight-app-lazy></div>





<script>
// Script for expanding the answer to each question
var questions = document.querySelectorAll('.faq_question');
var questionsArray = [...questions];
questionsArray.forEach(q => {
    q.addEventListener("click", () => {
        if (q.classList.contains('expanded')) {
            q.classList.remove('expanded')
        } else {
            q.classList.add('expanded')
        }
    });
})
</script>
<?php
get_footer();