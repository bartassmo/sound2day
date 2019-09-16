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
<section class="services bPadding">
<div class="container">
    <?php while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</div>
<aside class="sidebar bPadding">
    <div class="sidebar__content">
    <?php
        $current = get_the_id();
        $seeAlso = new WP_Query( array(
            'post_type' => 'service',
            'posts_per_page' => -1,
            'orderby' => 'random',
            'post__not_in'  => array($current),
            ) );
            ?>
    <?php while( $seeAlso->have_posts() ) : $seeAlso->the_post();
        echo get_the_title();
    endwhile; wp_reset_query(); ?>
    </div>
</aside>
</section>

<?php include(locate_template('footer.php')); ?> 