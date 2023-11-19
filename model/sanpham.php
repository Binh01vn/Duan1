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
function anhsp($img_sp, $idsp){
    $spl = "insert into image(img_sp, id_sp) values('$img_sp', '$idsp')";
    pdo_execute($spl);
}
function sizesp ($size, $idsp){
    $spl = "insert into size(size_sp, id_sp) values('$size', '$idsp')";
    pdo_execute($spl);
}
function list_sp(){
    $spl = "select s.id, s.masp, s.name_sp, i.img_sp, s.soluong, .s.gia from sanpham s
            inner join image i on i.id_sp = s.id";
    $listsp = pdo_query($spl);
    return $listsp;
}
?>