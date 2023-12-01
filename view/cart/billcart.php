<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=wlandac">Giỏ hàng</a></li>
                <li class="active">Thanh toán đơn hàng</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!-- Begin Kenne's Login Register Area -->
<?php
if(isset($_SESSION['username'])) {
    extract($_SESSION['username']);
} else {
    header('Location: ?act=sigorreg');
    die();
}
?>
<div class="kenne-login-register_area">
    <div class="container">
        <form class="row" action="index.php?act=thanhtoan" method="post">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <div>
                    <input type="hidden" name="iduser" value="<?= $idacc ?>">
                    <div class="login-form">
                        <h4 class="login-title">Thông tin khách hàng</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb--20">
                                <label>Họ và tên</label>
                                <input type="text" placeholder="<?= $tensohuu ?>" disabled>
                            </div>
                            <div class="col-md-6 col-12 mb--20">
                                <label>Username</label>
                                <input type="text" placeholder="<?= $username ?>" disabled>
                            </div>
                            <div class="col-md-12">
                                <label>Địa chỉ</label>
                                <input type="text" placeholder="<?= $diachi ?>" name="diachi">
                            </div>
                            <div class="col-md-6">
                                <label>Số điện thoại</label>
                                <input type="number" placeholder="<?= $phone ?>" disabled>
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" placeholder="<?= $email ?>" disabled>
                            </div>
                            <div class="col-12">
                                <label>Phương thức thanh toán*</label>
                                <select name="pttt">
                                    <option value="1">Thanh toán trực tiếp</option>
                                    <option value="2">Thanh toán VNPAY</option>
                                </select>
                                <input type="hidden" name="trangthai" value="0">
                            </div>
                            <div class="col-12">
                                <button class="kenne-register_btn" type="submit" name="xndh" value="xacnhan">Xác nhận
                                    đặt</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                <div>
                    <div class="login-form">
                        <h4 class="login-title">Thông tin hóa đơn</h4>
                        <div class="row">
                            <table class="tthd" cellpadding="5" cellspacing="5">
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Size</th>
                                        <th>Giá</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                        for($i = 0; $i < count($_SESSION['giohang']); $i++) {
                                            if(isset($_SESSION['giohang'][$i][0])) { ?>
                                                <tr>
                                                    <td>
                                                        <?= $_SESSION['giohang'][$i][2] ?> <br>
                                                        <u>Số lượng:</u>
                                                        <?= $_SESSION['giohang'][$i][5] ?>
                                                    </td>
                                                    <td>
                                                        <?= $_SESSION['giohang'][$i][4] ?>
                                                    </td>
                                                    <td>
                                                        <?= number_format((int)$_SESSION['giohang'][$i][3], 0, ",", ".") ?>
                                                    </td>
                                                    <td>
                                                        <?php $tongt = (int)$_SESSION['giohang'][$i][3] * (int)$_SESSION['giohang'][$i][5];
                                                        echo number_format($tongt, 0, ",", ".") ?>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } ?>
                                        <tr>
                                            <td colspan="3"><b>Tổng tiền (VND):</b></td>
                                            <td>
                                                <b>
                                                <?php
                                                if(isset($_SESSION['tongdh'])) {
                                                    echo number_format((int)$_SESSION['tongdh'], 0, ",", ".");
                                                } else {
                                                    echo '0';
                                                } ?>
                                                </b>
                                            </td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td colspan="4">Không có sản phẩm nào trong giỏ hàng</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Kenne's Login Register Area  End Here -->