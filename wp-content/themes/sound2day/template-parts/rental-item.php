<a class="rental-item" href="<?php echo get_the_permalink(); ?>">
    <div class="rental-item__inner">
        <div class="rental-item__gradient">
            <div class="rental-item__layer">
                <div class="rental-item__name">
                    <span class="rental-item__text"><?php echo get_the_title(); ?></span>
                </div>
            </div>
        </div>
        <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail' ) ?>
    </div>
</a>