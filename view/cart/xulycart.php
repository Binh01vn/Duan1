<?php
session_start();

// Kiểm tra xem có tồn tại mảng giỏ hàng hay không.
if(!isset($_SESSION['giohang'])) {
    // Nếu không có thì đi khởi tạo
    $_SESSION['giohang'] = [];
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $spcartID = $_POST['idsp'];
    $spcartTen = $_POST['tensp'];
    $spcartSize = $_POST['sizesp'];
    $spcartSL = $_POST['tongspCart'];
    $spcartGia = $_POST['giasp'];

    // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
    $index = false;
    if(!empty($_SESSION['giohang'])) {
        $index = array_search($spcartID, array_column($_SESSION['giohang'], 'idsp'));
    }

    // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
    if($index !== false) {
        $_SESSION['giohang'][$index]['tongspCart'] += 1;
    } else {
        // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
        $sanpham = [
            'idsp' => $spcartID,
            'tensp' => $spcartTen,
            'sizesp' => $spcartSize,
            'tongspCart' => $spcartSL,
            'giasp' => $spcartGia
            // 'tongspCart' => 1
        ];
        $_SESSION['giohang'][] = $sanpham;
        // var_dump($_SESSION['giohang']);die;
    }
    // Trả về số lượng sản phẩm của giỏ hàng
    echo count($_SESSION['giohang']);
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>