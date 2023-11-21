<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li class="active"><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=myacc">My account</a></li>
                <li class="active">Cập nhật tài khoản</li>
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
                <form action="index.php?act=capnhattt">
                    <div class="login-form">
                        <h4 class="login-title">Cập nhật thông tin tài khoản</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Họ và tên:</label>
                                <input type="email" placeholder="<?= $tensohuu ?>" name="tennew">
                            </div>
                            <div class="col-md-6">
                                <label>Username:</label>
                                <input type="text" placeholder="<?= $username ?>" name="usernew">
                            </div>
                            <div class="col-md-6">
                                <label>Email:</label>
                                <input type="email" placeholder="<?= $email ?>" name="emailnew">
                            </div>
                            <div class="col-md-6">
                                <label>Số điện thoại</label>
                                <input type="tel" placeholder="<?= $phone ?>" name="telnew">
                            </div>
                            <div class="single-input">
                                <label for="account-details-oldpass">Mật khẩu hiện tại (Để chống hoặc không thay
                                    đổi)</label>
                                <input type="password" id="account-details-oldpass">
                            </div>
                            <div class="single-input">
                                <label for="account-details-newpass">Mật khẩu mới (Để chống hoặc không thay đổi)</label>
                                <input type="password" id="account-details-newpass">
                            </div>
                            <div class="single-input">
                                <label for="account-details-confpass">Xác nhận mật khẩu mới</label>
                                <input type="password" id="account-details-confpass">
                            </div>
                            <div class="col-12">
                                <button class="kenne-register_btn" type="submit" name="editacc" value="capnhat">Cập nhật</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Login Register Area  End Here -->