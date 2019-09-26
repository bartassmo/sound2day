<?php 

/*
    Template name: O nas
*/

?>

<?php

    $title = get_the_title();
    $heroImg = get_post_meta( 9, 'hero-img', true);
    $titleSection = get_post_meta( get_the_id(), 'about-title', true);
    $aboutImg = get_post_meta( get_the_id(), 'about-img', true);

?>

<?php include(locate_template('header.php')); ?>

<section class="hero nPadding" style="background-image: url(<?php echo $heroImg; ?>);">
    <div class="container sPadding">
        <div class="page-header wow fadeInLeft">
            <span class="page-header__title"><?php echo $title; ?></span>
        </div>
    </div>
</section>
<section class="about bPadding">
    <div class="container">
        <div class="about__wrapper">
            <div class="about__content">
                <div class="title__box">
                    <h1 class="title title--left wow fadeInLeft"><?php echo $titleSection; ?></h1>
                </div>
                <div class="about__text wow fadeInLeft">
                    <?php while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="about__img">
                <img class="wow fadeInRight" src="<?php echo $aboutImg; ?>" alt="<?php echo $title; ?>">
            </div>
        </div>
    </div>
</section>

<?php include(locate_template('footer.php')); ?> 