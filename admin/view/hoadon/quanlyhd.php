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
                                <th class="border-top-0">Người đặt hàng</th>
                                <th class="border-top-0">Số điện thoại</th>
                                <th class="border-top-0">Địa chỉ</th>
                                <th class="border-top-0">Ngày đặt hàng</th>
                                <th class="border-top-0">Trạng thái</th>
                                <th class="border-top-0">Tổng hóa đơn</th>
                                <th class="border-top-0">Cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listhd as $lhd){
                                extract($lhd); 
                                $linkcn = "index.php?act=cnhd&idhd=".$id_hd;
                                foreach($listusers as $lus){
                                    extract($lus);
                                    if($idacc == $iduser){?>
                                <tr>
                                    <td>#<?= $id_hd ?></td>
                                    <td><?= $tensohuu ?></td>
                                    <td><?= $phone ?></td>
                                    <td><?= $diachi ?></td>
                                    <td><?= $ngaydat ?></td>
                                    <td>
                                        <?php
                                        if($trangthai == 0) {
                                            echo "Chờ xác nhận.";
                                        } else if($trangthai == 1) {
                                            echo "Đã xác nhận.";
                                        } else if($trangthai == 2) {
                                            echo "Đang giao hàng.";
                                        } else if($trangthai == 3) {
                                            echo "Đã thanh toán.";
                                        } else if($trangthai == 4) {
                                            echo "Đã nhận hàng.";
                                        }
                                        ?>
                                    </td>
                                    <td><?= number_format((int)$tonghd, 0, ",", ".") ?></td>
                                    <td>
                                    <a href="<?= $linkcn ?>" class="fas fa-edit"></a>
                                    </td>
                                </tr>
                            <?php }
                                        } }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->