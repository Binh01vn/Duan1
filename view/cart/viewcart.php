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
                            <thead class="theadtb">
                                <tr>
                                    <th class="kenne-product-thumbnail">ảnh sản phẩm</th>
                                    <th class="cart-product-name">tên sản phẩm</th>
                                    <th class="kenne-product-price">giá (VND)</th>
                                    <th class="kenne-product-price">size</th>
                                    <th class="kenne-product-quantity">số lượng</th>
                                    <th class="kenne-product-subtotal">tổng giá (VND)</th>
                                    <th class="kenne-product-remove">xóa</th>
                                </tr>
                            </thead>
                            <tbody class="tbodytb">
                                <?php
                                if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                    $tongdh = 0;
                                    for($i = 0; $i < count($_SESSION['giohang']); $i++) {
                                        if(isset($_SESSION['giohang'][$i][0])) {
                                            $tonggia = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][5];
                                            $tongdh += $tonggia;
                                            $linkdelspid = "index.php?act=linkdelspid&delsp=".$i;
                                            $linksp = "index.php?act=sanphamct&idsp=".$_SESSION['giohang'][$i][0];
                                            $imgpath = "./view/assets/images/product/".$_SESSION['giohang'][$i][1];
                                            $img = '<img class="primary-img" src="'.$imgpath.'" alt="Lỗi server ảnh" width="150px" height="150px">'; ?>
                                            <tr>
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
                                                        <?= number_format((int)$_SESSION['giohang'][$i][3], 0, ",", ".") ?>
                                                    </span>
                                                </td>
                                                <td class="kenne-product-price">
                                                    <div class="product-size_box">
                                                        <select class="myniceselect nice-select" name="sizesp">
                                                            <?php
                                                            if($_SESSION['giohang'][$i][4] == 0) {
                                                                echo '<option value="0" selected>Chưa chọn size</option>';
                                                                foreach($listsizesp as $l2) {
                                                                    extract($l2);
                                                                    if($id_sp == $_SESSION['giohang'][$i][0]) {
                                                                        echo '<option value="'.$sizesp.'">'.$sizesp.'</option>';
                                                                    }
                                                                }
                                                            } else {
                                                                echo '<option value="'.$_SESSION['giohang'][$i][4].'" selected>'.$_SESSION['giohang'][$i][4].'</option>';
                                                                foreach($listsizesp as $l2) {
                                                                    extract($l2);
                                                                    if($id_sp == $_SESSION['giohang'][$i][0] && $sizesp != $_SESSION['giohang'][$i][4]) {
                                                                        echo '<option value="'.$sizesp.'">'.$sizesp.'</option>';
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box"
                                                            value="<?= $_SESSION['giohang'][$i][5] ?>" type="number">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="amount">
                                                        <?= number_format((int)$tonggia, 0, ",", ".") ?>
                                                    </span>
                                                </td>
                                                <td class="kenne-product-remove">
                                                    <a href="<?= $linkdelspid ?>">
                                                        <i class="fa fa-trash" title="Remove"></i></a>
                                                </td>
                                            </tr>
                                        <?php }
                                    }
                                    $_SESSION['tongdh'] = $tongdh;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon2">
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
                                            if(isset($_SESSION['tongdh'])) {
                                                echo number_format((int)$_SESSION['tongdh'], 0, ",", ".");
                                            } else {
                                                echo '0';
                                            } ?> (VND)
                                        </span>
                                    </li>
                                </ul>
                                <a href="">Đặt hàng</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Uren's Cart Area End Here -->