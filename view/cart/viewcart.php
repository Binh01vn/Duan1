<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li><a href="../Duan1/index.php">Trang chủ</a></li>
                <li class="active">Giỏ hàng</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->

<!-- Begin Uren's Cart Area -->
<div class="kenne-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="kenne-product-remove">xóa</th>
                                    <th class="kenne-product-thumbnail">ảnh sản phẩm</th>
                                    <th class="cart-product-name">tên sản phẩm</th>
                                    <th class="kenne-product-price">giá (VND)</th>
                                    <th class="kenne-product-price">size</th>
                                    <th class="kenne-product-quantity">số lượng</th>
                                    <th class="kenne-product-subtotal">tổng giá (VND)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                    $tongdh = 0;
                                    for($i = 0; $i < count($_SESSION['giohang']); $i++) {
                                        $tonggia = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][5];
                                        $tongdh += $tonggia;
                                        $i = $i + 1;
                                        $linkdelspid = "index.php?act=linkdelspid&delsp=".$i;
                                        if(isset($_SESSION['giohang'][$i][0])) {
                                            $linksp = "index.php?act=sanphamct&idsp=".$_SESSION['giohang'][$i][0];
                                            $imgpath = "./view/assets/images/product/".$_SESSION['giohang'][$i][1];
                                            $img = '<img class="primary-img" src="'.$imgpath.'" alt="Lỗi server ảnh" width="200px">'; ?>
                                            <tr>
                                                <td class="kenne-product-remove">
                                                    <a href="<?= $linkdelspid ?>">
                                                        <i class="fa fa-trash" title="Remove"></i></a>
                                                </td>
                                                <td class="kenne-product-thumbnail">
                                                    <a href="<?= $linksp ?>">
                                                        <?= $img ?>
                                                    </a>
                                                </td>
                                                <td class="kenne-product-name">
                                                    <a href="<?= $linksp ?>">
                                                        <?= $_SESSION['giohang'][$i][2] ?>
                                                    </a>
                                                </td>
                                                <td class="kenne-product-price">
                                                    <span class="amount">
                                                        <?= $_SESSION['giohang'][$i][3] ?>
                                                    </span>
                                                </td>
                                                <td class="kenne-product-price">
                                                    <?= $_SESSION['giohang'][$i][4] ?>
                                                </td>
                                                <td class="quantity">
                                                    <?= $_SESSION['giohang'][$i][5] ?>
                                                    <!-- <label>Số lượng</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div> -->
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="amount">
                                                        <?= $tonggia ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php }
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="coupon-all">
                                <b>Lưu ý:</b>
                                <u>Bạn sẽ không thể hoàn lại mã khi đã Kiểm tra và áp dụng mã</u>
                            </div> -->
                            <div class="coupon-all">
                                <!-- <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                        placeholder="Mã giảm giá" type="text">
                                    <input class="button" name="apply_coupon" value="Kiểm tra và áp dụng mã"
                                        type="submit">
                                </div> -->
                                <div class="coupon2">
                                    <!-- <input class="button" name="update_cart" value="Cập nhật giỏ hàng" type="submit"> -->
                                    <a class="button" href="index.php?act=delcart&del=1">Xóa tất cả khỏi giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Tổng tiền giỏ hàng</h2>
                                <ul>
                                    <!-- <li>Tổng phụ <span>$118.60</span></li> -->
                                    <li>Tổng thanh toán
                                        <span>
                                            <?php
                                            if(isset($tongdh)) {
                                                echo $tongdh;
                                            } else {
                                                echo '0';
                                            } ?> (VND)
                                        </span>
                                    </li>
                                </ul>
                                <a href="#">Đặt hàng</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Uren's Cart Area End Here -->