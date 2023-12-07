<?php
foreach ($listhd as $lhd) {
    extract($lhd);
    if ($id_hd == $_GET['idhd']) {
        $idHD = $id_hd;
        $idact = $iduser;
        $nd = $ngaydat;
        $thd = $tonghd;
        if ($trangthai == 4) {
            $s = "selected";
        } else {
            $s = "";
        }
        foreach ($listusers as $lus) {
            extract($lus);
            if ($idacc == $idact) {
                $dcdh = $diachi;
                $tsh = $tensohuu;
                $sdt = $phone;
                $mail = $email;
                $usn = $username;
            }
        }
    }
}
?>
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="index.php?act=cnhd" method="POST">
                        <input type="hidden" name="idHD" value="<?= $idHD ?>">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Mã hóa đơn</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="#<?= $idHD ?>" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Ngày đặt hàng</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?= $nd ?>" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Tổng tiền</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?= number_format((int) $thd, 0, ",", ".") ?> (VND)"
                                    class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Nơi nhận hàng</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?= $dcdh ?>" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Trang thái</label>
                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0" name="trangthain">
                                    <option value="0">Chờ xác nhận</option>
                                    <option value="1">Đã xác nhận</option>
                                    <option value="2">Đang chuẩn bị hàng</option>
                                    <option value="3">Đang giao hàng</option>
                                    <option value="4" <?php if (isset($s) && $s != "")
                                        echo $s; ?>>Đã nhận hàng</option>
                                    <option value="5">Đơn hàng bị hủy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success" type="submit" name="updatevaitro" value="vaitro">Cập
                                    nhật hóa đơn</button>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <a class="btn btn-success" href="index.php?act=qlhoadon">Danh sách hóa đơn</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box">
                <div class="user-bg">
                    <div class="overlay-box">
                        <div class="user-content">
                            <h4 class="text-white mt-2">
                                <?= $tsh ?>
                            </h4>
                            <h4 class="text-white mt-2">
                                <?= $usn ?>
                            </h4>
                            <h5 class="text-white mt-2">
                                <?= $mail ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box mt-5 d-md-flex">
                    <h3>Số điện thoại:
                        <?= $sdt ?>
                    </h3>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Chi tiết đơn hàng</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Sản phẩm</th>
                                <th class="border-top-0">Số lượng</th>
                                <th class="border-top-0">Size sản phẩm</th>
                                <th class="border-top-0">Đơn giá</th>
                                <th class="border-top-0">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listbhd = select_billhoadon();
                            foreach ($listbhd as $lbhd) {
                                extract($lbhd);
                                if ($_GET['idhd'] == $idhd) { ?>
                            <tr>
                                <td><?= $tspcart ?></td>
                                <td><?= $soluongspcart ?></td>
                                <td><?= $sizespcart ?></td>
                                <td><?= number_format((int) $gspcart, 0, ",", ".") ?></td>
                                <td><?= number_format((int) $tongtien, 0, ",", ".") ?></td>
                            </tr>
                            <?php }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>
<!-- End Container fluid  -->