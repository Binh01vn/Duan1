<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>ALL SẢN PHẨM</h2>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Tất cả sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->

<!-- Begin Kenne's Content Wrapper Area -->
<div class="kenne-content_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 order-2 order-lg-1">
                <div class="kenne-sidebar_categories">
                    <div class="kenne-categories_title first-child">
                        <h5>Tìm kiếm sản phẩm tại đây</h5>
                    </div>
                    <div class="price-filter">
                        <!-- <div id="slider-range"></div> -->
                        <form class="price-slider-amount" method="POST" action="index.php?act=sanpham">
                            <div class="label-input">
                                <input type="text" name="kyw" placeholder="Tìm kiếm" />
                                <button class="filter-btn" name="timkiem" type="submit"><i
                                        class="ion-ios-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="kenne-sidebar-catagories_area">
                    <div class="kenne-sidebar_categories category-module">
                        <div class="kenne-categories_title">
                            <h5>Danh mục sản phẩm</h5>
                        </div>
                        <div class="sidebar-categories_menu">
                            <ul>
                                <li><a href="index.php?act=sanpham">Tất cả sản phẩm</a></li>
                                <?php
                                $dsdm = list_danhmuc();
                                foreach ($dsdm as $ds1) {
                                    extract($ds1);
                                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                    echo '
                                        <li><a href="' . $linkdm . '">' . $tendm . '</a></li>
                                    ';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="kenne-sidebar_categories list-product_area">
                        <div class="kenne-categories_title">
                            <h5>Sản phẩm nổi bật</h5>
                        </div>
                        <div class="kenne-element-carousel list-product_slider list-product_slider-2 slider-nav"
                            data-slick-options='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30,
                                "rows" : 2
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 1
                                }}
                            ]'>
                            <?php
                            foreach ($dssp as $ds2) {
                                extract($ds2);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $imgpath = "./view/assets/images/product/" . $imgsp;
                                $img = '<img class="primary-img" src="' . $imgpath . '" alt="Lỗi server ảnh">';
                                echo '
                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?act=sanphamct">' . $img . '</a>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h3 class="product-name"><a href="index.php?act=sanphamct">' . $tensp . '</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="new-price">' . $giasp . ' VND</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                <div class="shop-toolbar">
                    <div class="product-view-mode">
                        <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top"
                            title="Grid View"><i class="fa fa-th"></i></a>
                        <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top"
                            title="List View"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="product-page_count">
                        <b>
                            <?php
                            $dsdm = list_danhmuc();
                            foreach ($dsdm as $ds1) {
                                extract($ds1);
                                if(isset($_GET['iddm'])){
                                    if($id == ($_GET['iddm'])){
                                        echo $tendm;
                                    }
                                }
                                
                            }
                            ?>
                        </b>
                    </div>
                </div>

                <div class="shop-product-wrap grid gridview-3 row">
                    <?php
                    foreach ($dssp as $ds2) {
                        extract($ds2);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $imgpath = "./view/assets/images/product/" . $imgsp;
                        $img = '<img class="primary-img" src="' . $imgpath . '" alt="Lỗi server ảnh">';
                        echo '
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="index.php?act=sanphamct">' . $img . '</a>
                                            <span class="sticker">-15%</span>
                                            <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Xem chi tiết"><i
                                                            class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="index.php?act=wlist" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Thêm vào yêu thích"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Thêm vào giỏ hàng"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="index.php?act=sanphamct">' . $tensp . '</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">Giá: ' . $giasp . '</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-product_item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="index.php?act=sanphamct">' . $img . '</a>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <div class="price-box">
                                                    <span class="new-price">Giá: ' . $giasp . '</span>
                                                </div>
                                                <h6 class="product-name"><a href="index.php?act=sanphamct">' . $tensp . '</a></h6>
                                                <div class="product-short_desc">
                                                    <p>' . $motasp . '</p>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Xem chi tiết"><i
                                                            class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="index.php?act=wlist" data-bs-toggle="tooltip"
                                                            data-placement="right" title="Thêm vào yêu thích"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                            title="Thêm vào giỏ hàng"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Kenne's Content Wrapper Area End Here -->