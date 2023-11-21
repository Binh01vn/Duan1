<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="box-title">Thêm sản phẩm</h3>
                    <form class="form-horizontal form-material" action="index.php?act=addsp" method="POST">

                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Tên sản phẩm</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0" name="tensp">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Giá</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" class="form-control p-0 border-0" name="giasp">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Số lượng sản phẩm</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" class="form-control p-0 border-0" name="soluongsp">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-sm-12">Danh mục</label>
                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0 form-control-line" name="id_dm">
                                    <option selected>Chọn danh mục</option>
                                    <?php
                                    foreach ($listdm as $list) {
                                        extract($list);
                                        echo '<option value="' . $id_dm . '">' . $tendm . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Mô tả</label>
                            <div class="col-md-12 border-bottom p-0">
                                <textarea rows="5" class="form-control p-0 border-0" name="motasp"></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <input class="btn btn-success" type="reset" value="Nhập lại">&#160;--- hoặc ---&#160;
                                <input class="btn btn-success" name="adddl" type="submit" value="Upload ảnh và thêm Size">
                            </div>
                        </div>
                    </form>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <a href="index.php?act=listsp" class="btn btn-success">Danh sách sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>