<?php
if(isset($_SESSION['username'])) {
    extract($_SESSION['username']);
    $idactyt = $_SESSION['username']['idacc'];
}
?>
<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related</h2>
            <ul>
                <li><a href="../Duan1/index.php">Trang chủ</a></li>
                <li class="active">Yêu thích</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!--Begin Kenne's Wishlist Area -->
<div class="kenne-wishlist_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="index.php?act=wlandac" method="POST">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead class="theadtb">
                                <tr>
                                    <th class="kenne-product-thumbnail">Ảnh sản phẩm</th>
                                    <th class="cart-product-name">tên sản phẩm</th>
                                    <th class="kenne-product-price">giá sản phẩm</th>
                                    <th class="kenne-product-stock-status">tình trạng tồn kho</th>
                                    <th class="kenne-cart_btn">thêm vào giỏ hàng</th>
                                    <th class="kenne-product_remove">xóa</th>
                                </tr>
                            </thead>
                            <tbody class="tbodytb">
                                <tr>
                                    <td class="kenne-product-thumbnail"><a href="#"><img
                                                src="view/assets/images/product/small-size/1.jpg"
                                                alt="Kenne's Wishlist Thumbnail"></a>
                                    </td>
                                    <td class="kenne-product-name"><a href="#">Juma rema pola</a></td>
                                    <td class="kenne-product-price"><span class="amount">£23.39</span></td>
                                    <td class="kenne-product-stock-status"><span class="in-stock">in stock</span></td>
                                    <td class="kenne-cart_btn">
                                        <button type="submit" name="addgio" value="themgio">thêm</button>
                                    </td>
                                    <td class="kenne-product_remove"><a href="#"><i class="fa fa-trash"
                                                title="Remove"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Wishlist Area End Here -->