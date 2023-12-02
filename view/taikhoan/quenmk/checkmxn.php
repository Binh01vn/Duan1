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
                <li><a href="index.php?act=nhanma">Nhận mã</a></li>
                <li class="active">Kiểm tra mã xác thực</li>
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
                <form action="index.php?act=checkm" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Mã xác thực</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nhập mã xác thực*</label>
                                <input type="text" placeholder="Nhập mã xác thực đã được gửi đến mail!"
                                    name="mxtmail" required>
                            </div>
                            <div class="col-12">
                                <button class="kenne-register_btn" type="submit" name="btngmxt" value="nhapma">Gửi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Login Register Area  End Here -->