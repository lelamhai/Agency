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
define('HANK_BOOK', 'hand_book');

define('FOOTER_CAFE', 'footer_cafe');
define('FOOTER_ADDRESS', 'footer_address');
/*
 * Variables taxonomy
 */
define('AREA_AGENCY', 'area_agency');
define('TAGS_AGENCY', 'tags_agency');
define('CATEGORY_AGENCY', 'category_agency');
/*
 * Variables
 */
global $categoryLast;
$categoryLast = null;


/*
 * css and js
 */
function agency_regsiter_styles()
{
    $version = "1.0.8";
    
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
    wp_enqueue_script('agency-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}
add_action('wp_enqueue_scripts', 'agency_regsiter_styles');

/**
 * REGISTER OPTIONS ACF 
 */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array('page_title'=>'Theme Configs','page_title'=>'Theme Configs','menu_slug'=>'acf-options-theme-options'));
}

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
            TOP_ADDRESS_HOME => __('Điểm đến hàng đầu 6 bài viết ở trang chủ', 'text_domain'),
            FOOTER_CAFE => __('Footer cafe phê hot', 'text_domain'),
            FOOTER_ADDRESS => __('Footer địa điểm hấp dẫn nhất', 'text_domain'),
            HANK_BOOK => __('Cẩm nang bài viết nổi bật', 'text_domain'),
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
    // var_dump($categoryLast);exit;
    $first = true;
    $last = 0;
    $index = 0;
    $menu_name = CATEGORY_MENU;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $last = count($menu_items) - 1;

        foreach ((array) $menu_items as $key => $menu_item) {
            // var_dump($menu_item);exit();
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            if($last == $index)
            {
                global $categoryLast;
                $categoryLast = $menu_item;
            }

            if($first)
            {
                ?>
                    <li class="h-custom-li-category">
                        <span class="item p-2 d-block active" data-id="<?php echo $id?>"><i class="fab fa-gripfire"></i> <?php echo $title?></span>
                    </li>
                <?php
                $first = false;
            } else {
                ?>
                    <li class="h-custom-li-category">
                        <span class="item p-2 d-block" data-id="<?php echo $id?>"><i class="fab fa-gripfire"></i> <?php echo $title?></span>
                    </li>
                <?php
            }

            $index ++;
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

/*
* Ajax header
*/
// ======== First ========= \\
function load_data_post_header()
{
    global $categoryLast;

    $the_query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'tax_query' => array(
            array (
                'taxonomy' => CATEGORY_AGENCY,
                'field' => 'term_id',
                'terms' => $categoryLast->object_id
            )
        ),
    ) );
    
    while ( $the_query->have_posts() ) :
        $the_query->the_post();
        ?>
        <div class="col-md-4 h-custom-header-col-md-4">
            <div class="bg-white m-1">
                <div class="item mt-1 mb-1 post-3719 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-quan-cafe province-hai-chau">
                    <a href="<?php the_permalink()?>">
                    <img
                        src="<?php the_post_thumbnail_url()?>"
                        class="img-fluid wp-post-image"
                        />
                    </a>
                    <div class="info">
                        <a class="post-title text-danger" href="<?php the_permalink()?>/"><?php the_title()?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    
}
add_shortcode('load_data_post_header', 'load_data_post_header');

function random_function() {
    if($_REQUEST["idPost"] && !empty($_REQUEST["idPost"]))
    {
        $the_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'tax_query' => array(
                array (
                    'taxonomy' => CATEGORY_AGENCY,
                    'field' => 'term_id',
                    'terms' => $_REQUEST["idPost"]
                )
            ),
        ) );
        
        while ( $the_query->have_posts() ) :
            $the_query->the_post();
            ?>
            <div class="col-md-4 h-custom-header-col-md-4">
                <div class="bg-white m-1">
                    <div class="item mt-1 mb-1 post-3719 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-quan-cafe province-hai-chau">
                        <a href="<?php the_permalink()?>">
                        <img
                            src="<?php the_post_thumbnail_url()?>"
                            class="img-fluid wp-post-image"
                            />
                        </a>
                        <div class="info">
                            <a class="post-title text-danger" href="<?php the_permalink()?>/"><?php the_title()?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
    }
    die(); 
}
add_action('wp_ajax_random', 'random_function');
add_action('wp_ajax_nopriv_random', 'random_function');


