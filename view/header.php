<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIÀY NIKE BAK</title>
    <!-- <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="view/assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="view/assets/css/font-awesome.min.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="view/assets/css/fontawesome-stars.min.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="view/assets/css/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="view/assets/css/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="view/assets/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="view/assets/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="view/assets/css/nice-select.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="view/assets/css/timecircles.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="view/assets/css/style.css">

</head>

<body class="template-color-3 bg-smoke_color">

    <div class="main-wrapper boxed-layout bg-white_color">

        <!-- Begin Main Header Area -->
        <header class="main-header_area">

            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="header-top_nav">
                        <div class="row">
                            <!-- <div class="col-lg-6"> -->
                            <div class="header-top_right">
                                <ul>
                                    <?php
                                    if(isset($_SESSION['username'])) {
                                        extract($_SESSION['username']);
                                        ?>
                                        <li>

                                            <a href="index.php?act=myacc">Xin chào: <b>
                                                    <?= $username ?>
                                                </b></a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=wlist">Yêu thích</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="index.php?act=sigorreg">Đăng nhập - Đăng ký</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-middle_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-middle_nav">
                                <div class="header-logo_area">
                                    <a href="index.php">
                                        <img src="view/assets/images/menu/logo/1.png" alt="Header Logo" class="hd-logo">
                                    </a>
                                </div>

                                <div class="header-search_area d-none d-lg-block">
                                    <form class="search-form" action="index.php?act=sanpham" method="POST">
                                        <input type="text" name="kyw" placeholder="Tìm kiếm" class="ip-header">
                                        <button class="search-button" name="timkiem" type="submit">
                                            <i class="ion-ios-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="header-right_area d-none d-lg-block">
                                    <ul>
                                        <?php
                                        if(isset($_SESSION['username'])) {
                                            echo '
                                                <li class="minicart-wrap">
                                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                        <div class="minicart-count_area">
                                                            <span class="item-count">03</span>
                                                            <i class="ion-bag"></i>
                                                        </div>
                                                        <div class="minicart-front_text">
                                                            <span>Tổng:</span>
                                                            <span class="total-price">462.4</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            ';
                                        } ?>
                                    </ul>
                                </div>
                                <div class="header-right_area header-right_area-2 d-block d-lg-none">
                                    <ul>
                                        <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <?php
                                        if(isset($_SESSION['username'])) {
                                            extract($_SESSION['username']);
                                            echo '
                                                <li class="minicart-wrap">
                                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                        <div class="minicart-count_area">
                                                            <span class="item-count">03</span>
                                                            <i class="ion-bag"></i>
                                                        </div>
                                                    </a>
                                                </li> 
                                            ';
                                        } ?>
                                        <li>
                                            <a href="#searchBar" class="search-btn toolbar-btn">
                                                <i class="ion-android-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav d-flex justify-content-center">
                                    <ul>
                                        <li>
                                            <a href="../Duan1/index.php">Trang chủ</a>
                                        </li>

                                        <li class="megamenu-holder position-static">
                                            <a href="index.php?act=sanpham">
                                                Sản phẩm <i class="ion-chevron-down"></i>
                                            </a>
                                            <ul class="kenne-megamenu">
                                                <li>
                                                    <span class="megamenu-title">Mới</span>
                                                    <ul>
                                                        <?php
                                                        $spnew = list_spnew_home();
                                                        foreach($spnew as $sp) {
                                                            extract($sp);
                                                            echo '<li><a href="shop-fullwidth.html">'.$tensp.'</a></li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <span class="megamenu-title">Danh mục</span>
                                                    <ul>
                                                        <?php
                                                        $dsdm = list_danhmuc();
                                                        foreach($dsdm as $ds) {
                                                            extract($ds);
                                                            $linkdm = "index.php?act=sanpham&iddm=".$id_dm;
                                                            echo '
                                                            <li><a href="'.$linkdm.'">'.$tendm.'</a></li>
                                                        ';
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="megamenu-title">Trang liên quan</span>
                                                    <ul>
                                                        <?php
                                                        if(isset($_SESSION['username'])) {
                                                            extract($_SESSION['username']);
                                                            ?>
                                                            <li>

                                                                <a href="index.php?act=myacc"><b>
                                                                        <?= $username ?>
                                                                    </b></a>
                                                            </li>
                                                            <li>
                                                                <a href="index.php?act=wlist">Yêu thích</a>
                                                            </li>
                                                            <li><a href="index.php?act=cart">Giỏ hàng</a></li>
                                                        <?php } else { ?>
                                                            <li>
                                                                <a href="index.php?act=sigorreg">Đăng nhập</a>
                                                            </li>
                                                            <li>
                                                                <a href="index.php?act=sigorreg">Đăng ký</a>
                                                            </li>
                                                        <?php } ?>
                                                        <li><a href="index.php?act=faq">FAQ</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                                        <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Giỏ hàng</h4>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="view/assets/images/product/1-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="../Duan1/index.php">Autem ipsa ad</a>
                                    <span class="product-item_quantity">1 x $145.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="view/assets/images/product/2-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="../Duan1/index.php">Tenetur illum
                                        amet</a>
                                    <span class="product-item_quantity">1 x $150.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="view/assets/images/product/3-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="../Duan1/index.php">Non doloremque
                                        placeat</a>
                                    <span class="product-item_quantity">1 x $165.80</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Tổng tiền:</span>
                        <span class="ammount">$462.40</span>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="index.php?act=cart" class="kenne-btn kenne-btn_fullwidth">Giỏ hàng</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close white-close_btn"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_logo">
                            <a href="index.html">
                                <img src="view/assets/images/menu/logo/1.png" alt="Header Logo">
                            </a>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <a href="../Duan1/index.php">
                                        <span class="mm-text">Trang chủ</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="">
                                        <span class="mm-text">Sản phẩm</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <?php
                                            $dsdm = list_danhmuc();
                                            foreach($dsdm as $ds) {
                                                extract($ds);
                                                $linkdm = "index.php?act=sanpham&iddm=".$id_dm;
                                                echo '
                                                            <a href="'.$linkdm.'">'.$tendm.'</a>
                                                        ';
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="">
                                        <span class="mm-text">Khác</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <?php
                                        if(isset($_SESSION['username'])) {
                                            extract($_SESSION['username']);
                                            ?>
                                            <li>
                                                <a href="index.php?act=wlist">Yêu thích</a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="index.php?act=sigorreg">Đăng nhập</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=sigorreg">Đăng ký</a>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <a href="index.php?act=gioithieu">
                                                <span class="mm-text">Giới thiệu</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=lienhe">
                                                <span class="mm-text">Liên hệ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=faq">
                                                <span class="mm-text">FAQ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <a href="">
                                        <span class="mm-text">
                                            Cài đặt tài khoản
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <?php
                                        if(isset($_SESSION['username'])) {
                                            extract($_SESSION['username']);
                                            ?>
                                            <li>

                                                <a href="index.php?act=myacc">Xin chào: <b>
                                                        <?= $username ?>
                                                    </b></a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=wlist">Yêu thích</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=cart">Giỏ hàng</a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="index.php?act=sigorreg">Đăng nhập</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=sigorreg">Đăng ký</a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="offcanvas-search_wrapper" id="searchBar">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="" class="btn-close"><i class="ion-android-close"></i></a>
                        <!-- Begin Offcanvas Search Area -->
                        <div class="offcanvas-search">
                            <form class="hm-searchbox" action="index.php?act=sanpham" method="POST">
                                <input type="text" name="kyw" placeholder="Tìm kiếm">
                                <button class="search_btn" type="submit" name="timkiem"><i
                                        class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <!-- Offcanvas Search Area End Here -->
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <!-- Main Header Area End Here -->