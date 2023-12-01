<?php
function insert_hoadon($ngaydh, $pttt, $tonghd, $trangthai, $iduser) {
    $sql = "insert into hoadon(ngaydat, pttt, tonghd, trangthai, iduser) 
            values('$ngaydh', '$pttt', '$tonghd', '$trangthai', '$iduser')";
    // pdo_execute($sql);
    $id = pdo_executeid($sql);
    return $id;
}
function insert_billhoadon($idBill, $idspcart, $sizespcart, $gspcart, $slspcart, $tongtien) {
    $sql = "insert into billhoadon(idspcart, sizespcart, gspcart, soluongspcart, tongtien, idhd) 
            values('$idspcart', '$sizespcart', '$gspcart', '$slspcart', '$tongtien', '$idBill')";
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
?>