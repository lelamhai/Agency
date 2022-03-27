<?php
get_header();
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
                <main id="main" class="single-wrap h-custom-single-wrap" role="main" style="height: auto !important;">
                    <div class="row" style="height: auto !important;">
                        <div class="col-md-3">
                            <div class="table-of-contents box-shadow p-3 bg-white">
                                <h2 class="h2 m-0">Nội dung chính</h2>
                                <span class="d-block mt-1 mb-3">Mục lục nội dung tóm tắt</span>
                                <ul class="list-unstyled nav flex-column">

                                <?php if( have_rows('widget_post', $post->ID) ): ?>
                                    <?php $count = 1; ?>
                                    <?php while( have_rows('widget_post', $post->ID) ): the_row(); ?>
                                            <li>
                                                <a href="<?php echo "#agency".$count?>"><span><?php echo $count?></span> <b><?php echo get_sub_field('sidebar_post')?></b></a>
                                            </li>
                                            <?php $count ++; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-2">
                                    <?php
                                        $eat_drink = get_field('eatdrink_post');
                                        if($eat_drink)
                                        {
                                            ?>
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


                                                    
                                                            <div class="col-12 col-md-6">
                                                                <span class="d-block"> <i class="fas fa-award"></i> <strong>Danh mục:</strong> 

                                                                    <?php 
                                                                        $last = count($termsCate) - 1;
                                                                        $first = 0;
                                                                        $index = 0;

                                                                        foreach ( $termsCate as $term ) {
                                                                            if($list != 0 || $index != $last)
                                                                            {
                                                                                ?>
                                                                                    <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a><span class="comma">,</span>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a>
                                                                            <?php
                                                                            }
                                                                            $index ++;
                                                                        }
                                                                    ?> 
                                                                </span>
                                                            </div>
                                                        

                                            
                                                            <div class="col-12 col-md-6">
                                                                <span class="d-block"> <i class="fas fa-map-marker-alt"></i> <strong>Khu vực:</strong>
                                                                    <?php 
                                                                        $last = count($termsArea) - 1;
                                                                        $first = 0;
                                                                        $index = 0;
                                                                        foreach ( $termsArea as $term ) {
                                                                            if($list != 0 || $index != $last)
                                                                            {
                                                                                ?>
                                                                                    <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a><span class="comma">,</span>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                    <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a>
                                                                                <?php
                                                                            }
                                                                            $index ++;
                                                                        }
                                                                    ?>           
                                                                </span>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <span class="d-block"> <i class="fas fa-tags"></i> <strong>Thể loại:</strong> 
                                                                    <?php 
                                                                        $last = count($termsTags) - 1;
                                                                        $first = 0;
                                                                        $index = 0;

                                                                        foreach ( $termsTags as $term ) {
                                                                            if($list != 0 || $index != $last)
                                                                            {
                                                                                ?>
                                                                                    <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a><span class="comma">,</span>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                    <a href="<?php echo get_home_url()."/".$term->slug?>" rel="tag"><?php echo $term->name?></a> 
                                                                                <?php
                                                                            }
                                                                            $index ++;
                                                                        }
                                                                    ?>     
                                                                </span>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                <div class="entry-content">
                                    <?php
                                        the_content();
                                    ?>
                                </div>
                                <?php 
                                    $images = get_field('gallery_post');
                                    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                                    if( $images ): ?>

                                        <div class="gallery-full">
                                            <div class="row no-gutters">
                                                 <?php foreach( $images as $image_id ): ?>
                                                        <div class="col-12 col-md-3">
                                                            <div class="item m-1 m-sm-2">
                                                                <a href="<?php echo $image_id["url"]?>" title="t<?php the_title()?>" data-fancybox="group" data-caption="">
                                                                    <img src="<?php echo $image_id["url"]?>" alt="<?php the_title()?>" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

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
                                                <span class="author-description d-block mt-1"><?php echo get_sub_field('address_represent_post') ?></span>
                                            </div>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                                </div>
                            </div>
                            
                            <div class="related-post mt-4">
                                <div class="page-wrap">
                                    <h3>Địa điểm khác</h3>
                                    <div class="row no-gutters">

                                        <?php
                                            $args1 = array(
                                                'post_type' => 'post',
                                                'post_status'  => 'publish',
                                                'category_name' => $category[0]->slug,                                         
                                                'posts_per_page' => 10,
                                                'post__not_in'      => array(get_the_ID()),
                                                'meta_query' => array(
                                                    array(
                                                    'key' => 'hot-post',
                                                    'value' => '1',
                                                    'compare' => '==' // not really needed, this is the default
                                                    )
                                                )
                                            );  
                                            $the_query_hot = new WP_Query( $args1 );

                                            if ( $the_query_hot->have_posts() ) {
                                                while ( $the_query_hot->have_posts() ) {
                                                    $the_query_hot->the_post();
                                                    ?>

                                                    <div class="col-md-4">
                                                        <div class="bg-white m-1">
                                                            <div class="item post-8357 post type-post status-publish format-standard has-post-thumbnail hentry category-quan-cafe">
                                                                <a href="<?php the_permalink() ?>">
                                                                    <img src="<?php echo the_post_thumbnail_url()?>" class="img-fluid wp-post-image" alt="" />
                                                                </a>
                                                                <div class="info">
                                                                    <a class="post-title text-dark" href="<?php the_permalink() ?>">
                                                                        <?php the_title() ?>
                                                                    </a>
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
                            </div>
                        </div>
                        <div class="col-md-3" style="height: auto !important; min-height: 0px !important;">

                            <div class="sidebar-wrap">
                                <div class="">
                                    <h3>Địa điểm khác ở <?php echo $category[0]->name?></h3>

                                    <?php
                                        $args1 = array(
                                            'post_type' => 'post',
                                            'post_status'  => 'publish',
                                            'category_name' => $category[0]->slug,                                         
                                            'posts_per_page' => 10,
                                            'post__not_in'      => array(get_the_ID()),
                                            'meta_query' => array(
                                                array(
                                                'key' => 'hot-post',
                                                'value' => '1',
                                                'compare' => '==' // not really needed, this is the default
                                                )
                                            )
                                        );  
                                        $the_query_hot = new WP_Query( $args1 );

                                        if ( $the_query_hot->have_posts() ) {
                                            while ( $the_query_hot->have_posts() ) {
                                                $the_query_hot->the_post();
                                                ?>

                                                <div class="list mt-2 bg-white">
                                                    <div class="row no-gutters">
                                                        <div class="col-4">
                                                        <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="transition">
                                                            <img  src="<?php echo the_post_thumbnail_url()?>"  class="img-fluid wp-post-image" alt="<?php the_title()?>">				                              			 
                                                        </a>
                                                        </div>
                                                        <div class="col-8">
                                                        <a href="<?php the_permalink()?>" title="<?php the_title() ?>" class="d-block ml-2 text-danger transition">
                                                            <span><?php the_title() ?></span>
                                                        </a>
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
                         </div>

                    </div>
                </main>
            </div>
        </div>
            <?php
		}
    }

?>

<?php
get_footer();
?>  