<?php
session_start();
ob_start();
if (empty($_SESSION['username'])) {
    header('Location: ../index.php');
} else {
    extract($_SESSION['username']);
    if ($vaitro != 1) {
        header('Location: ../index.php');
    }
}
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/binhluan.php");
include("../model/taikhoan.php");
include("../model/wlandcart.php");
include("../model/thongke.php");
include("view/header.php");
$listusers = loadall_taikhoan();
if ((isset($_GET['act']))) {
    $act = $_GET['act'];

    switch ($_GET['act']) {
        // DANH MỤC SẢN PHẨM ===================================
        case 'adddm':
            if (isset($_POST['themdm']) && ($_POST['themdm'])) {
                $tendm = $_POST['tendm'];
                if (empty($tendm)) {
                    $thongbao = "Tên danh mục trống!";
                } else if (preg_match("/^[a-zA-z]*$/", $tendm)) {
                    $thongbao = "Tên danh mục không chứa số!";
                } else {
                    insert_danhmuc($tendm);
                    $listdm = list_danhmuc();
                    include('view/danhmuc/listdm.php');
                    break;
                }
            }
            $listdm = list_danhmuc();
            include('view/danhmuc/adddm.php');
            break;
        // LOAD DANH SÁCH DANH MỤC
        case 'listdm':
            $listdm = list_danhmuc();
            include('view/danhmuc/listdm.php');
            break;
        // SỬA DANH MỤC
        case 'editdm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $iddm = $_GET['id'];
                $dm = loadone_danhmuc($iddm);
            }
            include "view/danhmuc/updatedm.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendm = $_POST['tendm'];
                $id_dm = $_POST['id_dm'];
                if (empty($tendm)) {
                    $thongbao = "Tên danh mục trống!";
                } else if (!preg_match("/^[a-zA-z]*$/", $tendm)) {
                    $thongbao = "Tên danh mục không chứa số!";
                } else {
                    update_danhmuc($id_dm, $tendm);
                    $listdm = list_danhmuc();
                    include "view/danhmuc/listdm.php";
                    break;
                }
                header('Location: index.php?act=editdm&id=' . $id_dm . '');
            }
            $listdm = list_danhmuc();
            include "view/danhmuc/updatedm.php";
            break;
        // XÓA DANH MỤC
        case 'deldm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                del_danhmuc($_GET['id']);
            }
            $listdm = list_danhmuc();
            include "view/danhmuc/listdm.php";
            break;
        // CONTROLLER SẢN PHẨM ===================================
        // thêm sản phẩm
        case 'addsp':
            if ((isset($_POST['adddl'])) && ($_POST['adddl'])) {
                $chuoikytu = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ@_-';
                $masp = '';
                for ($i = 0; $i < 10; $i++) {
                    $masp .= $chuoikytu[mt_rand(0, strlen($chuoikytu) - 1)];
                }

                $tensp = $_POST['tensp'];
                $id_dm = $_POST['id_dm'];
                $giasp = $_POST['giasp'];
                $soluongsp = $_POST['soluongsp'];
                $motasp = $_POST['motasp'];

                if (empty($tensp)) {
                    if (empty($giasp)) {
                        $thongbaog = "Giá sản phẩm không được để trống!";
                    }
                    if (empty($soluongsp)) {
                        $thongbaos = "Số lượng sản phẩm không được để trống!";
                    }
                    $thongbao = "Tên sản phẩm trống!";
                } else {
                    insert_sanpham($masp, $tensp, $giasp, $motasp, $soluongsp, $id_dm);
                    include("view/sanpham/prvsanpham.php");
                    break;
                }
            }
            $listdm = list_danhmuc();
            include('view/sanpham/addsp.php');
            break;
        // thêm bổ sung ảnh và size cho sản phẩm
        case 'addsize_img':
            if ((isset($_POST['hoanthanh'])) && ($_POST['hoanthanh'])) {
                $idsp = $_POST['idsp'];
                $sizesp = $_POST['sizesp'];

                $imgsp = $_FILES['imgsp']['name'];
                $target_dir = "../view/assets/images/product/";
                $target_file = $target_dir . basename($_FILES['imgsp']['name']);
                if (move_uploaded_file($_FILES['imgsp']['tmp_name'], $target_file)) {

                } else {

                }
                addanhsp($imgsp, $idsp);
                foreach ($sizesp as $size) {
                    sizesp($size, $idsp);
                }
                $listdm = list_danhmuc();
                $listsize = listall_size();
                $listsp = listall_sp("", 0);
                include('view/sanpham/listsp.php');
                break;
            }
            include('view/sanpham/addsize_img.php');
            break;
        // danh sách sản phẩm
        case 'listsp':
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['id_dm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdm = list_danhmuc();
            $listsize = listall_size();
            $listsp = listall_sp($kyw, $iddm);
            include('view/sanpham/listsp.php');
            break;
        // sửa sản phẩm
        case 'editsp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $listsp = loadone_sp($_GET['id']);
                $img_sp = loadone_imgsp($_GET['id']);
                // $size_sp = loadone_sizesp($_GET['id']);
            }
            $listdm = list_danhmuc();
            $listsize = listall_size();
            include('view/sanpham/updatesp.php');
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];

                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $soluongsp = $_POST['soluongsp'];
                $motasp = $_POST['motasp'];

                $id_dm = $_POST['id_dm'];


                $imgsp = $_FILES['imgsp']['name'];
                $target_dir = "../view/assets/images/product/";
                $target_file = $target_dir . basename($_FILES['imgsp']['name']);
                if (move_uploaded_file($_FILES['imgsp']['tmp_name'], $target_file)) {

                } else {

                }

                capnhat_sp($id, $tensp, $giasp, $motasp, $soluongsp, $id_dm, $imgsp);
                $listdm = list_danhmuc();
                $listsize = listall_size();
                $listsp = listall_sp("", 0);
                include('view/sanpham/listsp.php');
                break;
            }
            include('view/sanpham/updatesp.php');
            break;
        // xóa sản phẩm
        case 'delsp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                xoa_img($_GET['id']);
                xoa_size($_GET['id']);
                del_binhluan(null, $_GET['id'], null);
                xoa_sp($_GET['id']);
            }
            $listdm = list_danhmuc();
            $listsize = listall_size();
            $listsp = listall_sp("", 0);
            include('view/sanpham/listsp.php');
            break;

        // QUẢN LÝ BÌNH LUẬN ===================================================================
        case 'listbl':
            $listbl = loadall_binhluan(null);
            include('view/binhluan/listbl.php');
            break;
        // DANH SÁCH BÌNH LUẬN BỊ ẨN
        case 'dsblan':
            $listbl = loadall_binhluan(null);
            include('view/binhluan/listblan.php');
            break;
        // ẨN BÌNH LUẬN
        case 'anbl':
            if (isset($_GET['id_bl'])) {
                $id_bl = $_GET['id_bl'];
                $ttbinhluan = 1;
                an_binhluan($id_bl, $ttbinhluan);
            }
            $listbl = loadall_binhluan(null);
            include('view/binhluan/listbl.php');
            break;
        // ẨN BÌNH LUẬN
        case 'hienbl':
            if (isset($_GET['id_bl'])) {
                $id_bl = $_GET['id_bl'];
                $ttbinhluan = 0;
                an_binhluan($id_bl, $ttbinhluan);
            }
            $listbl = loadall_binhluan(null);
            include('view/binhluan/listblan.php');
            break;
        // XÓA BÌNH LUẬN
        case 'delbl':
            if (isset($_GET['id_bl']) && $_GET['id_bl'] > 0) {
                del_binhluan($_GET['id_bl'], null, null);
            }
            $listbl = loadall_binhluan(null);
            include('view/binhluan/listbl.php');
            break;

        case 'icon':
            include('view/icon.php');
            break;

        // QUẢN LÝ HÓA ĐƠN ===========================
        case 'qlhoadon':
            $listhd = select_hoadon();
            $listusers = loadall_taikhoan();
            include('view/hoadon/quanlyhd.php');
            break;
        // DANH SÁCH HÓA ĐƠN ĐÃ HOÀN THÀNH
        case 'listhdcpl':
            $listhd = select_hoadon();
            $listusers = loadall_taikhoan();
            include('view/hoadon/listhdcpl.php');
            break;

        case 'cnhd':
            if (isset($_POST['updatevaitro']) && ($_POST['updatevaitro'])) {
                $idHD = $_POST['idHD'];
                $trangthain = $_POST['trangthain'];
                capnhat_tthd($trangthain, $idHD);
                $listhd = select_hoadon();
                header('Location: ?act=qlhoadon');
                die();
            }
            $listhd = select_hoadon();
            include('view/hoadon/capnhathd.php');
            break;

        // QUẢN LÝ TÀI KHOẢN ==================================================
        case 'listuser':
            $listusers = loadall_taikhoan();
            include('view/taikhoan/listuser.php');
            break;
        // DANH SÁCH TÀI KHOẢN ĐÃ KHÓA
        case 'listuserlock':
            $listusers = loadall_taikhoan();
            include('view/taikhoan/listuserlock.php');
            break;

        // KHÓA TÀI KHOẢN
        case 'khoaacc':
            if (isset($_GET['idacc']) && $_GET['idacc'] > 0) {
                $idacc = $_GET['idacc'];
                $ttacc = 1;
                khoa_taikhoan($idacc, $ttacc);
            }
            $listusers = loadall_taikhoan();
            include('view/taikhoan/listuser.php');
            break;
        // MỞ TÀI KHOẢN
        case 'moacc':
            if (isset($_GET['idacc']) && $_GET['idacc'] > 0) {
                $idacc = $_GET['idacc'];
                $ttacc = 0;
                khoa_taikhoan($idacc, $ttacc);
            }
            $listusers = loadall_taikhoan();
            include('view/taikhoan/listuserlock.php');
            break;

        // LIST PHÂN QUYỀN TÀI KHOẢN
        case 'pq':
            $listusers = loadall_taikhoan();
            include('view/taikhoan/phanquyen.php');
            break;

        // QUẢN LÝ THỐNG KÊ ===============================
        // DANH SÁCH THỐNG KÊ THEO DANH MỤC
        case 'listtk':
            $dsthongke = load_thongke_sanpham_danhmuc();
            include('view/thongke/listtk.php');
            break;
        // DANH SÁCH THỐNG KÊ DOANH THU THEO NGAY
        case 'listtkdt':
            include('view/thongke/listtkdt.php');
            break;

        default:
            $dsthongke = load_thongke_sanpham_danhmuc();
            include('view/home.php');
            break;
    }
} else {
    $dsthongke = load_thongke_sanpham_danhmuc();
    include('view/home.php');
}

include('view/footer.php');
ob_end_flush();
?>