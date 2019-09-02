<header class="header">
    <div class="header__container container">
        <a href="<?php echo site_url(); ?>" class="header__logo"><?php echo getSvgContent(locate_template('dist/img/svg/logo.svg')); ?></a>
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
        </nav>
    </div>
</header>