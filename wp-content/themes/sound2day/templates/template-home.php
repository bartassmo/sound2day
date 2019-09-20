<?php 

/*
    Template name: Strona Główna
*/

?>

<?php

$infoGroup = get_post_meta( get_the_id(), 'info-group', true);
$sliderGroup = get_post_meta( get_the_id(), 'slider-group', true);
$producentsTitle = get_post_meta( get_the_id(), 'producents-title', true);

?>

<?php include(locate_template('header.php')); ?>

<section class="">
    <div class="slider__slick">
        <div class="slider__wrapper" id="slick" >
            <?php 
                foreach($sliderGroup as $elem) { ?>
                    <div class="slider__slide">
                        <img src="<?php echo $elem['img']; ?>" class="slider__img" alt="">
                        <div class="slider__content container wow fadeInLeft">
                            <div class="slider__box">
                                <span class="slider__title"><?php echo $elem['title']; ?></span>
                                <span class="slider__text"><?php echo $elem['text']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php }    
            ?>
        </div>
    </div>
</section>
<section class="info__section">
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
        <?php cmb2_output_file_list('slider-producents', 'sliderImg'); ?>
    </div>
</section>


<?php include(locate_template('footer.php')); ?> 