function area_function() {

    if(!empty($_REQUEST["areaID"]) || !empty($_REQUEST["categoryID"]))
    {
        $args = array(
            'post_status'  => 'publish',
            'post_type' => 'post',
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => AREA_AGENCY,
                    'field'    => 'term_id',
                    'terms'    => $_REQUEST["areaID"],
                ),
                array(
                    'taxonomy' => CATEGORY_AGENCY,
                    'field'    => 'term_id',
                    'terms'    => $_REQUEST["categoryID"],
                ),
            ),
        );
    }

    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ) :
        $the_query->the_post();
        ?>
                        <div class="col-md-3 h-custom-news-col-md-3" >
                            <div class="bg-white m-2">
                                <div class="item mt-1 mb-1 post-7348 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url($size) ?>" class="img-fluid wp-post-image" />
                                    </a>
                                    <div class="info">
                                        <a class="post-title text-dark" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                        <span><i class="fas fa-map-marker-alt"></i> </span>
                                    </div>
                                    <div class="meta">

                                    <?php if( have_rows('represent_post', $post->ID) ): ?>

                                        <?php while( have_rows('represent_post', $post->ID) ): the_row(); ?>

                                            <?php 
                                                if(get_sub_field('comfirm_post'))
                                                {
                                                    ?><span class="text-danger" style="color: green !important"><i class="far fa-check-circle"></i> Đã xác thực</span><?php
                                                } else {
                                                    ?><span class="text-danger"><i class="far fa-check-circle"></i> Chưa xác thực</span><?php
                                                }
                                            ?> 
                                            <span class="d-inline ml-3 float-right"><i class="far fa-user-circle"></i><?php the_sub_field('address_represent_post'); ?></span>
                                        <?php endwhile; ?>

                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
        <?php
    endwhile;

    die(); 
}
add_action('wp_ajax_area', 'area_function');
add_action('wp_ajax_nopriv_area', 'area_function');


function category_function() {
    if($_REQUEST["catName"] && !empty($_REQUEST["catName"]))
    {
        $args = array(
            'post_type' => 'post',
            'post_status'  => 'publish',
            'category_name' => $_REQUEST["catName"],                                         
            'posts_per_page' => 24,
            'paged' => $_REQUEST["paged"],
        );  
        $the_query = new WP_Query( $args );
        
        while ( $the_query->have_posts() ) :
            $the_query->the_post();
            ?>
                            <div class="col-md-3 h-custom-news-col-md-3" >
                                <div class="bg-white m-2">
                                    <div class="item mt-1 mb-1 post-7348 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url($size) ?>" class="img-fluid wp-post-image" />
                                        </a>
                                        <div class="info">
                                            <a class="post-title text-dark" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                            <span><i class="fas fa-map-marker-alt"></i> </span>
                                        </div>
                                        <div class="meta">

                                        <?php if( have_rows('represent_post', $post->ID) ): ?>

                                            <?php while( have_rows('represent_post', $post->ID) ): the_row(); ?>

                                                <?php 
                                                    if(get_sub_field('comfirm_post'))
                                                    {
                                                        ?><span class="text-danger" style="color: green !important"><i class="far fa-check-circle"></i> Đã xác thực</span><?php
                                                    } else {
                                                        ?><span class="text-danger"><i class="far fa-check-circle"></i> Chưa xác thực</span><?php
                                                    }
                                                ?> 
                                                <span class="d-inline ml-3 float-right"><i class="far fa-user-circle"></i><?php the_sub_field('address_represent_post'); ?></span>
                                            <?php endwhile; ?>

                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <?php
        endwhile;
    }
    die(); 
}
add_action('wp_ajax_category', 'category_function');
add_action('wp_ajax_nopriv_category', 'category_function');

