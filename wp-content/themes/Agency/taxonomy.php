<?php
    get_header();
    $queried_object = get_queried_object();
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
            <?php
                do_shortcode('[ui_taxonomy taxonomy="'.$queried_object->taxonomy.'" slug="'.$queried_object->slug.'"]');
            ?>
        </div>
 <?php
    get_footer();
?>    