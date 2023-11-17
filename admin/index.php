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
        // thêm size sản phẩm 
        case 'addsize':
            if (isset($_POST['addsize']) && ($_POST['addsize'])) {
                $sosize = $_POST['sosize'];
                if ($sosize == '') {
                    $thongbao = "Size trống! Vui lòng nhập size.";
                } else {
                    truyvan_size($sosize);
                    $listsize = list_size();
                    include('view/danhmuc/listsize.php');
                    break;
                }
            }
            include('view/danhmuc/addsize.php');
            break;
        // LOAD DANH SÁCH DANH MỤC
        case 'listdm':
            $listdm = list_danhmuc();
            include('view/danhmuc/listdm.php');
            break;
        // load danh sách size sản phẩm
        case 'listsize':
            $listsize = list_size();
            include('view/danhmuc/listsize.php');
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
        // xóa size sản phẩm
        case 'delsize':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deldm_size($_GET['id']);
            }
            $listsize = list_size();
            include('view/danhmuc/listsize.php');
            break;
        // CONTROLLER SẢN PHẨM ===================================
        case 'addsp':
            if ((isset($_POST['addnew'])) && ($_POST['addnew'])) {
                $chuoikytu = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ@_-';
                $masp = '';
                for ($i = 0; $i < 10; $i++) {
                    $masp .= $chuoikytu[mt_rand(0, strlen($chuoikytu) - 1)];
                }

                $name_sp = $_POST['name_sp'];
                $id_dm = $_POST['id_dm'];
                $id_size = $_POST['id_size'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];

                $imgsp = $_FILES['imgsp']['name'];
                $target_dir = "../view/assets/images/product/";
                $target_file = $target_dir . basename($_FILES['imgsp']['name']);
                if (move_uploaded_file($_FILES['imgsp']['tmp_name'], $target_file)) {

                } else {

                }

                $mota = $_POST['mota'];

                truyvan_sanpham($masp, $name_sp, $gia, $imgsp, $mota, $soluong, $id_size, $id_dm);
            }else{
                $tb = "lỗi rồi";
            }
            $listdm = list_danhmuc();
            $listsize = list_size();
            include('view/sanpham/addsp.php');
            break;

        case 'listsp':
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