<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="titleh3">
                    <h3>Chi tiết hóa đơn</h3>
                </div>
                <div class="table-responsive">
                    <table class="tbcthd">
                        <thead>
                            <tr>
                                <th>Mã hóa đơn</th>
                                <th>Ngày đặt hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Trạng thái đơn hàng</th>
                                <th>Trạng thái thanh toán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listhd = select_hoadon(null, null);
                            foreach ($listhd as $lhd) {
                                extract($lhd);
                                $idfhd = $id_hd;
                                if ($idfhd == $_GET['idhd']) {
                                    $tthoadon = $tonghd;
                                    $trangthaihd = $trangthai;
                                    $trangthai_tt = $trangthaitt;
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
                                            if ($pttt == 1) {
                                                echo "Thanh toán trực tiếp";
                                            } else if ($pttt == 2) {
                                                echo "Thanh toán QR MOMO";
                                            } else if ($pttt == 3) {
                                                echo "Thanh toán ATM MOMO";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($trangthai == 0) {
                                                echo "Chờ xác nhận.";
                                            } else if ($trangthai == 1) {
                                                echo "Đã xác nhận.";
                                            } else if ($trangthai == 2) {
                                                echo "Đang chuẩn bị hàng.";
                                            } else if ($trangthai == 3) {
                                                echo "Đang giao hàng.";
                                            } else if ($trangthai == 4) {
                                                echo '<b style="color: green;">Đã nhận hàng.</b>';
                                            } else if ($trangthai == 5) {
                                                echo '<div style="color: red;">Đơn hàng bị hủy.</div>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($trangthaitt == 0) {
                                                echo '<div style="color: red;">Chưa thanh toán.</div>';
                                            } else if ($trangthaitt == 1) {
                                                echo '<b style="color: green;">Đã thanh toán.</b>';
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
                            foreach ($listbhd as $lbhd) {
                                extract($lbhd);
                                if ($_GET['idhd'] == $idhd) {
                                    $idfhd = $idhd;
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $tspcart ?>
                                        </td>
                                        <td>
                                            <?= $sizespcart ?>
                                        </td>
                                        <td>
                                            <?= number_format((int) $gspcart, 0, ",", ".") ?>
                                        </td>
                                        <td>
                                            <?= $soluongspcart ?>
                                        </td>
                                        <td>
                                            <?= number_format((int) $tongtien, 0, ",", ".") ?>
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
                                    <?= number_format((int) $tthoadon, 0, ",", ".") ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group mb-4">
                    <div class="col-sm-12">
                        <a class="btn btn-success" href="index.php?act=qlhoadon">Danh sách hóa đơn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>