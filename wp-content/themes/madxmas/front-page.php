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

<div class="snowflake-container">
<iframe width="100%" height="1200px" src="https://www.youtube.com/embed/5WSCK_fzGW0?si=xmzR_iKKozQuuQnX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="video-box flex">
        <div class="left third align-items">
            <h2>J's Tint</h2>
            <p>126 W. Gray St.</p>
            <p>Dallas, Texas</p>
            <p class="phone">123.456.7890</p>
        </div>
        <div class="third flex align-items">
            <div class="gradient-animation-home"></div>
            <div class="brand third">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/main-logo.png" class="logo" alt="Madisonville Christmas logo" /></a>
            </div>
            <div class="gradient-animation-home"></div>
        </div>
        <div class="right third align-items">
            <h2>Services</h2>
            <p><a href="/">Car Audio</a></p>
            <p><a href="/">Tint</a></p>
        </div>
    </div>
</div>

<!-- Intro Content -->

<div class="container headline">
    
    <div class="headline-section text-align">
    <h2><?php echo $introSection['title']; ?></h2>
    <div class="flex align-items margin">
        <div class="gradient-animation-home"></div>
            <h3><?php echo $introSection['subtitle']; ?></h3>
        <div class="gradient-animation-home"></div>
    </div>
        <?php echo $introSection['editor']; ?>
    </div>
    
</div>

<div class="container sectionOne flex">

    <h2 class="text-align" style="width: 100%;" ><?php echo $introSection['title']; ?></h2>
    <h3 class="text-align" style="width: 100%; margin-bottom: 100px;"><?php echo $introSection['subtitle']; ?></h3>

    <div class="box">
        <h2 class="text-align" >DEIONIZED CAR HAND WASH</h2>
        <div class="body flex">
            <?php echo $introSection['editor']; ?>
            <div class="half">
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            </div>
            <div class="half">
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            </div>
            <div class="cta flex gradient-animation-home slide">
                <a href="/">Book Now</a>
            </div>
        </div>
    </div>
  
    <div class="box">
        <h2 class="text-align" >PAINT ENHANCEMENT DETAIL</h2>
        <div class="body flex">
            <?php echo $introSection['editor']; ?>
            <div class="half">
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            </div>
            <div class="half">
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            </div>
            <div class="cta flex gradient-animation-home slide">
                <a href="/">Book Now</a>
            </div>
        </div>
    </div>

    <div class="box">
        <h2 class="text-align" >PAINT ENHANCEMENT DETAIL</h2>
        <div class="body flex">
            <?php echo $introSection['editor']; ?>
            <div class="half">
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            </div>
            <div class="half">
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            </div>
            <div class="cta flex gradient-animation-home slide">
                <a href="/">Book Now</a>
            </div>
        </div>
    </div>

    <div class="box">
        <h2 class="text-align" >PAINT ENHANCEMENT DETAIL</h2>
        <div class="body flex">
            <?php echo $introSection['editor']; ?>
            <div class="half">
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            </div>
            <div class="half">
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            <li>hello</li>
            </div>
            <div class="cta flex gradient-animation-home slide">
                <a href="/">Book Now</a>
            </div>
        </div>
    </div>
    
</div>

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