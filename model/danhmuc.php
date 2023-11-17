<?php
// truy vấn đến bảng danh mục
function truyvan_danhmuc($tendm){
    $sql = "insert into danhmuc(name) values('$tendm')";
    pdo_execute($sql);
}
// truy vấn đến bảng size============================================
function truyvan_size($sosize){
    $sql = "insert into size(size_sp) values('$sosize')";
    pdo_execute($sql);
}
// load danh sách danh mục
function list_danhmuc(){
    $sql = "select * from danhmuc order by id desc";
    $listdm = pdo_query($sql);
    return $listdm;    
}
//  load danh sách size sản phẩm=========================================
function list_size(){
    $sql = "select * from size order by size_sp desc";
    $listsize = pdo_query($sql);
    return $listsize;    
}
// load 1 danh mục
function loadone_danhmuc($id){
    $sql = "select * from danhmuc where id=". $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
// sửa danh mục
function update_danhmuc($id, $tendm){
    $sql = "update danhmuc set name='".$tendm."' where id=".$id;
    pdo_execute($sql);
}
// xóa danh mục
function deldm_danhmuc($id){
    $sql = "delete from danhmuc where id=". $id;
    pdo_query($sql);
}
// xóa size sản phẩm ===================
function deldm_size($id){
    $sql = "delete from size where id=". $id;
    pdo_query($sql);
}
?>