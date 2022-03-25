<input type="hidden" id="catName" value="<?php echo $category[0]->name?>">
        <div class="breadcrumbs mt-3">
            <div class="container">
                <div class="bg-white p-2">
                    <span>
                        <span><a href="https://diadiemdanang.vn/">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page"><?php echo $category[0]->name?></span></span>
                    </span>
                    <h1 class="h1 mt-2"><?php echo $category[0]->name?></h1>
                </div>
            </div>
        </div>
        <div class="pt-2 pb-5" style="height: auto !important;">
            <div class="container" style="height: auto !important;">
                <div class="row" style="height: auto !important;">
                    <div class="col-md-8">
                        <div class="blog-wrap"id="h-custom-blog-wrap"> 



                <?php
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
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
                                            <span class="entry-category float-right"> <i class="far fa-folder"></i> <a href="<?php echo get_home_url(); ?>/<?php echo $category[0]->slug?>" rel="tag"><?php echo $category[0]->name?></a> </span>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    } else {
                    }
                    wp_reset_postdata();
                ?>













                            
                        </div>
                        <div class="misha_loadmore btn-danger btn btn-block">Xem thêm</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4" style="height: auto !important; min-height: 0px !important;">
                        <div class="sidebar-wrap">
                            <h3>Bài viết nổi bật</h3>
                            <div class="list mt-2 bg-white">
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/fils-cafe/" title="Fil’s Cafe – Quán cafe có không gian tổ chức tiệc họp mặt lý tưởng" class="transition">
                                            <img
                                                width="150"
                                                height="100"
                                                src="./Cẩm Nang - Địa Điểm Đà Nẵng_files/fils-cafe-9.jpg"
                                                class="img-fluid wp-post-image"
                                                alt=""
                                                loading="lazy"
                                                srcset="https://diadiemdanang.vn/wp-content/uploads/2021/01/fils-cafe-9.jpg 1280w, https://diadiemdanang.vn/wp-content/uploads/2021/01/fils-cafe-9-768x512.jpg 768w"
                                                sizes="(max-width: 150px) 100vw, 150px"
                                            />
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/fils-cafe/" title="Fil’s Cafe – Quán cafe có không gian tổ chức tiệc họp mặt lý tưởng" class="d-block ml-2 text-danger transition">
                                            <span>Fil’s Cafe – Quán cafe có không gian tổ chức tiệc họp mặt lý tưởng</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list mt-2 bg-white">
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/tokyo-town/" title="Tokyo Town – Không gian đậm chất Nhật Bản" class="transition">
                                            <img
                                                width="150"
                                                height="100"
                                                src="./Cẩm Nang - Địa Điểm Đà Nẵng_files/tokyo-town-6-2.jpg"
                                                class="img-fluid wp-post-image"
                                                alt=""
                                                loading="lazy"
                                                srcset="https://diadiemdanang.vn/wp-content/uploads/2021/01/tokyo-town-6-2.jpg 1280w, https://diadiemdanang.vn/wp-content/uploads/2021/01/tokyo-town-6-2-768x512.jpg 768w"
                                                sizes="(max-width: 150px) 100vw, 150px"
                                            />
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/tokyo-town/" title="Tokyo Town – Không gian đậm chất Nhật Bản" class="d-block ml-2 text-danger transition">
                                            <span>Tokyo Town – Không gian đậm chất Nhật Bản</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list mt-2 bg-white">
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/lung-coffee/" title="Lủng Coffee – Bạn đã thử trà trái cây đặc biệt siêu ngon chưa?" class="transition">
                                            <img
                                                width="150"
                                                height="100"
                                                src="./Cẩm Nang - Địa Điểm Đà Nẵng_files/lung-coffee-5-1.jpg"
                                                class="img-fluid wp-post-image"
                                                alt="Lủng Coffee"
                                                loading="lazy"
                                                srcset="https://diadiemdanang.vn/wp-content/uploads/2019/12/lung-coffee-5-1.jpg 1280w, https://diadiemdanang.vn/wp-content/uploads/2019/12/lung-coffee-5-1-768x512.jpg 768w"
                                                sizes="(max-width: 150px) 100vw, 150px"
                                            />
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/lung-coffee/" title="Lủng Coffee – Bạn đã thử trà trái cây đặc biệt siêu ngon chưa?" class="d-block ml-2 text-danger transition">
                                            <span>Lủng Coffee – Bạn đã thử trà trái cây đặc biệt siêu ngon chưa?</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list mt-2 bg-white">
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/quan-cua-nhung-ngay-da-cu/" title="Quán của những ngày đã cũ – Nơi chữa lành tâm hồn bạn" class="transition">
                                            <img
                                                width="150"
                                                height="100"
                                                src="./Cẩm Nang - Địa Điểm Đà Nẵng_files/quan-cua-nhung-ngay-da-cu-7-1.jpg"
                                                class="img-fluid wp-post-image"
                                                alt=""
                                                loading="lazy"
                                                srcset="
                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/quan-cua-nhung-ngay-da-cu-7-1.jpg         1280w,
                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/quan-cua-nhung-ngay-da-cu-7-1-768x512.jpg  768w
                                                "
                                                sizes="(max-width: 150px) 100vw, 150px"
                                            />
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-cafe/quan-cua-nhung-ngay-da-cu/" title="Quán của những ngày đã cũ – Nơi chữa lành tâm hồn bạn" class="d-block ml-2 text-danger transition">
                                            <span>Quán của những ngày đã cũ – Nơi chữa lành tâm hồn bạn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list mt-2 bg-white">
                                <div class="row no-gutters">
                                    <div class="col-4">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-bar/four-t-saloon/" title="FOUR T SALOON – Quán Pub cực chill tại Đà Nẵng" class="transition">
                                            <img
                                                width="150"
                                                height="100"
                                                src="./Cẩm Nang - Địa Điểm Đà Nẵng_files/four-t-saloon-7.jpg"
                                                class="img-fluid wp-post-image"
                                                alt=""
                                                loading="lazy"
                                                srcset="
                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/four-t-saloon-7.jpg           1999w,
                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/four-t-saloon-7-768x512.jpg    768w,
                                                    https://diadiemdanang.vn/wp-content/uploads/2020/12/four-t-saloon-7-1536x1024.jpg 1536w
                                                "
                                                sizes="(max-width: 150px) 100vw, 150px"
                                            />
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <a href="https://diadiemdanang.vn/goc-an-uong/quan-bar/four-t-saloon/" title="FOUR T SALOON – Quán Pub cực chill tại Đà Nẵng" class="d-block ml-2 text-danger transition">
                                            <span>FOUR T SALOON – Quán Pub cực chill tại Đà Nẵng</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script async="" src="./Cẩm Nang - Địa Điểm Đà Nẵng_files/f(2).txt"></script>
                        <ins
                            class="adsbygoogle"
                            style="display: block; height: 0px;"
                            data-ad-client="ca-pub-9830062738315083"
                            data-ad-slot="5589172750"
                            data-ad-format="auto"
                            data-full-width-responsive="true"
                            data-adsbygoogle-status="done"
                            data-ad-status="unfilled"
                        >
                            <ins
                                id="aswift_1_expand"
                                tabindex="0"
                                title="Advertisement"
                                aria-label="Advertisement"
                                style="border: none; height: 0px; width: 350px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-table;"
                            >
                                <ins
                                    id="aswift_1_anchor"
                                    style="border: none; height: 0px; width: 350px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: block; overflow: hidden; opacity: 0;"
                                >
                                    <iframe
                                        id="aswift_1"
                                        name="aswift_1"
                                        style="left: 0px; position: absolute; top: 0px; border: 0px; width: 350px; height: 0px;"
                                        sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                                        width="350"
                                        height="0"
                                        frameborder="0"
                                        marginwidth="0"
                                        marginheight="0"
                                        vspace="0"
                                        hspace="0"
                                        allowtransparency="true"
                                        scrolling="no"
                                        src="./Cẩm Nang - Địa Điểm Đà Nẵng_files/ads(1).html"
                                        data-google-container-id="a!2"
                                        data-google-query-id="CKPxuoWu4PYCFUcItwAdiqsJBQ"
                                        data-load-complete="true"
                                    ></iframe>
                                </ins>
                            </ins>
                        </ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
        </div>
       