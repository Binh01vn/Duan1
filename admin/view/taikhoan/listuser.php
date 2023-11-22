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
                                <th class="border-top-0">Vai trò</th>
                                <th class="border-top-0">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listusers as $lus){
                                extract($lus); 
                                $delacc = "index.php?act=delacc&idacc=" . $idacc;
                                ?>
                            <tr>
                                <td><?= $tensohuu ?></td>
                                <td><?= $username ?></td>
                                <td><?= $email ?></td>
                                <td><?= $phone ?></td>
                                <td><?= $diachi ?></td>
                                <td>
                                    <?php
                                    if($vaitro == 1){
                                        echo "admin";
                                    }else if($vaitro == 2){
                                        echo "Nhân viên";
                                    }else if($vaitro != 1 && $vaitro != 2){
                                        echo "Người dùng";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= $delacc ?>" class="fas fa-trash-alt"></a>
                                    </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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