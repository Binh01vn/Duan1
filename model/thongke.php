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

function thongke_donhthu($subDays, $now){
    $sql = "SELECT hd.ngaydat, hd.tonghd, hd.trangthaitt, bhd.soluongspcart
            FROM hoadon hd
            INNER JOIN billhoadon bhd ON hd.id_hd = bhd.idhd
            WHERE ngaydat BETWEEN '$subDays' AND '$now' ORDER BY ngaydat ASC";
    return pdo_query($sql);
}
// function thongke_donhthu($subDays, $now){
//     $sql = "SELECT date(MAX(hd.ngaydat)) as tungay, date(MIN(hd.ngaydat)) as denngay, SUM(tonghd) as doanhthu
//             FROM hoadon hd
//             WHERE date(hd.ngaydat) >= '$subDays' and date(hd.ngaydat) <= '$now'";
//     return pdo_query($sql);
// }
?>