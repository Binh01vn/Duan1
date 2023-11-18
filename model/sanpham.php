<?php
function truyvan_sanpham($masp, $name_sp, $gia, $imgsp, $mota, $soluong, $id_dm){
    $spl = "insert into sanpham(masp, name_sp, gia, imgsp, mota, soluong, id_dm)
    values('$masp', '$name_sp', '$gia', '$imgsp', '$mota', '$soluong', '$id_dm')";
    pdo_execute($spl);
}
function sizesp ($size, $masp){
    $spl = "insert into size(size_sp, ma_sp) values('$size', '$masp')";
    pdo_execute($spl);
}
?>