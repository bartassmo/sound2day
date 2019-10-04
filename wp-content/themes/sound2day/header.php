<?php
/**
 * @package sound2day
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141700845-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-141700845-2');
    </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="preloader active">
        <div class="preloader__content">
            <a href="<?php echo site_url(); ?>" class="header__logo"><?php echo getSvgContent(locate_template('dist/img/svg/logo-preloader.svg')); ?></a>
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
                </div>
        </div>
    </div>
    <?php include locate_template('template-parts/main-menu.php'); ?>