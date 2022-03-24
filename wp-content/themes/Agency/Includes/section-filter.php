<?php
    ?>
        <div id="filter" class="mb-2 bg-white p-2">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <strong>Tìm kiếm theo quận</strong>
                </div>
                <div class="col-md-3">
                    <select id="h-custom-area" class="form-control border-danger m-1" name="provincefilter">
                        <option value="">Chọn Quận...</option>
                        <?php
                            do_shortcode('[ui_filter_area]');
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <select id="h-custom-category" class="form-control border-danger m-1" name="categoryfilter">
                        <option value="">Chọn chuyên mục...</option>
                        <?php
                            do_shortcode('[ui_filter_category]');
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-block btn-danger m-1 h-custom-search">Tìm kiếm</button>
                </div>
                <input type="hidden" name="action" value="myfilter" />
            </div>
        </div>
    <?php
?>