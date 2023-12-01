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
                    // exit;
                } else {
                    echo "sai tài khoản";
                }
            }
            include('view/taikhoan/sigorreg.php');
            break;

        case 'myacc':
            include('view/taikhoan/my-account.php');
            break;

        case 'logout':
            unset($_SESSION['username']);
            // session_unset();
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

        case 'wlandac':
            if(!isset($_SESSION['giohang'])) {
                $_SESSION['giohang'] = [];
            }
            if(isset($_POST['addgio']) && ($_POST['addgio'])) {
                $IDSP = $_POST['idsp'];
                $IMGSP = $_POST['imgsp'];
                $TENSP = $_POST['tensp'];
                $GIASP = $_POST['giasp'];
                $SIZESP = $_POST['sizesp'];
                if($SIZESP == null) {
                    $SIZESP = 0;
                }
                $SOLUONGSP = $_POST['soluongsp'];

                $fl = 0; // kiểm tra xem sản phẩm thêm mới đã tồn tại trong giỏ hàng chưa 0= chưa, 1 = đã có
                // kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                for($i = 0; $i < count($_SESSION['giohang']); $i++) {
                    if($_SESSION['giohang'][$i][2] == $TENSP) {
                        $fl = 1;
                        $SOLUONGNEW = $SOLUONGSP;
                        $_SESSION['giohang'][$i][5] = $SOLUONGNEW;
                        $_SESSION['giohang'][$i][4] = $SIZESP;
                        // break;
                    }
                }

                // nếu sản phẩm không trùng thì tiến hành thêm mới
                if($fl == 0) {
                    // thêm mới sản phẩm
                    $sp = array($IDSP, $IMGSP, $TENSP, $GIASP, $SIZESP, $SOLUONGSP);
                    array_push($_SESSION['giohang'], $sp);
                }
                header('Location: ?act=wlandac');
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
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngaydh = date('Y-m-d H:i:s');
                    $tonghd = $_SESSION['tongdh'];
                    $trangthai = $_POST['trangthai'];

                    $idBill=insert_hoadon($ngaydh, $pttt, $tonghd, $trangthai, $iduser);
                    for($i = 0; $i < count($_SESSION['giohang']); $i++) {
                        $idspcart = $_SESSION['giohang'][ $i ][0];
                        $gspcart = $_SESSION['giohang'][ $i ][3];
                        $sizespcart = $_SESSION['giohang'][ $i ][4];
                        $slspcart = $_SESSION['giohang'][ $i ][5];
                        $tongtien = $_SESSION['giohang'][ $i ][3] * $_SESSION['giohang'][ $i ][5];
                        insert_billhoadon($idBill, $idspcart, $sizespcart, $gspcart, $slspcart, $tongtien);
                    }
                    unset($_SESSION['giohang']);
                    header('Location: ?act=myacc');
                }
            } else {
                header('Location: ?act=wlandac');
                die();
            }
            include('view/cart/billcart.php');
            break;

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