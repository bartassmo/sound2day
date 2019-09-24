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
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-black.png" alt="Sound2day" class="contact__logo">
            <span class="contact__title"><?php echo $contactTitle; ?></span>
            <a href="tel:<?php echo $contactTel; ?>" class="contact__link contact--tel"><?php echo $contactTel; ?></a>
            <a href="tel:<?php echo $contactMail; ?>" class="contact__link contact--mail"><?php echo $contactMail; ?></a>
            <div class="contact__address">
                <?php while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php include(locate_template('footer.php')); ?> 