<header class="header">
    <div class="header__container container">
        <a href="<?php echo site_url(); ?>" class="header__logo"><?php echo getSvgContent(locate_template('dist/img/svg/logo-white.svg')); ?></a>
        <button class="header__hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="header__nav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'menu_id'        => 'primary-menu',
                    ) );
            ?>
            <div class="social">
                <a href="https://www.facebook.com/Sound2Day-2179886255611366/" target="_blank" class="social__link" title="Odwiedź nasz fanpage!"><?php echo getSvgContent(locate_template('dist/img/svg/fb-icon.svg')); ?></a>
            </div>
        </nav>
    </div>
</header>