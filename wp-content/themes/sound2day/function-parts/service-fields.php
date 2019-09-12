<?php

    $page = new_cmb2_box( array(
        'id'    =>  'service',
        'title' =>  esc_html__( 'Strona sprzętu', 'cmb2'),
        'object_types'  => array( 'service' ),
    ));

    $page->add_field( array(
        'name'       => esc_html__( 'Tytuł', 'cmb2' ),
        'id'         => 'service-title',
        'type'       => 'text',
        'sanitization_cb' => false,
    ));

?>