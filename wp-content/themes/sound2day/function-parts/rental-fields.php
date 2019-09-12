<?php

    $page = new_cmb2_box( array(
        'id'    =>  'rental',
        'title' =>  esc_html__( 'Sprzęt do wypożyczenia', 'cmb2'),
        'object_types'  => array( 'page' ),
        'show_on'   => array( 'key' =>  'page-template', 'value'    =>  'templates/template-home.php' ),
    ));

    $blog_group_id = $page->add_field( array(
        'id'          => 'rental-group',
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => array(
            'group_title'   => 'Sprzęt {#}',
            'add_button'    => 'Dodaj nowy sprzęt',
            'remove_button' => 'Usuń sprzęt',
            'closed'        => true, 
            'sortable'      => true, 
        ),
    ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Nazwa',
        'id'   => 'name',
        'type' => 'text',
        'sanitization_cb' => false,
    ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Opis',
        'id'   => 'text',
        'type' => 'textarea',
        'sanitization_cb' => false,
    ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Cena',
        'id'   => 'text',
        'type' => 'text',
    ) );
    $page->add_group_field( $blog_group_id, array(
        'name' => 'Zdjęcie',
        'id'   => 'img',
        'type' => 'file',
    ) );

?>