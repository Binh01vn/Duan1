<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="white-box">
        <h3 class="box-title">Thống kê sản phẩm theo danh mục</h3>
        <div class="table-responsive">
          <table class="table text-nowrap">
            <thead>
              <tr>
                <th class="border-top-0">#</th>
                <th class="border-top-0">Tên danh mục</th>
                <th class="border-top-0">Số lượng sản phẩm</th>
                <th class="border-top-0">Giá nhỏ nhất</th>
                <th class="border-top-0">Giá lớn nhất</th>
                <th class="border-top-0">Giá trung bình</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($dsthongke as $thongke) {
                extract($thongke);
                ?>
                <tr>
                  <td>
                    <?php echo $id_dm ?>
                  </td>
                  <td>
                    <?php echo $tendm ?>
                  </td>
                  <td>
                    <?php echo $soluongsp ?>
                  </td>
                  <td> $
                    <?php echo number_format((int) $gia_min, 0, ",", ".") ?>
                  </td>
                  <td>$
                    <?php echo number_format((int) $gia_max, 0, ",", ".") ?>
                  </td>
                  <td>$
                    <?php echo number_format((int) $gia_avg, 0, ",", ".") ?>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="form-group mb-4">
          <div class="col-sm-12">
            <a class="btn btn-success" href="index.php?act=listuserlock">Danh sách thống kê doanh thu</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>