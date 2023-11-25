<?php
if(isset($_SESSION['username'])) {
    extract($_SESSION['username']);
    $idactyt = $_SESSION['username']['idacc'];
    // foreach($listwl as $lwl) {
    //     extract($lwl);
    //     if($iduser == $idactyt) {
    //         $idyt = $id_yt;
    //         $idsanpham = $id_sp;
    //     }
    // }
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
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="kenne-product_remove">xóa</th>
                                    <th class="kenne-product-thumbnail">Ảnh sản phẩm</th>
                                    <th class="cart-product-name">tên sản phẩm</th>
                                    <th class="kenne-product-price">giá sản phẩm</th>
                                    <th class="kenne-product-stock-status">tình trạng tồn kho</th>
                                    <th class="kenne-cart_btn">thêm vào giỏ hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($listwl as $lwl) {
                                    extract($lwl);
                                    if($iduser == $idactyt) {
                                        $idyt = $id_yt;
                                        $idsanpham = $id_sp;
                                        foreach($dssp as $sp) {
                                            extract($sp);
                                            $idfsp = $id;
                                            $linkdel = "index.php?act=delyt&idyt=".$idyt;
                                            $linkfsp = "index.php?act=sanphamct&idsp=".$idfsp;
                                            $imgpath = "./view/assets/images/product/".$imgsp;
                                            $img = '<img width="200px" src="'.$imgpath.'" alt="Lỗi server ảnh">';
                                            if($idsanpham == $idfsp) { ?>
                                                <tr>
                                                    <td class="kenne-product_remove">
                                                        <a href="<?= $linkdel ?>">
                                                            <i class="fa fa-trash" title="Remove"></i>
                                                        </a>
                                                    </td>
                                                    <td class="kenne-product-thumbnail">
                                                        <a href="<?= $linkfsp ?>">
                                                            <?= $img ?>
                                                        </a>
                                                    </td>
                                                    <td class="kenne-product-name">
                                                        <a href="<?= $linkfsp ?>">
                                                            <?= $tensp ?>
                                                        </a>
                                                    </td>
                                                    <td class="kenne-product-price">
                                                        <span class="amount">Giá:
                                                            <?= $giasp ?> (VND)
                                                        </span>
                                                    </td>
                                                    <td class="kenne-product-stock-status">
                                                        <?php
                                                        if($soluongsp > 0) {
                                                            echo '<span class="in-stock">Còn hàng</span>';
                                                        } else {
                                                            echo '<span class="in-stock">Hết hàng</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="kenne-cart_btn"><a href="#">thêm</a></td>
                                                </tr>
                                            <?php }
                                        }
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Wishlist Area End Here -->