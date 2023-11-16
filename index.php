<?php
include("view/header.php");

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'myacc':
            include('view/taikhoan/my-account.php');
            break;

        case 'signin':
            include('view/taikhoan/signin.php');
            break;

        case 'register':
            include('view/taikhoan/register.php');
            break;

        case 'updateacc':
            include('view/taikhoan/updateacc.php');
            break;

        case 'wlist':
            include('view/cart/wishlist.php');
            break;

        case 'cart':
            include('view/cart/viewcart.php');
            break;

        case 'sanpham':
            include('view/sanpham/sanpham.php');
            break;

        case 'sanphamct':
            include('view/sanpham/sanphamct.php');
            break;

        case 'faq':
            include('view/hotro/faq.php');
            break;

        case 'gioithieu':
            include('view/hotro/gioithieu.php');
            break;

        case 'lienhe':
            include('view/hotro/lienhe.php');
            break;

        default:
            include('view/home.php');
            break;
    }
} else {
    include('view/home.php');
}
include('view/footer.php');