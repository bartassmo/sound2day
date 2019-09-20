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

    add_image_size( 'sliderImg', 300, 100 );

/*---------------------------------------------------*/
/*                    WINES POST TYPE                        */
/*---------------------------------------------------*/


function create_post_types() {

    register_post_type('service', array(
        'labels' => array(
            'name' => __('Usługi'),
            'singular_name' => __('Usługa')
        ),
        'public' => true,
        'rewrite' => array('slug' => 'uslugi'),
        'supports' => array(
            'title',
            'page-attributes',
            'editor',
            'thumbnail',
        ),
        'hierarchical' => true,
        'posts_per_archive_page' => 50
    ));

    register_post_type('rental', array(
        'labels' => array(
            'name' => __('Wypożyczalnia'),
            'singular_name' => __('Wypożyczalnia')
        ),
        'public' => true,
        'rewrite' => array('slug' => 'wypozyczalnia'),
        'supports' => array(
            'title',
            'page-attributes',
            'editor',
            'thumbnail',
        ),
        'hierarchical' => false,
        'posts_per_archive_page' => 50
    ));

}

add_action('init', 'create_post_types');

?>