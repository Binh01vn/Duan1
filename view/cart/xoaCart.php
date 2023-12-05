<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $spID = $_POST['id'];

    // Kiểm giỏ hàng có tồn tại hay không
    if(!empty($_SESSION['giohang'])) {
        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $index = array_search($spID, array_column($_SESSION['giohang'], 'idsp'));

        // Nếu sản phẩm tồn tại thì cập nhật lại số lượng
        if($index !== false) {
            // Xóa sản phẩm khỏi giỏ hàng
            unset($_SESSION['giohang'][$index]);
            $_SESSION['giohang'] = array_values($_SESSION['giohang']);
        } else {
            echo 'Sản phầm ko tồn tại trong giỏ hàng';
        }
    }
    // Trả về số lượng sản phẩm của giỏ hàng
    echo count($_SESSION['giohang']);
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>