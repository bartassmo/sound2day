<?php 

/*
    Template name: Kontakt
*/

?>

<?php

    $title = get_the_title();
    $heroImg = get_post_meta( 9, 'hero-img', true);

?>

<?php include(locate_template('header.php')); ?>

<section class="hero nPadding" style="background-image: url(<?php echo $heroImg; ?>);">
    <div class="container sPadding">
        <div class="page-header">
            <span class="page-header__title"><?php echo $title; ?></span>
        </div>
    </div>
</section>
<section class="contact bPadding">
    <div class="container">
    </div>
</section>

<?php include(locate_template('footer.php')); ?> 