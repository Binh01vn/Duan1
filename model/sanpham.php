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
function listall_sp($kyw, $iddm){  
    $sql="select sp.id, sp.masp, sp.tensp, sp.giasp, sp.soluongsp, sp.motasp, sp.iddm, i.imgsp, i.idsp
    from sanpham sp
    inner join image i on i.idsp = sp.id
    where 1";
    if ($kyw !="") {
        $sql.=" and sp.tensp like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and sp.iddm = '".$iddm."'";
    }
    $sql.=" order by sp.id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm){
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id_dm=". $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tendm;
    }else{
        return "";
    }
}
function list_spnew_home(){
    $sql="select sp.tensp, sp.giasp, i.imgsp , sp.motasp, sp.id, i.idsp
    from sanpham sp
    inner join image i on i.idsp = sp.id
    where 1 order by sp.id desc limit 0,7";
    $listsanpham = pdo_query($sql);
    return $listsanpham;    
}
function listall_size(){
    $sql="select * from size order by idsize desc";
    $listsize = pdo_query($sql);
    return $listsize;    
}
function addanhsp($imgsp, $idsp){
    $spl = "insert into image(imgsp, idsp) values('$imgsp', '$idsp')";
    pdo_execute($spl);
}
function sizesp ($size, $idsp){
    $spl = "insert into size(sizesp, id_sp) values('$size', '$idsp')";
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
function capnhat_sp($id, $tensp, $giasp, $motasp, $soluongsp, $iddm, $imgsp, $sizesp){
    $sql = "update sanpham
            set tensp='".$tensp."', giasp='".$giasp."', motasp='".$motasp."', soluongsp='".$soluongsp."', iddm='".$iddm."'
            where id=".$id;
    if($imgsp != ""){
        $sql = "update image set imgsp='".$imgsp."' where idsp=".$id;
    }
    pdo_execute($sql);
}
function xoa_img($id){
    $sql = "delete from image where idsp=". $id;
    pdo_query($sql);
}
function xoa_size($id){
    $sql = "delete from size where id_sp=". $id;
    pdo_query($sql);
}
function xoa_sp($id){
    $sql = "delete from sanpham where id=". $id;
    pdo_query($sql);
}
?>