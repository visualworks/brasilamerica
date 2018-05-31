<?php
extract(shortcode_atts(array(
    'count'             => 10,
    'column'            => 3,
    'style'             => 'simple',
    'custom_image_size' => 'false',
    'image_size'        => 'crop',
    'image_width'       => 500,
    'image_height'      => 500,
    'rounded_image'     => 'true',
    'box_border_color'  => '',
    'box_bg_color'      => '',
    'employees'         => '',
    'categories'        => '',
    'animation'         => '',
    'description'       => 'true',
    'visibility'        => '',
    'el_class'          => '',
    'offset'            => 0,
    'orderby'           => 'date',
    'order'             => 'DESC',
    'name_color'        => '',
    'position_color'    => '',
    'about_color'       => '',
    'social_color'      => '',
    'grayscale_image'   => 'true',
), $atts));
Mk_Static_Files::addAssets('mk_employees');
