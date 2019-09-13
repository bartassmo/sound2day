<div class="rental-item">
    <div class="rental-item__img">
        <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail' ) ?>
    </div>
    <div class="rental-item__name">
        <span class="rental-item__text"><?php echo get_the_title(); ?></span>
    </div>
</div>