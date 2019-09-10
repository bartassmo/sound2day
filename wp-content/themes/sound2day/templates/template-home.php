<?php 

/*
    Template name: Strona Główna
*/

?>

<?php

$heroTitle = get_post_meta(get_the_id(), 'hero-title', true);
$heroImg = get_post_meta( get_the_id(), 'hero-img', true);
$infoGroup = get_post_meta( get_the_id(), 'info-group', true);
$producentsTitle = get_post_meta( get_the_id(), 'producents-title', true);

?>

<?php include(locate_template('header.php')); ?>

<section class="hero nPadding" style="background-image: url(<?php echo $heroImg; ?>);">
    <div class="hero__text sPadding">
        <span class="hero__title"><?php echo $heroTitle; ?></span>
    </div>
    <div class="container">
        <div class="info container nPadding">
            <?php 
            foreach($infoGroup as $elem) { ?>
                <div class="info__block">
                    <div class="info__img" style="background-image: url(<?php echo $elem['img'] ?>);"></div>
                    <div class="info__content">
                        <span class="info__title"><?php echo $elem['title'] ?></span>
                        <span class="info__text"><?php echo $elem['text'] ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="producents sPadding">
    <div class="title__box">
        <h1 class="title title--center"><?php echo $producentsTitle; ?></h1>
    </div>
    <div class="producents__wrapper" id="sliderProd">
        <?php cmb2_output_file_list('producents-slider', ''); ?>
    </div>
</section>


<?php include(locate_template('footer.php')); ?> 