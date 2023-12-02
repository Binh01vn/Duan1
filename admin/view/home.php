<!-- Container fluid  -->
<div class="container-fluid">

    <!-- Three charts -->
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Visit</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success">659</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Page Views</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-purple">869</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Unique Visitor</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-info">911</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Recent Comments -->
    <div class="row">
        <div class="white-box">
            <h3 class="box-title">Biểu đồ thống kê</h3>
            <div class="row form_content ">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <div id="myChart" style="width:100%; width:600px; height:300px; align-items: center"></div>
                <script>
                    google.charts.load('current', { 'packages': ['corechart'] });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        // Set Data
                        const data = google.visualization.arrayToDataTable([
                            ['Danh mục', 'Số lượng'],
                            <?php
                            $tongdm = count($dsthongke);
                            $i = 1;
                            foreach($dsthongke as $thongke) {
                                extract($thongke);
                                if($i == $tongdm) {
                                    $dauphay = "";
                                } else {
                                    $dauphay = ",";
                                }
                                echo "['".$thongke['tendm']."', ".$thongke['soluongsp']."]".$dauphay;
                                $i += 1;
                            }
                            ?>
                        ]);

                        // Set Options
                        const options = {
                            title: 'Thống kê sản phẩm theo danh mục',
                            is3D: true
                        };

                        // Draw
                        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                        chart.draw(data, options);

                    }
                </script>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->