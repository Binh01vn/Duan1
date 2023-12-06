<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Danh sách hóa đơn</h3>
                
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">MÃ hóa đơn</th>
                                <th class="border-top-0">Số điện thoại</th>
                                <th class="border-top-0">Ngày</th>
                                <th class="border-top-0">Tổng hóa đơn</th>
                                <th class="border-top-0">Trạng thái đơn</th>
                                <th class="border-top-0">Trạng thái thanh toán</th>
                                <th class="border-top-0">Cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listhd as $lhd) {
                                extract($lhd);
                                $linkcn = "index.php?act=cnhd&idhd=".$id_hd;
                                foreach($listusers as $lus) {
                                    extract($lus);
                                    if($idacc == $iduser) { ?>
                                        <tr>
                                            <td>#
                                                <?= $id_hd ?>
                                            </td>
                                            <td>
                                                <?= $phone ?>
                                            </td>
                                            <td>
                                                <?= $ngaydat ?>
                                            </td>

                                            <td>
                                                <?= number_format((int)$tonghd, 0, ",", ".") ?>
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
                                                    echo '<b style="color: green;">Đã nhận hàng.</b>';
                                                } else if($trangthai == 5) {
                                                    echo '<div style="color: red;">Đơn hàng bị hủy.</div>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if($trangthaitt == 0) {
                                                    echo '<div style="color: red;">Chưa thanh toán.</div>';
                                                } else if($trangthaitt == 1) {
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