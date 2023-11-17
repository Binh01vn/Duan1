<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="box-title">Thêm sản phẩm</h3>
                    <form class="form-horizontal form-material" action="index.php?act=addsp" method="POST"
                        enctype="multipart/form-data">

                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Tên sản phẩm</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0" required name="name_sp">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Giá</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" class="form-control p-0 border-0" name="gia" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Số lượng sản phẩm</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" class="form-control p-0 border-0" name="soluong" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-sm-12">Danh mục</label>

                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0 form-control-line" name="id_dm"
                                    required>
                                    <option selected>------ Chọn danh mục</option>
                                    <?php
                                    foreach ($listdm as $list) {
                                        extract($list);
                                        echo '<option value="' . $id . '">' . $name . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-sm-12">Size sản phẩm</label>

                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0 form-control-line" name="id_size"
                                    required>
                                    <option selected>------ Chọn size</option>
                                    <?php
                                    foreach ($listsize as $list) {
                                        extract($list);
                                        echo '<option value="' . $id . '">' . $size_sp . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Hình ảnh</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="file" required name="imgsp">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Mô tả</label>
                            <div class="col-md-12 border-bottom p-0">
                                <textarea rows="5" class="form-control p-0 border-0" name="mota"></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <input class="btn btn-success" name="addnew" type="submit" value="Thêm sản phẩm">
                            </div>
                        </div>
                    </form>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <a href="index.php?act=listsp" class="btn btn-success">Danh sách</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>