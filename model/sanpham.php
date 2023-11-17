<?php
function truyvan_sanpham($masp, $name_sp, $gia, $mota, $soluong, $img_sp, $id_size, $id_dm){
    $spl = "INSERT INTO sanpham(masp, name_sp, gia, mota, soluong, id_size, id_dm)
    VALUES ('$masp', '$name_sp', '$gia', '$mota', '$soluong', '$id_size', '$id_dm')";
    pdo_execute($spl);
}
?>