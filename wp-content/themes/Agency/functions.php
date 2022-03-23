<?php
/*
 * Variables menu
 */
define('MAIN_MENU', 'main_menu');
define('AREA_MENU', 'area_menu');
define('CATEGORY_MENU', 'category_menu');
define('CATEGORY_SEARCH', 'category_search');
define('TAGS', 'tags');
define('TOP_ADDRESS_HOME', 'top_address_home');
/*
 * Variables taxonomy
 */
define('AREA_AGENCY', 'area_agency');
define('TAGS_AGENCY', 'tags_agency');
define('CATEGORY_AGENCY', 'category_agency');


/*
 * css and js
 */
function agency_regsiter_styles()
{
    $version = "1.0.3";
    
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
 * Setup Images Size
 */
function agency_imagesize() {
    add_theme_support('post-thumbnails');
    // add_image_size('image-post-news', 555, 450, true);
    // add_image_size('image-post-news', 278, 210, true);
  
}
add_action('after_setup_theme', 'agency_imagesize');


/**
 * Setup taxonomy
 */
add_action('init', 'custom_taxonomy_flush_rewrite');
function custom_taxonomy_flush_rewrite() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}


function agency_taxonomy() {
	register_taxonomy(
		AREA_AGENCY,
		'post',
		array(
			'label' => __( 'Agency Area' ),
            'rewrite' => array('slug' => 'khu-vuc'),
			'hierarchical' => true,
            'show_in_rest' => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,

		)
	);
}
add_action( 'init', 'agency_taxonomy' );


function agency_taxonomy_tags() {
	register_taxonomy(
		TAGS_AGENCY,
		'post',
		array(
			'label' => __( 'Agency Tags' ),
            'rewrite' => array('slug' => 'tags'),
			'hierarchical' => true,
            'show_in_rest' => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
		)
	);
}
add_action( 'init', 'agency_taxonomy_tags' );

function agency_taxonomy_category() {
	register_taxonomy(
		CATEGORY_AGENCY,
		'post',
		array(
			'label' => __( 'Agency Category' ),
            'rewrite' => array('slug' => 'category'),
			'hierarchical' => true,
            'show_in_rest' => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
		)
	);
}
add_action( 'init', 'agency_taxonomy_category' );



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
            CATEGORY_SEARCH => __('Chuyên mục dưới khung search', 'text_domain'),
            TAGS => __('Tags', 'text_domain'),
            TOP_ADDRESS_HOME => __('Điểm đến hàng đầu 6 bài viết ở trang chủ', 'text_domain')
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

function ui_tags()
{
    $menu_name = TAGS;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url =  $menu_item->url;
            ?>
                <li class="cat-item cat-item-26"><a href="<?php echo $url?>"><?php echo $title?></a></li>
            <?php
        }
    }
}
add_shortcode('ui_tags', 'ui_tags');


// ====== Filter ======= \\
function ui_filter_area()
{
    $menu_name = AREA_MENU;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            ?>
                <option value="<?php echo $id?>"><?php echo  $title?></option>
            <?php
        }
    }
}
add_shortcode('ui_filter_area', 'ui_filter_area');


function ui_filter_category()
{
    $menu_name = CATEGORY_MENU;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            ?>
                <option value="<?php echo $id?>"><?php echo  $title?></option>
            <?php
        }
    }
}
add_shortcode('ui_filter_category', 'ui_filter_category');


