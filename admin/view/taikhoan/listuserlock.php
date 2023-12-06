<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Danh sách tài khoản</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Họ và tên</th>
                                <th class="border-top-0">Username</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Số điện thoại</th>
                                <th class="border-top-0">Địa chỉ</th>
                                <th class="border-top-0">Mở</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listusers as $lus) {
                                extract($lus);
                                if($ttacc == 1) {
                                    $moacc = "index.php?act=moacc&idacc=".$idacc;
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $tensohuu ?>
                                        </td>
                                        <td>
                                            <?= $username ?>
                                        </td>
                                        <td>
                                            <?= $email ?>
                                        </td>
                                        <td>+84
                                            <?= $phone ?>
                                        </td>
                                        <td>
                                            <?= $diachi ?>
                                        </td>
                                        <td>
                                            <a href="<?= $moacc ?>" class="fas fa-lock-open"></a>
                                        </td>
                                    </tr>
                                <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="form-group mb-4">
                    <div class="col-sm-12">
                        <a class="btn btn-success" href="index.php?act=listuser">Danh sách tài khoản</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
    <!-- Right sidebar -->
    <!-- .right-sidebar -->
    <!-- End Right sidebar -->
</div>
<!-- End Container fluid  -->