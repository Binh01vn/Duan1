<?php
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("view/header.php");
if ((isset($_GET['act']))) {
    $act = $_GET['act'];

    switch ($_GET['act']) {
        case 'myadmin':
            include('view/taikhoan/myadmin.php');
            break;
        // DANH MỤC SẢN PHẨM ===================================
        case 'adddm':
            if (isset($_POST['addnew']) && ($_POST['addnew'])) {
                $tendm = $_POST['tendm'];
                if ($tendm == '') {
                    $thongbao = "Tên danh mục trống! Vui lòng nhập tên danh mục.";
                } else {
                    truyvan_danhmuc($tendm);
                    $listdm = list_danhmuc();
                    include('view/danhmuc/listdm.php');
                    break;
                }
            }
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
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "view/danhmuc/updatedm.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendm = $_POST['tendm'];
                $id = $_POST['id'];
                if ($tendm != '')
                    update_danhmuc($id, $tendm);
            }
            $listdm = list_danhmuc();
            include "view/danhmuc/listdm.php";
            break;
        // XÓA DANH MỤC
        case 'deldm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deldm_danhmuc($_GET['id']);
            }
            $listdm = list_danhmuc();
            include "view/danhmuc/listdm.php";
            break;
        // CONTROLLER SẢN PHẨM ===================================
        // thêm sản phẩm
        case 'addsp':
            if ((isset($_POST['addnew'])) && ($_POST['addnew'])) {
                $chuoikytu = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ@_-';
                $masp = '';
                for ($i = 0; $i < 10; $i++) {
                    $masp .= $chuoikytu[mt_rand(0, strlen($chuoikytu) - 1)];
                }

                $name_sp = $_POST['name_sp'];
                $id_dm = $_POST['id_dm'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];

                truyvan_sanpham($masp, $name_sp, $gia, $mota, $soluong, $id_dm);
                include("view/sanpham/previewsp.php");
                break;

            } else {
                $tb = "lỗi rồi";
            }
            $listdm = list_danhmuc();
            include('view/sanpham/addsp.php');
            break;
        // thêm bổ sung ảnh và size cho sản phẩm
        case 'addsize_img':
            if ((isset($_POST['hoanthanh'])) && ($_POST['hoanthanh'])) {
                $idsp = $_POST['idsp'];
                $size_sp = $_POST['size_sp'];

                $img_sp = $_FILES['img_sp']['name'];
                $target_dir = "../view/assets/images/product/";
                $target_file = $target_dir . basename($_FILES['img_sp']['name']);
                if (move_uploaded_file($_FILES['img_sp']['tmp_name'], $target_file)) {

                } else {

                }
                anhsp($img_sp, $idsp);
                foreach ($size_sp as $size) {
                    sizesp($size, $idsp);
                }
                $listdm = list_danhmuc();
                $listsp = list_sp();
                include('view/sanpham/listsp.php');
                break;
            }
            include('view/sanpham/addsize_img.php');
            break;
        // danh sách sản phẩm
        case 'listsp':
            $listdm = list_danhmuc();
            $listsp = list_sp();
            include('view/sanpham/listsp.php');
            break;
        // sửa sản phẩm
        case 'editsp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $listsp = loadone_sp($_GET['id']);
                $imgsp = loadone_imgsp($_GET['id']);
                // $sizesp = loadone_sizesp($_GET['id']);
            }
            $listdm = list_danhmuc();
            // $listsize = loadall_sizesp();
            include('view/sanpham/updatesp.php');
            break;
        case 'updatesp':
            if (isset($_POST['hoanthanh']) && ($_POST['hoanthanh'])) {
                $id = $_POST['id'];
                $name_sp = $_POST['name_sp'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $id_dm = $_POST['id_dm'];
                $mota = $_POST['mota'];

                $img_sp = $_FILES['img_sp']['name'];
                $target_dir = "../view/assets/images/product/";
                $target_file = $target_dir . basename($_FILES['img_sp']['name']);
                if (move_uploaded_file($_FILES['img_sp']['tmp_name'], $target_file)) {

                } else {

                }

                capnhat_sp($id, $name_sp, $gia, $mota, $soluong, $id_dm, $img_sp);
                $listdm = list_danhmuc();
                $listsp = list_sp();
                include('view/sanpham/listsp.php');
                break;
            }
            include('view/sanpham/updatesp.php');
            break;
        // xóa sản phẩm
        case 'delsp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                xoa_sp($_GET['id']);
            }
            $listdm = list_danhmuc();
            $listsp = list_sp();
            include('view/sanpham/listsp.php');
            break;

        case 'listbl':
            include('view/binhluan/listbl.php');
            break;

        case 'icon':
            include('view/icon.php');
            break;

        case 'listuser':
            include('view/taikhoan/listuser.php');
            break;

        case 'listtk':
            include('view/thongke/listtk.php');
            break;

        case '3':
            break;

        default:
            include('view/home.php');
            break;
    }
} else {
    include('view/home.php');
}

include('view/footer.php');