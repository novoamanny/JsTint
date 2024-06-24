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
    <img class="christmas-break" src="<?php echo get_template_directory_uri();?>/src/images/curve-bg-white.png" />
</div>


<!-- I n t r o   S e c t i o n   w i t h   V i d e o -->
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom align-items contact-section">
    <!-- Left -->
    <div class="third-width flex wrap center align-items mobile-full">
        <div class="full-width flex wrap center logo-contact logo-contact-mobile">
            <img class="fourth-width" src="<?php echo get_template_directory_uri();?>/img/main-logo.png" />
        </div>
        <div class="full-width flex wrap justify-left">
            <h2 class="title veneer text-left">
                Contact
            </h2>
        </div>
        <div class="copy">
            <div class="full-width flex wrap center text-left">
                <p class="americane copy black-copy square-copy">
                We're here to make your experience as seamless as possible. If you have any questions or need assistance, please don't hesitate to reach out to us using the form below. Our dedicated team is ready to assist you with any inquiries or concerns you may have. Your satisfaction is our top priority, and we look forward to helping you with your automotive needs.
                </p>
            </div>

            <div class="full-width flex wrap text-left">
                <p class="americane copy black-copy square-copy">
                Having trouble with our contact form? Try this <a target="_blank" href="https://app.tintwiz.com/web/cs/hl0x1sjdljqoodkrbrfgsubsq05l26vw" style="text-decoration: underline">link</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Right -->
    <div class="half-width flex wrap center align-items contact-form mobile-full">
        <div class="full-width flex wrap center logo-contact">
            <img class="fourth-width" src="<?php echo get_template_directory_uri();?>/img/main-logo.png" />
        </div>

        <!-- <?php
            // Inject the PHP statement with the dynamic ID into the do_shortcode function
            echo do_shortcode('[forminator_form id="186"]');
        ?> -->
         <?php
            // Inject the PHP statement with the dynamic ID into the do_shortcode function
            echo do_shortcode('[forminator_form id="25"]');
        ?>


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
            <a class="quote-button quote-button-margin white-copy bg-nova-dark-purple americane" href="/">Learn More</a>
        </div>
    </div>
</div>

 


<?php
get_footer();