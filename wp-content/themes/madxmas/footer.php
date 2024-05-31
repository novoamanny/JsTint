<?php
/**
 * The template for displaying the footer.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */


$section1 = get_field("section_1", "option");
$section2 = get_field("section_2", "option");

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
$weekend_2 = $hours['weekend_2'];

$arch_carousel = array();
?>
<footer id="contact">
    <!-- <a class='cta-button parallelogram blue' href="#"><span class='skew-fix'>Learn More</span></a>
<a class='cta-button parallelogram red' href="#"><span class='skew-fix'>Learn More</span></a> -->
    <div class="container">
        <div class="brand">
            <!-- <img class="stars" src="<?php echo get_template_directory_uri();?>/img/footer-stars.png" /> -->
            <div class="left">
                <div class="location">
                    <div class="box">
                        <h3>LOCATION</h3>
                    </div>
                        <p>Dallas, Tx</p>
                        <p>Address</p>
                </div>
                <div class="hours">
                    <div class="box">
                        <h3>HOURS</h3>
                    </div>
                        <!-- <p style="padding-bottom: 10px;">Opening in September</p> -->
                        <p>OPEN <?php echo $weekday['open'] ?>AM - <?php echo $weekday['close'] ?>PM</p>
                        <p>Mon - Thur</p>
                        <p>OPEN <?php echo $weekend['open'] ?>AM - <?php echo $weekend['close'] ?>PM</p>
                        <p>Fri - Sat</p>
                        <p>OPEN <?php echo $weekend_2['open'] ?>AM - <?php echo $weekend_2['close'] ?>PM</p>
                        <p>Sunday</p>
                </div>
            </div>
            <!-- <div class="right">
                <a href="https://www.google.com/maps/search/madisonville+christmas+company/@30.9678663,-95.8890714,15z/data=!3m1!4b1?entry=ttu" target="blank">
                    <img src="<?php echo get_template_directory_uri();?>/img/map.svg" />
                </a>
            </div> -->
        </div>
        <div class="center">
            <!-- <img class="madlogo" src="<?php echo get_template_directory_uri();?>/img/footer-logo.png" /> -->
            <div class="copy">
                <h3 style="text-transform: uppercase;">J's Tint & Car Audio</h3>
                <div class="links menu">
                    <!-- <?php wp_nav_menu(array('theme_location' => 'top', 'menu_class' => 'navigation')); ?> -->
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'navigation')); ?>
                </div>
                <!-- <div class="bottom links" style="display: none;">
                    <?php wp_nav_menu(array('theme_location' => 'footer_bottom', 'menu_class' => 'navigation')); ?>
                </div> -->
                <div class="copyright">
                    © <?php echo date("Y"); ?> J's Tint & Car Audio
                </div>
            </div>
        </div>
        <div class="links">
            <!-- <?php wp_nav_menu(array('theme_location' => 'footer_column_1', 'menu_class' => 'sitemap', 'container' => false, 'depth' => '1')); ?>
            <?php wp_nav_menu(array('theme_location' => 'footer_column_2', 'menu_class' => 'sitemap', 'container' => false, 'depth' => '1')); ?> -->
            <div class="social">
                <a href="https://www.facebook.com/MadisonvilleChristmasCo" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/facebook.png" /></a>
                <a href="https://www.pinterest.com/MadisonvilleChristmasCo/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/pint.png" /></a>
                <a href="https://www.instagram.com/madisonvillechristmasco/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/insta.png" /></a>
                <a href="/" style="display: none;" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/twitter.png" /></a>
            </div>
            <!-- <form class="form">
                <p>Join The Fun</p>
                <div class="button email">
                    <div class="button__horizontal"></div>
                    <div class="button__vertical"></div>
                    <input class="button" placeholder="Email Address"/>
                </div>
            </form> -->
            
            <form action=https://squareup.com/outreach/Kefzvy/subscribe method="POST" target="_blank" class="form">
                
                <p>Join The Fun</p>

                <div class="button email">
                    <div class="button__horizontal"></div>
                    <div class="button__vertical"></div>
                    <div class="footer-form-set wpcf7">
                        <input type="hidden" name="embed" value="true">
                        <span class="wpcf7-form-control-wrap" data-name="your-email">
                            <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="EMAIL ADDRESS" value="" type="email" name="email_address">
                        </span>
                        <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Submit"><span class="wpcf7-spinner">
                    </div>
                </div>
            </form>
            <!-- <div class="form">
                <p>Join The Fun</p>
                <div class="button email">
                    <div class="button__horizontal"></div>
                    <div class="button__vertical"></div>
                    <?php
                        // $dynamic_id = $footer['contact_form_7_form_id'];;
                        
                        // Inject the PHP statement with the dynamic ID into the do_shortcode function
                        // echo do_shortcode("[contact-form-7 id='$dynamic_id' title='Subscribe']");
                    ?>
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class="bottom">
        <div class="container flex">
            <div class="copyright">
                © <?php echo date("Y"); ?> Madisonville Christmas
            </div>
        </div>
    </div> -->
</footer>

<div class="windowtop"></div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/src/owl-aos/aos.js"></script>

<?php if ( is_front_page() || is_page() || is_singular( 'communities' )) : ?>
<script>
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        items: 1,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        loop: true,
        nav: false,
        dots: false,
        center: true,
        mouseDrag: false, // Disable slide on mouse
        touchDrag: false, // Disable slide on touch
        animateOut: 'fadeOut' // and this
    });
});




// AOS
AOS.init({
// Global settings:
disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
initClassName: 'aos-init', // class applied after initialization
animatedClassName: 'aos-animate', // class applied on animation
useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
disableMutationObserver: false, // disables automatic mutations' detections (advanced)
debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


// Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
offset: 120, // offset (in px) from the original trigger point
delay: 0, // values from 0 to 3000, with step 50ms
duration: 600, // values from 0 to 3000, with step 50ms
easing: 'ease', // default easing for AOS animations
once: false, // whether animation should happen only once - while scrolling down
mirror: false, // whether elements should animate out while scrolling past them
anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});



</script>
<?php endif; ?>
</body>

</html>