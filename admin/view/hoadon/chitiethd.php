<div class="container-fluid">
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
                                    echo "Thanh toán MOMO";
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
</div>