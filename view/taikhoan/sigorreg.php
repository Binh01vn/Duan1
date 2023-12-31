<?php
if(isset($_SESSION['username'])) {
    header('Location: index.php');
    die();
}
?>
<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Đăng nhập - Đăng ký</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!-- Begin Kenne's Login Register Area -->
<div class="kenne-login-register_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                <!-- Login Form -->
                <form action="index.php?act=sigorreg" method="POST">
                    <div class="login-form">

                        <?php
                        if(isset($tbsacc) && $tbsacc != '') {
                            echo '<h5 class="login-title">'.$tbsacc.'</h5>';
                        } else {
                            echo '<h4 class="login-title">Đăng nhập tài khoản</h4>';
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label>Tên đăng nhập*</label>
                                <input type="text" placeholder="Username" name="username" required>
                            </div>
                            <div class="col-12 mb--20">
                                <label>Mật khẩu</label>
                                <input type="password" placeholder="Password" name="pass" required>
                            </div>
                            <div class="col-md-8">
                                <div class="check-box">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Ghi nhớ tôi</label>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="forgotton-password_info">
                                    <a href="index.php?act=nhanma">Quên mật khẩu?</a>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <button class="kenne-login_btn" type="submit" name="signin" value="dangnhap">Đăng
                                    nhập</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <!-- Register form -->
                <form action="index.php?act=sigorreg" method="POST">
                    <input type="hidden" name="vaitro" value="">
                    <div class="login-form">
                        <?php
                        if(!empty($tbdn)) { ?>
                            <h4 class="login-title">
                                <?= $tbdn ?>
                            </h4>
                        <?php } else { ?>
                            <h4 class="login-title">Đăng ký tài khoản</h4>
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Họ và tên*</label>
                                <input type="text" placeholder="Họ và tên của bạn" name="tensohuu" required>
                            </div>
                            <div class="col-md-6">
                                <?php
                                if(!empty($tbusn)) { ?>
                                    <label>
                                        <?= $tbusn ?>
                                    </label>
                                <?php } else { ?>
                                    <label>Tên đăng nhập*</label>
                                <?php } ?>
                                <input type="text" placeholder="Username" name="username" required>
                            </div>
                            <div class="col-md-6">
                                <label>Email*</label>
                                <input type="email" placeholder="Địa chỉ Email" name="email" required>
                            </div>
                            <div class="col-md-6">
                            <?php
                                if(!empty($tbphone)) { ?>
                                    <label>
                                        <?= $tbphone ?>
                                    </label>
                                <?php } else { ?>
                                    <label>Số điện thoại*</label>
                                <?php } ?>
                                <input type="tel" placeholder="Phone number" name="phone" required>
                            </div>
                            <div class="col-md-12">
                                <label>Địa chỉ*</label>
                                <input type="text" placeholder="Đây sẽ là địa chỉ nhận hàng của bạn" name="diachi"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <?php
                                if(!empty($tbpass)) { ?>
                                    <label>
                                        <?= $tbpass ?>
                                    </label>
                                <?php } else { ?>
                                    <label>Mật khẩu</label>
                                <?php } ?>
                                <input type="password" placeholder="Mật khẩu của bạn" name="pass" required>
                            </div>
                            <div class="col-md-6">
                                <?php
                                if(!empty($tb)) { ?>
                                    <label>
                                        <?= $tb ?>
                                    </label>
                                <?php } else { ?>
                                    <label>Xác nhận</label>
                                <?php } ?>
                                <input type="password" placeholder="Xác nhận lại mật khẩu của bạn" name="xnpass"
                                    required>
                            </div>
                            <div class="col-12">
                                <button class="kenne-register_btn" type="submit" name="register" value="dangky">Đăng
                                    ký</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Login Register Area  End Here -->