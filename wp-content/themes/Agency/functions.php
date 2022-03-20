 <?php

function agency_regsiter_styles()
{
    $version = "1.0.1";
    
    // ------------------- css ----------------- \\
    // style css
    wp_enqueue_style('agency-style', get_template_directory_uri() . "/style.css", array(), $version);
    wp_enqueue_style('agency-editor-style', get_template_directory_uri() . "/assets/css/editor-style.css", array(), $version);
    wp_enqueue_style('agency-responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), $version);
    
    // Library 
    wp_enqueue_style('agency-bootstrap.min', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), $version);
    wp_enqueue_style('agency-owl.carousel', get_template_directory_uri() . "/assets/css/owl.carousel.min.css", array(), $version);
    wp_enqueue_style('agency-owl.theme.default.min', get_template_directory_uri() . "/assets/css/owl.theme.default.min.css", array(), $version);
    wp_enqueue_style('agency-fontawesome', get_template_directory_uri() . "/assets/css/fontawesome.css", array(), $version);
    
    // Fonts
    wp_enqueue_style('agency-solid', get_template_directory_uri() . "/assets/css/solid.css", array(), $version);
    wp_enqueue_style('agency-regular', get_template_directory_uri() . "/assets/css/regular.css", array(), $version);
    wp_enqueue_style('agency-brands', get_template_directory_uri() . "/assets/css/brands.css", array(), $version);
    
    
    // ------------------- script ----------------- \\
    wp_enqueue_script('agency-jquery1.12.4.min', get_template_directory_uri() . "/assets/js/jquery1.12.4.min.js", array(), $version, true);
    wp_enqueue_script('agency-bootstrap.min', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), $version, true);
    wp_enqueue_script('agency-owl.carousel.min', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array(), $version, true);
    wp_enqueue_script('agency-custom', get_template_directory_uri() . "/assets/js/custom.js", array(), $version, true);
}
add_action('wp_enqueue_scripts', 'agency_regsiter_styles');


// ============ MENU =========== \\
/**
 * Menu Locations
 */
// define menu

if (function_exists('wp_nav_menu')) {
    function agilsun_wp_my_menus()
    {
        register_nav_menus(array(
            'Main_menu' => __('Menu Chính', 'text_domain'),
            'Area_menu' => __('Menu Khu Vực', 'text_domain')
        ));
    }
    add_action('init', 'agilsun_wp_my_menus');
}

// theme_location Main Menu
function get_main_menu()
{
    wp_nav_menu(array(
        'theme_location' => 'Main_menu',
        'menu' => '',
        'container' => '',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => '',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => '',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '%3$s',
        'depth' => 0,
        'walker' => ''
    ));
}
add_shortcode('main_menu', 'get_main_menu');

// theme_location Area Menu
function get_area_menu()
{
    wp_nav_menu(array(
        'theme_location' => 'Area_menu',
        'menu' => '',
        'container' => '',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => '',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => '',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '%3$s',
        'depth' => 0,
        'walker' => ''
    ));
}
add_shortcode('area_menu', 'get_area_menu');


function get_sub_menu()
{
    wp_nav_menu(array(
        'theme_location' => 'sub_menu',
        'menu' => '',
        'container' => '',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => '',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => '',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '%3$s',
        'depth' => 0,
        'walker' => ''
    ));
}
add_shortcode('sub_menu', 'get_sub_menu'); 