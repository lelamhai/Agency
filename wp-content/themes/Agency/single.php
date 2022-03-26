<?php
get_header();
// $listCategory = wp_get_post_categories(get_the_ID());
// var_dump($listCategory);exit;
// var_dump(get_ancestors( 13, 'category' ));exit;

// $category = get_the_category();
// $firstCategory = $category[0]->cat_name;
// var_dump($firstCategory);exit;



?>

<?php

    if ( have_posts() ) {
        $category = get_the_category();
        
		while ( have_posts() ) {
			the_post();
            $termsCate  = get_the_terms( get_the_ID(), "category_agency" );
            $termsArea  = get_the_terms( get_the_ID(), "area_agency" );
            $termsTags  = get_the_terms( get_the_ID(), "tags_agency" );

            ?>
        <div style="height: auto !important;">
            <div class="breadcrumbs mt-3 mb-2" style="height: auto !important;">
                <div class="container" style="height: auto !important;">
                    <div class="bg-white p-2">
                        <span>
                            <span>
                                <a href="<?php echo get_home_url(); ?>">Trang chủ</a> »
                                <span>
                                    <span><a href="<?php echo get_home_url()."/".$termsCate[0]->slug?>"><?php echo $termsCate[0]->name?></a> » <span class="breadcrumb_last" aria-current="page"><?php the_title()?></span></span>
                                </span>
                            </span>
                        </span>
                        <h1 class="h1" itemprop="name"><?php the_title()?></h1>
                    </div>
                    <div class="text-center mt-2"></div>
                </div>
            </div>


            <div class="container-fluid" style="height: auto !important;">
                <main id="main" class="single-wrap" role="main" style="height: auto !important;">
                    <div class="row" style="height: auto !important;">
                        <div class="col-md-3">
                            <div class="table-of-contents box-shadow p-3 bg-white">
                                <h2 class="h2 m-0">Nội dung chính</h2>
                                <span class="d-block mt-1 mb-3">Mục lục nội dung tóm tắt</span>
                                <ul class="list-unstyled nav flex-column">
                                    <li>
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ngap-tran-sac-xuan-cung-nice-home-coffee/#loi-kien-truc-doc-dao-hai-hoa" class=""><span>1</span> <b>Lối kiến trúc độc đáo, hài hòa</b></a>
                                    </li>
                                    <li>
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ngap-tran-sac-xuan-cung-nice-home-coffee/#khong-khi-xuan-khap-moi-ngoc-ngach-nice-home-coffee">
                                            <span>2</span> <b>Không khí xuân khắp mọi ngóc ngách Nice Home Coffee</b>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-2">
                                <div class="item bg-light mb-1">
                                    <div class="row">

                                        <?php if( have_rows('info_post', $post->ID) ): ?>

                                            <?php while( have_rows('info_post', $post->ID) ): the_row(); ?>

                                                <?php 
                                                   ?>
                                                     <div class="col-12 col-md-6">
                                                        <span class="d-block"> <i class="fas fa-map-marker-alt"></i> <?php echo get_sub_field('address_post')?> </span>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <span class="d-block">
                                                        <i class="fas fa-bell"></i> <strong>Khoảng giá: </strong><?php echo get_sub_field('price_post')?>								</span>
                                                    </div>
                                                   <?php
                                                ?> 
                                            <?php endwhile; ?>

                                        <?php endif; ?>

                                            
                                                    <div class="col-12 col-md-6">
                                                        <span class="d-block"> <i class="fas fa-award"></i> <strong>Danh mục:</strong> 
                                                            <?php 
                                                                foreach ( $termsCate as $term ) {
                                                                    ?>
                                                                         <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a> 
                                                                    <?php
                                                                }
                                                            ?> 
                                                        </span>
                                                    </div>
                                                

                                       
                                                    <div class="col-12 col-md-6">
                                                        <span class="d-block"> <i class="fas fa-map-marker-alt"></i> <strong>Khu vực:</strong>
                                                            <?php 
                                                                foreach ( $termsArea as $term ) {
                                                                        ?>
                                                                            <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a> 
                                                                        <?php
                                                                    }
                                                            ?>           
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-md-12">
                                                        <span class="d-block"> <i class="fas fa-tags"></i> <strong>Thể loại:</strong> 
                                                            <?php 
                                                                foreach ( $termsTags as $term ) {
                                                                    ?>
                                                                        <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a> 
                                                                    <?php
                                                                }
                                                            ?>     
                                                        </span>
                                                    </div>


                                    </div>
                                </div>
                                <div class="entry-content">
                                    <?php
                                        the_content();
                                    ?>
                                </div>
                            </div>
                            <div class="alert-info alert rounded-0 author-box mt-2 mb-2">
                                <div class="row">


                                <?php if( have_rows('represent_post', $post->ID) ): ?>

                                    <?php while( have_rows('represent_post', $post->ID) ): the_row(); ?>

                                            <div class="col-md-2 col-4">
                                                <div class="author-img">
                                                    <img alt="" src="<?php echo get_sub_field('avatar_post')?>"class="avatar avatar-100 photo img-fluid" />
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-8">
                                                <strong class="author-name"><?php echo get_sub_field('username_post')?></strong>
                                                <span class="author-description d-block mt-1">Thành viên <?php echo get_sub_field('address_represent_post') ?></span>
                                            </div>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                                </div>
                            </div>
                            
                            <div class="related-post mt-4">
                                <div class="page-wrap">
                                    <h3>Địa điểm khác</h3>
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <div class="bg-white m-1">
                                                <div class="item post-8357 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe">
                                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ca-phe-hien-quan-cafe-moi-toanh-o-ngoai-o-da-nang-xinh-dep-quen-loi-ve/">
                                                        <img
                                                            width="850"
                                                            height="450"
                                                            src="./Ngập tràn sắc xuân cùng Nice Home Coffee - Địa Điểm Đà Nẵng_files/ca-phe-hien-quan-cafe-moi-toanh-o-ngoai-o-da-nang-xinh-dep-quen-loi-ve-3.png"
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
                                                <div class="item post-8340 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe">
                                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/chic-chillax-me-man-dia-diem-check-in-moi-cuc-chill-tai-hoi-an/">
                                                        <img
                                                            width="2048"
                                                            height="1364"
                                                            src="./Ngập tràn sắc xuân cùng Nice Home Coffee - Địa Điểm Đà Nẵng_files/chic-chillax-me-man-dia-diem-check-in-moi-cuc-chill-tai-hoi-an-3.jpg"
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
                                                <div class="item post-8317 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe province-hai-chau">
                                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam/">
                                                        <img
                                                            width="850"
                                                            height="450"
                                                            src="./Ngập tràn sắc xuân cùng Nice Home Coffee - Địa Điểm Đà Nẵng_files/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam-5-3.jpg"
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
                                                <div class="item post-8300 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe province-hai-chau">
                                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung/">
                                                        <img
                                                            width="2048"
                                                            height="1366"
                                                            src="./Ngập tràn sắc xuân cùng Nice Home Coffee - Địa Điểm Đà Nẵng_files/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1.jpg"
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
                                                <div class="item post-8184 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe">
                                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/tong-hop-nhung-quan-cafe-trang-tri-noel-long-lay-ma-ban-phai-check-in-lien-tay/">
                                                        <img
                                                            width="850"
                                                            height="450"
                                                            src="./Ngập tràn sắc xuân cùng Nice Home Coffee - Địa Điểm Đà Nẵng_files/tong-hop-nhung-quan-cafe-trang-tri-noel-long-lay-ma-ban-phai-check-in-lien-tay-9-5.jpg"
                                                            class="img-fluid wp-post-image"
                                                            alt=""
                                                            loading="lazy"
                                                            srcset="
                                                                https://diadiemdanang.vn/wp-content/uploads/2021/12/tong-hop-nhung-quan-cafe-trang-tri-noel-long-lay-ma-ban-phai-check-in-lien-tay-9-5.jpg         850w,
                                                                https://diadiemdanang.vn/wp-content/uploads/2021/12/tong-hop-nhung-quan-cafe-trang-tri-noel-long-lay-ma-ban-phai-check-in-lien-tay-9-5-768x407.jpg 768w
                                                            "
                                                            sizes="(max-width: 850px) 100vw, 850px"
                                                        />
                                                    </a>
                                                    <div class="info">
                                                        <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/tong-hop-nhung-quan-cafe-trang-tri-noel-long-lay-ma-ban-phai-check-in-lien-tay/">
                                                            TỔNG HỢP NHỮNG QUÁN CAFE TRANG TRÍ NOEL LỘNG LẪY MÀ BẠN PHẢI CHECK IN...
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="bg-white m-1">
                                                <div class="item post-8120 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe">
                                                    <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/top-7-quan-ca-phe-da-nang-dang-hot-ban-nhat-dinh-phai-ghe-tham/">
                                                        <img
                                                            width="850"
                                                            height="450"
                                                            src="./Ngập tràn sắc xuân cùng Nice Home Coffee - Địa Điểm Đà Nẵng_files/top-7-quan-ca-phe-da-nang-dang-hot-ban-nhat-dinh-phai-ghe-tham-3.jpg"
                                                            class="img-fluid wp-post-image"
                                                            alt=""
                                                            loading="lazy"
                                                            srcset="
                                                                https://diadiemdanang.vn/wp-content/uploads/2021/12/top-7-quan-ca-phe-da-nang-dang-hot-ban-nhat-dinh-phai-ghe-tham-3.jpg         850w,
                                                                https://diadiemdanang.vn/wp-content/uploads/2021/12/top-7-quan-ca-phe-da-nang-dang-hot-ban-nhat-dinh-phai-ghe-tham-3-768x407.jpg 768w
                                                            "
                                                            sizes="(max-width: 850px) 100vw, 850px"
                                                        />
                                                    </a>
                                                    <div class="info">
                                                        <a class="post-title text-dark" href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/top-7-quan-ca-phe-da-nang-dang-hot-ban-nhat-dinh-phai-ghe-tham/">
                                                            TOP 7 quán cà phê Đà Nẵng đang hot bạn nhất định phải ghé thăm
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="height: auto !important; min-height: 0px !important;">

                            <div class="sidebar-wrap">
                                <div class="">
                                    <h3>Địa điểm khác ở Quận Hải Châu</h3>
                                    <div class="list mt-2 bg-white">
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                            <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam/" title="Gé Cafe – Chốn lý tưởng để thư giãn cho những ngày cuối năm" class="transition">
                                            <img width="150" height="79" src="https://diadiemdanang.vn/wp-content/uploads/2021/12/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam-5-3.jpg" class="img-fluid wp-post-image" alt="" loading="lazy" srcset="https://diadiemdanang.vn/wp-content/uploads/2021/12/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam-5-3.jpg 850w, https://diadiemdanang.vn/wp-content/uploads/2021/12/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam-5-3-768x407.jpg 768w" sizes="(max-width: 150px) 100vw, 150px">				                              			 </a>
                                            </div>
                                            <div class="col-8">
                                            <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ge-cafe-chon-ly-tuong-de-thu-gian-cho-nhung-ngay-cuoi-nam/" title="Gé Cafe – Chốn lý tưởng để thư giãn cho những ngày cuối năm" class="d-block ml-2 text-danger transition">
                                            <span>Gé Cafe – Chốn lý tưởng để thư giãn cho những ngày cuối năm</span>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list mt-2 bg-white">
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                            <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung/" title="CAFEHOLIC – Quán cafe có không gian siêu xinh, ngập tràn sự ấm cúng" class="transition">
                                            <img width="150" height="100" src="https://diadiemdanang.vn/wp-content/uploads/2021/12/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1.jpg" class="img-fluid wp-post-image" alt="" loading="lazy" srcset="https://diadiemdanang.vn/wp-content/uploads/2021/12/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1.jpg 2048w, https://diadiemdanang.vn/wp-content/uploads/2021/12/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1-768x512.jpg 768w, https://diadiemdanang.vn/wp-content/uploads/2021/12/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung-3-1-1536x1025.jpg 1536w" sizes="(max-width: 150px) 100vw, 150px">				                              			 </a>
                                            </div>
                                            <div class="col-8">
                                            <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/cafeholic-quan-cafe-co-khong-gian-sieu-xinh-ngap-tran-su-am-cung/" title="CAFEHOLIC – Quán cafe có không gian siêu xinh, ngập tràn sự ấm cúng" class="d-block ml-2 text-danger transition">
                                            <span>CAFEHOLIC – Quán cafe có không gian siêu xinh, ngập tràn sự ấm cúng</span>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list mt-2 bg-white">
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                            <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/l2b-coffee-cake/" title="L2B Coffee – Cake – Quán cafe trang trí Noel sớm nhất tại Đà Nẵng đẹp ‘rụng tim’" class="transition">
                                            <img width="150" height="100" src="https://diadiemdanang.vn/wp-content/uploads/2021/11/ngap-tran-khong-khi-giang-sinh-som-tai-l2b-coffee-cake-tranh-thu-len-do-de-di-chup-anh-lung-linh-thoi-nao-cac-homies-oi-4.jpg" class="img-fluid wp-post-image" alt="" loading="lazy" srcset="https://diadiemdanang.vn/wp-content/uploads/2021/11/ngap-tran-khong-khi-giang-sinh-som-tai-l2b-coffee-cake-tranh-thu-len-do-de-di-chup-anh-lung-linh-thoi-nao-cac-homies-oi-4.jpg 960w, https://diadiemdanang.vn/wp-content/uploads/2021/11/ngap-tran-khong-khi-giang-sinh-som-tai-l2b-coffee-cake-tranh-thu-len-do-de-di-chup-anh-lung-linh-thoi-nao-cac-homies-oi-4-768x512.jpg 768w" sizes="(max-width: 150px) 100vw, 150px">				                              			 </a>
                                            </div>
                                            <div class="col-8">
                                            <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/l2b-coffee-cake/" title="L2B Coffee – Cake – Quán cafe trang trí Noel sớm nhất tại Đà Nẵng đẹp ‘rụng tim’" class="d-block ml-2 text-danger transition">
                                            <span>L2B Coffee – Cake – Quán cafe trang trí Noel sớm nhất tại Đà Nẵng đẹp ‘rụng tim’</span>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list mt-2 bg-white">
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                            <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/mo-coffee/" title="Mơ coffee ”ngôi nhà” ấm cúng giữa thành phố ồn ã" class="transition">
                                            <img width="150" height="79" src="https://diadiemdanang.vn/wp-content/uploads/2021/11/mo-coffee-ngoi-nha-am-cung-giua-thanh-pho-on-a-9.jpg" class="img-fluid wp-post-image" alt="" loading="lazy" srcset="https://diadiemdanang.vn/wp-content/uploads/2021/11/mo-coffee-ngoi-nha-am-cung-giua-thanh-pho-on-a-9.jpg 850w, https://diadiemdanang.vn/wp-content/uploads/2021/11/mo-coffee-ngoi-nha-am-cung-giua-thanh-pho-on-a-9-768x407.jpg 768w" sizes="(max-width: 150px) 100vw, 150px">				                              			 </a>
                                            </div>
                                            <div class="col-8">
                                            <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/mo-coffee/" title="Mơ coffee ”ngôi nhà” ấm cúng giữa thành phố ồn ã" class="d-block ml-2 text-danger transition">
                                            <span>Mơ coffee ”ngôi nhà” ấm cúng giữa thành phố ồn ã</span>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list mt-2 bg-white">
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                            <a href="https://diadiemdanang.vn/dich-vu/salon-toc-trinh-saser/" title="Check in salon tóc Đà Nẵng làm tóc xoăn siêu đẹp – Salon tóc Trịnh Saser" class="transition">
                                            <img width="150" height="71" src="https://diadiemdanang.vn/wp-content/uploads/2021/11/salon-toc-trinh-saser-3.jpeg" class="img-fluid wp-post-image" alt="" loading="lazy" srcset="https://diadiemdanang.vn/wp-content/uploads/2021/11/salon-toc-trinh-saser-3.jpeg 1000w, https://diadiemdanang.vn/wp-content/uploads/2021/11/salon-toc-trinh-saser-3-768x363.jpeg 768w" sizes="(max-width: 150px) 100vw, 150px">				                              			 </a>
                                            </div>
                                            <div class="col-8">
                                            <a href="https://diadiemdanang.vn/dich-vu/salon-toc-trinh-saser/" title="Check in salon tóc Đà Nẵng làm tóc xoăn siêu đẹp – Salon tóc Trịnh Saser" class="d-block ml-2 text-danger transition">
                                            <span>Check in salon tóc Đà Nẵng làm tóc xoăn siêu đẹp – Salon tóc Trịnh Saser</span>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>

                    </div>
                </main>
            </div>
            <div class="d-none">
                <span itemprop="priceRange">Liên hệ</span>
                <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                    <span class="label label-warning">Xếp hạng</span>
                    <span class="average-rating" itemprop="ratingValue">5</span>
                    5 - Dựa trên <span itemprop="reviewCount">5</span> đánh giá
                </span>
                <div itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
                    <div itemprop="streetAddress">Hoà Khương, Hoà Vang, Đà Nẵng</div>
                    <div>
                        <span itemprop="addressLocality">Đà Nẵng</span>,
                        <span itemprop="addressRegion"></span>
                        <span itemprop="postalCode">550000</span>
                    </div>
                </div>
                <span itemprop="telephone"></span>
                <div itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo">
                    <meta itemprop="latitude" content="" />
                    <meta itemprop="longitude" content="" />
                </div>
                <img itemprop="image" class="pic-place" src="https://diadiemdanang.vn/goc-an-uong/quan-cafe/ngap-tran-sac-xuan-cung-nice-home-coffee/" alt="Ngập tràn sắc xuân cùng Nice Home Coffee" />
            </div>
        </div>
            <?php
		}
    }

?>

<?php
get_footer();
?>  