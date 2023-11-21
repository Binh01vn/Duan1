<!-- Begin Slider Area Three -->
<div class="slider-area slider-area-3">

    <div class="kenne-element-carousel home-slider home-slider-3 arrow-style" data-slick-options='{
    "slidesToShow": 1,
    "slidesToScroll": 1,
    "infinite": true,
    "arrows": true,
    "dots": false,
    "autoplay" : true,
    "fade" : true,
    "autoplaySpeed" : 7000,
    "pauseOnHover" : false,
    "pauseOnFocus" : false
    }' data-slick-responsive='[
    {"breakpoint":768, "settings": {
    "slidesToShow": 1
    }},
    {"breakpoint":575, "settings": {
    "slidesToShow": 1
    }}
]'>
        <div class="slide-item bg-5 animation-style-01">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slide-content">
                    <span>Ưu đã độc quyền -20% khi theo dõi shop của chúng tôi</span>
                    <h2>Khám phá xu hướng</h2>
                    <p class="short-desc">Hãy thông báo với chúng tôi khi bạn nhận phải hàng giả hoặc kém chất lượng.
                    </p>
                    <div class="slide-btn">
                        <a class="kenne-btn" href="index.php?act=sanpham">Mua sắm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item bg-6 animation-style-01">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slide-content">
                    <span>Ưu đã độc quyền -20% khi theo dõi shop của chúng tôi</span>
                    <h2>Phong cách <br> Sáng tạo</h2>
                    <p class="short-desc-2">Đảm bảo hàng chuẩn chất lượng.</p>
                    <div class="slide-btn">
                        <a class="kenne-btn" href="index.php?act=sanpham">Mua sắm</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Slider Area Three End Here -->

<!-- Begin Service Area -->
<div class="service-area">
    <div class="container">
        <div class="service-nav">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h4>Miễn phí vận chuyển</h4>
                            <p>Miễn phí vẫn chuyển cho mọi đơn hàng</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h4>Hoàn tiền</h4>
                            <p>Bạn có 30 ngày đổi trả miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h4>Hỗ trợ trực tuyến</h4>
                            <p>Hỗ trợ 24/24</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End Here -->

<!-- Begin Product Area -->
<div class="product-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Sản phẩm mới</h3>
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
                    <?php
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $imgpath = "./view/assets/images/product/" . $imgsp;
                        $img = '<img class="primary-img" src="' . $imgpath . '" alt="Lỗi server ảnh">';
                        echo '
                        <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">' . $img . '</a>
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
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">' . $tensp . '</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">Giá: ' . $giasp . ' VND</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        ';
                    }
                    ?>
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

<!-- Begin Banner Area Two -->
<div class="banner-area banner-area-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="#">
                            <img class="img-full" src="view/assets/images/banner/1-4.jpg" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="#">
                            <img class="img-full" src="view/assets/images/banner/1-5.jpg" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area Two End Here -->

<!-- Begin Product Tab Area -->
<div class="product-tab_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Tất cả sản phẩm</h3>
                    <div class="product-tab">
                        <ul class="nav product-menu">
                            <?php
                            $dsdm = list_danhmuc();
                            foreach ($dsdm as $ds) {
                                extract($ds);
                                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                echo '
                                        <li><a href="' . $linkdm . '">' . $tendm . '</a></li>
                                    ';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content kenne-tab_content">
                    <div id="bag" class="tab-pane active show" role="tabpanel">
                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                            data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30
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
                    <?php
                    foreach ($dssp as $sp1) {
                        extract($sp1);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $imgpath = "./view/assets/images/product/" . $imgsp;
                        $img = '<img class="primary-img" src="' . $imgpath . '" alt="Lỗi server ảnh">';
                        echo '
                        <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">' . $img . '</a>
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
                                    <h3 class="product-name"><a href="index.php?act=sanphamct">' . $tensp . '</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">Giá: ' . $giasp . ' VND</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        ';
                    }
                    ?>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Voluptates
                                                    laudantium</a></h3>
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

                        </div>
                    </div>
                    <div id="plaid-shirts" class="tab-pane" role="tabpanel">
                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                            data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30
                        }' data-slick-responsive='[
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
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
                                                    perspiciatis</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$60.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Esse eveniet</a>
                                            </h3>
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
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Eligendi
                                                    voluptate</a></h3>
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
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Nulla
                                                    laboriosam</a></h3>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Adipisci
                                                    voluptas</a></h3>
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
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Voluptates
                                                    laudantium</a></h3>
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

                        </div>
                    </div>
                    <div id="shoes" class="tab-pane" role="tabpanel">
                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                            data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30
                        }' data-slick-responsive='[
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Nulla
                                                    laboriosam</a></h3>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Adipisci
                                                    voluptas</a></h3>
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
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Esse eveniet</a>
                                            </h3>
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
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
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
                                            <img class="primary-img" src="view/assets/images/product/1-1.jpg"
                                                alt="Kenne's Product Image">
                                            <img class="secondary-img" src="view/assets/images/product/1-2.jpg"
                                                alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Quibusdam
                                                    ratione</a></h3>
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
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
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
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Nulla
                                                    laboriosam</a></h3>
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
                                            <img class="primary-img" src="view/assets/images/product/6-1.jpg"
                                                alt="Kenne's Product Image">
                                            <img class="secondary-img" src="view/assets/images/product/6-2.jpg"
                                                alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter"><a href="#"
                                                        data-bs-toggle="tooltip" data-placement="right"
                                                        title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                        data-placement="right" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right"
                                                        title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="index.php?act=sanphamct">Eligendi
                                                    voluptate</a></h3>
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
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
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
    </div>
</div>
<!-- Product Tab Area End Here -->