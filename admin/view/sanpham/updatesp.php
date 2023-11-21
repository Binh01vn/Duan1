<?php
if (is_array($listsp)) {
    extract($listsp);
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="box-title">Cập nhật sản phẩm</h3>
                    <form class="form-horizontal form-material" action="index.php?act=updatesp" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Tên sản phẩm</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0" name="tensp"
                                    value="<?= $tensp ?>">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Ảnh sản phẩm</label>
                            <div class="col-md-12 border-bottom p-0">
                                <?php
                                if (is_array($img_sp)) {
                                    extract($img_sp);
                                    $imgpath = "../view/assets/images/product/" . $imgsp;
                                    if (is_file($imgpath)) {
                                        $img = "<img src='" . $imgpath . "' width='250px'>";
                                    } else {
                                        $img = "Không có hình upload";
                                    }
                                    echo $img;
                                } else {
                                    echo "ko tồn tại mảng";
                                }
                                ?>
                            </div>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="file" name="imgsp">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Size sản phẩm</label>
                            <div class="col-md-12 border-bottom p-0">
                                <?php
                                foreach ($listsize as $lsz) {
                                    extract($lsz);
                                    if ($idsp == $id_sp) {
                                        echo '<input type="number" name="sizesp" value="'.$sizesp.'">';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Giá</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" class="form-control p-0 border-0" name="giasp" value="<?= $giasp ?>">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Số lượng sản phẩm</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" class="form-control p-0 border-0" name="soluongsp"
                                    value="<?= $soluongsp ?>">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-sm-12">Danh mục</label>
                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0 form-control-line" name="id_dm">
                                    <?php
                                    foreach ($listdm as $dm) {
                                        extract($dm);
                                        if ($iddm == $id_dm) {
                                            $slt = "selected";
                                        } else {
                                            $slt = "";
                                        }
                                        echo '<option value="' . $id_dm . '" ' . $slt . '>' . $tendm . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Mô tả</label>
                            <div class="col-md-12 border-bottom p-0">
                                <?php extract($listsp) ?>
                                <textarea rows="5" class="form-control p-0 border-0" name="motasp"><?= $motasp ?></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <input class="btn btn-success" name="capnhat" type="submit" value="Cập nhật">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>