<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo get_bloginfo( 'name' );?></title>
        <?php
            wp_head();
        ?>
    </head>

    <body class="home blog">
        <input type="hidden" value="<?php echo get_home_url(); ?>" id="url-home">
        <header class="header pt-2 pb-2">
            <div class="container">
                <a class="menu-mobile mobile-btn position-left ml-2 d-block d-md-none h-custom-menu-mobile">
                    <i class="fa fa-bars"></i>
                </a>
                <nav class="nav-mobile menu-responsive bg-wrap">
                    <div class="box-shadow text-center pt-2 pb-2">
                        <a href="<?php echo get_home_url(); ?>" title="Địa Điểm Đà Nẵng">
                            <img src="<?php echo get_template_directory_uri()."/assets/images/img_logo.png"?>" alt="Địa Điểm Đà Nẵng" class="img-fluid" width="130" />
                        </a>
                    </div>
                    <div class="menu-chuyen-muc-container">
                        <ul id="accordion-responsive" class="accordion-responsive">
                                <?php
                                    do_shortcode('[catetory_menu]');
                                ?>
                        </ul>
                    </div>
                    <div class="utilities">
                        <ul id="accordion-responsive" class="accordion-responsive">
                                <?php
                                    do_shortcode('[main_menu]');
                                ?>
                        </ul>
                    </div>
                    <div class="text-center pt-3">
                        <a class="btn btn-outline-danger" href="tel:0968254710"><i class="fas fa-mobile-alt"></i> Hotline</a>
                        <a class="btn btn-outline-primary" href=""><i class="fab fa-facebook-messenger"></i> Messenger</a>
                    </div>
                </nav>
                <div class="row h-custom-menu">
                    <div class="col-md-2 col-12">
                        <div class="d-block text-center text-sm-left mt-2 mt-sm-1 mb-1">
                            <a href="<?php echo get_home_url(); ?>" title="Địa Điểm Đà Nẵng">
                                <img src="<?php echo get_template_directory_uri()."/assets/images/img_logo.png"?>" alt="Địa Điểm Đà Nẵng" class="img-fluid" width="100" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-10 h-custom-mobile">
                        <div class="item-menu mt-2">
                            <span class="category">
                                Chuyên mục
                                <i class="fas fa-angle-down"></i>
                            </span>
                            <span class="province">
                                <i class="fas fa-map-marker-alt"></i>
                                Chọn Khu vực
                                <nav class="menu-primary menu-province bg-wrap">
                                    <ul id="menu-khu-vuc" class="">
                                        <?php
                                            do_shortcode('[area_menu]');
                                        ?>
                                    </ul>
                                </nav>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-10 h-custom-mobile">
                        <nav class="menu-main">
                            <ul id="menu-menu" class="">
                                <?php
                                    do_shortcode('[main_menu]');
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="relative">
                    <div class="menu-primary menu-category bg-wrap">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <div class="bg-light">
                                    <ul id="h-custom-ul_menu">
                                        <?php
                                            do_shortcode('[ui_category_desktop]');
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="menu-category-wrap">
                                    <div class="archive-wrap page-wrap">
                                        <div class="row no-gutters" id="h-custom-header-category">
                                            <?php
                                                do_shortcode('[load_data_post_header]');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="search-bg pt-sm-5 pb-sm-5 pt-4 pb-4 text-center text-sm-left">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8">
                        <div class="search-wrap">
                            <strong>Tìm kiếm địa điểm gần bạn nhất</strong>
                            <span>Nhanh chóng - Chính xác - Đánh giá khách quan nhất</span>
                            <div class="mt-2 mb-2">
                                <form role="search" method="get" class="search-form" action="<?php echo get_home_url(); ?>/search">
                                    <div class="align-items-center">
                                        <div class="input-group">
                                            <input type="search" class="form-control search-ajax" placeholder="Địa điểm ăn uống, khu vui chơi, món ngon..." value="" name="s" />
                                            <div class="input-group-prepend">
                                                <button class="buttom-search" type="submit"><i class="fa fa-search"></i> Tìm địa điểm</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="load-data" class="load-data"></div>
                                </form>
                            </div>
                            <div class="owl-slider owl-carousel owl-theme">
                                <?php
                                    do_shortcode('[ui_category_search]');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        