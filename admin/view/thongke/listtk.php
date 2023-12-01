<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        const data = google.visualization.arrayToDataTable([
          ['Danh mục', 'Số lượng'],
          <?php
          foreach ($dsthongke as $thongke) {
            extract($thongke);
            echo "['$name', $soluong],";
          }
          ?>
        ])
        var options = {
          title: 'Thống kê sản phẩm',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <style>
    .tong{
        display: flex;
        align-items: start;
        margin-top: 20px;
    }
    tr th{
        padding: 5px;
        background-color: antiquewhite;
        border: 1px solid gray;
    }
    tr td{
        padding: 5px;
        text-align: center;
       
    }
    .lop{
        border: 1px solid gray;
        background-color: aliceblue;
    }
    .font_title{
        padding-bottom: 20px;
    }
  </style>
  <body>
<div class="tong">



<div class="row2">
    <div class="row2 font_title">
        <h3>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h3>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="lop">
                    <tr>

                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ NHỎ NHẤT</th>
                        <th>GIÁ LỚN NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>

                    </tr>

                    <?php
                    foreach ($dsthongke as $thongke) {
                        extract($thongke);
                    ?>
                        <tr >
                            <td><?php echo $id_dm ?></td>
                            <td><?php echo $tendm ?></td>
                            <td><?php echo $soluongsp ?></td>
                            <td> $ <?php echo number_format((int)$gia_min, 0, ",", ".") ?> </td>
                            <td>$ <?php echo number_format((int)$gia_max, 0, ",", ".") ?> </td>
                            <td>$ <?php echo number_format((int)$gia_avg, 0, ",", ".") ?> </td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
        </form>
    </div>
</div>
<div id="donutchart" style="width: 900px; height: 500px;"></div>
</div>

</body>
</html>