function handbook_function() {
    if($_REQUEST["catName"] && !empty($_REQUEST["catName"]))
    {
        $args = array(
            'post_type' => 'post',
            'post_status'  => 'publish',
            'category_name' => $_REQUEST["catSlug"],                                         
            'posts_per_page' => 24,
            'paged' => $_REQUEST["paged"],
        );  
        $the_query = new WP_Query( $args );
        
        while ( $the_query->have_posts() ) :
            $the_query->the_post();
            ?>
                                 <div class="item p-1 mb-2 bg-light">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-4 col-12">
                                            <a href="<?php the_permalink(); ?>" class="d-block mr-0 mr-sm-2">
                                                <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid d-block w-100 wp-post-image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-12">
                                            <a class="post-title mb-2 mt-2 mt-sm-0" href="<?php the_permalink(); ?>">
                                                <?php the_title()?>
                                            </a>
                                            <span class="d-block mb-2"> <?php the_excerpt()?></span>
                                           
                                           
                                            <?php if( have_rows('represent_post', $post->ID) ): ?>

                                                <?php while( have_rows('represent_post', $post->ID) ): the_row(); ?>
                                                    <span class="entry-modified-time text-left"> <i class="far fa-user-circle"></i> <?php the_sub_field('address_represent_post'); ?> </span>
                                                <?php endwhile; ?>

                                            <?php endif; ?>
                                            <span class="entry-category float-right"> <i class="far fa-folder"></i> <a href="<?php echo get_home_url(); ?>/<?php echo $category[0]->slug?>" rel="tag"><?php echo $_REQUEST["catName"]?></a> </span>
                                        </div>
                                    </div>
                                </div>            
            <?php
        endwhile;
    }
    die(); 
}
add_action('wp_ajax_handbook', 'handbook_function');
add_action('wp_ajax_nopriv_handbook', 'handbook_function');




// ======== Filter ======== \\
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
            $args =  array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'post_status'   => 'publish',
                'tax_query' => array(
                    array (
                        'taxonomy' => CATEGORY_AGENCY,
                        'field' => 'term_id',
                        'terms' => $id
                    )
                ),
            );
            $query = new WP_Query( $args);
            $count= (int)$query->post_count;

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

// theme_location footer cafe
function ui_footer_cafe()
{
    $menu_name = FOOTER_CAFE;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;

            $url =  $menu_item->url;
            ?>
                <div class="item">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4 col-sm-4 col-md-4">
                            <a href="<?php echo $menu_item-> url?>" class="post-thumbnail mr-2 d-block"> 
                            
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id( $id ), 'thumbnail' ); ?>
                                <img src="<?php echo $url?>" alt="<?php echo $title?>" class="img-fluid w-100 wp-post-image">
                            </a>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8">
                            <a class="post-title text-white" href="<?php echo $menu_item-> url?>" rel="bookmark"> <?php echo $title?> </a>
                        </div>
                    </div>
                </div>
            <?php
        }
    }
}
add_shortcode('ui_footer_cafe', 'ui_footer_cafe');


// theme_location footer address
function ui_footer_address()
{
    $menu_name = FOOTER_ADDRESS;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;

            $url =  $menu_item->url;
            ?>

                            <div class="item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <a href="<?php echo $menu_item-> url ?>" class="post-thumbnail mr-2 d-block">
                                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id( $id ), 'thumbnail' ); ?>
                                            <img  src="<?php echo $url?>" class="img-fluid w-100 wp-post-image"/>
                                        </a>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <a class="post-title text-white" href="<?php echo $menu_item-> url ?>" rel="bookmark"><?php echo $title?> </a>
                                    </div>
                                </div>
                            </div>
               
            <?php
        }
    }
}
add_shortcode('ui_footer_address', 'ui_footer_address');

