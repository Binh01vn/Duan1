<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $productId = $_POST['id'];
    $newQuantity = $_POST['tongspn'];

    // Kiểm giỏ hàng có tồn tại hay không
    if(!empty($_SESSION['giohang'])) {
        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $index = array_search($productId, array_column($_SESSION['giohang'], 'idsp'));

        // Nếu sản phẩm tồn tại thì cập nhật lại số lượng
        if($index !== false) {
            $_SESSION['giohang'][$index]['tongspCart'] = $newQuantity;
        } else {
            echo 'Sản phầm ko tồn tại trong giỏ hàng';
        }
    }

} else {
    echo 'Yêu cầu không hợp lệ';
}
?>