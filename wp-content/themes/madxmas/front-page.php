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

<div class="hero-container full-width flex wrap center">
<!-- <iframe width="100%" height="1200px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <div class="owl-carousel">
        
            <img src="<?php echo get_template_directory_uri();?>/src/images/image-1.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/image-2.jpg" />
        
            <img src="<?php echo get_template_directory_uri();?>/src/images/image-3.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/image-4.jpg" />
    </div>
</div>



<!-- Video Intro -->
<div class="full-width flex wrap center bg-white black-copy padding-top-bottom">
    <div class="half-width flex wrap center">
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

        At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

        Whether you're looking to upgrade your sound system, add some privacy with tinted windows, or simply want to give your car a new look, our experienced team is here to help. With years of industry experience, we have the knowledge and expertise to recommend the perfect accessories for your vehicle.

        Browse our selection online or visit our showroom to see our products up close. Let J's Tint help you take your driving experience to the next level!</p>
    </div>
    <div class="half-width flex wrap center align">
       
            <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     
    </div>
</div>



<div id="about" class="flex wrap center">
    <img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
    <div class="left half-width">
<!-- ARCH IMAGE CAROUSEL -->
    
            
            <div class="owl-carousel">
                

                
                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-1.jpg"  />

                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-2.jpg"  />
                
                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-3.jpg"  />
            </div>
    
    </div>
<!-- SECTION ONE -->
    <div class="right half-width bg-white black-copy">
        <div class="copy">
        <h2><?php echo $section1['title']; ?></h2>
        <div class="dashes">
            <div class="vertical"></div>
            <div class="vertical"></div>
            <div class="vertical"></div>
        </div>
        <h5><?php echo $section1['subtitle']; ?></h5>
        <?php echo $section1['editor']; ?>
        <a href="/shop">
        <button class="button" style="display: none;">
            Learn More
            <div class="button__horizontal"></div>
            <div class="button__vertical"></div>
        </button>
        </a>
        </div>
    </div>
</div>





<!-- Intro -->
<div class="full-width center">
    <div class="full-width center padding-top-bottom bg-white black-copy">
        <div class="full-width">
            <div class="full-width copy">
                <!-- <h2 class="title mark text-left">Hello</h2>
                <h3 class="subtitle mark text-left">About Us</h3> -->
                <p class="seventy-width copy mark text-center auto-margin">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

                    At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

                    Whether you're looking to upgrade your sound system, add some privacy with tinted windows, or simply want to give your car a new look, our experienced team is here to help. With years of industry experience, we have the knowledge and expertise to recommend the perfect accessories for your vehicle.

                    Browse our selection online or visit our showroom to see our products up close. Let J's Tint help you take your driving experience to the next level!</p>
            </div>
        </div>
        <!-- <div class="third-width">
            <div class="full-width flex form">
                <form class='form-contact flex'>
                    <div class="brand">
                        <a class="text-align" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="Madisonville Christmas logo" /></a>
                    </div>
                    <div class="bar">
                        <span>Get A Free Estimate</span>
                    </div>
                    <input type="text"/>
                    <input type="text"/>
                    <input type="text"/>
                    <input type="text"/>
                    <input type="text"/>
                </form>
            </div>
        </div> -->
    </div>
</div>







<!-- Section-2 -->

<div id="about" class="flex wrap center reverse-row">
    <img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
    <div class="left half-width">
<!-- ARCH IMAGE CAROUSEL -->
    
            
            <div class="owl-carousel">
                

                
                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-1.jpg"  />

                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-2.jpg"  />
                
                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-3.jpg"  />
            </div>
    
    </div>
<!-- SECTION ONE -->
    <div class="right half-width bg-white black-copy">
        <div class="copy">
        <h2><?php echo $section1['title']; ?></h2>
        <div class="dashes">
            <div class="vertical"></div>
            <div class="vertical"></div>
            <div class="vertical"></div>
        </div>
        <h5><?php echo $section1['subtitle']; ?></h5>
        <?php echo $section1['editor']; ?>
        <a href="/shop">
        <button class="button" style="display: none;">
            Learn More
            <div class="button__horizontal"></div>
            <div class="button__vertical"></div>
        </button>
        </a>
        </div>
    </div>
</div>



<!-- Video Intro -->
<div class="full-width flex wrap center bg-black white-copy padding-top-bottom">
    <div class="half-width flex wrap center">
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

        At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

        Whether you're looking to upgrade your sound system, add some privacy with tinted windows, or simply want to give your car a new look, our experienced team is here to help. With years of industry experience, we have the knowledge and expertise to recommend the perfect accessories for your vehicle.

        Browse our selection online or visit our showroom to see our products up close. Let J's Tint help you take your driving experience to the next level!</p>
    </div>
    <div class="half-width flex wrap center align">
       
            <iframe class="video-wrap" width="90%" height="600px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     
    </div>
</div>



<!-- Section - 3 -->

<div id="about" class="flex wrap center">
    <img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
    <div class="left half-width">
<!-- ARCH IMAGE CAROUSEL -->
    
            
            <div class="owl-carousel">
                

                
                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-1.jpg"  />

                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-2.jpg"  />
                
                    <img src="<?php echo get_template_directory_uri();?>/src/images/image-3.jpg"  />
            </div>
    
    </div>
<!-- SECTION ONE -->
    <div class="right half-width bg-white black-copy">
        <div class="copy">
        <h2><?php echo $section1['title']; ?></h2>
        <div class="dashes">
            <div class="vertical"></div>
            <div class="vertical"></div>
            <div class="vertical"></div>
        </div>
        <h5><?php echo $section1['subtitle']; ?></h5>
        <?php echo $section1['editor']; ?>
        <a href="/shop">
        <button class="button" style="display: none;">
            Learn More
            <div class="button__horizontal"></div>
            <div class="button__vertical"></div>
        </button>
        </a>
        </div>
    </div>
</div>




<div class="services full-width flex wrap center padding-top-bottom">
    <div class="services-tab bg-silver relative">
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
        <img src="<?php echo get_template_directory_uri();?>/src/images/silver-car.png"  />
    </div>
    <div class="services-tab bg-black">
    <p class="copy mark text-left auto-margin copy-width-intro white-copy">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
        <img src="<?php echo get_template_directory_uri();?>/src/images/blue-car.png"  />
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