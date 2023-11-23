<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Danh sách bình luận</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border-top-0">Mã</th>
                                <th class="border-top-0">Username</th>
                                <th class="border-top-0">Mã sản phẩm</th>
                                <th class="border-top-0">Nội dung bình luận</th>
                                <th class="border-top-0">Ngày bình luận</th>
                                <th class="border-top-0">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listbl as $lbl) {
                                extract($lbl);
                                $delbl = "index.php?act=delbl&id_bl=" . $id_bl;
                                ?>
                                <tr>
                                    <td>
                                        <?= $id_bl ?>
                                    </td>
                                    <td>
                                        <b><?= $username ?></b>
                                    </td>
                                    <td>
                                        <?= $masp ?>
                                    </td>
                                    <td class="bstmota">
                                        <?= $noidungbl ?>
                                    </td>
                                    <td>
                                        <?= $ngaybl ?>
                                    </td>
                                    <td>
                                        <a href="<?= $delbl ?>" class="fas fa-trash-alt"></a>
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