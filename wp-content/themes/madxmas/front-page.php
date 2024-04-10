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

<div class="hero-container full-width flex wrap center relative">
    <div class="absolute title-position">
        <h2 class="hero-title veneer">Customize Your Ride, Unleash Your Style!</h2>
        <h2 class="hero-subtitle americane white-copy">Crafting Your Dream Ride, One Upgrade at a Time!</h2>
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">Free Quote!</a>
        </div>
    </div>
<!-- <iframe width="100%" height="1200px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <div class="owl-carousel">
        
            <img src="<?php echo get_template_directory_uri();?>/src/images/Tesla-Rear.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/Front-shot.jpg" />
        
            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Cybertruck.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/Hero-Tesla.jpg" />
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
    <div class="right half-width bg-linear-red-fade white-copy padding-top-bottom-alt">
        <div class="full-width">
            <h2 class="title veneer text-left">Elevate Your Drive: Experience Excellence with Our Ceramic Tint Solutions!"</h2>
        </div>
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




<div class="full-width flex wrap center carousel-opacity">
<!-- <iframe width="100%" height="1200px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <div class="owl-carousel">
        
            <!-- <img src="<?php echo get_template_directory_uri();?>/src/images/tesla.jpeg" /> -->
            <img src="<?php echo get_template_directory_uri();?>/src/images/image-1.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/image-2.jpg" />
        
            <img src="<?php echo get_template_directory_uri();?>/src/images/image-3.jpg" />

            <img src="<?php echo get_template_directory_uri();?>/src/images/image-4.jpg" />
          
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
    <div class="right half-width bg-linear-red-fade white-copy">
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


<!-- S E R V I C E S -->

<div class="services full-width flex wrap center padding-top-bottom">
    <div class="services-tab bg-linear-silver-fade white-copy">
    <div class="full-width">
        <h2 class="title veneer text-left">Elevate Your Drive: Experience Excellence with Our Ceramic Tint Solutions!"</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/silver-car.png"  />
    </div>
    
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">Free Quote!</a>
        </div>

    </div>
    <div class="services-tab bg-linear-steel-blue-fade">
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/blue-car.png"  />
    </div>
    <div class="full-width">
        <h2 class="title veneer text-left white-copy">Elevate Your Drive: Experience Excellence with Our Ceramic Tint Solutions!"</h2>
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro white-copy">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
        </div>
    </div>
</div>






<!-- Video Intro -->
<div class="full-width flex wrap center bg-linear-dark-fade2 white-copy padding-top-bottom reverse-row">
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






<!-- S E R V I C E S -->

<div class="services full-width flex wrap center padding-top-bottom">
    <div class="services-tab bg-linear-yellow-fade black-copy">
    <p class="copy mark text-left auto-margin copy-width-intro">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/yellow-car.png"  />
    </div>
    
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-left quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin black-copy">Learn More</a>
        </div>

    </div>
    <div class="services-tab bg-linear-red-fade">
    <div class="flex padding-top-bottom">
        <img src="<?php echo get_template_directory_uri();?>/src/images/red-car.png"  />
    </div>
    <p class="copy mark text-left auto-margin copy-width-intro white-copy">Welcome to J's Tint, your ultimate destination for premium car accessories! We specialize in enhancing your driving experience with top-of-the-line products, including custom car stereos, sleek window tinting, and a variety of other accessories to personalize your vehicle.

At J's Tint, we understand that your car is more than just a mode of transportation; it's an extension of your personality and style. That's why we offer a wide range of products to suit every taste and budget, all backed by our commitment to quality and customer satisfaction.

    </p>
        <div class="flex quote-button-margin">
            <a href="/" class="nav-phone americane uppercase text-right quote-button">Free Quote!</a>
            <a href="/" class="nav-phone americane uppercase text-right learn-button link-margin">Learn More</a>
        </div>
    </div>
</div>


<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-2ac4892a-75d2-49b5-b752-73ffc35efb91" data-elfsight-app-lazy></div>




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