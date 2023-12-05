<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li><a href="../Duan1/index.php">Trang chủ</a></li>
                <li class="active">Giỏ hàng</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->

<!-- Begin Uren's Cart Area -->
<div class="kenne-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                if(empty($dataDb)) {
                    echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
                } else {
                    ?>
                    <div>
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead class="theadtb">
                                    <tr>
                                        <th class="kenne-product-thumbnail">ảnh sản phẩm</th>
                                        <th class="cart-product-name">tên sản phẩm</th>
                                        <th class="kenne-product-price">giá (VND)</th>
                                        <th class="kenne-product-price">size</th>
                                        <th class="kenne-product-quantity">số lượng</th>
                                        <th class="kenne-product-subtotal">tổng giá (VND)</th>
                                        <th class="kenne-product-remove">xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="tbodytb" id="order">
                                    <?php
                                    // var_dump($_SESSION['giohang']);
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
                                                <input type="number" value="<?= $quantityInCart ?>" min="1"
                                                    id="quantity_<?= $product['id'] ?>"
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
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <form class="coupon" action="index.php?act=billcart" method="POST">
                                        <?php
                                        if(empty($_SESSION['username']) && !empty($_SESSION['giohang'])) {
                                            echo '<a href="index.php?act=sigorreg">Đặt hàng</a>';
                                        } else if(isset($_SESSION['giohang']) && isset($_SESSION['username'])) {
                                            echo '<button>Đặt hàng</button>';
                                        }
                                        ?>
                                    </form>
                                    <?php
                                    if(!empty($_SESSION['giohang'])) { ?>
                                        <div class="coupon2">
                                            <a class="button" href="index.php?act=delcart&del=1">Xóa tất cả khỏi giỏ hàng</a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Uren's Cart Area End Here -->
<script>
    let totalProduct = document.getElementById('totalProduct');
    // hàm cập nhật size ===============================================================================
    function updateSize(id, index) {
        let newSize = $('#sizeorder_' + id).val();
        // console.log(newSize);
        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/cart/cnsizesp.php',
            data: {
                id: id,
                nsize: newSize
            },
            success: function (response) {
                // Sau khi cập nhật thành công
                $.post('./view/cart/bangcart.php', function (data) {
                    $('#order').html(data);
                })
            },
            error: function (error) {
                console.log(error);
            },
        })
    }
    // hàm cập nhật số lượng ==============================================================
    function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }
        // console.log(newQuantity);

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/cart/cntongsp.php',
            data: {
                id: id,
                tongspn: newQuantity
            },
            success: function (response) {
                // Sau khi cập nhật thành công
                $.post('./view/cart/bangcart.php', function (data) {
                    $('#order').html(data);
                })
            },
            error: function (error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        // alert(id);
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/cart/xoaCart.php',
                data: {
                    id: id
                },
                success: function (response) {
                    totalProduct.innerText = response;
                    // Sau khi cập nhật thành công
                    $.post('./view/cart/bangcart.php', function (data) {
                        $('#order').html(data);
                    })
                },
                error: function (error) {
                    console.log(error);
                },
            })
        }
    }
</script>