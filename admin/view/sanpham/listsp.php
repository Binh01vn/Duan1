<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <form action="index.php?act=listsp" method="post" class="form-group mb-4">
                    <h3 class="box-title">Lọc sản phẩm theo</h3>
                    <div class="col-sm-12 border-bottom">
                        <select class="form-select shadow-none p-0 border-0" name="id_dm">
                            <option selected value="0">Tất cả</option>
                            <?php
                            foreach($listdm as $list) {
                                extract($list);
                                echo '<option value="'.$id_dm.'">'.$tendm.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" class="form-control p-0 border-0" name="kyw">
                    </div>
                    <div class="col-sm-12">
                        <input class="btn btn-success" name="timkiem" type="submit" value="Tìm kiếm">
                    </div>
                </form>
                <h3 class="box-title">Danh sách sản phẩm</h3>

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">MÃ</th>
                                <th class="border-top-0">TÊN SẢN PHẨM</th>
                                <th class="border-top-0">ẢNH SẢN PHẨM</th>
                                <th class="border-top-0">SIZE</th>
                                <th class="border-top-0">SỐ LƯỢNG</th>
                                <th class="border-top-0">GIÁ</th>
                                <th class="border-top-0">TÌNH TRẠNG</th>
                                <th class="border-top-0">SỬA</th>
                                <th class="border-top-0">XÓA</th>
                                <th class="border-top-0">
                                    <a href="index.php?act=addsp">THÊM</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listsp as $list) {
                                extract($list);
                                $editsp = "index.php?act=editsp&id=".$idsp;
                                $delsp = "index.php?act=delsp&id=".$idsp;
                                $imgpath = "../view/assets/images/product/".$imgsp;
                                // if (is_file($imgpath)) {
                                $img = "<img src='".$imgpath."' width='170px'>";
                                // } else {
                                //     $img = "Không có hình upload";
                                // }
                                ?>
                                <tr>
                                    <td>
                                        <?= $masp ?>
                                    </td>
                                    <td>
                                        <b class="bosungtable">
                                            <?= $tensp ?>
                                        </b>
                                    </td>
                                    <td>
                                        <?= $img ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach($listsize as $ls) {
                                            extract($ls);
                                            if($id_sp == $idsp) {
                                                echo "| ".$sizesp." | <br>";
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?= $soluongsp ?>
                                    </td>
                                    <td>
                                        <?= $giasp ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($soluongsp > 0) {
                                            echo "Còn hàng";
                                        } else {
                                            echo "Hết hàng";
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
</div>
<!-- End Container fluid  -->