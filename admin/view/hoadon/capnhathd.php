<?php
foreach($listhd as $lhd) {
    extract($lhd);
    if($id_hd == $_GET['idhd']) {
        $idHD = $id_hd;
        $idact = $iduser;
        if($trangthai == 4) {
            $s = "selected";
        } else {
            $s = "";
        }
        foreach($listusers as $lus) {
            extract($lus);
            if($idacc == $idact) {
                $dcdh = $diachi;
                $tsh = $tensohuu;
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
                            <label class="col-md-12 p-0">Người đặt hàng</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?= $tsh ?>" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Địa chỉ giao hàng</label>
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
                                    <option value="4" <?php if(isset($s) && $s != "")
                                        echo $s; ?>>Đã nhận hàng</option>
                                    <option value="5">Đơn hàng bị hủy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Trang thái thanh toán</label>
                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0" name="trangthaitt">
                                    <option value="0" selected>Chưa thanh toán</option>
                                    <option value="1">Đã thanh toán</option>
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
        <!-- Column -->
    </div>
    <!-- Row -->
</div>
<!-- End Container fluid  -->