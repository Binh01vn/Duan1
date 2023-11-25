<?php
foreach($listusers as $sq) {
    extract($sq);
    if($idacc == $_GET['idacc']) {
        $idact = $idacc;
        $tenact = $tensohuu;
        $useract = $username;
        $mailact = $email;
        $passact = $pass;
        $diachiact = $diachi;
        $phoneact = $phone;
        $roleact = $vaitro;
    }
}
?>
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box">
                <div class="user-bg">
                    <!-- BACKGROUND -->
                    <img width="100%" alt="user" src="view/plugins/images/large/img1.jpg">
                    <div class="overlay-box">
                        <div class="user-content">
                            <img src="view/plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img">
                            <h4 class="text-white mt-2">
                                <?= $useract ?>
                            </h4>
                            <h5 class="text-white mt-2">
                                <?= $mailact ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="POST" action="index.php?act=suaquyen">
                        <input type="hidden" value="<?= $idact ?>" name="idact">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Vai trò hiện tại (Nhập 1=admin <u>hoặc</u> để trống nếu là
                                account người dùng)</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" name="vaitroact" value="<?= $roleact ?>" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Họ và tên</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?= $tenact ?>" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Số điện thoại</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" value="<?= $phoneact ?>" class="form-control p-0 border-0"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success" type="submit" name="updatevaitro" value="vaitro">Cập
                                    nhật vai trò</button>
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