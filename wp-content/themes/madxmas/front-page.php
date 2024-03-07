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

<div class="hero-container">
<iframe width="100%" height="1200px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="video-box flex">
        <div class="left third align-items">
            <h2 class="americane uppercase">J's Tint</h2>
            <p class="veneer">126 W. Gray St. Dallas, Texas</p>
            <!-- <p class="veneer">Dallas, Texas</p> -->
            <p class="phone veneer">123.456.7890</p>
        </div>
        <div class="third flex align-items">
            <!-- <div class="gradient-animation-home"></div> -->
            <div class="brand third">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="Madisonville Christmas logo" /></a>
            </div>
            <!-- <div class="gradient-animation-home"></div> -->
        </div>
        <div class="right third align-items">
            <h2 class="americane">Services</h2>
            <p class="veneer"><a href="/">Car Audio</a></p>
            <p class="veneer"><a href="/">Tint</a></p>
        </div>
    </div>
</div>


<div class="full-width center">
    <div class="full-width center padding-top-bottom intro-section white">
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





<div class="full-width center">
    <div class="full-width center padding-top-bottom black">
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


<div class="full-width center">
    <div class="full-width center padding-top-bottom intro-section2 white">
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




<!-- Services -->





<div class="contact-section flex">
    <div class="half">
        <h2>A Different Kind of Detail</h2>
        <?php echo $introSection['editor']; ?>

        <div class="list-section">
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>1</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                    
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>2</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                </div>
            </div>
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>3</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
            
        </div>
        <!-- <div class="list-section">
            <div class="list-item">
                <div class="left flex">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        </div> -->
    </div>
    
    <div class="half flex form">
        <form class='form-contact flex'>
            <div class="brand">
                <a class="text-align" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="Madisonville Christmas logo" /></a>
            </div>
            <div class="bar white copy">
                <span>Get A Free Estimate!</span>
            </div>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
        </form>
    </div>
</div>




<!--  -->





<div class="contact-section intro-section white flex">
    <div class="half">
        <h2>A Different Kind of Detail</h2>
        <?php echo $introSection['editor']; ?>

        <div class="list-section">
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>1</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                    
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>2</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                </div>
            </div>
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>3</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
            
        </div>
        <!-- <div class="list-section">
            <div class="list-item">
                <div class="left flex">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        </div> -->
    </div>
    
    
    <div class="half flex form">
        <form class='form-contact flex'>
            <div class="brand">
                <a class="text-align" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="Madisonville Christmas logo" /></a>
            </div>
            <div class="bar white copy">
                <span>Get A Free Estimate!</span>
            </div>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
        </form>
    </div>
</div>




<!--  -->





<div class="contact-section intro-section2 white flex">
    <div class="half">
        <h2>A Different Kind of Detail</h2>
        <?php echo $introSection['editor']; ?>

        <div class="list-section">
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>1</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                    
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>2</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                </div>
            </div>
        
            <div class="list-item">
                <div class="left flex align-items">
                    <div class="outer flex">
                        <div class="inner flex">
                            <span>3</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
            
        </div>
        <!-- <div class="list-section">
            <div class="list-item">
                <div class="left flex">
                    <div class="gradient-animation-home list-break"></div>
                </div>
                <div class="right" style="visibility: hidden;">
                    <h2>The MMT Process</h2>
                    <p>Lorem Lorem Lorem Lorem</p>
                </div>
            </div>
        </div> -->
    </div>
    
    <div class="half flex form">
        <form class='form-contact flex'>
            <div class="brand">
                <a class="text-align" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="Madisonville Christmas logo" /></a>
            </div>
            <div class="bar white copy">
                <span>Get A Free Estimate!</span>
            </div>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
        </form>
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