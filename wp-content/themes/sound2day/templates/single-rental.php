<?php

    $title = get_the_title();
    $heroImg = get_post_meta( 9, 'hero-img', true);
    $rentalGroup = get_post_meta( get_the_id(), 'rental-group', true);

?>

<?php include(locate_template('header.php')); ?>

<section class="hero nPadding" style="background-image: url(<?php echo $heroImg; ?>);">
    <div class="container sPadding">
        <div class="page-header">
            <span class="page-header__title"><?php echo $title; ?></span>
        </div>
    </div>
</section>
<section class="rental bPadding">
    <div class="container">
    <?php 
        foreach($rentalGroup as $elem) { ?>
            <div class="info__block">
                <div class="info__img" style="background-image: url(<?php echo $elem['img'] ?>);"></div>
                <div class="info__content">
                    <span class="info__title"><?php echo $elem['name'] ?></span>
                    <span class="info__text"><?php echo $elem['text'] ?></span>
                    <span class="info__text"><?php echo $elem['price'] ?></span>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php include(locate_template('footer.php')); ?> 