<?php

    $title = get_the_title();
    $heroImg = get_post_meta( 9, 'hero-img', true);

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
    <div class="service__container bPadding wow fadeInLeft">
        <?php while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
    <aside class="sidebar">
        <div class="sidebar__content bPadding wow fadeInRight">
            <span class="sidebar__title">Zobacz również</span>
            <ul class="sidebar__list">
                <?php
                    $current = get_the_id();
                    $seeAlso = new WP_Query( array(
                        'post_type' => 'service',
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