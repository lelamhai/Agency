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
                                    <ul>
                                        <?php
                                            do_shortcode('[ui_category_desktop]');
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="menu-category-wrap">
                                    <div class="archive-wrap page-wrap">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-3719 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-quan-cafe province-hai-chau">
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/tokyo-town/">
                                                            <img
                                                                width="1280"
                                                                height="853"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2021/01/tokyo-town-6-2.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt=""
                                                                loading="lazy"
                                                                srcset="https://diadiemdanang.vn/wp-content/uploads/2021/01/tokyo-town-6-2.jpg 1280w, https://diadiemdanang.vn/wp-content/uploads/2021/01/tokyo-town-6-2-768x512.jpg 768w"
                                                                sizes="(max-width: 1280px) 100vw, 1280px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-danger" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/tokyo-town/">Tokyo Town &#8211; Không gian đậm chất Nhật Bản</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-3626 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-quan-cafe tag-cafe-vintage">
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/fils-cafe/">
                                                            <img
                                                                width="1280"
                                                                height="853"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2021/01/fils-cafe-9.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt=""
                                                                loading="lazy"
                                                                srcset="https://diadiemdanang.vn/wp-content/uploads/2021/01/fils-cafe-9.jpg 1280w, https://diadiemdanang.vn/wp-content/uploads/2021/01/fils-cafe-9-768x512.jpg 768w"
                                                                sizes="(max-width: 1280px) 100vw, 1280px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-danger" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/fils-cafe/">
                                                                Fil&#8217;s Cafe &#8211; Quán cafe có không gian tổ chức tiệc họp mặt lý tưởng
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-3225 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-quan-bar category-quan-cafe province-hai-chau">
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-bar/four-t-saloon/">
                                                            <img
                                                                width="1999"
                                                                height="1333"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2020/12/four-t-saloon-7.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt=""
                                                                loading="lazy"
                                                                srcset="
                                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/four-t-saloon-7.jpg           1999w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/four-t-saloon-7-768x512.jpg    768w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/four-t-saloon-7-1536x1024.jpg 1536w
                                                                "
                                                                sizes="(max-width: 1999px) 100vw, 1999px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-danger" href="https://diadiemdanang.vn/goc-an-uong/quan-bar/four-t-saloon/">FOUR T SALOON &#8211; Quán Pub cực chill tại Đà Nẵng</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div
                                                        class="item mt-1 mb-1 post-2717 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-quan-cafe tag-cafe-hen-ho tag-cafe-view-da-lat tag-cafe-vintage province-hai-chau"
                                                    >
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/quan-cua-nhung-ngay-da-cu/">
                                                            <img
                                                                width="1280"
                                                                height="853"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2020/12/quan-cua-nhung-ngay-da-cu-7-1.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt=""
                                                                loading="lazy"
                                                                srcset="
                                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/quan-cua-nhung-ngay-da-cu-7-1.jpg         1280w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/quan-cua-nhung-ngay-da-cu-7-1-768x512.jpg  768w
                                                                "
                                                                sizes="(max-width: 1280px) 100vw, 1280px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-danger" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/quan-cua-nhung-ngay-da-cu/">Quán của những ngày đã cũ &#8211; Nơi chữa lành tâm hồn bạn</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div
                                                        class="item mt-1 mb-1 post-378 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-quan-cafe category-quan-tra-sua tag-cafe-tu-tap-gia-dinh tag-cafe-hen-ho tag-cafe-hoc-bai tag-cafe-san-vuon tag-cafe-view-dep province-cam-le province-hai-chau"
                                                    >
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/lung-coffee/">
                                                            <img
                                                                width="1280"
                                                                height="853"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2019/12/lung-coffee-5-1.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt="Lủng Coffee"
                                                                loading="lazy"
                                                                srcset="https://diadiemdanang.vn/wp-content/uploads/2019/12/lung-coffee-5-1.jpg 1280w, https://diadiemdanang.vn/wp-content/uploads/2019/12/lung-coffee-5-1-768x512.jpg 768w"
                                                                sizes="(max-width: 1280px) 100vw, 1280px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-danger" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/lung-coffee/">Lủng Coffee &#8211; Bạn đã thử trà trái cây đặc biệt siêu ngon chưa?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-8384 post type-post status-publish format-standard hentry category-quan-cafe">
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ngap-tran-sac-xuan-cung-nice-home-coffee/"> </a>
                                                        <div class="info">
                                                            <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ngap-tran-sac-xuan-cung-nice-home-coffee/">Ngập tràn sắc xuân cùng Nice Home Coffee</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <form role="search" method="get" class="search-form" action="https://diadiemdanang.vn/">
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

        