<?php
    get_header();
    $queried_object = get_queried_object();
    // $term_obj_list = get_the_terms( 54, 'category_agency' );
    // var_dump($term_obj_list);
?>
<?php
    
    

?>
<?php
        do_shortcode('[ui_taxonomy taxonomy="'.$queried_object->taxonomy.'" slug="'.$queried_object->slug.'"]');
?>

        <div class="breadcrumbs mt-2 mb-2">
            <div class="container">
                <span>
                    <span><a href="<?php echo get_home_url(); ?>">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page"><?php echo $queried_object->name?></span></span>
                </span>
                <h1 class="h1"><?php echo $queried_object->name?></h1>
            </div>
        </div>
        
        <div class="container">
            <div class="archive-wrap page-wrap">
                <div class="bg-white p-1 mt-2 mb-2">
                    <h2><span>Quán Ăn Chay ở Hải Châu</span></h2>
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="bg-light m-1">
                                <div class="item mt-1 mb-1 post-2020 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-an-chay category-quan-com province-hai-chau">
                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-an-chay/tiem-chay-xua-da-nang/">
                                        <img
                                            width="1280"
                                            height="853"
                                            src="./Tổng hợp các địa điểm tại Quận Hải Châu - Đà Nẵng_files/tiem-chay-xua-da-nang-9.jpg"
                                            class="img-fluid wp-post-image"
                                            alt=""
                                            loading="lazy"
                                            srcset="https://diadiemdanang.vn/wp-content/uploads/2020/11/tiem-chay-xua-da-nang-9.jpg 1280w, https://diadiemdanang.vn/wp-content/uploads/2020/11/tiem-chay-xua-da-nang-9-768x512.jpg 768w"
                                            sizes="(max-width: 1280px) 100vw, 1280px"
                                        />
                                    </a>
                                    <div class="info">
                                        <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-an-chay/tiem-chay-xua-da-nang/">Tiệm Chay Xưa Đà Nẵng</a>
                                        <span><i class="fas fa-map-marker-alt"></i> 135 Hoàng Diệu, Phước Ninh, Hải Châu, Đà Nẵng</span>
                                    </div>
                                    <div class="meta">
                                        <span class="text-danger"><i class="far fa-check-circle"></i> Đã xác thực</span>
                                        <span class="d-inline ml-3 float-right"><i class="far fa-user-circle"></i> Địa Điểm Đà Nẵng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-light m-1">
                                <div class="item mt-1 mb-1 post-2018 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-an-chay category-quan-com province-hai-chau">
                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-an-chay/quan-chay-an-lac-tam/">
                                        <img
                                            width="1280"
                                            height="853"
                                            src="./Tổng hợp các địa điểm tại Quận Hải Châu - Đà Nẵng_files/quan-chay-an-lac-tam-1-1.jpg"
                                            class="img-fluid wp-post-image"
                                            alt=""
                                            loading="lazy"
                                            srcset="https://diadiemdanang.vn/wp-content/uploads/2020/11/quan-chay-an-lac-tam-1-1.jpg 1280w, https://diadiemdanang.vn/wp-content/uploads/2020/11/quan-chay-an-lac-tam-1-1-768x512.jpg 768w"
                                            sizes="(max-width: 1280px) 100vw, 1280px"
                                        />
                                    </a>
                                    <div class="info">
                                        <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-an-chay/quan-chay-an-lac-tam/">Quán Chay An Lạc Tâm</a>
                                        <span><i class="fas fa-map-marker-alt"></i> 41 Đường Lê Quý Đôn, Bình Thuận, Hải Châu,</span>
                                    </div>
                                    <div class="meta">
                                        <span class="text-danger"><i class="far fa-check-circle"></i> Đã xác thực</span>
                                        <span class="d-inline ml-3 float-right"><i class="far fa-user-circle"></i> Địa Điểm Đà Nẵng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <?php
    get_footer();
?>    