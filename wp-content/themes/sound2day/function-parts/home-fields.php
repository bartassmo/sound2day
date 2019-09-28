<?php

$page = new_cmb2_box( array(
    'id'    =>  'hero',
    'title' =>  esc_html__( 'Baner', 'cmb2'),
    'object_types'  => array( 'page' ),
    'show_on'   => array( 'key' =>  'page-template', 'value'    =>  'templates/template-home.php' ),
));

$page->add_field( array(
    'name'       => esc_html__( 'Górny baner', 'cmb2' ),
    'id'         => 'hero-img',
    'type'       => 'file',
    'sanitization_cb' => false,
));

    $page = new_cmb2_box( array(
        'id'    =>  'slider',
        'title' =>  esc_html__( 'Slider 1', 'cmb2'),
        'object_types'  => array( 'page' ),
        'show_on'   => array( 'key' =>  'page-template', 'value'    =>  'templates/template-home.php' ),
    ));

    $blog_group_id = $page->add_field( array(
        'id'          => 'slider-group',
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => array(
            'group_title'   => 'Slajd {#}',
            'add_button'    => 'Dodaj nowy slajd',
            'remove_button' => 'Usuń slajd',
            'closed'        => true, 
            'sortable'      => true, 
        ),
    ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Tytuł',
        'id'   => 'title',
        'type' => 'text',
        'sanitization_cb' => false,
        ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Mniejszy tekst',
        'id'   => 'text',
        'type' => 'textarea',
        'sanitization_cb' => false,
        ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Kolor tekstu',
        'id'   => 'color',
        'type' => 'colorpicker',
        'default'   => '#ffffff',
    ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Zdjęcie',
        'id'   => 'img',
        'type' => 'file',
    ) );

    $page = new_cmb2_box( array(
        'id'    =>  'slider2',
        'title' =>  esc_html__( 'Slider 2', 'cmb2'),
        'object_types'  => array( 'page' ),
        'show_on'   => array( 'key' =>  'page-template', 'value'    =>  'templates/template-home.php' ),
    ));

    $blog_group_id = $page->add_field( array(
        'id'          => 'slider2-group',
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => array(
            'group_title'   => 'Slajd {#}',
            'add_button'    => 'Dodaj nowy slajd',
            'remove_button' => 'Usuń slajd',
            'closed'        => true, 
            'sortable'      => true, 
        ),
    ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Tytuł',
        'id'   => 'title',
        'type' => 'text',
        'sanitization_cb' => false,
        ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Mniejszy tekst',
        'id'   => 'text',
        'type' => 'textarea',
        'sanitization_cb' => false,
        ) );
        $page->add_group_field( $blog_group_id, array(
            'name' => 'Kolor tekstu',
            'id'   => 'color',
            'type' => 'colorpicker',
            'default'   => '#ffffff',
        ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Zdjęcie',
        'id'   => 'img',
        'type' => 'file',
    ) );

    $page = new_cmb2_box( array(
        'id'    =>  'info',
        'title' =>  esc_html__( 'Bloki informacyjne', 'cmb2'),
        'object_types'  => array( 'page' ),
        'show_on'   => array( 'key' =>  'page-template', 'value'    =>  'templates/template-home.php' ),
    ));

    $blog_group_id = $page->add_field( array(
        'id'          => 'info-group',
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => array(
            'group_title'   => 'Informacja {#}',
            'add_button'    => 'Dodaj nowy blok',
            'remove_button' => 'Usuń blok',
            'closed'        => true, 
            'sortable'      => true, 
        ),
    ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Tytuł',
        'id'   => 'title',
        'type' => 'text',
        'sanitization_cb' => false,
        ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Tekst',
        'id'   => 'text',
        'type' => 'textarea',
        'sanitization_cb' => false,
        ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Zdjęcie',
        'id'   => 'img',
        'type' => 'file',
    ) );

    $page->add_field( array(
        'name'       => esc_html__( 'Tytuł sekcji producentów', 'cmb2' ),
        'id'         => 'producents-title',
        'type'       => 'text',
        'sanitization_cb' => false,
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Producenci sprzętu', 'cmb2' ),
        'id'         => 'slider-producents',
        'desc'  => 'Dodaj zdjęcie o wymiarach 300x100',
        'type'       => 'file_list',
        'sanitization_cb' => false,
    ));