<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="index.php?act=addsize_img" method="POST"
                        enctype="multipart/form-data">

                        <div class="form-group mb-4">
                            <label class="col-sm-12">Size sản phẩm</label>

                            <div class="col-sm-12 border-bottom">
                                <div id="themmoi" class="bosung2"></div>
                            </div>
                            <button type="button" onclick="addSize()" class="btn btn-success">Thêm size</button>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Hình ảnh</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="file" name="img_sp">
                            </div>
                        </div>
                        <?php
                        $layidsp = preview_sp();
                        foreach ($layidsp as $list) {
                            extract($list);
                            echo '<input type="hidden" name="idsp" value="' . $id . '">';
                        }
                        ?>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <input class="btn btn-success" type="reset"
                                    value="Xóa tất cả thông tin đã nhập">&#160;-- HOẶC --&#160;
                                <input class="btn btn-success" name="hoanthanh" type="submit" value="Hoàn thành">
                            </div>
                        </div>
                    </form>
                    <script>
                        function addSize() {
                            var themmoi = document.getElementById("themmoi");
                            var input = document.createElement("input");
                            input.className = 'class="form-control p-0 border-0"';
                            input.type = "number";
                            input.name = "size_sp[]";
                            input.required = true;
                            themmoi.appendChild(input);
                        }
                    </script>
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