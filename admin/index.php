<?php
include("view/header.php");

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    switch ($_GET['act']) {
        case '1':
            break;

        case '2':
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