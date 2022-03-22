<?php
get_header();
?>

        <div class="wrap mt-4">
            <div class="container">
                <div class="text-center mb-4">
                    <h2>
                        ĐIỂM ĐẾN HÀNG ĐẦU
                    </h2>
                    <span>
                        Khám phá ngay các địa điểm, hoạt động du lịch và ăn uống cho hành trình du lịch của bạn
                    </span>
                </div>
                <div class="term-owl">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="row no-gutters">
                                <?php
                                    do_shortcode('[ui_top_category_0]');
                                ?>
                                 <?php
                                    do_shortcode('[ui_top_category_1]');
                                ?>
                                <?php
                                    do_shortcode('[ui_top_category_2]');
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row no-gutters">
                                <?php
                                    do_shortcode('[ui_top_category_3]');
                                ?>
                                <?php
                                    do_shortcode('[ui_top_category_4]');
                                ?>
                                <?php
                                    do_shortcode('[ui_top_category_5]');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
get_footer();
?>      