<?php

function truyvan_danhmuc($tendm){
    $sql = "insert into danhmuc(name) values('$tendm')";
    pdo_execute($sql);
}
function list_danhmuc(){
    $sql = "select * from danhmuc order by id desc";
    $listdm = pdo_query($sql);
    return $listdm;    
}
function loadone_danhmuc($id){
    $sql = "select * from danhmuc where id=". $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tendm){
    $sql = "update danhmuc set name='".$tendm."' where id=".$id;
    pdo_execute($sql);
}
function deldm_danhmuc($id){
    $sql = "delete from danhmuc where id=". $id;
    pdo_query($sql);
}
?>