// ====== Home ======= \\
function ui_top_category_0()
{
    $menu_name = TOP_ADDRESS_HOME;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $index = 0;
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            $url =  $menu_item->url;
            $term = get_term_by('id', $id, AREA_AGENCY);
            $image = get_field('thumbnail_category',  $term);
            $address = get_field('address_category',  $term);
            $description = $term->description;
            if($index == 0)
            {
                ?>
                                <div class="col-12">
                                    <div class="item">
                                        <div class="img">
                                            <img src="<?php echo $image?>" alt="<?php echo $title?>" class="img-fluid w-100" />
                                        </div>
                                        <div class="text mt-4">
                                            <div class="pl-3 top">
                                                <strong class="h4"><?php echo $title?></strong>
                                                <span class="d-block">Có <?php echo $address?> địa điểm</span>
                                            </div>
                                            <div class="pl-3">
                                                <span class="d-block mt-2 mb-2"><?php echo $description?></span>
                                                <a href="<?php echo $url?>">Khám phá ngay <i class="far fa-arrow-alt-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <?php

                break;
            }
            $index ++;
        }
    }
}
add_shortcode('ui_top_category_0', 'ui_top_category_0');

function ui_top_category_1()
{
    $menu_name = TOP_ADDRESS_HOME;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        $index = 0;
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            $url =  $menu_item->url;
            $term = get_term_by('id', $id, AREA_AGENCY);
            $image = get_field('thumbnail_category',  $term);
            $address = get_field('address_category',  $term);
            $description = $term->description;
            if($index == 1)
            {
                ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="item">
                                        <div class="img">
                                            <img src="<?php echo $image?>" alt="<?php echo $title?>" class="img-fluid w-100" />
                                        </div>
                                        <div class="text mt-4">
                                            <div class="pl-3 top">
                                                <strong class="h4"><?php echo $title?></strong>
                                                <span class="d-block">Có <?php echo $address?> địa điểm</span>
                                            </div>
                                            <div class="pl-3 mt-3">
                                                <a href="<?php echo $url?>">Khám phá ngay <i class="far fa-arrow-alt-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                <?php

                break;
            }
            $index ++;
        }
    }
}
add_shortcode('ui_top_category_1', 'ui_top_category_1');


function ui_top_category_2()
{
    $menu_name = TOP_ADDRESS_HOME;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        $index = 0;
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            $url =  $menu_item->url;
            $term = get_term_by('id', $id, AREA_AGENCY);
            $image = get_field('thumbnail_category',  $term);
            $address = get_field('address_category',  $term);
            $description = $term->description;
            if($index == 2)
            {
                ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="item">
                                        <div class="img">
                                            <img src="<?php echo $image?>" alt="<?php echo $title?>" class="img-fluid w-100" />
                                        </div>
                                        <div class="text mt-4">
                                            <div class="pl-3 top">
                                                <strong class="h4"><?php echo $title?></strong>
                                                <span class="d-block">Có <?php echo $address?> địa điểm</span>
                                            </div>
                                            <div class="pl-3 mt-3">
                                                <a href="<?php echo $url?>">Khám phá ngay <i class="far fa-arrow-alt-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                <?php

                break;
            }
            $index ++;
        }
    }
}
add_shortcode('ui_top_category_2', 'ui_top_category_2');


function ui_top_category_3()
{
    $menu_name = TOP_ADDRESS_HOME;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        $index = 0;
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            $url =  $menu_item->url;
            $term = get_term_by('id', $id, AREA_AGENCY);
            $image = get_field('thumbnail_category',  $term);
            $address = get_field('address_category',  $term);
            $description = $term->description;
            if($index == 3)
            {
                ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="item">
                                        <div class="img">
                                            <img src="<?php echo $image?>" alt="<?php echo $title?>" class="img-fluid w-100" />
                                        </div>
                                        <div class="text mt-4">
                                            <div class="pl-3 top">
                                                <strong class="h4"><?php echo $title?></strong>
                                                <span class="d-block">Có <?php echo $address?> địa điểm</span>
                                            </div>
                                            <div class="pl-3 mt-3">
                                                <a href="<?php echo $url?>">Khám phá ngay <i class="far fa-arrow-alt-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <?php

                break;
            }
            $index ++;
        }
    }
}
add_shortcode('ui_top_category_3', 'ui_top_category_3');


