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
function loadone_sp($id){
    $sql = "select * from sanpham where id=". $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_imgsp($id){
    $sql = "select * from image where id_sp=". $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
// function loadall_sizesp(){
//     $sql = "select * from size";
//     $sp = pdo_query($sql);
//     return $sp;
// }
// function loadone_sizesp($id){
//     $sql = "select * from size where id_sp=". $id;
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
function capnhat_sp($id, $name_sp, $gia, $mota, $soluong, $id_dm, $img_sp){
    // $sql = "update danhmuc set name='".$tendm."' where id=".$id;
    $sql = "update sanpham
            set name_sp='".$name_sp."', gia='".$gia."', mota='".$mota."', soluong='".$soluong."', id_dm='".$id_dm."'
            where id=".$id;
    if($img_sp != ""){
        $sql = "update image set img_sp='".$img_sp."' where id_sp=".$id;
    }
    pdo_execute($sql);
}
function xoa_sp($id){
    // $sql = "delete from image where id_sp=". $id;
    // $sql = "delete from size where id_sp=". $id;
    $sql = "delete from sanpham where id=". $id;
    pdo_query($sql);
}
?>