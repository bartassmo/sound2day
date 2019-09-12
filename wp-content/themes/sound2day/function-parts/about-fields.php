<?php

    $page = new_cmb2_box( array(
        'id'    =>  'about',
        'title' =>  esc_html__( 'Content', 'cmb2'),
        'object_types'  => array( 'page' ),
        'show_on'   => array( 'key' =>  'page-template', 'value'    =>  'templates/template-about.php' ),
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Tytuł', 'cmb2' ),
        'id'         => 'about-title',
        'type'       => 'text',
        'sanitization_cb' => false,
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Zdjęcie', 'cmb2' ),
        'id'         => 'about-img',
        'type'       => 'file',
        'sanitization_cb' => false,
    ));