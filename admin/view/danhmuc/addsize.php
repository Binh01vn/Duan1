<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <h3 class="box-title">Thêm size sản phẩm</h3>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="index.php?act=addsize" method="POST">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Nhập số size</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="number" class="form-control p-0 border-0" name="sosize">
                            </div>
                            <?php
                            if (isset($thongbao) && ($thongbao != "")){
                                echo '<label class="col-md-12 p-0">'.$thongbao.'</label>';
                            }
                            ?>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <input class="btn btn-success" type="submit" name="addsize" value="Thêm size">
                            </div>
                        </div>
                    </form>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <a href="index.php?act=listsize" class="btn btn-success">Danh sách</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>