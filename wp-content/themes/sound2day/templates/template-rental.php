<?php 

/*
    Template name: Wypożyczalnia
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
<section class="rentals bPadding">
    <div class="container">
        <div class="rentals__container">
    <?php
        $seeAlso = new WP_Query( array(
            'post_type' => 'rental',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            ) );
            ?>
    <?php while( $seeAlso->have_posts() ) : $seeAlso->the_post();
        include(locate_template('template-parts/rental-item.php') );
    endwhile; wp_reset_query(); ?>
    </div>
    </div>
</section>

<?php include(locate_template('footer.php')); ?> 