<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Recent Comments -->
    <div class="row">
        <div class="white-box">
            <h3 class="box-title">Thống kê doanh thu</h3>
            <select name="sltk">
                <option value="7">7 ngày</option>
                <option value="28">28 ngày</option>
                <option value="90">90 ngày</option>
                <option value="120">120 ngày</option>
                <option value="365">360 ngày</option>
            </select>
            <div id="myfirstchart" style="height: 250px; width: 100%;"></div>
            <script>
                new Morris.Area({
                    // ID of the element in which to draw the chart.
                    element: 'myfirstchart',
                    // Chart data records -- each entry in this array corresponds to a point on
                    // the chart.
                    data: [
                        {year: '2008', doanhthu: 100000},
                        {year: '2009', doanhthu: 210000},
                        {year: '2015', doanhthu: 110000},
                        {year: '2019', doanhthu: 310000},
                        {year: '2023', doanhthu: 437000}
                    ],
                    // The name of the data record attribute that contains x-values.
                    xkey: 'year',
                    // A list of names of data record attributes that contain y-values.
                    ykeys: ['doanhthu'],
                    // Labels for the ykeys -- will be displayed when you hover over the
                    // chart.
                    labels: ['Doanh thu']
                });
            </script>
        </div>
    </div>
</div>
<!-- End Container fluid  -->