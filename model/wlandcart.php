<?php
function insert_wlist($idsp, $idact){
    $sql = "insert into yeuthich(id_sp, iduser) 
            values('$idsp', '$idact')";
    pdo_execute($sql);
}
function list_yeutich(){
    $sql = "select * from yeuthich order by id_yt desc";
    $listwl = pdo_query($sql);
    return $listwl;  
}
function del_yeuthich($idyt){
    $sql = "delete from yeuthich where id_yt=". $idyt;
    pdo_query($sql);
}
?>