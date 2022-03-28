<?php
    get_header();
    $key = "";
    if($_GET['s'] && !empty($_GET['s']))
    {
        $key = $_GET['s'];
    }
?>
 
    <div class="breadcrumbs mt-3 mb-3">
         <div class="container">
            <div class="bg-white p-2">
               <div id="breadcrumbs" class="breadcrumbs"><span><span><a href="<?php echo get_home_url(); ?>">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Bạn đã tìm <?php echo $key?></span></span></span></div>
               Kết quả tìm kiếm từ khóa : 
               <h1 class="h1"><?php echo  $key?></h1>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="archive-wrap page-wrap">
            <div class="row no-gutters">

            <?php
                $args = array(
                    'post_type' => "post",
                    'post_status' => 'publish',
                    'posts_per_page' => 24,
                    's' => $key
                );

                $the_query = new WP_Query( $args );
                
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                         <div class="col-md-3">
                            <div class="bg-white m-2">
                                <div class="item mt-1 mb-1 post-4959 page type-page status-publish has-post-thumbnail hentry">
                                    <a href="<?php the_permalink()?>">
                                    <img width="720" height="378" src="<?php the_post_thumbnail_url()?>" class="img-fluid wp-post-image" alt="">  </a>
                                    <div class="info">
                                    <a class="post-title  text-dark " href="<?php the_permalink()?>"><?php the_title()?></a>
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
         
    

<?php
    get_footer();
?>