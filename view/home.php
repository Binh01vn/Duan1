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
                    if(isset($_SESSION['username'])) {
                        extract($_SESSION['username']);
                        $idact = $_SESSION['username']['idacc'];
                    }
                    foreach($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$idsp;
                        $imgpath = "./view/assets/images/product/".$imgsp;
                        $img = '<img class="primary-img" src="'.$imgpath.'" alt="Lỗi server ảnh">'; ?>
                        <div class="product-item">
                            <div class="single-product">
                                <form class="product-img" action="index.php?act=wlandac" method="POST">
                                    <a href="<?= $linksp ?>" class="linkbs">
                                        <?= $img ?>
                                        <!-- <img class="secondary-img" src="view/assets/images/product/8-2.jpg"
                                            alt="Kenne's Product Image"> -->
                                    </a>
                                    <!-- <span class="sticker-2">Hot</span> -->
                                    <div class="add-actions">
                                        <input type="hidden" name="idsp" value="<?= $idsp ?>">
                                        <input type="hidden" name="imgsp" value="<?= $imgsp ?>">
                                        <input type="hidden" name="tensp" value="<?= $tensp ?>">
                                        <input type="hidden" name="giasp" value="<?= $giasp ?>">
                                        <input type="hidden" name="sizesp">
                                        <input type="hidden" name="soluongsp" value="1">
                                        <ul>
                                            <li class="quick-view-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalCenter"><a href="<?= $linksp ?>"
                                                    data-bs-toggle="tooltip" data-placement="right" title="Xem chi tiết"><i
                                                        class="ion-ios-search"></i></a>
                                            </li>
                                            <li>
                                                <button data-bs-toggle="tooltip" data-placement="right"
                                                    title="Thêm vào yêu thích">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <button data-bs-toggle="tooltip" data-placement="right"
                                                    title="Thêm vào giỏ hàng" type="submit" name="addgio" value="themgio">
                                                    <i class="ion-bag"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <h3 class="product-name"><a href="<?= $linksp ?>">
                                                <?= $tensp ?>
                                            </a>
                                        </h3>
                                        <div class="price-box">
                                            <span class="new-price">Giá:
                                                <?= number_format((int)$giasp, 0, ",", ".") ?> VND
                                            </span>
                                            <!-- <span class="old-price">$75.00</span> -->
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
                    <?php }
                    ?>
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
                            foreach($dsdm as $ds) {
                                extract($ds);
                                $linkdm = "index.php?act=sanpham&iddm=".$id_dm;
                                echo '
                                        <li><a href="'.$linkdm.'">'.$tendm.'</a></li>
                                    ';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content kenne-tab_content">
                    <div class="tab-pane active show" role="tabpanel">
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
                            foreach($dssp as $sp1) {
                                extract($sp1);
                                $linksp = "index.php?act=sanphamct&idsp=".$idsp;
                                $imgpath = "./view/assets/images/product/".$imgsp;
                                $img = '<img class="primary-img" src="'.$imgpath.'" alt="Lỗi server ảnh">'; ?>
                                <div class="product-item">
                                    <form class="single-product" action="index.php?act=wlandac" method="POST">
                                        <div class="product-img">
                                            <a href="<?= $linksp ?>" class="linkbs">
                                                <?= $img ?>
                                                <!-- <img class="secondary-img" src="view/assets/images/product/5-2.jpg"
                                                    alt="Kenne's Product Image"> -->
                                            </a>
                                            <!-- <span class="sticker-2">Hot</span> -->
                                            <div class="add-actions">
                                                <input type="hidden" name="idsp" value="<?= $idsp ?>">
                                                <input type="hidden" name="imgsp" value="<?= $imgsp ?>">
                                                <input type="hidden" name="tensp" value="<?= $tensp ?>">
                                                <input type="hidden" name="giasp" value="<?= $giasp ?>">
                                                <input type="hidden" name="sizesp">
                                                <input type="hidden" name="soluongsp" value="1">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><a href="<?= $linksp ?>"
                                                            data-bs-toggle="tooltip" data-placement="right"
                                                            title="Xem chi tiết"><i class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li>
                                                        <button data-bs-toggle="tooltip" data-placement="right"
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
                                                <h3 class="product-name"><a href="<?= $linksp ?>">
                                                        <?= $tensp ?>
                                                    </a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">Giá:
                                                        <?= number_format((int)$giasp, 0, ",", ".") ?> VND
                                                    </span>
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
                                    </form>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Tab Area End Here -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(spID, spTEN, spGIA) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: '../cart/xulycart',
            data: {
                idsp: spID,
                tensp: spTEN,
                giasp: spGIA
            },
            success: function (response) {
                totalProduct.innerText = response;
                alert('Thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>