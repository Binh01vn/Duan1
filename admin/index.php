<?php
include("view/header.php");

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    switch ($_GET['act']) {
        case 'myadmin':
            include('view/taikhoan/myadmin.php');
            break;

        case 'listuser':
            include('view/taikhoan/listuser.php');
            break;

        case '3':
            break;

        default:
            include('view/home.php');
            break;
    }
}else{
    include('view/home.php');
}

include('view/footer.php');