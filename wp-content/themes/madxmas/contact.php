<?php
/**
 * Template Name: Contact
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

// H e r o   O p t i o n s   G r o u p
$hero_options = get_field("hero_options");
// H e r o   O p t i o n s
$hero_title = $hero_options['title'];
$hero_subtitle = $hero_options['subtitle'];
?>

<!-- H e r o   S e c t i o n -->
<div class="hero-container full-width flex wrap center relative image-effect image-height-hero-big" style="background-image: url('<?php echo get_template_directory_uri();?>/src/images/Cybertruck-hero.jpg');">      
    <div class="opacity-screen">
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
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom contact-section">



    <!-- Left -->
    <div class="half-width flex wrap center align-items mobile-full">
        <div class="full-width flex wrap center logo-contact logo-contact-mobile">
            <img class="fourth-width" src="<?php echo get_template_directory_uri();?>/img/main-logo.png" />
        </div>
        <div class="full-width flex wrap center">
            <h2 class="title veneer text-center">
                Contact
            </h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy black-copy square-copy">
                We're here to make your experience as seamless as possible. If you have any questions or need assistance, please don't hesitate to reach out to us using the form below. Our dedicated team is ready to assist you with any inquiries or concerns you may have. Your satisfaction is our top priority, and we look forward to helping you with your automotive needs.
                </p>
            </div>
<!-- 
            <div class="full-width flex wrap text-center">
                <p class="americane copy black-copy square-copy text-center">
                    Having trouble with our contact form?
                </p>
            </div> -->

            <div class="full-width flex wrap center">
                <a class="quote-button white-copy bg-nova-purple americane" href="https://app.tintwiz.com/web/cs/hl0x1sjdljqoodkrbrfgsubsq05l26vw">Contact Us Here</a>
            </div>
        </div>
    </div>


    <!-- Right -->
    <div class="half-width">
        <div class="copy full-width flex wrap center start align-items">
            <h2 class="title veneer text-center">
                Meet Us
            </h2>
            <!-- INFO -->
                <p class="americane copy black-copy square-copy">
                    Phone: (469) 841-0200
                </p>
                <p class="americane copy black-copy square-copy">
                    Location: 4418 E Side Ave, Dallas, Texas, 75226
                </p>
                <p class="americane copy black-copy square-copy">
                    Email: info@jstintcaraudiodallas.com
                </p>
            
        </div>
    </div>
    <!-- Right -->
    <!-- <div class="half-width flex wrap center align-items contact-form mobile-full">
        <div class="full-width flex wrap center logo-contact">
            <img class="fourth-width" src="<?php echo get_template_directory_uri();?>/img/main-logo.png" />
        </div> -->

        <!-- <?php
            // Inject the PHP statement with the dynamic ID into the do_shortcode function
            echo do_shortcode('[forminator_form id="186"]');
        ?> -->
         <!-- <?php
            // Inject the PHP statement with the dynamic ID into the do_shortcode function
            echo do_shortcode('[forminator_form id="25"]');
        ?> -->


       <!-- <form class="full-width flex wrap center form-contact">
            <div class="full-width flex wrap center">
                <input placeholder="First Name" name="first_name" type="text" class=""/>
                <input placeholder="Last Name" name="last_name" type="text" class=""/>
            </div>
            <input placeholder="Email" name="email" type="email" class="full-width"/>
            <input placeholder="Phone #" name="phone" type="phone" class="full-width"/>
            <div class="full-width flex wrap space-between">
                <input class="fourth-width"/>
                <input class="fourth-width"/>
                <input class="fourth-width"/>
            </div>
            <textarea id="Message" name="message" rows="10" cols="50" class="full-width field" placeholder="Let's talk coffee here..." required></textarea> -->
                    <!-- Free Quote CTA -->
        <!-- <div class="full-width hero-cta-margin text-center">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">
                Submit
            </a>
        </div>
       </form> -->
    <!-- </div> -->
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.077756567665!2d-96.76927828821725!3d32.79019748320144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e98b947a1431f%3A0x36a30c0fbcba5f85!2sJ&#39;s%20Tint%20%26%20Car%20Audio!5e0!3m2!1sen!2sus!4v1733158836851!5m2!1sen!2sus" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="full-width"></iframe>

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




<!-- Info TAB -->
<div class="info-tab info-tab-long white-copy flex wrap center relative image-effect image-height-service align-items info-tab-margin" style="background-image: url(<?php echo get_template_directory_uri();?>/src/images/Tesla-shop.jpg);">
    <div class="seventy-width padding-top-bottom bg-dark-opacity">
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



<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-2ac4892a-75d2-49b5-b752-73ffc35efb91" data-elfsight-app-lazy></div>

 


<?php
get_footer();