<?php
// truy vấn đến bảng danh mục
function insert_danhmuc($tendm){
    $sql = "insert into danhmuc(tendm) values('$tendm')";
    pdo_execute($sql);
}
// load danh sách danh mục
function list_danhmuc(){
    $sql = "select * from danhmuc order by id_dm desc";
    $listdm = pdo_query($sql);
    return $listdm;    
}
// load 1 danh mục
function loadone_danhmuc($id){
    $sql = "select * from danhmuc where id_dm=". $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
// sửa danh mục
function update_danhmuc($id_dm, $tendm){
    $sql = "update danhmuc set tendm='".$tendm."' where id_dm=".$id_dm;
    pdo_execute($sql);
}
// xóa danh mục
function del_danhmuc($id){
    $sql = "delete from danhmuc where id_dm=". $id;
    pdo_query($sql);
}
?>