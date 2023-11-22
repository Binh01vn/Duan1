<?php
function insert_binhluan($noidungbl, $ngaybl, $idsp, $iduser)
{
    $sql = "insert into binhluan(noidungbl, ngaybl, idsp, iduser) 
            values('$noidungbl', '$ngaybl', '$idsp', '$iduser')";
    pdo_execute($sql);
}
function loadall_binhluan($idsp)
{
    $sql = "select bl.id_bl, bl.noidungbl, bl.ngaybl, bl.idsp, bl.iduser, tk.username, sp.tensp, sp.masp, sp.id
    from binhluan bl
    inner join taikhoan tk on tk.idacc = bl.iduser
    inner join sanpham sp on sp.id = bl.idsp
    where 1";
    if ($idsp > 0) {
        $sql .= " AND idsp='" . $idsp . "'";
    }
    $sql .= " order by id_bl desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function del_binhluan($id_bl, $iduser){
    if ($id_bl > 0) {
        $sql = "delete from binhluan where id_bl=". $id_bl;
    }else if ($iduser > 0) {
        $sql = "delete from binhluan where iduser=". $iduser;
    }
    pdo_query($sql);
}
function insert_votestar($votestar, $idsp)
{
    $sql = "insert into votesp(rate, idsp) 
            values('$votestar', '$idsp')";
    pdo_execute($sql);
}
?>