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
            if (isset($_POST['themdm']) && ($_POST['themdm'])) {
                $tendm = $_POST['tendm'];
                if ($tendm == '') {
                    $thongbao = "Tên danh mục trống!";
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
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "view/danhmuc/updatedm.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendm = $_POST['tendm'];
                $id_dm = $_POST['id_dm'];
                if ($tendm != '') {
                    update_danhmuc($id_dm, $tendm);
                }
            }
            $listdm = list_danhmuc();
            include "view/danhmuc/listdm.php";
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

                insert_sanpham($masp, $tensp, $giasp, $motasp, $soluongsp, $id_dm);
                include("view/sanpham/prvsanpham.php");
                break;
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
            $listdm = list_danhmuc();
            $listsize = listall_size();
            $listsp = listall_sp("", 0);
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
                $sizesp = $_POST['sizesp'];

                $id_dm = $_POST['id_dm'];


                $imgsp = $_FILES['imgsp']['name'];
                $target_dir = "../view/assets/images/product/";
                $target_file = $target_dir . basename($_FILES['imgsp']['name']);
                if (move_uploaded_file($_FILES['imgsp']['tmp_name'], $target_file)) {

                } else {

                }

                capnhat_sp($id, $tensp, $giasp, $motasp, $soluongsp, $id_dm, $imgsp, $sizesp);
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
                xoa_sp($_GET['id']);
            }
            $listdm = list_danhmuc();
            $listsize = listall_size();
            $listsp = listall_sp("", 0);
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