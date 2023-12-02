<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=sigorreg">Đăng nhập - Đăng ký</a></li>
                <li class="active">Cập nhật mật khẩu</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!-- Begin Kenne's Login Register Area -->
<div class="kenne-login-register_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <!-- Register form -->
                <form action="index.php?act=register" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Đặt lại mật khẩu</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email*</label>
                                <input type="text" placeholder="Nhập email liên kết với tài khoản của bạn!" name="emaillk"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label>Mật khẩu mới</label>
                                <input type="password" placeholder="Mật khẩu của bạn" name="passnew" required>
                            </div>
                            <div class="col-md-6">
                                <label>Xác nhận mật khẩu</label>
                                <input type="password" placeholder="Xác nhận lại mật khẩu của bạn" name="xnpass"
                                    required>
                                <label>
                                    <?php
                                    if (isset($tb) && !empty($tb)) {
                                        echo $tb;
                                    }
                                    ?>
                                </label>
                            </div>
                            <div class="col-12">
                                <button class="kenne-register_btn" type="submit" name="register" value="dangky">Cập nhật</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Login Register Area  End Here -->