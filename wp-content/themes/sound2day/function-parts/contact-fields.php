<?php

    $page = new_cmb2_box( array(
        'id'    =>  'contact',
        'title' =>  esc_html__( 'Dane kontaktowe', 'cmb2'),
        'object_types'  => array( 'page' ),
        'show_on'   => array( 'key' =>  'page-template', 'value'    =>  'templates/template-contact.php' ),
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Tytuł', 'cmb2' ),
        'id'         => 'contact-title',
        'type'       => 'text',
        'sanitization_cb' => false,
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Adres email', 'cmb2' ),
        'id'         => 'contact-email',
        'type'       => 'text',
        'sanitization_cb' => false,
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Numer telefonu', 'cmb2' ),
        'id'         => 'contact-number',
        'type'       => 'text',
        'sanitization_cb' => false,
    ));