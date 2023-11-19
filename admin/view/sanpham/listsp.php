<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Danh sách sản phẩm</h3>

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Mã</th>
                                <th class="border-top-0">Tên sản phẩm</th>
                                <th class="border-top-0">Ảnh sản phẩm</th>
                                <th class="border-top-0">Số lượng</th>
                                <th class="border-top-0">Giá</th>
                                <th class="border-top-0">Tình trang</th>
                                <th class="border-top-0">Sửa</th>
                                <th class="border-top-0">Xóa</th>
                                <th class="border-top-0">
                                    <a href="index.php?act=addsp">Thêm</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsp as $list) {
                                extract($list);
                                $editsp = "index.php?act=editsp&id=" . $id;
                                $delsp = "index.php?act=delsp&id=" . $id;
                                $imgpath = "../view/assets/images/product/" . $img_sp;
                                if (is_file($imgpath)) {
                                    $img = "<img src='" . $imgpath . "' width='200px'>";
                                } else {
                                    $img = "Không có hình upload";
                                }
                                ?>
                                <tr>
                                    <td>
                                        <?= $masp ?>
                                    </td>
                                    <td>
                                        <?= $name_sp ?>
                                    </td>
                                    <td>
                                        <?= $img ?>
                                    </td>
                                    <td>
                                        <?= $soluong ?>
                                    </td>
                                    <td>
                                        <?= $gia ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($soluong > 0) {
                                            echo "Còn hàng";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?= $editsp ?>" class="fas fa-edit"></a>
                                    </td>
                                    <td>
                                        <a href="<?= $delsp ?>" class="fas fa-trash-alt"></a>
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