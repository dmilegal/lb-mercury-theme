<?php
add_action('customize_register', 'legalbet_customizer_init');

function legalbet_customizer_init($wp_customize)
{

    $wp_customize->add_panel('legalbet_custom_settings', array(
        'priority'   => 135,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__('Legalbet Custom Settings', 'mercury'),
    ));

    /*  --- Footer License block in Appearance -> Customize settings ---  */

    $wp_customize->add_section('legalbet_footer_settings', array(
        'title'      => esc_html__('Footer Settings', 'mercury'),
        'panel' => 'legalbet_custom_settings',
        'priority'   => 10,
    ));


    $wp_customize->add_setting('footer_license_logo', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'mercury_sanitize_file',
    ));


    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'footer_license_logo', array(
        'label' => esc_html__('Footer License Block Image', 'mercury'),
        'description' => esc_html__('Add Logo to Footer License Block.', 'mercury'),
        'section' => 'legalbet_footer_settings',
        'settings' => 'footer_license_logo'
    )));


    $wp_customize->add_setting('footer_license_text', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('footer_license_text', array(
        'type' => 'textarea',
        'section' => 'legalbet_footer_settings',
        'label' => esc_html__('Footer License Block Text', 'mercury'),
        'description' => esc_html__('Add License Block Text to the footer.', 'mercury'),
    ));
}

function theme_colors_customize_register($wp_customize)
{
   /* $settings = WP_Theme_JSON_Resolver::get_theme_data();
    $data = $settings->get_data();
    $palette =  $data['settings']['color']['palette'];
    $groups = array_unique(
        array_map(fn ($color) => $color['group'], array_filter($palette, fn ($color) => isset($color['group'])))
    );
    $choices = array_merge(...array_map(
        fn ($group) => [
            $group => ucfirst(preg_replace("![^a-z0-9]+!i", "-", $group))
        ],
        $groups
    ));

    $wp_customize->add_setting('main_ui_color', array(
        'capability'    => 'edit_theme_options',
        'default'       => $groups[0]
    ));

    $wp_customize->add_control('main_ui_color', array(
        'label'      => 'Main UI color',
        'section'    => 'colors',
        'settings'   => 'main_ui_color',
        'type'       => 'radio',
        'choices'    => $choices,
    ));*/
}
add_action('customize_register', 'theme_colors_customize_register');

function unregister_customize_elements($wp_customize)
{
    // parent theme color control
    $wp_customize->remove_control('main_color');
    $wp_customize->remove_control('second_color');
    $wp_customize->remove_control('stars_color');


}
add_action('customize_register', 'unregister_customize_elements', 999);
