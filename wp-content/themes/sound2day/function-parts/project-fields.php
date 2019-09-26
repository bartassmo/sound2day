<?php

    $page = new_cmb2_box( array(
        'id'    => 'project-gallery',
        'title' => esc_html__( 'Galeria', 'cmb2' ),
        'object_types'  => array( 'project' ),
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Duże zdjęcie na dole strony', 'cmb2' ),
        'id'         => 'project-baner',
        'type'       => 'file',
        'sanitization_cb' => false,
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Galeria do wpisu', 'cmb2' ),
        'id'         => 'project-list',
        'type'       => 'file_list',
        'sanitization_cb' => false,
    ));

    $page->add_field( array(
        'name' => 'Zdjęcia jako slider?',
        'desc' => 'Zaznacz, żeby stworzyć slider (min. 4 zdjęcia)',
        'id'   => 'project-slider',
        'type' => 'checkbox',
    ) );

?>