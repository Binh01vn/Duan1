<?php
function truyvan_sanpham($masp, $name_sp, $gia, $imgsp, $mota, $soluong, $id_size, $id_dm){
    $spl = "insert into sanpham(masp, name_sp, gia, imgsp, mota, soluong, id_size, id_dm)
    values('$masp', '$name_sp', '$gia', '$imgsp', '$mota', '$soluong', '$id_size', '$id_dm')";
    pdo_execute($spl);
}
?>