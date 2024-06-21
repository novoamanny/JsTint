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
<footer class="flex wrap center full-width">
   <div class="third-width flex wrap center align-items footer-mobile">
        <div class="location">
            
            <h3>Location</h3>
            <p>4418 E Side Ave</p>
            <p>Dallas, Texas</p>
            <p>75226</p>
            <p>(469)841-0200</p>
            
        </div>
        <div class="hours">
            <h3>Hours</h3>
            <p>Mon - Sat: 9am - 6:30pm</p>
            <p>Sun: CLOSED!</p>
        </div>
   </div>
   <div class="third-width flex wrap center align-items logo-section footer-mobile">
       <div class="full-width brand">
            <img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" />
        </div>
        <div class="full-width flex wrap center align-items">
            <a target="_blank" href="https://www.instagram.com/js_tint/?hl=en"><img class="icon-logo" src="<?php echo get_template_directory_uri();?>/src/images/insta.png" /></a>
            <a target="_blank" href="https://www.instagram.com/js_tint/?hl=en"><img class="icon-logo" src="<?php echo get_template_directory_uri();?>/src/images/facebook.png" /></a>
        </div>
        <div class="full-width flex wrap center">
            <img class="logo" src="<?php echo get_template_directory_uri();?>/src/images/Yelp_Logo.png" />
        </div>
         <div class="full-width flex wrap center copyright">
            <p class="copy"> © <?php echo date("Y"); ?> J's Tint x <a target="_blank" href="https://novatek.app/">NOVATEK</a></p>
        </div>
   </div>
   <div class="third-width flex wrap center align-items footer-mobile">
    <div class="links flex wrap center full-width align-items">
        <h3 class="full-width text-left">Services</h3>
        <div class="full-width">
        <li><a href="/services/ppf">PPF</a></li>
        <li><a href="/services/window-tint">Window Tint</a></li>
        <li><a href="/services/car-audio">Car Audio</a></li>
        <li><a href="/services/car-alarms">Car Alarms</a></li>
        <li><a href="/services/ppf">Ceramic Coating</a></li>
        <li><a href="/services/window-tint">Car Wrap</a></li>
        <li><a href="/services/car-audio">Device Integration</a></li>
        <li><a href="/services/car-alarms">Lighting</a></li>
        </div>

    </div>
        
   </div>
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