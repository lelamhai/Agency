<input id="category" type="hidden" value="<?php echo $category[0]->slug ?>">

<?php get_template_part('Includes/section', 'tags') ?>
<div class="breadcrumbs mb-3">
    <div class="container">
        <div class="bg-white p-2">
            <span>
                <span><a href="<?php echo get_home_url(); ?>">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page"><?php echo $category[0]->name?></span></span>
            </span>
            <h1 class="h1 mt-2"><?php echo $category[0]->name?></h1>
        </div>
    </div>
</div>
<div class="container" style="height: auto !important;">
    <?php get_template_part('Includes/section', 'filter') ?>
    <div id="response" class="response">
        <div class="archive-wrap page-wrap">
            <div class="row no-gutters" id="h-custom-loadmore">
            <?php
                 if ( $the_query->have_posts() ) {
                     while ( $the_query->have_posts() ) {
                         $the_query->the_post();
                        ?>
                            <div class="col-md-3 h-custom-news-col-md-3">
                                <div class="bg-white m-2">
                                    <div class="item mt-1 mb-1 post-7348 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url('Medium') ?>" class="img-fluid wp-post-image" />
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
                                                <span class="d-inline ml-3 float-right"><i class="far fa-user-circle"></i> <?php the_sub_field('address_represent_post'); ?></span>
                                            <?php endwhile; ?>

                                        <?php endif; ?>
                                        </div>
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
        </div>
        <div class="misha_loadmore btn-danger btn btn-block">Còn nhiều địa điểm Hot nữa - Click nào</div>
    </div>
</div>