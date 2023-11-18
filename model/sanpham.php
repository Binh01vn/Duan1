<?php
function truyvan_sanpham($masp, $name_sp, $gia, $mota, $soluong, $id_dm){
    $spl = "insert into sanpham(masp, name_sp, gia, mota, soluong, id_dm)
    values('$masp', '$name_sp', '$gia', '$mota', '$soluong', '$id_dm')";
    pdo_execute($spl);
}
function preview_sp(){
    $sql="select * from sanpham order by id desc limit 0,1";
    $listsp = pdo_query($sql);
    return $listsp;    
}
function sizesp ($size, $masp){
    $spl = "insert into size(size_sp, ma_sp) values('$size', '$masp')";
    pdo_execute($spl);
}
?>