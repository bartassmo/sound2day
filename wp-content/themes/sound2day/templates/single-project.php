<?php

    $title = get_the_title();
    $heroImg = get_post_meta( 9, 'hero-img', true);
    $baner = get_post_meta( get_the_id(), 'project-baner', true);
    $slider = get_post_meta( get_the_id(), 'project-slider', 1);

?>

<?php include(locate_template('header.php')); ?>

<section class="hero nPadding" style="background-image: url(<?php echo (!empty($baner) ? $baner : $heroImg); ?>);">
    <div class="container sPadding">
        <div class="page-header">
            <span class="page-header__title"><?php echo $title; ?></span>
        </div>
    </div>
</section>
<section class="service">
    <div class="service__container bPadding">
        <?php while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
    <?php if ($slider) : ?>
    <div class="project__slider">
        <div class="project__slider__big">
            <div id="sliderBig">
                <?php slider_fancy('project-list', 'sliderBig'); ?>
            </div>
            <div class="project__slider__nav">
                <span id="navLeftBig" class='project__slider__nav--arrow project__slider__nav--left'><?php pll_e('Poprzednie'); ?></span>
                <span id="navRightBig" class='project__slider__nav--arrow project__slider__nav--right'><?php pll_e('Następne'); ?></span>
            </div>
        </div>
        <div class="project__slider__small">
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