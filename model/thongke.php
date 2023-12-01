<?php
function load_thongke_sanpham_danhmuc()
{
    $sql = "SELECT dm.id_dm, dm.tendm, COUNT(*) 'soluongsp', MIN(giasp) 'gia_min', MAX(giasp) 'gia_max', AVG(giasp) 'gia_avg' 
    FROM danhmuc dm 
    JOIN sanpham sp ON dm.id_dm = sp.iddm 
    GROUP BY dm.id_dm, dm.tendm 
    ORDER BY soluongsp DESC";
    return pdo_query($sql);
}
?>