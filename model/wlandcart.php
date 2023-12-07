<?php
function insert_hoadon($ngaydh, $pttt, $tonghd, $trangthai, $trangthaitt, $iduser) {
    $sql = "insert into hoadon(ngaydat, pttt, tonghd, trangthai, trangthaitt, iduser) 
            values('$ngaydh', '$pttt', '$tonghd', '$trangthai', '$trangthaitt', '$iduser')";
    $id = pdo_executeid($sql);
    return $id;
}
function insert_billhoadon($idBill, $idspcart, $tspcart, $sizespcart, $gspcart, $slspcart, $tongtien) {
    $sql = "insert into billhoadon(idspcart, tspcart, sizespcart, gspcart, soluongspcart, tongtien, idhd) 
            values('$idspcart', '$tspcart', '$sizespcart', '$gspcart', '$slspcart', '$tongtien', '$idBill')";
    pdo_execute($sql);
}
function capnhat_diachi($diachi, $iduser) {
    $sql = "update taikhoan set diachi='".$diachi."' where idacc=".$iduser;
    pdo_execute($sql);
}
function capnhat_tthd($trangthain, $idHD) {
    $sql = "update hoadon set trangthai='".$trangthain."' where id_hd=".$idHD;
    pdo_execute($sql);
}
function select_hoadon() {
    $sql = "select * from hoadon order by id_hd desc";
    $listhd = pdo_query($sql);
    return $listhd;
}
function select_billhoadon() {
    $sql = "select * from billhoadon order by idbhd desc";
    $listbhd = pdo_query($sql);
    return $listbhd;
}
function xacnhandh($idhd, $trangthai) {
    $sql = "update hoadon set trangthai='".$trangthai."' where id_hd=".$idhd;
    pdo_execute($sql);
}
function xacnhanttdh($idhd, $trangthaitt) {
    $sql = "update hoadon set trangthaitt='".$trangthaitt."' where id_hd=".$idhd;
    pdo_execute($sql);
}

function loadone_sanphamCart($idList) {
    $sql = 'SELECT sp.id, sp.masp, sp.tensp, sp.giasp, sp.soluongsp, sp.motasp, sp.iddm, i.idimage, i.imgsp, i.idsp
    FROM sanpham sp
    INNER JOIN image i ON i.idsp = sp.id 
    WHERE id IN ('.$idList.')';
    $sanpham = pdo_query($sql);
    return $sanpham;
}
?>