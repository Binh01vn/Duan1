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
                                <th class="border-top-0">Mã sản phẩm</th>
                                <th class="border-top-0">Tên sản phẩm</th>
                                <th class="border-top-0">Ảnh sản phẩm</th>
                                <th class="border-top-0">Size</th>
                                <th class="border-top-0">Số lượng</th>
                                <th class="border-top-0">Giá</th>
                                <th class="border-top-0">Xóa &#160; || &#160; Sửa</th>
                                <th class="border-top-0">
                                    <a href="index.php?act=addsp">Thêm</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsp as $list) {
                                extract($list);
                                ?>
                                <tr>
                                    <td>
                                        <?= $masp ?>
                                    </td>
                                    <td>
                                        <?= $name_sp ?>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?= $soluong ?>
                                    </td>
                                    <td>
                                        <?= $gia ?>
                                    </td>
                                    <td>
                                        <i class="fas fa-trash-alt">&#160; &#160; &#160; &#160;||&#160; &#160; &#160;
                                            &#160;<i class="fas fa-edit">
                                    </td>
                                </tr>

                            <?php } ?>
                            <!-- <tr>
                                <td>1</td>
                                <td>Deshmukh</td>
                                <td>@Genelia</td>
                                <td>23223334 VND</td>
                                <td>Còn 12.212 SP</td>
                                <td>
                                    <i class="fas fa-trash-alt">&#160; &#160; &#160; &#160;||&#160; &#160; &#160;
                                        &#160;<i class="fas fa-edit">
                                </td>
                            </tr> -->
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