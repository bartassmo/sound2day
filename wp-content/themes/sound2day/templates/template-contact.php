<?php 

/*
    Template name: Kontakt
*/

?>

<?php

    $title = get_the_title();
    $heroImg = get_post_meta( 9, 'hero-img', true);
    $contactTitle = get_post_meta( get_the_id(), 'contact-title', true);
    $contactMail = get_post_meta( get_the_id(), 'contact-email', true);
    $contactTel = get_post_meta( get_the_id(), 'contact-number', true);

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
    <div class="container contact__container">
        <div class="contact__form">
            <?php echo do_shortcode( '[contact-form-7 id="5" title="Podstrona Kontakt"]' ); ?>
        </div>
        <div class="contact__details">
        <a href="<?php echo site_url(); ?>" class="header__logo"><?php echo getSvgContent(locate_template('dist/img/svg/logo-black.svg')); ?></a>
            <span class="contact__title"><?php echo $contactTitle; ?></span>

        </div>
    </div>
</section>

<?php include(locate_template('footer.php')); ?> 