<?php

    $page = new_cmb2_box( array(
        'id'    =>  'hero',
        'title' =>  esc_html__( 'Header', 'cmb2'),
        'object_types'  => array( 'page' ),
        'show_on'   => array( 'key' =>  'page-template', 'value'    =>  'templates/template-home.php' ),
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Tytuł', 'cmb2' ),
        'id'         => 'hero-title',
        'type'       => 'text',
        'sanitization_cb' => false,
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Zdjęcie w tle', 'cmb2' ),
        'id'         => 'hero-img',
        'type'       => 'file',
        'sanitization_cb' => false,
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