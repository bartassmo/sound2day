<?php

    $title = get_the_title();
    $heroImg = get_post_meta( 9, 'hero-img', true);
    $baner = get_post_meta( get_the_id(), 'project-baner', true);
    $slider = get_post_meta( get_the_id(), 'project-slider', 1);

?>

<?php include(locate_template('header.php')); ?>

<section class="hero nPadding" style="background-image: url(<?php echo $heroImg; ?>);">
    <div class="container sPadding">
        <div class="page-header wow fadeInLeft">
            <span class="page-header__title"><?php echo $title; ?></span>
        </div>
    </div>
</section>
<section class="service container bPadding">
    <div class="service__content wow fadeInLeft">
        <?php while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
         <a href="<?php echo get_site_url(); ?>/nasze-realizacje" class="btn btn--more wow fadeInLeft" data-wow-delay="0.4s"><span class="btn--left">+</span>Powrót do listy realizacji</a>
    </div>
    <?php if ($slider) : ?>
    <div class="project__slider wow fadeInRight">
        <div class="project__slider__big">
            <div id="sliderBig">
                <?php slider_fancy('project-list', 'sliderBig'); ?>
            </div>
            <div class="project__slider__nav">
                <span id="navLeftBig" class='project__slider__nav--arrow project__slider__nav--left'></span>
                <span id="navRightBig" class='project__slider__nav--arrow project__slider__nav--right'></span>
            </div>
        </div>
        <div class="project__slider__small wow fadeIn" data-wow-delay="0.3s">
            <div id="sliderSmall" class="project__slider__small--display">
                <?php cmb2_output_file_list('project-list', 'sliderSmall'); ?>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="project__gallery wow fadeInRight">
        <?php slider_fancy('project-list', 'sliderBig'); ?>
    </div>
    <?php endif; ?>
</section>
<?php include(locate_template('footer.php')); ?> 