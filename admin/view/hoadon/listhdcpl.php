<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="tkandlink">
                    <form action="" method="post">
                        <input type="text" name="kyc" placeholder="Tìm kiếm theo mã hóa đơn">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                    <select name="sgia" id="" class="slts">
                        <option value="1000000">Trên 1 triệu</option>
                        <option value="2000000">Trên 2 triệu</option>
                        <option value="5000000">Trên 5 triệu</option>
                    </select>
                    <ul>
                        <li><a href="index.php?act=qlhoadon">Danh sách hóa đơn</a></li>
                    </ul>
                </div>
                <h3 class="box-title">Danh sách hóa đơn</h3>

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Mã hóa đơn</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Ngày</th>
                                <th class="border-top-0">Tổng hóa đơn</th>
                                <th class="border-top-0">Trạng thái đơn</th>
                                <th class="border-top-0">Trạng thái thanh toán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listhd as $lhd) {
                                extract($lhd);
                                foreach($listusers as $lus) {
                                    extract($lus);
                                    if($idacc == $iduser && $trangthai == 4 && $trangthaitt == 1) { ?>
                                        <tr>
                                            <td>#-<?= $id_hd ?>
                                            </td>
                                            <td>
                                                <?= $email ?>
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