 

        <footer class="footer pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget-post mb-2">
                            <h4>Quán cafe Hot nhất</h4>

                            <?php
                                do_shortcode('[ui_footer_cafe]');
                            ?>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-post mb-2">
                            <h4>Địa điểm hấp dẫn nhất</h4>
                            <?php
                                do_shortcode('[ui_footer_address]');
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4>Mục xem nhiều</h4>
                        <ul class="category m-0 p-0 list-unstyled">
                            <?php
                                do_shortcode('[ui_category_footer]');
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-dark pt-2 pb-2">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-2 text-center">
                            <a href="<?php echo get_home_url(); ?>" title="Địa Điểm Đà Nẵng">
                                <img src="<?php echo get_template_directory_uri()."/assets/images/img_logo.png"?>" alt="Địa Điểm Đà Nẵng" class="img-fluid" width="130" />
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <span class="d-block text-sm-left text-center mt-2 mb-2">
                                <strong>www.diadiemdanang.vn</strong> là website chia sẻ thông tin hữu ích về các địa điểm mới và nổi tiếng tại Đà Nẵng, cẩm nang du lịch miễn phí tổng hợp từ nhiều nguồn khác nhau.
                            </span>
                        </div>
                        <div class="col-lg-2">
                            <div class="social text-center">
                                <a href="" title="Facebook" ref="nofollow"><i class="fab fa-facebook icon-facebook"></i></a>
                                <a href="" title="Google Plus" ref="nofollow"><i class="fab fa-instagram icon-google"></i></a>
                                <a href="" title="Youtube" ref="nofollow"><i class="fab fa-youtube icon-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row d-flex align-items-center no-gutters">
                        <div class="col-md-3 col-12 text-sm-left text-center">
                            <span>2019-2021 &copy; <a class="text-white" href="https://diadiemdanang.vn" title="Địa Điểm Đà Nẵng">Địa Điểm Đà Nẵng</a></span>
                        </div>
                        <div class="col-md-9 col-12 text-sm-right text-center">
                            Mọi vấn đề liên quan đến bản quyền, vui lòng liên hệ chúng tôi sẽ cập nhật nguồn thông tin hoặc tiến hành tháo gỡ.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php
            wp_footer();
        ?>
    </body>
</html>