function ui_top_category_4()
{
    $menu_name = TOP_ADDRESS_HOME;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        $index = 0;
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            $url =  $menu_item->url;
            $term = get_term_by('id', $id, AREA_AGENCY);
            $image = get_field('thumbnail_category',  $term);
            $address = get_field('address_category',  $term);
            $description = $term->description;
            if($index == 4)
            {
                ?>


                                <div class="col-lg-6 col-md-6">
                                    <div class="item">
                                        <div class="img">
                                            <img src="<?php echo $image?>" alt="<?php echo $title?>" class="img-fluid w-100" />
                                        </div>
                                        <div class="text mt-4">
                                            <div class="pl-3 top">
                                            <strong class="h4"><?php echo $title?></strong>
                                                <span class="d-block">Có <?php echo $address?> địa điểm</span>
                                            </div>
                                            <div class="pl-3 mt-3">
                                                <a href="<?php echo $url?>">Khám phá ngay <i class="far fa-arrow-alt-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <?php

                break;
            }
            $index ++;
        }
    }
}
add_shortcode('ui_top_category_4', 'ui_top_category_4');


function ui_top_category_5()
{
    $menu_name = TOP_ADDRESS_HOME;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        $index = 0;
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            $url =  $menu_item->url;
            $term = get_term_by('id', $id, AREA_AGENCY);
            $image = get_field('thumbnail_category',  $term);
            $address = get_field('address_category',  $term);
            $description = $term->description;
            if($index == 5)
            {
                ?>
                                <div class="col-12">
                                    <div class="item">
                                        <div class="img">
                                        <img src="<?php echo $image?>" alt="<?php echo $title?>" class="img-fluid w-100" />
                                        </div>
                                        <div class="text mt-4">
                                            <div class="pl-3 top">
                                                <strong class="h4"><?php echo $title?></strong>
                                                <span class="d-block">Có <?php echo $address?> địa điểm</span>
                                            </div>
                                            <div class="pl-3">
                                                <span class="d-block mt-2 mb-2"><?php echo $description?></span>
                                                <a href="<?php echo $url?>">Khám phá ngay <i class="far fa-arrow-alt-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <?php

                break;
            }
            $index ++;
        }
    }
}
add_shortcode('ui_top_category_5', 'ui_top_category_5');
// ====== Taxonomy ======= \\
function ui_taxonomy($attr)
{

    

    

    $taxonomies = get_terms( array(
        'taxonomy' => CATEGORY_AGENCY,
        'hide_empty' => false
    ) );

    // var_dump(count($taxonomies));exit;

    $list = array();
    $catName = array();
    
    $i = 0;
    foreach( $taxonomies as $category )
    {
        $list[$i] = array();
        $catName[] = $category->slug;
        $i ++;
    }
    // var_dump($catName);exit;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'tax_query' => array(             
             array(
                'taxonomy' => $attr["taxonomy"],
                'field' => 'slug',
                'terms' => $attr["slug"],
            ),
         )
    );
    $posts =  get_posts( $args );
    foreach ($posts as $post) { 
        $terms = get_the_terms( $post->ID, CATEGORY_AGENCY ); 
        foreach ( $terms as $term ) { // count
            for ($i=0; $i < count($catName) ; $i++) { 
                if($catName[$i] === $term->slug)
                {
                    array_push($list[$i], $post->ID); 
                }
            }
        }
    }
    // var_dump($list);
}
add_shortcode('ui_taxonomy', 'ui_taxonomy');

// ====== Footer ======= \\
function ui_category_footer()
{
    $menu_name = CATEGORY_MENU;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            $url =  $menu_item->url;
            $category = get_category($id);
            $count = $category->category_count;     

            ?>
                <li class="cat-item cat-item-13">
                    <a href="<?php echo $url?>" >
                        <?php echo $title; ?> <span><?php echo $count?></span>
                    </a>
                </li>
            <?php
        }
    }
}
add_shortcode('ui_category_footer', 'ui_category_footer');
?>