// ============================================== HankBook ==================================\\
function ui_footer_hankbook()
{
    $menu_name = HANK_BOOK;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $id =  $menu_item->object_id;
            $url =  $menu_item->url;
            ?>
                            <div class="list mt-2 bg-white">
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <a href="<?php echo $menu_item-> url ?>" title="<?php echo $title?>" class="transition">
                                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id( $id ), 'thumbnail' ); ?>
                                            <img src="<?php echo $url?>" class="img-fluid wp-post-image" alt=""/>
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <a href="<?php echo $menu_item-> url ?>" title="<?php echo $title?>" class="d-block ml-2 text-danger transition">
                                            <span><?php echo $title?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
               
            <?php
        }
    }
}
add_shortcode('ui_footer_hankbook', 'ui_footer_hankbook');



// ====== Taxonomy category ======= \\
function ui_taxonomy($attr)
{
    $taxonomies = get_terms( array(
        'taxonomy' => CATEGORY_AGENCY,
        'hide_empty' => false
    ) );

    $list = array();
    $catName = array();
    
    $i = 0;
    foreach( $taxonomies as $category )
    {
        $list[$i] = array();
        $catName[] = $category->slug;
        $i ++;
    }
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
        foreach ( $terms as $term ) {
            for ($i=0; $i < count($catName) ; $i++) { 
                if($catName[$i] === $term->slug)
                {
                    array_push($list[$i], $post->ID); 
                }
            }
        }
    }


    $index = 0;
    foreach( $taxonomies as $category ) {
        ?>
            <div class="archive-wrap page-wrap">
                <div class="bg-white p-1 mt-2 mb-2">
                    <h2><span><?php echo $category->name?></span></h2>
                    <div class="row no-gutters">
                        <?php
                        if($list[$index] != null)
                        {
                            for ($i=0; $i < count($list[$index]) ; $i++) { 

                                $post   = get_post( $list[$index][$i] );
                                ?>
                                    <div class="col-md-3">
                                        <div class="bg-light m-1">
                                            <div class="item mt-1 mb-1 post-2020 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-an-chay category-quan-com province-hai-chau">
                                                <a href="<?php echo get_permalink($post->ID)?>">

                                                     <?php $url = wp_get_attachment_url( get_post_thumbnail_id( $list[$index][$i] ), 'thumbnail' ); ?>
                                                    <img src="<?php echo $url?>" class="img-fluid wp-post-image"loading="lazy" />
                                                </a>
                                                <div class="info">
                                                    <a class="post-title text-dark" href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a>

                                                        <?php if( have_rows('info_post', $post->ID) ): ?>

                                                            <?php while( have_rows('info_post', $post->ID) ): the_row(); ?>
                                                                <span>
                                                                    <i class="fas fa-map-marker-alt"></i><?php the_sub_field('address_post'); ?>
                                                                </span>
                                                            <?php endwhile; ?>

                                                        <?php endif; ?>

                                                </div>
                                                <div class="meta">

                                                    <?php if( have_rows('represent_post', $post->ID) ): ?>

                                                        <?php while( have_rows('represent_post', $post->ID) ): the_row(); ?>

                                                            <?php 
                                                                if(get_sub_field('comfirm_post'))
                                                                {
                                                                    ?><span class="text-danger" style="color: green !important"><i class="far fa-check-circle"></i> Đã xác thực</span><?php
                                                                } else {
                                                                    ?><span class="text-danger"><i class="far fa-check-circle"></i> Chưa xác thực</span><?php
                                                                }
                                                            ?> 
                                                            <span class="d-inline ml-3 float-right"><i class="far fa-user-circle"></i><?php the_sub_field('address_represent_post'); ?></span>
                                                        <?php endwhile; ?>

                                                    <?php endif; ?>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        } else 
                        {
                            ?>
                                <div class="col-md-3">
                                        Chưa có dữ liệu
                                </div>
                            <?php
                        }

                        $index ++;
                        ?>
                    </div>
                </div>
            </div>
        <?php
    }
}
add_shortcode('ui_taxonomy', 'ui_taxonomy');

?>