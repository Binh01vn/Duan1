<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">My Account</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!-- Begin Kenne's Page Content Area -->
<main class="page-content">
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                        <?php
                        if(isset($_SESSION['username'])) {
                            extract($_SESSION['username']);
                        } else {
                            header('Location: ?act=sigorreg');
                            die();
                        } ?>
                        <li class="nav-item">
                            <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab"
                                href="#account-dashboard" role="tab" aria-controls="account-dashboard"
                                aria-selected="true">Bảng điều khiển</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders"
                                role="tab" aria-controls="account-orders" aria-selected="false">Hóa đơn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-address-tab" data-bs-toggle="tab" href="#account-address"
                                role="tab" aria-controls="account-address" aria-selected="false">Địa chỉ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details"
                                role="tab" aria-controls="account-details" aria-selected="false">Chi tiết tài khoản</a>
                        </li>
                        <?php if($vaitro == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin/index.php">Truy cập trang quản trị</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" id="account-logout-tab" href="index.php?act=logout" role="tab"
                                aria-selected="false">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                            aria-labelledby="account-dashboard-tab">
                            <div class="myaccount-dashboard">
                                <p>Xin chào <b>
                                        <?= $tensohuu ?>
                                    </b> (không phải <b>
                                        <?= $tensohuu ?>
                                    </b>? <a href="index.php?act=logout" class="bosung1">Đăng xuất
                                    </a>)</p>
                                <p>Từ bảng điều khiển bạn có thể xem thông tin tài khoản, đơn hàng gần đây, quản lý
                                    địa chỉ giao hàng hoặc cập nhật
                                    thông tin tài khoản của bạn tại phần chi tiết tài khoản.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-orders" role="tabpanel"
                            aria-labelledby="account-orders-tab">
                            <div class="myaccount-orders">
                                <h4 class="small-title">HÓA ĐƠN CỦA BẠN</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Mã hóa đơn</th>
                                                <th>Ngày đặt hàng</th>
                                                <th>Trạng thái</th>
                                                <th>Tổng tiền</th>
                                                <th></th>
                                            </tr>
                                            <?php
                                            $listhd = select_hoadon();
                                            foreach($listhd as $lhd) {
                                                extract($lhd);
                                                if($iduser == $_SESSION['username']['idacc']) { 
                                                    $linkhd = "index.php?act=tdhd&idhd=".$id_hd;?>


                                                    <tr>
                                                        <td><a class="account-order-id" href="">#
                                                                <?= $id_hd ?>
                                                            </a></td>
                                                        <td>
                                                            <?= $ngaydat ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($trangthai == 0) {
                                                                echo "Chờ xác nhận.";
                                                            } else if($trangthai == 1) {
                                                                echo "Đã xác nhận và.";
                                                            } else if($trangthai == 2) {
                                                                echo "Đang giao hàng.";
                                                            } else if($trangthai == 3) {
                                                                echo "Đã thanh toán.";
                                                            } else if($trangthai == 4) {
                                                                echo "Đã nhận hàng.";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?= number_format((int)$tonghd, 0, ",", ".") ?></td>
                                                        <td><a href="<?= $linkhd ?>" class="kenne-btn kenne-btn_sm"><span>Xem</span></a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-address" role="tabpanel"
                            aria-labelledby="account-address-tab">
                            <div class="myaccount-address">
                                <p>Các địa chỉ sau sẽ là địa chỉ mặc định trong thông tin tài khoản của bạn.</p>
                                <div class="row">
                                    <div class="col">
                                        <h4 class="small-title">Địa chỉ nhận hóa đơn</h4>
                                        <address>
                                            <?= $diachi ?>
                                        </address>
                                    </div>
                                    <div class="col">
                                        <h4 class="small-title">Địa chỉ giao hàng</h4>
                                        <address>
                                            <?= $diachi ?>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-details" role="tabpanel"
                            aria-labelledby="account-details-tab">
                            <div class="myaccount-details">
                                <form action="index.php?act=capnhattt" class="kenne-form" method="POST">
                                    <input type="hidden" name="idtk" value="<?= $idacc ?>">
                                    <div class="kenne-form-inner">
                                        <div class="single-input single-input-half">
                                            <label for="account-details-firstname">Họ và tên</label>
                                            <input type="text" id="account-details-firstname" value="<?= $tensohuu ?>"
                                                name="tennew">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label for="account-details-firstname">Username</label>
                                            <input type="text" id="account-details-firstname" value="<?= $username ?>"
                                                name="usernew">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-email">Email</label>
                                            <input type="email" id="account-details-email" value="<?= $email ?>"
                                                name="emailnew">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-email">Số điện thoại</label>
                                            <input type="tel" value="<?= $phone ?>" name="telnew">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-email">Địa chỉ</label>
                                            <input type="text" value="<?= $diachi ?>" name="diachinew">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-newpass">Mật khẩu mới (Để chống hoặc không thay
                                                đổi)</label>
                                            <input type="password" id="account-details-newpass" name="passnew">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-confpass">Xác nhận mật khẩu mới</label>
                                            <input type="password" id="account-details-confpass" name="xnpassnew">
                                            <label>
                                                <?php
                                                if(isset($tb) && !empty($tb)) {
                                                    echo $tb;
                                                }
                                                ?>
                                            </label>
                                        </div>
                                        <div class="single-input">
                                            <button class="kenne-btn kenne-btn_dark" type="submit" name="updateacc"
                                                value="luuthaydoi"><span>Lưu thay
                                                    đổi</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kenne's Account Page Area End Here -->
</main>