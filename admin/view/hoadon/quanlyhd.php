<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="tkandlink">
                    <form action="index.php?act=qlhoadon" method="post">
                        <select name="sgia" class="slts">
                            <option value="0">Tất cả</option>
                            <option value="1000000">Trên 1.000.000</option>
                            <option value="2000000">Trên 2.000.000</option>
                            <option value="5000000">Trên 5.000.000</option>
                            <option value="10000000">Trên 10.000.000</option>
                        </select>
                        <input type="text" name="kyc" placeholder="Tìm kiếm theo mã hóa đơn">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                    <ul>
                        <li><a href="index.php?act=listhdcpl">Danh sách hóa đơn đã hoàn thành</a></li>
                    </ul>
                </div>
                <h3 class="box-title">Danh sách hóa đơn</h3>

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Mã hóa đơn</th>
                                <th class="border-top-0">Khách hàng</th>
                                <th class="border-top-0">Ngày</th>
                                <th class="border-top-0">Tổng hóa đơn</th>
                                <th class="border-top-0">Trạng thái đơn</th>
                                <th class="border-top-0">Trạng thái thanh toán</th>
                                <th class="border-top-0">Cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listhd as $lhd) {
                                extract($lhd);
                                $linkcn = "index.php?act=cnhd&idhd=" . $id_hd;
                                foreach ($listusers as $lus) {
                                    extract($lus);
                                    if ($idacc == $iduser && $trangthai != 4) { ?>
                                        <tr>
                                            <td>#-
                                                <?= $id_hd ?>
                                            </td>
                                            <td>
                                                <?= $tensohuu ?>
                                            </td>
                                            <td>
                                                <?= $ngaydat ?>
                                            </td>

                                            <td>
                                                <?= number_format((int) $tonghd, 0, ",", ".") ?>
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
                                            <td>
                                                <a href="<?= $linkcn ?>" class="fas fa-edit"></a>
                                            </td>
                                        </tr>
                                    <?php }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->