<?php
session_start();
include("../../model/pdo.php");
include("../../model/danhmuc.php");
include("../../model/sanpham.php");
include("../../model/binhluan.php");
include("../../model/wlandcart.php");
include("../../model/taikhoan.php");
$listsizesp = listall_size();

// Kiểm tra xem giỏ hàng có dữ liệu hay không
if(!empty($_SESSION['giohang'])) {
    $cart = $_SESSION['giohang'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $sanphamID = array_column($cart, 'idsp');

    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
    $idList = implode(',', $sanphamID);

    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idList);
    // var_dump($dataDb);

    $sum_total = 0;
    foreach($dataDb as $key => $product):
        // kiểm tra số lượng sản phẩm trong giỏ hàng
        $quantityInCart = 0;
        foreach($_SESSION['giohang'] as $item) {
            if($item['idsp'] == $product['id']) {
                $s_sp = $item['sizesp'];
                $quantityInCart = $item['tongspCart'];
                break;
            }
        }
        $linksp = "index.php?act=sanphamct&idsp=".$product['id'];
        $imgpath = "./view/assets/images/product/".$product['imgsp'];
        $img = '<img class="primary-img" src="'.$imgpath.'" alt="Lỗi server ảnh" width="150px" height="150px">'; ?>
        <tr>
            <td class="kenne-product-thumbnail">
                <a href="<?= $linksp ?>">
                    <?= $img ?>
                </a>
            </td>
            <td class="kenne-product-name">
                <a href="<?= $linksp ?>">
                    <?= $product['tensp'] ?>
                </a>
            </td>
            <td class="kenne-product-price">
                <span class="amount">
                    <?= number_format((int)$product['giasp'], 0, ",", ".") ?>
                </span>
            </td>
            <td class="kenne-product-price">
                <div class="product-size_box">
                    <select name="size_sp" id="sizeorder_<?= $product['id'] ?>"
                        onchange="updateSize(<?= $product['id'] ?>, <?= $key ?>)">
                        <?php
                        if($s_sp != 0) {
                            echo '<option value="'.$s_sp.'" selected>'.$s_sp.'</option>';
                            foreach($listsizesp as $lssp) {
                                if($lssp['id_sp'] == $product['id'] && $lssp['sizesp'] != $s_sp) {
                                    echo '<option value="'.$lssp['sizesp'].'">'.$lssp['sizesp'].'</option>';
                                }
                            }
                        } else {
                            foreach($listsizesp as $lssp) {
                                if($lssp['id_sp'] == $product['id']) {
                                    echo '<option value="'.$lssp['sizesp'].'">'.$lssp['sizesp'].'</option>';
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
            </td>
            <td>
                <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>"
                    oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
            </td>
            <td class="product-subtotal">
                <span class="amount">
                    <?= number_format((int)$product['giasp'] * (int)$quantityInCart, 0, ",", ".") ?>
                </span>
            </td>
            <td class="kenne-product-remove">
                <button onclick="removeFormCart(<?= $product['id'] ?>)">
                    <i class="fa fa-trash" title="Remove"></i>
                </button>
            </td>
            <td>
                <a class="fas fa-edit" href="<?= $linksp ?>"></a>
            </td>
        </tr>
        <?php
        // Tính tổng giá đơn hàng
        $sum_total += ((int)$product['giasp'] * (int)$quantityInCart);
        // Lưu tổng giá trị vào sesion
        $_SESSION['tongdh'] = $sum_total;
    endforeach;
    ?>
    <tr>
        <td colspan="5">
            <h3>Tổng tiền đơn hàng:</h3>
        </td>
        <td colspan="3">
            <h5>
                <?= number_format((int)$sum_total, 0, ",", ".") ?> (VND)
            </h5>
        </td>
    </tr>
<?php }
?>