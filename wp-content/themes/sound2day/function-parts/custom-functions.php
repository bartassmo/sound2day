<?php

    function getSvgContent($file) {
        $svgContent = file_get_contents($file);
        return $svgContent;
    }

    function add_menuclass($ulclass) {
        return preg_replace('/<a /', '<a class="menu__link"', $ulclass);
    }

    add_filter('wp_nav_menu', 'add_menuclass');