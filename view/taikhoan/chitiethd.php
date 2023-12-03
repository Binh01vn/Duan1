<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=myacc">My account</a></li>
                <li class="active">Chi tiết hóa đơn</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!-- Begin Kenne's Login Register Area -->
<div class="kenne-login-register_area">
    <div class="container">
        <div class="row">
            <div class="titleh3">
                <h3>Chi tiết hóa đơn</h3>
            </div>
            <table class="tbcthd">
                <thead>
                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Ngày đặt hàng</th>
                        <th>Phương thức thanh toán</th>
                        <th>Trạng thái hóa đơn</th>
                        <th>Trạng thái thanh toán</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $listhd = select_hoadon();
                    foreach($listhd as $lhd) {
                        extract($lhd);
                        $idfhd = $id_hd;
                        if($iduser == $_SESSION['username']['idacc'] && $idfhd == $_GET['idhd']) {
                            $tthoadon = $tonghd;
                            ?>
                            <tr>
                                <td>#
                                    <?= $idfhd ?>
                                </td>
                                <td>
                                    <?= $ngaydat ?>
                                </td>
                                <td>
                                    <?php
                                    if($pttt == 1) {
                                        echo "Thanh toán trực tiếp";
                                    } else if($pttt == 2) {
                                        echo "Thanh toán trước và bị bùng hàng!";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($trangthai == 0) {
                                        echo "Chờ xác nhận.";
                                    } else if($trangthai == 1) {
                                        echo "Đã xác nhận.";
                                    } else if($trangthai == 2) {
                                        echo "Đang chuẩn bị hàng.";
                                    } else if($trangthai == 3) {
                                        echo "Đang giao hàng.";
                                    } else if($trangthai == 4) {
                                        echo "Đã nhận hàng.";
                                    } else if($trangthai == 5) {
                                        echo "Đơn hàng bị hủy.";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($trangthaitt == 0) {
                                        echo "Chưa thanh toán.";
                                    } else if($trangthaitt == 1) {
                                        echo "Đã thanh toán.";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php }
                    }
                    ?>
                </tbody>
            </table>
            <table class="tbcthd">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Size</th>
                        <th>Giá (VND)</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền (VND)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $listbhd = select_billhoadon();
                    foreach($listbhd as $lbhd) {
                        extract($lbhd);
                        if($_GET['idhd'] == $idhd) {
                            $linksp = "index.php?act=sanphamct&idsp=".$idspcart;
                            ?>
                            <tr>
                                <td>
                                    <a href="<?= $linksp ?>">
                                        <?= $tspcart ?>
                                    </a>
                                </td>
                                <td>
                                    <?= $sizespcart ?>
                                </td>
                                <td>
                                    <?= number_format((int)$gspcart, 0, ",", ".") ?>
                                </td>
                                <td>
                                    <?= $soluongspcart ?>
                                </td>
                                <td>
                                    <?= number_format((int)$tongtien, 0, ",", ".") ?>
                                </td>
                            </tr>
                        <?php }
                    }
                    ?>
                    <tr>
                        <td colspan="4">
                            <h6>Tổng tiền thanh toán (VND):</h6>
                        </td>
                        <td>
                            <?= number_format((int)$tthoadon, 0, ",", ".") ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Kenne's Login Register Area  End Here -->