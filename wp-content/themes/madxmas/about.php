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
?>


<!-- Hero --> 
<div class="hero-carousel">
    <!-- <div class="owl-carousel">
        <?php

            // check if the repeater field has rows of data
            if( have_rows("hero_carousel") ):
                
                // loop through the rows of data
                while ( have_rows("hero_carousel") ) : the_row();
            ?>
                <img src="<?php echo the_sub_field("image"); ?>" />

        <?php endwhile; endif; ?>
    </div> -->
    <img src="<?php echo get_template_directory_uri();?>/img/Company.jpg" />
</div>

<!-- Intro Content -->

<div class="container headline about">
    <!-- <img class="stamp" src="<?php echo get_template_directory_uri();?>/img/stamp.png" /> -->
    <div class="headline-section cherry">
    <h2 class="MV">Mission & Values</h2>
        <p class="colon-p"><img class="colon" src="<?php echo get_template_directory_uri();?>/img/semi.png" /><?php echo $MV['editor']; ?><p>
    </div>
    <div class="split">
        <img class="stamp-split" src="<?php echo get_template_directory_uri();?>/img/About-stamp.png" />
    </div>
</div>

<!-- Origin -->
<div class="sections sections-alt origin">
    <div class="right" >
        <div class="copy">
            <h2><?php echo $origin['title']; ?></h2>
            <div class="dashes">
                <div class="vertical"></div>
                <div class="vertical"></div>
                <div class="vertical"></div>
            </div>
            <h5><?php echo $origin['subtitle']; ?></h5>
            <?php echo $origin['editor']; ?>
        </div>
    </div>
    <div class="left">    
        <img src="<?php echo $origin['image']; ?>" />
        
    </div>
</div>

<!-- Tags -->
<div class="tag-section">
<img src="<?php echo get_template_directory_uri();?>/img/About-tags.png" />
</div>

<!-- Team -->
<div class="sections sections-alt team">
    <div class="right team-content">
        <div style="position: relative;">
            <img class="family-image" src="<?php echo $team['image'];  ?>"> </img>
            <img class="stars" src="<?php echo get_template_directory_uri();?>/img/about-stars.png" />
        </div>
    </div>
    <div class="left">
        <div class="copy">
            <h2><?php echo $team['title']; ?></h2>
            <div class="dashes">
                <div class="vertical"></div>
                <div class="vertical"></div>
                <div class="vertical"></div>
            </div>
            <h5><?php echo $team['subtitle']; ?></h5>
            <?php echo $team['editor']; ?>
        </div>
    </div>
    <img class="christmas-break" src="<?php echo get_template_directory_uri();?>/img/pink-curve-bg.png" />
</div>

<!-- FAQ -->
<div class="sign-off faq">
    <div class="copy">
        <div style="width: 100%;">
        <h2>Frequently</h2>
        <h2>Asked Questions</h2>
        </div>
        <div>
        <img class="stamp" src="<?php echo get_template_directory_uri();?>/img/coffee.png" />
        </div>
    </div>
    <div class="faq_question_container">
        <?php

        // check if the repeater field has rows of data
        if( have_rows("faq") ):
            
            // loop through the rows of data
            while ( have_rows("faq") ) : the_row();
        ?>
            <?php if(get_sub_field('question')):?>
            <p class="faq_question">
                <?php the_sub_field('question'); ?>
                <span class="icon_container" />
            </p>
            <?php endif; ?>
            <?php if(get_sub_field('answer')):?>

            <div class="faq_answer">
                <?php the_sub_field('answer'); ?>
            </div>

        <?php endif; ?>
    
        <?php endwhile; endif; ?>
    </div>
<img class="christmas-break" src="<?php the_field("christmas_break", "option") ?>" />
</div>
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