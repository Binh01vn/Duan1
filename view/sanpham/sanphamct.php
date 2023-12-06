<?php
if(isset($_SESSION['username'])) {
    extract($_SESSION['username']);
    $idact = $_SESSION['username']['idacc'];
}
?>
<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>BAK NIKE</h2>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
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
            <div class="row">
                <div class="col-lg-4">
                    <div class="sp-img_area">
                        <div class="sp-img_slider slick-img-slider kenne-element-carousel" data-slick-options='{
                                "slidesToShow": 1,
                                "arrows": false,
                                "fade": true,
                                "draggable": false,
                                "swipe": false,
                                "asNavFor": ".sp-img_slider-nav"
                                }'>
                            <?php
                            foreach($dssp as $ds1) {
                                extract($ds1);
                                $imgpath = "./view/assets/images/product/".$imgsp;
                                if(isset($imgpath)) {
                                    $img = '<img src="'.$imgpath.'" alt="Lỗi server ảnh" height="373">';
                                } else {
                                    $img = '';
                                }
                                if($idsp == $_GET['idsp']) {
                                    ?>
                                    <div class="single-slide red zoom">
                                        <?= $img ?>
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
                                <?php }
                            } ?>
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
                            <?php
                            foreach($dssp as $ds1) {
                                extract($ds1);
                                // $linksp = "index.php?act=sanphamct&idsp=" . $idsp;
                                $imgpath = "./view/assets/images/product/".$imgsp;
                                $img = '<img src="'.$imgpath.'" alt="Lỗi server ảnh" height="65px">';
                                if($idsp == $_GET['idsp']) {
                                    ?>
                                    <div class="single-slide red">
                                        <?= $img ?>
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
                                <?php }
                            } ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <form class="sp-content" action="index.php?act=addCart" method="POST">
                        <div class="sp-heading">
                            <h5><a href="">Thông tin sản phẩm</a></h5>
                        </div>
                        <div class="sp-essential_stuff">
                            <ul>
                                <?php
                                foreach($dssp as $ds1) {
                                    extract($ds1);
                                    if($idsp == $_GET['idsp']) {
                                        $slsp = $soluongsp;
                                        ?>
                                        <li>Tên sản phẩm:
                                            <b>
                                                <?= $tensp ?>
                                            </b>
                                        </li>
                                        <li>Mã sản phẩm:
                                            <?= $masp ?>
                                        </li>
                                        <li>Giá:
                                            <?= number_format((int)$giasp, 0, ",", ".") ?> (VND)
                                        </li>
                                        <li>Tình trạng:
                                            <?php
                                            if($slsp > 0) {
                                                echo 'còn '.$slsp.' sản phẩm';
                                            } else {
                                                echo "Hết hàng!";
                                            }
                                            ?>
                                        </li>
                                        <input type="hidden" name="idsp" value="<?= $id ?>">
                                        <input type="hidden" name="tensp" value="<?= $tensp ?>">
                                        <input type="hidden" name="giasp" value="<?= $giasp ?>">
                                    <?php }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="product-size_box">
                            <span>Size</span>
                            <select class="myniceselect nice-select" name="sizesp">
                                <?php
                                foreach($listsizesp as $l2) {
                                    extract($l2);
                                    if($id_sp == $_GET['idsp']) {
                                        echo '<option value="'.$sizesp.'">'.$sizesp.'</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="quantity">
                            <label>Số lượng</label>
                            <input class="inp-sl" value="1" type="number" name="soluongsp" min="1" max="<?= $slsp ?>">
                        </div>
                        <div class="qty-btn_area">
                            <ul>
                                <li>
                                    <button class="qty-cart_btn" type="submit" name="addgio" value="themgio">Thêm vào
                                        giỏ hàng</button>
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
                    </form>
                </div>
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
                            foreach($dssp as $ds1) {
                                extract($ds1);
                                if($idsp == $_GET['idsp']) { ?>
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
                            <iframe id="reviews" class="tab-pane" role="tabpanel" id="tab-review"
                                src="view/binhluan/formbl.php?idsp=<?= $_GET['idsp'] ?>" frameborder="0"
                                width="100%"></iframe>
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
                        <h3>Sản phẩm khác </h3>
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
                        foreach($dssp as $ds1) {
                            extract($ds1);
                            if($idsp == $_GET['idsp']) {
                                $listcl = listall_sp(null, $iddm);
                                foreach($listcl as $cl) {
                                    extract($cl);
                                    $linksp = "index.php?act=sanphamct&idsp=".$idsp;
                                    $imgpath = "./view/assets/images/product/".$imgsp;
                                    $img = '<img src="'.$imgpath.'" alt="Lỗi server ảnh" height="233px">'; ?>

                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="<?= $linksp ?>">
                                                    <?= $img ?>
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalCenter"><a href="<?= $linksp ?>"
                                                                data-bs-toggle="tooltip" data-placement="right"
                                                                title="Quick View"><i class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li>
                                                            <button data-bs-toggle="tooltip" data-placement="right"
                                                                title="Thêm vào giỏ hàng" data-id="<?= $idsp ?>"
                                                                onclick="addToCart(<?= $idsp ?>, '<?= $tensp ?>', <?= $sizesp = 0; ?>, <?= $tongspCart = 1; ?>, <?= $giasp ?>)">
                                                                <i class="ion-bag"></i>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h3 class="product-name">
                                                        <a href="<?= $linksp ?>">
                                                            <?= $tensp ?>
                                                        </a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="new-price">Giá:
                                                            <?= number_format((int)$giasp, 0, ",", ".") ?> VND
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <script>
        let totalProduct = document.getElementById('totalProduct');
        function addToCart(spcartID, spcartTen, spcartSize, spcartSL, spcartGia) {
            // console.log(spcartID, spcartTen, spcartSize, spcartSL, spcartGia);
            // Sử dụng jQuery
            $.ajax({
                type: 'POST',
                // Đường dẫ tới tệp PHP xử lý dữ liệu
                url: './view/cart/xulycart.php',
                data: {
                    idsp: spcartID,
                    tensp: spcartTen,
                    sizesp: spcartSize,
                    tongspCart: spcartSL,
                    giasp: spcartGia
                },
                success: function (response) {
                    totalProduct.innerText = response;
                    alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    </script>