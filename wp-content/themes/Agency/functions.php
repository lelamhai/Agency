<?php
/*
 * Variables
 */
define('MAIN_MENU', 'main_menu');
define('AREA_MENU', 'area_menu');
define('CATEGORY_MENU', 'category_menu');
define('CATEGORY_SEARCH', 'category_search');


/*
 * css and js
 */
function agency_regsiter_styles()
{
    $version = "1.0.2";
    
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



/**
 * Menu Locations
 */
if (function_exists('wp_nav_menu')) {
    function agency_wp_my_menus()
    {
        register_nav_menus(array(
            MAIN_MENU => __('Menu Chính', 'text_domain'),
            AREA_MENU => __('Khu Vực', 'text_domain'),
            CATEGORY_MENU => __('Chuyên mục', 'text_domain'),
            CATEGORY_SEARCH => __('Chuyên mục dưới khung search', 'text_domain')
        ));
    }
    add_action('init', 'agency_wp_my_menus');
}


// theme_location Main Menu
function get_main_menu()
{
    wp_nav_menu(array(
        'theme_location' => MAIN_MENU,
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
        'theme_location' => AREA_MENU,
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


// theme_location Category Menu
function get_category_menu()
{
    wp_nav_menu(array(
        'theme_location' => CATEGORY_MENU,
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
        'link_before' => '<i class="fas fa-bell h-custom-fa-bell"></i>',
        'link_after' => '',
        'items_wrap' => '%3$s',
        'depth' => 0,
        'walker' => ''
    ));
}
add_shortcode('catetory_menu', 'get_category_menu');

/*
* Show data for UI
*/
function ui_category_desktop()
{
    $menu_name = CATEGORY_MENU;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            // var_dump($menu_item);exit();
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            ?>
                <li>
                    <span class="item p-2 d-block" data-id="<?php echo $id?>"><i class="fab fa-gripfire"></i> <?php echo $title?></span>
                </li>
            <?php
        }
    }
}
add_shortcode('ui_category_desktop', 'ui_category_desktop');


function ui_category_search()
{
    $menu_name = CATEGORY_SEARCH;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url =  $menu_item->url;
            ?>

                <div class="item">
                    <a href="<?php echo $url?>"><?php echo $title?></a>
                </div>
            <?php
        }
    }
}
add_shortcode('ui_category_search', 'ui_category_search');




?>