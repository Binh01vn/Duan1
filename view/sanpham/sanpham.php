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
                                foreach($dsdm as $ds1) {
                                    extract($ds1);
                                    $linkdm = "index.php?act=sanpham&iddm=".$id_dm;
                                    echo '
                                        <li><a href="'.$linkdm.'">'.$tendm.'</a></li>
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
                            foreach($dssp as $ds2) {
                                extract($ds2);
                                $linksp = "index.php?act=sanphamct&idsp=".$idsp;
                                $imgpath = "./view/assets/images/product/".$imgsp;
                                $img = '<img class="primary-img" src="'.$imgpath.'" alt="Lỗi server ảnh">'; ?>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="<?= $linksp ?>">
                                                <?= $img ?>
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="<?= $linksp ?>">
                                                        <?= $tensp ?>
                                                    </a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">
                                                        Giá:
                                                        <?= number_format((int)$giasp, 0, ",", ".") ?> (VND)
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
                            foreach($dsdm as $ds1) {
                                extract($ds1);
                                if(isset($_GET['iddm'])) {
                                    if($id_dm == ($_GET['iddm'])) {
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
                    if(isset($_SESSION['username'])) {
                        extract($_SESSION['username']);
                        $idact = $_SESSION['username']['idacc'];
                    }
                    foreach($dssp as $ds2) {
                        extract($ds2);
                        $linksp = "index.php?act=sanphamct&idsp=".$idsp;
                        $imgpath = "./view/assets/images/product/".$imgsp;
                        $img = '<img class="primary-img" src="'.$imgpath.'" alt="Lỗi server ảnh">'; ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <form class="product-item" action="index.php?act=wlandac" method="POST">
                                <input type="hidden" name="idsp" value="<?= $idsp ?>">
                                <input type="hidden" name="imgsp" value="<?= $imgsp ?>">
                                <input type="hidden" name="tensp" value="<?= $tensp ?>">
                                <input type="hidden" name="giasp" value="<?= $giasp ?>">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="<?= $linksp ?>" class="linkbs">
                                            <?= $img ?>
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter"><a href="<?= $linksp ?>"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Xem chi tiết"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><button data-bs-toggle="tooltip" data-placement="right"
                                                        title="Thêm vào yêu thích">
                                                        <i class="ion-ios-heart-outline"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-bs-toggle="tooltip" data-placement="right"
                                                        title="Thêm vào giỏ hàng" type="submit" name="addgio"
                                                        value="themgio">
                                                        <i class="ion-bag"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="'.$linksp.'">
                                                    <?= $tensp ?>
                                                </a></h3>
                                            <div class="price-box">
                                                <span class="new-price">Giá:
                                                        <?= number_format((int)$giasp, 0, ",", ".") ?> (VND)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="list-product_item" action="index.php?act=wlandac" method="POST">
                                <input type="hidden" name="idsp" value="<?= $idsp ?>">
                                <input type="hidden" name="imgsp" value="<?= $imgsp ?>">
                                <input type="hidden" name="tensp" value="<?= $tensp ?>">
                                <input type="hidden" name="giasp" value="<?= $giasp ?>">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="<?= $linksp ?>">
                                            <?= $img ?>
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="bshomeprd">
                                            <div class="product-size_box">
                                                <select class="myniceselect nice-select" name="sizesp">
                                                    <?php
                                                    foreach($listsizesp as $l2) {
                                                        extract($l2);
                                                        if($id_sp == $id) {
                                                            echo '<option value="'.$sizesp.'">'.$sizesp.'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label>Size</label>
                                            </div>
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text"
                                                        name="soluongsp">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                                <label>Số lượng</label>
                                            </div>
                                        </div>
                                        <div class="product-desc_info">
                                            <div class="price-box">
                                                <span class="new-price">Giá:
                                                        <?= number_format((int)$giasp, 0, ",", ".") ?> (VND)
                                                </span>
                                            </div>
                                            <h6 class="product-name"><a href="<?= $linksp ?>">
                                                    <?= $tensp ?>
                                                </a></h6>
                                            <div class="product-short_desc">
                                                <p>
                                                    <?= $motasp ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter"><a href="<?= $linksp ?>"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Xem chi tiết"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><button data-bs-toggle="tooltip" data-placement="right"
                                                        title="Thêm vào yêu thích">
                                                        <i class="ion-ios-heart-outline"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-bs-toggle="tooltip" data-placement="right"
                                                        title="Thêm vào giỏ hàng" type="submit" name="addgio"
                                                        value="themgio">
                                                        <i class="ion-bag"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Kenne's Content Wrapper Area End Here -->