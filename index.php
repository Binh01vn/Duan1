<?php
include("./model/pdo.php");
include("./model/danhmuc.php");
include("./model/sanpham.php");
include("view/header.php");

$spnew = list_spnew_home();
$dsdm = list_danhmuc();
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

        case 'danhmuc':
            if ((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if ((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = listall_sp($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include('view/sanpham/sanpham.php');
            break;

        case 'sanpham':
            if ((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if ((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $ten_dm = load_ten_dm($iddm);
            $dssp = listall_sp($kyw, $iddm);
            include('view/sanpham/sanpham.php');
            break;

        case 'sanphamct':
            if ((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if ((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $listsizesp = listall_size();
            $dssp = listall_sp($kyw, $iddm);
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
    $dssp = listall_sp("", 0);
            include('view/home.php');
            break;
    }
} else {
    $dssp = listall_sp("", 0);
    include('view/home.php');
}
include('view/footer.php');