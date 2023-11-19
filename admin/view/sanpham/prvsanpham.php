<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Thông tin cơ bản</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Mã sản phẩm</th>
                                <th class="border-top-0">Tên sản phẩm</th>
                                <th class="border-top-0">Mô tả</th>
                                <th class="border-top-0">Giá</th>
                                <th class="border-top-0">Số lượng</th>
                                <th class="border-top-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $prvsp = list_spmn();
                            foreach ($prvsp as $prv) {
                                extract($prv);
                                $addimg_size = "index.php?act=addsize_img&id=" . $id;
                                echo '
                                <tr>
                                    <td>'.$masp.'</td>
                                    <td>'.$tensp.'</td>
                                    <td>'.$motasp.'</td>
                                    <td>'.$giasp.'</td>
                                    <td>'.$soluongsp.'</td>
                                    <td>
                                        <a href="' . $addimg_size . '" class="btn btn-success"> Thêm ảnh và size </a> 
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
    <!-- End PAge Content -->
    <!-- Right sidebar -->
    <!-- .right-sidebar -->
    <!-- End Right sidebar -->
</div>
<!-- End Container fluid  -->