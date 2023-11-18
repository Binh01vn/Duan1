<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Danh sách danh mục</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Mã</th>
                                <th class="border-top-0">Tên loại</th>
                                <th class="border-top-0">Sửa</th>
                                <th class="border-top-0">Xóa</th>
                                <th class="border-top-0">
                                    <a href="index.php?act=adddm">Thêm</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listdm as $list) {
                                extract($list);
                                $editdm = "index.php?act=editdm&id=" . $id;
                                $deldm = "index.php?act=deldm&id=" . $id;
                                echo '
                                    <tr>
                                        <td>' . $id . '</td>
                                        <td>' . $name . '</td>
                                        <td>
                                            <a href="'.$editdm.'" class="fas fa-edit"></a>
                                        </td>
                                        <td>
                                            <a href="'.$deldm.'" class="fas fa-trash-alt"></a>
                                        </td>
                                    </tr>
                                    ';
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