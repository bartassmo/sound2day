<a class="service-item" href="<?php echo get_the_permalink(); ?>">
    <div class="service-item__inner">
        <div class="service-item__gradient">
            <div class="service-item__layer">
                <div class="service-item__name">
                    <span class="service-item__text"><?php echo get_the_title(); ?></span>
                </div>
            </div>
        </div>
        <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail' ) ?>
    </div>
</a>