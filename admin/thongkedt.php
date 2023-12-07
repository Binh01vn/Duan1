<?php
include('view/cartbon/autoload.php');
include('../model/pdo.php');
include('../model/thongke.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

// if(isset($_POST['thoigian'])){
//     $thoigian = $_POST['thoigian'];
// }else{
//     $thoigian = '';
//     $subDays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
// }

$subDays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

$thongkedt = thongke_donhthu($subDays, $now);
// var_dump($thongkedt);
foreach ($thongkedt as $tkdt) {
    // if ($tkdt['trangthaitt'] == 1) {
        $chart_data[] = array(
            'date' => $tkdt['ngaydat'],
            'slb' => $tkdt['soluongspcart'],
            'doanhthu' => $tkdt['tonghd']
        );
    // }
}
echo $data = json_encode($chart_data);
?>