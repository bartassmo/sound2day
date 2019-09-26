<?php

    $title = get_the_title();
    $heroImg = get_post_meta( 9, 'hero-img', true);
    $rentalGroup = get_post_meta( get_the_id(), 'rental-group', true);

?>

<?php include(locate_template('header.php')); ?>

<section class="hero nPadding" style="background-image: url(<?php echo $heroImg; ?>);">
    <div class="container sPadding">
        <div class="page-header wow fadeInLeft">
            <span class="page-header__title"><?php echo $title; ?></span>
        </div>
    </div>
</section>
<section class="service service-sidebar">
    <div class="service__container rental__container bPadding">
        <?php foreach($rentalGroup as $elem) { ?>
            <div class="rental__block wow fadeInUp" data-wow-delay="0.15s">
                <div class="rental__content">
                    <div class="rental__img"><img src="<?php echo $elem['img'] ?>" alt=""></div>
                    <span class="rental__title"><?php echo $elem['name'] ?></span>
                    <div class="rental__text"><p><?php echo $elem['price'] ?></p></div>
                    <div class="rental__price"><span>Cena wynajmu: <?php echo $elem['text'] ?></span></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <aside class="sidebar">
        <div class="sidebar__content bPadding wow fadeInRight">
            <span class="sidebar__title">Zobacz również</span>
            <ul class="sidebar__list">
                <?php
                    $current = get_the_id();
                    $seeAlso = new WP_Query( array(
                        'post_type' => 'rental',
                        'posts_per_page' => 6,
                        'orderby' => 'rand',
                        'post__not_in'  => array($current),
                        ) );
                        ?>
                <?php while( $seeAlso->have_posts() ) : $seeAlso->the_post(); ?>
                    <li class="sidebar__item"><a href="<?php echo get_the_permalink(); ?>" class="sidebar__link"><?php echo get_the_title(); ?></a></li>
                <?php endwhile; wp_reset_query(); ?>
            </ul>
        </div>
    </aside>
</section>

<?php include(locate_template('footer.php')); ?> 