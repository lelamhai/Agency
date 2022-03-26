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

                                <?php
                                    do_shortcode('[ui_footer_hankbook]');
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       