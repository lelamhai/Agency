<?php

function agency_regsiter_styles()
{
    $version = "1.0.0";

    // ------------------- css ----------------- \\
    // style css
    wp_enqueue_style( 'agency-style', get_template_directory_uri()."/style.css",  array(), $version);
    wp_enqueue_style( 'agency-editor-style', get_template_directory_uri()."/assets/css/editor-style.css",  array(), $version);
    wp_enqueue_style( 'agency-responsive', get_template_directory_uri()."/assets/css/responsive.css",  array(), $version);

    // Library 
    wp_enqueue_style( 'agency-bootstrap.min', get_template_directory_uri()."/assets/css/bootstrap.min.css",  array(), $version);
    wp_enqueue_style( 'agency-owl.carousel', get_template_directory_uri()."/assets/css/owl.carousel.min.css",  array(), $version);
    wp_enqueue_style( 'agency-owl.theme.default.min', get_template_directory_uri()."/assets/css/owl.theme.default.min.css",  array(), $version);
    wp_enqueue_style( 'agency-fontawesome', get_template_directory_uri()."/assets/css/fontawesome.css",  array(), $version);

    // Fonts
    wp_enqueue_style( 'agency-solid', get_template_directory_uri()."/assets/css/solid.css",  array(), $version);
    wp_enqueue_style( 'agency-regular', get_template_directory_uri()."/assets/css/regular.css",  array(), $version);
    wp_enqueue_style( 'agency-brands', get_template_directory_uri()."/assets/css/brands.css",  array(), $version);
    

    // ------------------- script ----------------- \\
    wp_enqueue_script('agency-jquery1.12.4.min', get_template_directory_uri()."/assets/js/jquery1.12.4.min.js", array(), $version, true);
    wp_enqueue_script('agency-bootstrap.min', get_template_directory_uri()."/assets/js/bootstrap.min.js", array(), $version, true);
    wp_enqueue_script('agency-owl.carousel.min', get_template_directory_uri()."/assets/js/owl.carousel.min.js", array(), $version, true);
    wp_enqueue_script('agency-custom', get_template_directory_uri()."/assets/js/custom.js", array(), $version, true);


 
}
add_action( 'wp_enqueue_scripts', 'agency_regsiter_styles');