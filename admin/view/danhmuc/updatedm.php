<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <h3 class="box-title">Cập nhật danh mục</h3>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="index.php?act=updatedm" method="POST">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Tên danh mục</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0" name="tendm"
                                placeholder="<?php if (isset($tendm) && $tendm != "") echo $tendm; ?>">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <input type="hidden" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>" name="id">
                                <input class="btn btn-success" type="submit" name="capnhat" value="Cập nhật">
                            </div>
                        </div>
                    </form>
                    
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <a href="index.php?act=listdm" class="btn btn-success">Danh sách</a>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </div>
        </div>
    </div>
</div>