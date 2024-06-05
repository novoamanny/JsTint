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