<?php 

/*
    Template name: Strona Główna
*/

?>

<?php

$heroTitle = get_post_meta(get_the_id(), 'hero-title', true);
$heroImg = get_post_meta( get_the_id(), 'hero-img', true);
$infoGroup = get_post_meta( get_the_id(), 'info-group', true);

?>

<?php include(locate_template('header.php')); ?>

<section class="hero" style="background-image: url(<?php echo $heroImg; ?>);">
    <div class="container">
        <div class="hero__text bPadding">
            <span class="hero__title"><?php echo $heroTitle; ?></span>
        </div>
        <div class="info container nPadding">
            <?php 
            foreach($infoGroup as $elem) { ?>
                <div class="info__block">
                    <div class="info__img">
                        <img src="<?php echo $elem['img'] ?>">
                    </div>
                    <div class="info__text">
                        <span><?php echo $elem['title'] ?></span>
                        <span><?php echo $elem['text'] ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include(locate_template('footer.php')); ?> 