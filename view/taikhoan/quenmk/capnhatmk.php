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
                <li><a href="index.php?act=checkm">Kiểm tra mã xác thực</a></li>
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
                <form action="index.php?act=capnhatmk" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Cập nhật mật khẩu</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Mật khẩu mới*</label>
                                <input type="password" placeholder="Nhập mật khẩu mới" name="newpass" required>
                            </div>
                            <div class="col-md-12">
                                <label>Xác nhận mật khẩu*</label>
                                <input type="password" placeholder="Xác nhận mật khẩu" name="xnnewpass" required>
                            </div>
                            <div class="col-12">
                                <button class="kenne-register_btn" type="submit" name="btncnpass"
                                    value="capnhatpass">Cập nhật mật khẩu</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Login Register Area  End Here -->