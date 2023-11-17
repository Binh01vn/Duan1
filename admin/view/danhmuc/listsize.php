<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Danh sách size sản phẩm</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Size sản phẩm</th>
                                <th class="border-top-0">Xóa</th>
                                <th class="border-top-0">
                                    <a href="index.php?act=addsize">Thêm</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsize as $list) {
                                extract($list);
                                $delsize = "index.php?act=delsize&id=" . $id;
                                echo '
                                    <tr>
                                        <td>' . $size_sp . '</td>
                                        <td>
                                            <a href="'.$delsize.'" class="fas fa-trash-alt"></a>
                                        </td>
                                    </tr>
                                    ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <a href="index.php?act=listdm"><h3 class="box-title">Danh sách danh mục</h3></a>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->