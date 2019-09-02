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