<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>BAK NIKE</h2>
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->

<!-- Begin Kenne's Single Product Area -->
<div class="sp-area">
    <div class="container">
        <div class="sp-nav">
            <form class="row" action="index.php?act=cart" method="POST">
                <div class="col-lg-4">
                    <?php
                    foreach ($dssp as $ds1) {
                        extract($ds1);
                        $linksp = "index.php?act=sanphamct&idsp=" . $idsp;
                        $imgpath = "./view/assets/images/product/" . $imgsp;
                        $img = '<img src="' . $imgpath . '" alt="Lỗi server ảnh">';
                        if ($idsp == $_GET['idsp']) {
                            ?>
                            <div class="sp-img_area">
                                <div class="sp-img_slider slick-img-slider kenne-element-carousel" data-slick-options='{
                                "slidesToShow": 1,
                                "arrows": false,
                                "fade": true,
                                "draggable": false,
                                "swipe": false,
                                "asNavFor": ".sp-img_slider-nav"
                                }'>
                                    <div class="single-slide red zoom">
                                        <?= $img ?>
                                    </div>
                                    <div class="single-slide red zoom">
                                        <img src="view/assets/images/product/1-1.jpg" alt="Kenne's Product Image">
                                    </div>
                                    <div class="single-slide orange zoom">
                                        <img src="view/assets/images/product/1-2.jpg" alt="Kenne's Product Image">
                                    </div>
                                    <div class="single-slide brown zoom">
                                        <img src="view/assets/images/product/2-1.jpg" alt="Kenne's Product Image">
                                    </div>
                                    <div class="single-slide umber zoom">
                                        <img src="view/assets/images/product/2-2.jpg" alt="Kenne's Product Image">
                                    </div>
                                    <div class="single-slide black zoom">
                                        <img src="view/assets/images/product/3-1.jpg" alt="Kenne's Product Image">
                                    </div>
                                    <div class="single-slide green zoom">
                                        <img src="view/assets/images/product/3-2.jpg" alt="Kenne's Product Image">
                                    </div>
                                </div>
                                <div class="sp-img_slider-nav slick-slider-nav kenne-element-carousel arrow-style-2 arrow-style-3"
                                    data-slick-options='{
                                "slidesToShow": 3,
                                "asNavFor": ".sp-img_slider",
                                "focusOnSelect": true,
                                "arrows" : true,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                    ]'>
                                    <div class="single-slide red">
                                        <?= $img ?>
                                    </div>
                                    <div class="single-slide red">
                                        <img src="view/assets/images/product/1-1.jpg" alt="Kenne's Product Thumnail">
                                    </div>
                                    <div class="single-slide orange">
                                        <img src="view/assets/images/product/1-2.jpg" alt="Kenne's Product Thumnail">
                                    </div>
                                    <div class="single-slide brown">
                                        <img src="view/assets/images/product/2-1.jpg" alt="Kenne's Product Thumnail">
                                    </div>
                                    <div class="single-slide umber">
                                        <img src="view/assets/images/product/2-2.jpg" alt="Kenne's Product Thumnail">
                                    </div>
                                    <div class="single-slide red">
                                        <img src="view/assets/images/product/3-1.jpg" alt="Kenne's Product Thumnail">
                                    </div>
                                    <div class="single-slide orange">
                                        <img src="view/assets/images/product/3-2.jpg" alt="Kenne's Product Thumnail">
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
                <div class="col-lg-8">
                    <div class="sp-content">
                        <div class="sp-heading">
                            <h5><a href="#">Thông tin sản phẩm</a></h5>
                        </div>


                        <div class="sp-essential_stuff">
                            <ul>
                                <?php
                                foreach ($dssp as $ds1) {
                                    extract($ds1);
                                    if ($idsp == $_GET['idsp']) { ?>
                                        <li>Tên sản phẩm:
                                            <b>
                                                <?= $tensp ?>
                                            </b>
                                        </li>
                                        <li>Mã sản phẩm:
                                            <?= $masp ?>
                                        </li>
                                        <li>Giá:
                                            <?= $giasp ?>
                                        </li>
                                        <li>Tình trạng:
                                            <?php
                                            if ($soluongsp > 0) {
                                                echo 'còn ' . $soluongsp . ' sản phẩm';
                                            } else {
                                                echo "Hết hàng!";
                                            }
                                            ?>
                                        </li>
                                    <?php }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="product-size_box">
                            <span>Size</span>
                            <select class="myniceselect nice-select" name="sizesp">
                                <?php
                                foreach ($listsizesp as $l2) {
                                    extract($l2);
                                    if ($id_sp == $_GET['idsp']) {
                                        echo '<option value="' . $id . '">' . $sizesp . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="quantity">
                            <label>Số lượng</label>
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" value="1" type="text" name="soluongsp">
                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                            </div>
                        </div>
                        <div class="qty-btn_area">
                            <ul>
                                <li>
                                    <button class="qty-cart_btn" type="submit" name="addgio">Thêm vào giỏ hàng</button>
                                </li>
                                <li>
                                    <a class="qty-wishlist_btn" href="wishlist.html" data-bs-toggle="tooltip"
                                        title="Thêm vào yêu thích">
                                        <i class="ion-android-favorite-outline"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank"
                                        title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank"
                                        title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank"
                                        title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip"
                                        target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank"
                                        title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Kenne's Single Product Area End Here -->

<!-- Begin Product Tab Area Two -->
<div class="product-tab_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sp-product-tab_nav">
                    <div class="product-tab">
                        <ul class="nav product-menu">
                            <li>
                                <a class="active" data-bs-toggle="tab" href="#description">
                                    <span>Mô tả</span>
                                </a>
                            </li>
                            <li><a data-bs-toggle="tab" href="#reviews"><span>Bình luận và đánh giá</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content uren-tab_content">
                        <?php
                        foreach ($dssp as $ds1) {
                            extract($ds1);
                            if ($idsp == $_GET['idsp']) { ?>
                                <div id="description" class="tab-pane active show" role="tabpanel">
                                    <div class="product-description">
                                        <ul>
                                            <li>

                                                <span class="title">
                                                    <?= $tensp ?>
                                                </span>
                                                <span>
                                                    <?= $motasp ?>
                                                </span>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php }
                        } ?>

                        <div id="reviews" class="tab-pane" role="tabpanel">
                            <div class="tab-pane active" id="tab-review">
                                <form class="form-horizontal" id="form-review" action="index.php?act=binhluan"
                                    method="POST">
                                    <div id="review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <?php
                                                foreach ($listbl as $lb){
                                                    extract($lb);
                                                    echo '<tr>
                                                                <td style="width: 50%;"><strong>'.$username.'</strong></td>
                                                                <td class="text-right">'.$ngaybl.'</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <p>'.$noidungbl.'</p>
                                                                </td>
                                                            </tr>';
                                                }
                                                ?>
                                                <!-- <tr>
                                                    <td style="width: 50%;"><strong>Tên khách hàng</strong></td>
                                                    <td class="text-right">26/10/19</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>Good product! Thank you very much</p>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        extract($_SESSION['username']); ?>
                                        <h2>Bình luận tại đây</h2>
                                        <div class="form-group required second-child">
                                            <input type="hidden" name="idsp" value="<?= $_GET['idsp'] ?>">
                                            <div class="col-sm-12 p-0">
                                                <label class="control-label">Share your opinion</label>
                                                <textarea class="review-textarea" name="noidungbl"
                                                    id="con_message"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group last-child required">
                                            <div class="kenne-btn-ps_right">
                                                <button class="kenne-btn" type="submit" name="guibl" value="bl">Gửi bình
                                                    luận</button>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Tab Area Two End Here -->

<!-- Begin Product Area -->
<div class="product-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Sản phẩm cùng loại
                        <?php
                        if (isset($iddm)) {
                            echo $iddm;
                        }
                        ?>
                    </h3>
                    <div class="product-arrow"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".product-arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="view/assets/images/product/1-1.jpg"
                                        alt="Kenne's Product Image">
                                    <img class="secondary-img" src="view/assets/images/product/1-2.jpg"
                                        alt="Kenne's Product Image">
                                </a>
                                <span class="sticker-2">Hot</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">Quibusdam ratione</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">$46.91</span>
                                        <span class="old-price">$50.99</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="view/assets/images/product/2-1.jpg"
                                        alt="Kenne's Product Image">
                                    <img class="secondary-img" src="view/assets/images/product/2-2.jpg"
                                        alt="Kenne's Product Image">
                                </a>
                                <span class="sticker">Bestseller</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">Nulla laboriosam</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$80.00</span>
                                        <span class="old-price">$85,00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="view/assets/images/product/3-1.jpg"
                                        alt="Kenne's Product Image">
                                    <img class="secondary-img" src="view/assets/images/product/3-2.jpg"
                                        alt="Kenne's Product Image">
                                </a>
                                <span class="sticker-2">Hot</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">Adipisci voluptas</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">$75.91</span>
                                        <span class="old-price">$80.99</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="view/assets/images/product/4-1.jpg"
                                        alt="Kenne's Product Image">
                                    <img class="secondary-img" src="view/assets/images/product/4-2.jpg"
                                        alt="Kenne's Product Image">
                                </a>
                                <span class="sticker">Bestseller</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">Possimus beatae</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$65.00</span>
                                        <span class="old-price">$70.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="view/assets/images/product/5-1.jpg"
                                        alt="Kenne's Product Image">
                                    <img class="secondary-img" src="view/assets/images/product/5-2.jpg"
                                        alt="Kenne's Product Image">
                                </a>
                                <span class="sticker-2">Hot</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">Voluptates laudantium</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">$95.00</span>
                                        <span class="old-price">$100.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="view/assets/images/product/6-1.jpg"
                                        alt="Kenne's Product Image">
                                    <img class="secondary-img" src="view/assets/images/product/6-2.jpg"
                                        alt="Kenne's Product Image">
                                </a>
                                <span class="sticker">Bestseller</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">Eligendi voluptate</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">$60.00</span>
                                        <span class="old-price">$65.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="view/assets/images/product/7-1.jpg"
                                        alt="Kenne's Product Image">
                                    <img class="secondary-img" src="view/assets/images/product/7-2.jpg"
                                        alt="Kenne's Product Image">
                                </a>
                                <span class="sticker-2">Hot</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">Excepturi
                                            perspiciatis</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$60.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="view/assets/images/product/8-1.jpg"
                                        alt="Kenne's Product Image">
                                    <img class="secondary-img" src="view/assets/images/product/8-2.jpg"
                                        alt="Kenne's Product Image">
                                </a>
                                <span class="sticker">Bestseller</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><a href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Quick View"><i
                                                    class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">Esse eveniet</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$70.00</span>
                                        <span class="old-price">$75.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->