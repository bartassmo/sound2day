<?php

    function getSvgContent($file) {
        $svgContent = file_get_contents($file);
        return $svgContent;
    }

    function add_menuclass($ulclass) {
        return preg_replace('/<a /', '<a class="menu__link"', $ulclass);
    }

    add_filter('wp_nav_menu', 'add_menuclass');

    function cmb2_output_file_list( $file_list_meta_key, $img_size) {

        $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );
    
        foreach ( (array) $files as $attachment_id => $attachment_url ) {
            echo '<div class="slide">';
            echo wp_get_attachment_image( $attachment_id, $img_size );
            echo '</div>';
        }
    }