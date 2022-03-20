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
                            <!-- <li id="menu-item-35" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                <a href="https://diadiemdanang.vn/goc-an-uong/quan-an-chay/"><i class="fas fa-bell"></i> Quán Ăn Chay</a>
                            </li>
                            <li id="menu-item-36" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                <a href="https://diadiemdanang.vn/goc-an-uong/quan-an-vat/"><i class="fas fa-bell"></i> Quán Ăn Vặt</a>
                            </li>
                            <li id="menu-item-37" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                <a href="https://diadiemdanang.vn/goc-an-uong/quan-bar/"><i class="fas fa-bell"></i> Quán Bar</a>
                            </li>
                            <li id="menu-item-38" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/"><i class="fas fa-bell"></i> Quán Cafe</a>
                            </li>
                            <li id="menu-item-39" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                <a href="https://diadiemdanang.vn/goc-an-uong/quan-com/"><i class="fas fa-bell"></i> Quán Cơm</a>
                            </li>
                            <li id="menu-item-40" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                <a href="https://diadiemdanang.vn/goc-an-uong/quan-nhau/"><i class="fas fa-bell"></i> Quán Nhậu</a>
                            </li>
                            <li id="menu-item-41" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                <a href="https://diadiemdanang.vn/goc-an-uong/quan-tra-sua/"><i class="fas fa-bell"></i> Quán Trà Sữa</a>
                            </li> -->
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
                        <a class="btn btn-outline-danger" href="tel:0934908070"><i class="fas fa-mobile-alt"></i> Hotline</a>
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
                                        <li>
                                            <span class="item p-2 d-block" id="quan-an-chay" data-id="13"><i class="fab fa-gripfire"></i> Quán Ăn Chay</span>
                                        </li>
                                        <li>
                                            <span class="item p-2 d-block" id="quan-an-vat" data-id="14"><i class="fab fa-gripfire"></i> Quán Ăn Vặt</span>
                                        </li>
                                        <li>
                                            <span class="item p-2 d-block" id="quan-bar" data-id="15"><i class="fab fa-gripfire"></i> Quán Bar</span>
                                        </li>
                                        <li>
                                            <span class="item p-2 d-block" id="quan-buffet-nuong-lau" data-id="46"><i class="fab fa-gripfire"></i> Quán Buffet Nướng - Lẩu</span>
                                        </li>
                                        <li>
                                            <span class="item p-2 d-block" id="quan-cafe" data-id="3"><i class="fab fa-gripfire"></i> Quán Cafe</span>
                                        </li>
                                        <li>
                                            <span class="item p-2 d-block" id="quan-com" data-id="4"><i class="fab fa-gripfire"></i> Quán Cơm</span>
                                        </li>
                                        <li>
                                            <span class="item p-2 d-block" id="quan-nhau" data-id="12"><i class="fab fa-gripfire"></i> Quán Nhậu</span>
                                        </li>
                                        <li>
                                            <span class="item p-2 d-block" id="quan-nuong" data-id="53"><i class="fab fa-gripfire"></i> Quán Nướng</span>
                                        </li>
                                        <li>
                                            <span class="item p-2 d-block" id="quan-tra-sua" data-id="5"><i class="fab fa-gripfire"></i> Quán Trà Sữa</span>
                                        </li>
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
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-8357 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe">
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ca-phe-hien-quan-cafe-moi-toanh-o-ngoai-o-da-nang-xinh-dep-quen-loi-ve/">
                                                            <img
                                                                width="850"
                                                                height="450"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2022/01/ca-phe-hien-quan-cafe-moi-toanh-o-ngoai-o-da-nang-xinh-dep-quen-loi-ve-3.png"
                                                                class="img-fluid wp-post-image"
                                                                alt=""
                                                                loading="lazy"
                                                                srcset="
                                                                    https://diadiemdanang.vn/wp-content/uploads/2022/01/ca-phe-hien-quan-cafe-moi-toanh-o-ngoai-o-da-nang-xinh-dep-quen-loi-ve-3.png         850w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2022/01/ca-phe-hien-quan-cafe-moi-toanh-o-ngoai-o-da-nang-xinh-dep-quen-loi-ve-3-768x407.png 768w
                                                                "
                                                                sizes="(max-width: 850px) 100vw, 850px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ca-phe-hien-quan-cafe-moi-toanh-o-ngoai-o-da-nang-xinh-dep-quen-loi-ve/">
                                                                Cà phê Hiên – Quán cafe mới toanh ở ngoại ô Đà Nẵng, xinh đẹp...
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-8340 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe">
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/chic-chillax-me-man-dia-diem-check-in-moi-cuc-chill-tai-hoi-an/">
                                                            <img
                                                                width="2048"
                                                                height="1364"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2022/01/chic-chillax-me-man-dia-diem-check-in-moi-cuc-chill-tai-hoi-an-3.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt="Nguồn ảnh: Duy Hậu | fanpage Người Hội An"
                                                                loading="lazy"
                                                                srcset="
                                                                    https://diadiemdanang.vn/wp-content/uploads/2022/01/chic-chillax-me-man-dia-diem-check-in-moi-cuc-chill-tai-hoi-an-3.jpg           2048w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2022/01/chic-chillax-me-man-dia-diem-check-in-moi-cuc-chill-tai-hoi-an-3-768x512.jpg    768w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2022/01/chic-chillax-me-man-dia-diem-check-in-moi-cuc-chill-tai-hoi-an-3-1536x1023.jpg 1536w
                                                                "
                                                                sizes="(max-width: 2048px) 100vw, 2048px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/chic-chillax-me-man-dia-diem-check-in-moi-cuc-chill-tai-hoi-an/">
                                                                Chic Chillax – Mê mẩn địa điểm check-in mới cực chill tại Hội An
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-8317 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe province-hai-chau">
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam/">
                                                            <img
                                                                width="850"
                                                                height="450"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2021/12/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam-5-3.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt=""
                                                                loading="lazy"
                                                                srcset="
                                                                    https://diadiemdanang.vn/wp-content/uploads/2021/12/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam-5-3.jpg         850w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2021/12/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam-5-3-768x407.jpg 768w
                                                                "
                                                                sizes="(max-width: 850px) 100vw, 850px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam/">
                                                                Gé Cafe – Chốn lý tưởng để thư giãn cho những ngày cuối năm
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-8300 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe province-hai-chau">
                                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung/">
                                                            <img
                                                                width="2048"
                                                                height="1366"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2021/12/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt=""
                                                                loading="lazy"
                                                                srcset="
                                                                    https://diadiemdanang.vn/wp-content/uploads/2021/12/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1.jpg           2048w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2021/12/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1-768x512.jpg    768w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2021/12/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1-1536x1025.jpg 1536w
                                                                "
                                                                sizes="(max-width: 2048px) 100vw, 2048px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung/">
                                                                CAFEHOLIC – Quán cafe có không gian siêu xinh, ngập tràn sự ấm cúng
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white m-1">
                                                    <div class="item mt-1 mb-1 post-8283 post type-post status-publish format-standard has-post-thumbnail hentry category-cam-nang">
                                                        <a href="https://diadiemdanang.vn/cam-nang/da-nang-diem-den-ly-tuong-cua-xu-huong-workation/">
                                                            <img
                                                                width="2048"
                                                                height="1365"
                                                                src="https://diadiemdanang.vn/wp-content/uploads/2021/12/6.jpg"
                                                                class="img-fluid wp-post-image"
                                                                alt=""
                                                                loading="lazy"
                                                                srcset="
                                                                    https://diadiemdanang.vn/wp-content/uploads/2021/12/6.jpg           2048w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2021/12/6-768x512.jpg    768w,
                                                                    https://diadiemdanang.vn/wp-content/uploads/2021/12/6-1536x1024.jpg 1536w
                                                                "
                                                                sizes="(max-width: 2048px) 100vw, 2048px"
                                                            />
                                                        </a>
                                                        <div class="info">
                                                            <a class="post-title text-dark" href="https://diadiemdanang.vn/cam-nang/da-nang-diem-den-ly-tuong-cua-xu-huong-workation/">Đà Nẵng, điểm đến lý tưởng của xu hướng “Workation”</a>
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
                                <div class="item">
                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/">Quán Cafe</a>
                                </div>
                                <div class="item">
                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-tra-sua/">Quán Trà Sữa</a>
                                </div>
                                <div class="item">
                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-com/">Quán Cơm</a>
                                </div>
                                <div class="item">
                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-nhau/">Quán Nhậu</a>
                                </div>
                                <div class="item">
                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-an-chay/">Quán Chay</a>
                                </div>
                                <div class="item">
                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-an-vat/">Quán Ăn Vặt</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        