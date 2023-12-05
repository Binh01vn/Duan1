<?php
ob_start();
session_start();
include("./model/pdo.php");
include("./model/danhmuc.php");
include("./model/sanpham.php");
include("./model/binhluan.php");
include("./model/wlandcart.php");
include("./model/taikhoan.php");
include("view/header.php");

$spnew = list_spnew_home();
$dsdm = list_danhmuc();
if((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch($act) {
        // CONTROLLER ĐĂNG NHẬP VÀ ĐĂNG KÝ ==================================================
        case 'sigorreg':
            if(isset($_POST['register']) && ($_POST['register'])) {
                $tensohuu = $_POST['tensohuu'];
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $xnpass = $_POST['xnpass'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $diachi = $_POST['diachi'];
                $vaitro = $_POST['vaitro'];

                if($pass == $xnpass) {
                    insert_taikhoan($tensohuu, $username, $pass, $email, $phone, $diachi);
                } else {
                    $tb = "Mật khẩu không trùng khớp!";
                }
            } else if(isset($_POST['signin']) && ($_POST['signin'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];

                $checkuser = check_user($username, $pass);
                if(is_array($checkuser)) {
                    $_SESSION['username'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $tbsacc = "Sai thông tin đăng nhập!";
                }
            }
            include('view/taikhoan/sigorreg.php');
            break;

        case 'myacc':
            include('view/taikhoan/my-account.php');
            break;

        case 'logout':
            unset($_SESSION['username']);
            header('Location: index.php');
            break;

        case 'capnhattt':
            if(isset($_POST['updateacc']) && ($_POST['updateacc'])) {
                $tennew = $_POST['tennew'];
                $usernew = $_POST['usernew'];
                $emailnew = $_POST['emailnew'];
                $telnew = $_POST['telnew'];
                $diachinew = $_POST['diachinew'];
                $passnew = $_POST['passnew'];
                $xnpassnew = $_POST['xnpassnew'];
                $idtk = $_POST['idtk'];

                if($passnew == $xnpassnew && $tennew != "" && $usernew != "" && $emailnew != "" && $telnew != "" && $diachinew != "" && $passnew != "") {
                    update_taikhoan($tennew, $usernew, $passnew, $emailnew, $telnew, $diachinew, $idtk);
                    session_unset();
                    header('Location: ?act=sigorreg');
                    break;
                } else {
                    $tb = "Mật khẩu không trùng khớp hoặc thông tin trống!";
                }
            }
            include('view/taikhoan/my-account.php');
            break;

        // CONTROLLER GIỎ HÀNG ==================================================
        case 'wlandac':
            // Kiểm tra xem giỏ hàng có dữ liệu hay không
            if(!empty($_SESSION['giohang'])) {
                $cart = $_SESSION['giohang'];

                // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                $sanphamID = array_column($cart, 'idsp');

                // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                $idList = implode(',', $sanphamID);

                // Lấy sản phẩm trong bảng sản phẩm theo id
                $dataDb = loadone_sanphamCart($idList);
                // var_dump($dataDb);
            }
            $listsizesp = listall_size();
            include('view/cart/viewcart.php');
            break;

        case 'linkdelspid':
            if(isset($_GET['delsp']) && $_GET['delsp'] >= 0) {
                array_splice($_SESSION['giohang'], $_GET['delsp'], 1);
                header('Location: ?act=wlandac');
            }
            include('view/cart/viewcart.php');
            break;

        case 'delcart':
            if(isset($_GET['del']) && $_GET['del'] == 1) {
                unset($_SESSION['giohang']);
                unset($_SESSION['tongdh']);
                header('Location: ?act=wlandac');
            }
            include('view/cart/viewcart.php');
            break;

        case 'billcart':
            include('view/cart/billcart.php');
            break;

        case 'thanhtoan':
            if(isset($_SESSION['giohang'])) {
                if(isset($_POST['xndh']) && ($_POST['xndh'])) {
                    $iduser = $_POST['iduser'];
                    $diachi = $_POST['diachi'];
                    if($diachi != null) {
                        capnhat_diachi($diachi, $iduser);
                    }
                    $pttt = $_POST['pttt'];
                    $ngaydh = date('Y-m-d');
                    $tonghd = $_SESSION['tongdh'];
                    $trangthai = $_POST['trangthai'];
                    $trangthaitt = $_POST['trangthaitt'];

                    $idBill = insert_hoadon($ngaydh, $pttt, $tonghd, $trangthai, $trangthaitt, $iduser);
                    foreach ($_SESSION['giohang'] as $carttt){
                        insert_billhoadon($idBill, $carttt['idsp'], $carttt['tensp'], $carttt['sizesp'], $carttt['giasp'], $carttt['tongspCart'], ($tongtien = $carttt['giasp'] * $carttt['tongspCart']));
                    }
                    $tbdh = "Đặt hàng thành công!";
                    unset($_SESSION['giohang']);
                    unset($_SESSION['tongdh']);
                    include('view/taikhoan/my-account.php');
                    break;
                }
            } else {
                header('Location: ?act=wlandac');
                die();
            }
            include('view/cart/billcart.php');
            break;

        case 'cthd':
            include('view/taikhoan/chitiethd.php');
            break;

        case 'xacnhandh':
            if(isset($_GET['idhd']) && $_GET['idhd'] > 0) {
                $idhd = $_GET['idhd'];
                $trangthai = $_GET['trangthai'];
                xacnhandh($idhd, $trangthai);
                header('Location: ?act=cthd&idhd='.$idhd.'');
            }
            include('view/taikhoan/chitiethd.php');
            break;

        case 'huydh':
            include('view/taikhoan/chitiethd.php');
            break;

        // CONTROLLER DANH MỤC ===============================================
        case 'danhmuc':
            if((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = listall_sp($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include('view/sanpham/sanpham.php');
            break;

        // CONTROLLER SẢN PHẨM ===================================================
        case 'sanpham':
            if((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $ten_dm = load_ten_dm($iddm);
            $dssp = listall_sp($kyw, $iddm);
            $listsizesp = listall_size();
            include('view/sanpham/sanpham.php');
            break;

        case 'sanphamct':
            $listsizesp = listall_size();
            $dssp = listall_sp(null, null);
            include('view/sanpham/sanphamct.php');
            break;

        case 'faq':
            include('view/hotro/faq.php');
            break;

        case 'gioithieu':
            include('view/hotro/gioithieu.php');
            break;

        default:
            $listsizesp = listall_size();
            $dssp = listall_sp(null, null);
            include('view/home.php');
            break;
    }
} else {
    $listsizesp = listall_size();
    $dssp = listall_sp(null, null);
    include('view/home.php');
}
include('view/footer.php');
ob_end_flush();
?>