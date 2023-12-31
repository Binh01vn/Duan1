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
                                <th class="border-top-0">IDDM</th>
                                <th class="border-top-0">TÊN DANH MỤC</th>
                                <th class="border-top-0">SỬA</th>
                                <th class="border-top-0">XÓA</th>
                                <th class="border-top-0">
                                    <a href="index.php?act=adddm">THÊM</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listdm as $list) {
                                extract($list);
                                $editdm = "index.php?act=editdm&id=" . $id_dm;
                                $deldm = "index.php?act=deldm&id=" . $id_dm;
                                echo '
                                    <tr>
                                        <td>' . $id_dm . '</td>
                                        <td>' . $tendm . '</td>
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