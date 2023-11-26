<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <h3 class="box-title">Thêm danh mục sản phẩm</h3>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="index.php?act=adddm" method="POST">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Tên danh mục</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0" name="tendm">
                            </div>
                        </div>
                        <?php
                        if (isset($thongbao) && $thongbao != "") {
                            echo '<label class="col-md-12 p-0"><b>' . $thongbao . '</b></label>';
                        }
                        ?>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <input class="btn btn-success" type="submit" name="themdm" value="Thêm danh mục">
                            </div>
                        </div>
                    </form>

                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <a href="index.php?act=listdm" class="btn btn-success">Danh sách danh mục</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>