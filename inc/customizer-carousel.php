<?php

function create_theme_config($wp_customize) {
    $wp_customize->add_section('Carousel', array(
        'title' => __('Carousel', 'vulpesoft-theme'),
        'priority' => 70,
    ));

    create_image_control($wp_customize, 'carousel_first_image', __('First Image', 'vulpesoft-theme'));
    create_image_text_control($wp_customize, 'carousel_first_image', 'First Image');

    create_image_control($wp_customize, 'carousel_second_image', __('Second Image', 'vulpesoft-theme'));
    create_image_text_control($wp_customize, 'carousel_second_image', 'Second Image');

    create_image_control($wp_customize, 'carousel_third_image', __('Third Image', 'vulpesoft-theme'));
    create_image_text_control($wp_customize, 'carousel_third_image', 'Third Image');

    create_image_control($wp_customize, 'carousel_fourth_image', __('Fourth Image', 'vulpesoft-theme'));
    create_image_text_control($wp_customize, 'carousel_fourth_image', 'Fourth Image');

    create_image_control($wp_customize, 'carousel_fifth_image', __('Fifth Image', 'vulpesoft-theme'));
    create_image_text_control($wp_customize, 'carousel_fifth_image', 'Fifth Image');
}


function create_image_control($wp_customize, $id, $label) {
    $wp_customize->add_setting($id, array());

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, $id, array(
            'label' => $label,
            'section' => 'Carousel',
            'settings' => $id
        )
    ));
}

function create_image_text_control($wp_customize, $id, $label) {
    $wp_customize->add_setting($id . '_title', array());
    $wp_customize->add_setting($id . '_subtitle', array());
    $wp_customize->add_setting($id . '_button_one_text', array());
    $wp_customize->add_setting($id . '_button_two_text', array());
    $wp_customize->add_setting($id . '_button_one_href', array());
    $wp_customize->add_setting($id . '_button_two_href', array());
    $wp_customize->add_setting($id . '_button_color', array());
    $wp_customize->add_setting($id . '_button_bottom_color', array());

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, $id . '_title', array(
        'label' => $label . ' Title',
        'section'    => 'Carousel',
        'settings'   => $id . '_title',
        'type' => 'text'
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, $id . '_subtitle', array(
        'label' => $label . ' Subtitle',
        'section'    => 'Carousel',
        'settings'   => $id . '_subtitle',
        'type' => 'text'
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, $id . '_button_one_text', array(
        'label' => $label . ' First Button Text',
        'section'    => 'Carousel',
        'settings'   => $id . '_button_one_text',
        'type' => 'text'
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, $id . '_button_two_text', array(
        'label' => $label . ' Second Button Text',
        'section'    => 'Carousel',
        'settings'   => $id . '_button_two_text',
        'type' => 'text'
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, $id . '_button_one_href', array(
        'label' => $label . ' First Button Href',
        'section'    => 'Carousel',
        'settings'   => $id . '_button_one_href',
        'type' => 'text'
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, $id . '_button_two_href', array(
        'label' => $label . ' Second Button Href',
        'section'    => 'Carousel',
        'settings'   => $id . '_button_two_href',
        'type' => 'text'
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, $id . '_button_color', array(
        'label'      => $label . ' Second Button Color',
        'section'    => 'Carousel',
        'settings'   => $id . '_button_color',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, $id . '_button_bottom_color', array(
        'label'      => $label . ' Second Button Bottom Color',
        'section'    => 'Carousel',
        'settings'   => $id . '_button_bottom_color',
    ) ) );
}