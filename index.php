<?php
session_start();
ob_start();
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

                if(!preg_match("/^[0-9]*$/", $phone)) {
                    $tbphone = "Vui lòng nhập số.";
                }
                if(strlen($username) < 5) {
                    $tbusn = "Độ dài tên đăng nhập phải lớn hơn 5 kí tự!";
                }
                if($pass == $xnpass) {
                    if(strlen($pass) < 16) {
                        $tbpass = "Độ dài tên đăng nhập phải lớn hơn 15 kí tự!";
                    } else {
                        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z0-9]/', $pass)) {
                            $tbpass = "Tên đăng nhập gồm chữ hoa, chữ thường và số!";
                        } else {
                            insert_taikhoan($tensohuu, $username, $pass, $email, $phone, $diachi);
                            $tbdn = "Đăng ký thành công. Đăng nhập để sử dụng.";
                            include('view/taikhoan/sigorreg.php');
                            break;
                        }
                    }
                } else {
                    $tb = "Mật khẩu không trùng khớp!";
                }
            } else if(isset($_POST['signin']) && ($_POST['signin'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];

                $checkuser = check_user($username, $pass);
                if(is_array($checkuser)) {
                    if($checkuser['ttacc'] != 1) {
                        $_SESSION['username'] = $checkuser;
                        header('Location: index.php');
                        die();
                    } else {
                        $tbsacc = "Tài khoản bị khóa!";
                        include('view/taikhoan/sigorreg.php');
                        break;
                    }
                } else {
                    $tbsacc = "Sai thông tin đăng nhập!";
                }
            }
            include('view/taikhoan/sigorreg.php');
            break;

        case 'myacc':
            include('view/taikhoan/my-account.php');
            break;

        // ĐĂNG XUẤT TÀI KHOẢN
        case 'logout':
            unset($_SESSION['username']);
            header('Location: index.php');
            break;

        // CẬP NHẬT THÔNG TIN TÀI KHOẢN
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
                    unset($_SESSION['username']);
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
        // THÊM GIỎ HÀNG CHI TIẾT
        case 'addCart':
            if(empty($_SESSION['giohang'])) {
                $_SESSION['giohang'] = [];
            }
            if(isset($_POST['addgio']) && $_POST['addgio']) {
                $idsp = $_POST['idsp'];
                $tensp = $_POST['tensp'];
                $sizesp = $_POST['sizesp'];
                $tongspCart = $_POST['soluongsp'];
                $giasp = $_POST['giasp'];

                $index = false;
                if(!empty($_SESSION['giohang'])) {
                    $index = array_search($idsp, array_column($_SESSION['giohang'], 'idsp'));
                }

                // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
                if($index !== false) {
                    $_SESSION['giohang'][$index]['tongspCart'] += 1;
                } else {
                    // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
                    $sanpham = [
                        'idsp' => $idsp,
                        'tensp' => $tensp,
                        'sizesp' => $sizesp,
                        'tongspCart' => $tongspCart,
                        'giasp' => $giasp
                        // 'tongspCart' => 1
                    ];
                    $_SESSION['giohang'][] = $sanpham;
                    // var_dump($_SESSION['giohang']);die;
                }
                header('Location: ?act=wlandac');
            }
            $listsizesp = listall_size();
            include('view/cart/viewcart.php');
            break;

        // XÓA SẢN PHẨM TRONG GIỎ HÀNG THEO ID
        case 'linkdelspid':
            if(isset($_GET['delsp']) && $_GET['delsp'] >= 0) {
                array_splice($_SESSION['giohang'], $_GET['delsp'], 1);
                header('Location: ?act=wlandac');
            }
            include('view/cart/viewcart.php');
            break;

        // XÓA TOÀN BỘ GIỎ HÀNG
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

        // THANH TOÁN, ĐẶT HÀNG
        case 'thanhtoan':
            if(isset($_SESSION['giohang'])) {
                if(isset($_POST['xndh']) && ($_POST['xndh'])) {
                    $iduser = $_POST['iduser'];
                    $diachi = $_POST['diachi'];
                    if($diachi != null) {
                        capnhat_diachi($diachi, $iduser);
                    }
                    $pttt = $_POST['pttt'];
                    if($pttt == 2) {
                        header('Location: ?act=ttqrmomo');
                        die();
                    }
                    $ngaydh = date('Y-m-d');
                    $tonghd = $_SESSION['tongdh'];
                    $trangthai = $_POST['trangthai'];
                    $trangthaitt = $_POST['trangthaitt'];

                    $idBill = insert_hoadon($ngaydh, $pttt, $tonghd, $trangthai, $trangthaitt, $iduser);
                    foreach($_SESSION['giohang'] as $carttt) {
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
        // THANH TOÁN BẰNG MOMO QR CODE
        case 'ttqrmomo':
            include('view/thanhtoan/xulyttmomo.php');
            break;

        case 'cthd':
            include('view/taikhoan/chitiethd.php');
            break;

        // XÁC NHẬN ĐÃ NHẬN ĐƯỢC ĐƠN HÀNG HOẶC HỦY ĐƠN HÀNG
        case 'xacnhandh':
            if(isset($_GET['idhd']) && $_GET['idhd'] > 0) {
                $idhd = $_GET['idhd'];
                $trangthai = $_GET['trangthai'];
                $trangthaitt = $_GET['trangthaitt'];
                if($trangthaitt == 1){
                    xacnhanttdh($idhd, $trangthaitt);
                }
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

        // XEM CHI TIẾT 1 SẢN PHẨM
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