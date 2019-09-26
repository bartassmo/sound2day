<?php 

/*
    Template name: Realizacje
*/

?>

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
<section class="rentals bPadding">
    <div class="container">
        <div class="rentals__container">
    <?php
        $project = new WP_Query( array(
            'post_type' => 'project',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            ) );
            ?>
    <?php while( $project->have_posts() ) : $project->the_post();
        include(locate_template('template-parts/service-item.php') );
    endwhile; wp_reset_query(); ?>
    </div>
    </div>
</section>

<?php include(locate_template('footer.php')); ?> 