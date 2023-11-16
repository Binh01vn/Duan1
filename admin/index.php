<?php
include("view/header.php");

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    switch ($_GET['act']) {
        case 'myadmin':
            include('view/taikhoan/myadmin.php');
            break;

        case 'listdm':
            include('view/danhmuc/listdm.php');
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