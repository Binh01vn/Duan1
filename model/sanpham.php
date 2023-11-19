<?php
function insert_sanpham($masp, $tensp, $giasp, $motasp, $soluongsp, $iddm){
    $spl = "insert into sanpham(masp, tensp, giasp, motasp, soluongsp, iddm)
    values('$masp', '$tensp', '$giasp', '$motasp', '$soluongsp', '$iddm')";
    pdo_execute($spl);
}
function list_spmn(){
    $sql="select * from sanpham order by id desc limit 0,1";
    $listsp = pdo_query($sql);
    return $listsp;    
}
function listall_sp(){
    $sql="select * from sanpham order by id desc";
    $listsp = pdo_query($sql);
    return $listsp;    
}
function addanhsp($imgsp, $idsp){
    $spl = "insert into image(imgsp, idsp) values('$imgsp', '$idsp')";
    pdo_execute($spl);
}
function sizesp ($size, $idsp){
    $spl = "insert into size(sizesp, idsp) values('$size', '$idsp')";
    pdo_execute($spl);
}
function loadone_sp($id){
    $sql = "select * from sanpham where id=". $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_imgsp($id){
    $sql = "select * from image where idsp=". $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
// function loadall_sizesp(){
//     $sql = "select * from size";
//     $sp = pdo_query($sql);
//     return $sp;
// }
// function loadone_sizesp($id){
//     $sql = "select * from size where idsp=". $id;
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
function capnhat_sp($id, $tensp, $giasp, $motasp, $soluongsp, $iddm, $imgsp){
    // $sql = "update danhmuc set name='".$tendm."' where id=".$id;
    $sql = "update sanpham
            set tensp='".$tensp."', giasp='".$giasp."', motasp='".$motasp."', soluongsp='".$soluongsp."', iddm='".$iddm."'
            where id=".$id;
    if($imgsp != ""){
        $sql = "update image set imgsp='".$imgsp."' where idsp=".$id;
    }
    pdo_execute($sql);
}
function xoa_sp($id){
    $sql = "delete from image where idsp=". $id;
    $sql = "delete from size where idsp=". $id;
    $sql = "delete from sanpham where id=". $id;
    pdo_query($sql);
}
function xoa_img($id){
    $sql = "delete from image where idsp=". $id;
    // $sql = "delete from size where idsp=". $id;
    // $sql = "delete from sanpham where id=". $id;
    pdo_query($sql);
}
function xoa_size($id){
    // $sql = "delete from image where idsp=". $id;
    $sql = "delete from size where idsp=". $id;
    // $sql = "delete from sanpham where id=". $id;
    pdo_query($sql);
}
?>